<?php

namespace App\Helpers;

define('ALL', '%');

class FilterHelper {
    
    public $isActive = FALSE;
    
    public $data = []; // post request data
    public $tutors;

    public $priceFrom = 0;
    public $priceTo = 30;
    
    public $ageFrom = 18;
    public $ageTo = 100;
    
    public $activityFrom = 0;
    public $activityTo = 50;
    
    public $gender = 'both'; // default

    public function __construct($tutors, $data) {
        $this->tutors = $tutors;
        $this->data = $data;
    }

    public function filteredTutors() {

        $this->filterByEntryField('tutor_rank');
        $this->filterByEntryField('subjects');
        $this->filterByEntryField('tutor_workplaces');
        $this->filterByEntryField('lessons_type');
        $this->filterByEntryField('lessons_program');
        
        if(isset($this->data['price'])) {
            $this->filterPrice();
        }
        
        if(isset($this->data['age'])) {
            $this->filterAge();
        }
        
        if(isset($this->data['gender'])) {
            $this->filterGender();
        }
        
        return $this->tutors;
    }

    
    // remove get params from url
    public function reduce_query($kill_params) {
        
        $uri = url()->full();
        
        $uri_array = parse_url($uri);
        if (isset($uri_array['query'])) {
            // Do the chopping.
            $params = array();
            foreach (explode('&', $uri_array['query']) as $param) {
                $item = explode('=', $param);
                if (!in_array($item[0], $kill_params)) {
                    $params[$item[0]] = isset($item[1]) ? $item[1] : '';
                }
            }
            // Sort the parameter array to maximize cache hits.
            ksort($params);
            // Build new URL (no hosts, domains, or fragments involved).
            $new_uri = '';
            if ($uri_array['path']) {
                $new_uri = $uri_array['path'];
            }
            if (count($params) > 0) {
                // Wish there was a more elegant option.
                $new_uri .= '?' . urldecode(http_build_query($params));
            }
            return $new_uri;
        }
        return $uri;
    }

    public function filterAge() {
        $age = explode('-', str_replace(['+', ' '], '', $this->data['age']));
        
        if(isset($age[0]) && isset($age[1])) {
            $this->isActive = TRUE;
            
            $this->ageFrom = (int) $age[0];
            $this->ageTo = (int) $age[1];
            
            $yearNow = (int) date('Y');

            $year[0] = $yearNow - $this->ageFrom;
            $year[1] = $yearNow - $this->ageTo;
            
            $this->tutors->where(function ($query) use ($year) {
                $query
                    ->where('birth', '>=', $year[1] . '-01-01')
                    ->where('birth', '<=', $year[0] . '-12-31');
            });
        }
        
        return $this->tutors;
    }

    public function filterByEntryField($paramName) {
        
        $activeEntries = $this->activeEntries($paramName);
        
        foreach($activeEntries as $entry) {
            
            $this->tutors->where(function ($query) use ($paramName, $entry) {
                $query->where($paramName, 'LIKE', $entry->id)
                    ->orWhere($paramName, 'LIKE', $entry->id.';%')
                    ->orWhere($paramName, 'LIKE', '%;'.$entry->id.';%')
                    ->orWhere($paramName, 'LIKE', '%;'.$entry->id);
            });
        }
    }
    
    public function filterPrice() {
        $this->isActive = TRUE;
        
        $price = str_replace(['$', '+', ' '], '', $this->data['price']);
        $array = explode('-', $price);
        
        if(isset($array[0]) && isset($array[1])) {
            
            $this->priceFrom = $array[0];
            $this->priceTo = $array[1];
            
            $this->tutors->where(function ($query) use ($array) {
                $query->where('price', '>=', $this->priceFrom)
                    ->where('price', '<=', $this->priceTo);
            });
        }
    }
    
    public function filterGender() { // todo add to references
        $this->isActive = TRUE;
        
        $this->gender = $this->data['gender'];
        
        if ($this->gender != 'both') {
            $this->tutors->where(function ($query) {
                $query->where('gender', $this->gender);
            });
        }
    }
    
    private function activeEntries($paramName) {
        $ids = [];
        foreach ($this->data as $key => $value) {
            if (strpos($key, $paramName) !== false && $value == true) {
                array_push($ids, str_replace($paramName, '', $key));
            }
        }
        return \App\Entry::whereIn('id', $ids)->get();
    }
    
    // public function removeSubjectLink($id) {
    //     $url = url()->full();
    //     $param = 'subject'.$id.'=true';
    //     return str_replace([$param.'&', $param], '', $url);
    // }
    
    public function isSelected($paramName, $id) {
        $ids = [];
        foreach ($this->data as $key => $value) {
           
            if (strpos($key, $paramName) !== false && $value == true) {
                array_push($ids, str_replace($paramName, '', $key));
            }
        }
        return in_array($id, $ids);
    }
}
