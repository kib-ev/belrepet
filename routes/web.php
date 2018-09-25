<?php

Auth::routes();

Route::get('/', "IndexController@index")->name('home');

Route::get('file', function() {
    return view('file');
});

Route::post('upload', function() {
    
    if (\Illuminate\Support\Facades\Input::hasFile('file')):
        
        $file = \Illuminate\Support\Facades\Input::file('file');
        $file->move('images/uploads', $file->getClientOriginalName());
        
        echo '<img src="/images/uploads/'.$file->getClientOriginalName() .'" />';
        
    endif;
    
    echo 'hello';
});

Route::get('/novosti', "NewsController@index");
Route::get('/novosti/{slug}', "NewsController@show");

//Route::get('/home', 'HomeController@index');

Route::get('/kontakty', function() {
    $meta['title'] = 'Контакты';
    $meta['message'] = 'Контакты';

    return view('public.contactus')->with($meta);
})->name('contactus');

Route::get('/usloviya-i-polozheniya', function() {
    return view('public.rules');
});

Route::get('/repetitory', 'UserController@tutors')->name('tutors');

Route::get('/repetitor/{id}', function($id) {
    $user = \App\User::where('joinas', 'tutor')->where('id', $id)->first();
    if(!$user) {
        return redirect(route('tutors'));
    }
    return view('public.tutor.show', compact('user'))->with(['title' => 'Репетитор']);
})->name('tutor_page');

Route::get('/centry', function() {
    return view('tuition-centers')->with(['title' => 'Центры обучения']);
})->name('tuition-centers');


// account
Route::middleware(['auth'])->group(function () {

    Route::get('/user/dashboard', function() {
        return redirect('/user/profile');
    })->name('tutor-dashboard');
    
    Route::get('/user/profile', 'UserController@profile')->name('tutor-profile');
    
    Route::post('/user/profile', 'UserController@update');
    
    Route::get('/user/schedule', function() {
        return view('user.schedule')->with(['title' => 'Расписание']);
    })->name('tutor-schedule');

    Route::get('/user/schedule', function() {
        return view('user.schedule')->with(['title' => 'Расписание']);
    })->name('tutor-schedule');

    Route::get('/user/favorites', function() {
        return view('user.favorites')->with(['title' => 'Избранное']);
    })->name('tutor-favorites');

    Route::get('/user/invoices', function() {
        return view('user.invoices')->with(['title' => 'Счета']);
    })->name('tutor-invoices');

    Route::get('/user/upgrade', function() {
        return view('user.upgrade')->with(['title' => 'Тарифы']);
    })->name('tutor-upgrade');
    
    // ADMIN
    
    Route::get('/admin', 'AdminController@dashboard');
    Route::get('/admin/users', 'AdminController@users');
    
    Route::get('/admin/news', 'NewsController@index');
    Route::get('/admin/news/{id}/edit', 'NewsController@edit');
    Route::patch('/admin/news/{id}/edit', 'NewsController@update');
    Route::get('/admin/news/add', "NewsController@create");
    Route::put('/admin/news/add', "NewsController@store");
});


Route::get('/user', function() {
    return view('registration')->with(['title' => 'Вход/Регистрация']);
})->name('user');

Route::get('/admin/do/add-subject', function() {
    
    $subjects = [
        'Математика',
        'Физика',
        'Биология',
        'Химия',
        'Программирование',
        'Информатика',
        'Всемирная история',
        'История Беларуси',
        'Обществоведение',
        'Изобразительное искусство',
        'Музыка',
        'Дошкольное образование',
        'Начальная школа',
    ];
    
    $results = App\Subject::all()->toArray();
    
    $subjectsExists = [];
    foreach ($results as $row) {
        array_push($subjectsExists, $row['name']);
    }
    
    foreach ($subjects as $subject) { 
        
        if (!in_array($subject, $subjectsExists)) {
            array_push($subjectsExists, $subject);
            
            $newSubject = new App\Subject();
            $newSubject->name = $subject;
            $newSubject->slug = \App\Helpers\SlugHelper::str2url($subject);
            $newSubject->save();
        }
    }
    echo 'complete';
    
});