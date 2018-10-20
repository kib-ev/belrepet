<?php

Auth::routes();

Route::get('/', "IndexController@index")->name('home');

Route::get('/novosti', "NewsController@index")->name('public_news');
Route::get('/novosti/{slug}', "NewsController@show")->name('public_news_item');

Route::get('/kontakty', function() {
    $meta['title'] = 'Контакты';
    $meta['message'] = 'Контакты';

    return view('public.contactus')->with($meta);
})->name('contactus');

Route::get('/usloviya-i-polozheniya', function() {
    return view('public.rules');
});

Route::get('/repetitor/{id}','UserController@tutor' )->name('tutor_page');
Route::get('/repetitory', 'UserController@tutors')->name('tutors');


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

    Route::get('/user/offer', function() {

        $meta['title'] = 'Публичная оферта';

        return view('user.offer')->with($meta);
    })->name('user-offer');
    
    
    // ADMIN
    // для префикса группы возможен еще такой вариант записи
    // Route::prefix('admin')->group(function () { });
    Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {

        Route::get('/', 'AdminController@dashboard');
        Route::get('/users', 'AdminController@users')->name('admin_users');
        Route::patch('/user/{id}', 'UserController@update_user')->name('update_user');
        
        Route::get('/news', 'NewsController@index');
        Route::get('/news/{id}/edit', 'NewsController@edit');
        Route::patch('/news/{id}/edit', 'NewsController@update');
        Route::get('/news/add', "NewsController@create");
        Route::put('/news/add', "NewsController@store");
    
        Route::get('/references', "ReferenceController@index");
        Route::get('/references/show/{id}', "ReferenceController@show")
            ->name('admin_show_reference');
    
        Route::put('/entries/store', "EntryController@store")
            ->name('admin_entry_store');
    });
});

Route::get('/registration', function() {
    return view('registration')->with(['title' => 'Вход/Регистрация']);
})->name('registration');

Route::post('/sendmail', 'MailController@send_mail')->name('send_mail_ajax');
