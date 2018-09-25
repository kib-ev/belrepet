<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 
        'lastname', 
        'patronymic',
        'gender',
        'birth',
        'phone',
        'skype',
        'site',
        'price',
        'joinas', 
        'email', 
        'password',
        
        'country',
        'region',
        'city',
        'street',
        'house',
        'apatment',
        'latitude',
        'longitude',
        
        'about',
        'excerpt',
        'education',
        'activity_from',
        'avatar',
    ];
    
    public $mapAddress;
    public $mapHint;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function mapAddress() {
        if ($this->city && $this->street && $this->house) {
            $this->mapAddress = $this->city . " " . $this->street . " " . $this->house;
        }
        return $this->mapAddress ? $this->mapAddress : "";
    }
    
    public function avatar() {
        if ($this->avatar) {
            return '/uploads/user'.$this->id.'/'.$this->avatar;
        } else {
            return '/images/blank-profile.png';
        }
    }
    
    public function link() {
        return route('tutor_page', $this->id);
    }
    
    public function subjects() {
        $subjects = Subject::whereIn('id', explode(';', $this->subjects));
        return $subjects;
    }
    public function subjectsArray() {
        $subjectsArray = [];
        foreach ($this->subjects()->get() as $subject) {
            array_push($subjectsArray, $subject->name);
        }
        return $subjectsArray;
    }
}
