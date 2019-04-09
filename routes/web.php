<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/loginregister', 'HomeController@loginregister')->name('loginregister');
Route::get('/student', 'HomeController@student')->name('student');
Route::get('/teacher', 'HomeController@teacher')->name('teacher');
