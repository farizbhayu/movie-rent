<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Movie
// Route::resource('movie', 'MovieController');
Route::get('/movie', 'MovieController@index'); //halaman index movie
Route::get('/movie/create', 'MovieController@create'); //halaman create movie
Route::post('/movie', 'MovieController@store'); //insert
Route::get('/movie/edit/{id}', 'MovieController@edit'); //halaman edit movie
Route::post('/movie/update', 'MovieController@update'); //update
Route::get('/movie/delete/{id}', 'MovieController@delete');

/* Member */
Route::get('/member', 'MemberController@index');
Route::get('/member/create', 'MemberController@create');
Route::post('/member', 'MemberController@store');
Route::get('/member/edit/{id}', 'MemberController@edit');
Route::post('/member/update', 'MemberController@update');
Route::get('/member/delete/{id}', 'MemberController@delete');

/* Rent */
Route::get('/rent', 'RentController@index');
Route::get('/rent/create', 'RentController@create');
Route::post('/rent', 'RentController@store');
Route::get('/rent/view/{id}', 'RentController@show');

/* Return */
Route::post('/return', 'ReturnController@store');
Route::get('/return', 'ReturnController@index');