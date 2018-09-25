<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $user = Auth::user();
        
        $meta['title'] = 'Профиль';
        
        return view('user.profile', compact('user'))->with($meta);
    }
    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
			$data = $request->all();
			if ($data) {
                unset($data['_token']);
                unset($data['submit']);

                $subjectsString = '';
                if(isset($data['subjects'])) { //todo
                    foreach ($data['subjects'] as $subject) {
                        $subjectsString = $subjectsString . $subject . ';';
                    }
                }
                $data['subjects'] = $subjectsString;

                if(array_key_exists('avatar', $data)) {
                    $path = public_path() . '/uploads/user' . $data['id'];
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    } else {
                        $files = glob($path); // get all file names
                        foreach($files as $file){ // iterate files
                            if(is_file($file)) {
                                unlink($file); // delete file
                            }
                        }
                    }

                    $filename = $data['avatar']->getClientOriginalName();
                    if($request->hasFile('avatar')) {
                        $data['avatar']->move($path, $filename);
                    }
                
                    $data['avatar'] = $filename;
                }

                $user = User::find($data['id']);
                foreach ($data as $key => $value) {
                    $user[$key] = $value;
                }
                $user->save();
                $meta['title'] = 'Профиль';

                return view('user/profile', compact('user'))->with($meta);
            }
        }
        /*$data = request()->all();
        $user = Auth::user();
        
        
        $user->subjects = $subjectsString;
        
        //unset($data['avatar']);
        print_r($request);
        If(Input::hasFile('file')){
            $file = Input::file('file');

            $destinationPath = public_path(). '/uploads/';
            $filename = $file->getClientOriginalName();

            $file->move($destinationPath, $filename);

            print_r($filename);
            //echo '<img src="uploads/'. $filename . '"/>';

            /*$user = ImageTest::create([
                'filename' => $filename,
            ]);*/
       /* }

        $user->update($data);
        
        $meta['title'] = 'Профиль';*/
        
		return view('user/profile');
    }
    
    public function tutors() {
        
        $data = request()->all();

        $filterIsActive = FALSE;
        
        $tutors = User::where('joinas', 'tutor')
                ->where('active', 'true'); // todo
        
        $filter = new \App\Helpers\FilterHelper($tutors, $data);
        

        $ages = [];
        if (isset($data['age'])) {
            $filterIsActive = TRUE;
            $ages = explode('-', str_replace('+', '', $data['age']));
            $tutors = $filter->filterAge();
        }
        
        $tutorsAll = $filter->tutors();
        
        $tutors = $tutorsAll->paginate(5);
        $tutors->appends(Input::except('page'));
        
        
        return view('tutors', compact('tutors', 'tutorsAll', 'data', 'ages', 'filterIsActive', 'filter'))
            ->with(['title' => 'Наши Репетиторы']);
    }

}
