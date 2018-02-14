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
    return view('welcome');
})->name('/');

Route::get('blank',function (){
	return view('blank');
});

Route::get('profile','ProfileController@index')->name('profile.index');
Route::post('profile','ProfileController@update')->name('profile.update');

Route::get('table',function (){
	$people = file_get_contents(base_path('database/sample/dummy_data.json'));
	$people = json_decode($people);
	$people = $people->mahasiswa;

	return view('table', compact('people'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
