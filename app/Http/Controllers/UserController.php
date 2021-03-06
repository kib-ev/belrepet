<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function profile()
    {
        $user = Auth::user();
        
        $meta['title'] = 'Профиль';
        
        return view('user.profile', compact('user'))->with($meta);
    }

    private function convertArrayToString(array $data) {
        $result = '';
        foreach ($data as $item) {
            $result = $result . $item . ';';
        }

        return $result;
    }

    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
			$data = $request->all();
			if ($data) {
                unset($data['_token']);
                unset($data['submit']);
                
                if(isset($data['subjects'])) {
                    $data['subjects'] = $this->convertArrayToString($data['subjects']);
                };

                if(isset($data['tutor_rank'])) {
                    $data['tutor_rank'] = $this->convertArrayToString($data['tutor_rank']);
                };

                if(isset($data['tutor_workplaces'])) {
                    $data['tutor_workplaces'] = $this->convertArrayToString($data['tutor_workplaces']);
                };

                if(isset($data['lessons_type'])) {
                    $data['lessons_type'] = $this->convertArrayToString($data['lessons_type']);
                };

                if(isset($data['lessons_program'])) {
                    $data['lessons_program'] = $this->convertArrayToString($data['lessons_program']);
                };

                if(isset($data['birth'])) {
                    $data['birth'] = date('Y-m-d', strtotime($data['birth']));
                };

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
                $user->active = '0';
                $user->save();

                return redirect('user/profile')->withErrors(['xxx']); // todo message when save
            }
        }
		return view('user/profile'); // todo
    }
    
    public function tutor($id) {
        $user = \App\User::where('joinas', 'tutor')->where('id', $id)->first();
        
        if (!$user) { // todo
            abort(404);
        } else if ($user->active == false && Auth::user() == null) {
            abort(404);
        }  else if ($user->active == false && Auth::user() != null) {
            if (Auth::user()->joinas != 'admin') {
                abort(404);
            }
        }
        return view('public.tutor.show', compact('user'))->with(['title' => 'Репетитор']);
    }

    public function tutors() {
        $data = request()->all();
        $tutors = User::where('joinas', 'tutor')->where('active', true);
        $filter = new \App\Helpers\FilterHelper($tutors, $data);

        $tutorsAll = $filter->filteredTutors();
        
        $tutors = $tutorsAll->paginate(5);
        $tutors->appends(Input::except('page'));
        
        return view('tutors', compact('tutorsAll', 'tutors', 'data', 'filter'))
            ->with(['title' => 'Наши Репетиторы']);
    }

    public function update_user($id) {
        $data = request()->all();
        $user = User::find($id);
        $user->active = $data['active'];
        $user->update();

        return redirect(route('admin_users'));
    }
}
