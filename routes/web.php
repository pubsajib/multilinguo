<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/loginregister', 'HomeController@loginregister')->name('loginregister');
Route::get('/student', 'HomeController@student')->name('student');
Route::get('/teacher', 'HomeController@teacher')->name('teacher');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    // Artisan::call('route:cache');
    Artisan::call('view:clear');
    return "Cache is cleared";
});
