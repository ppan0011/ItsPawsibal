<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('categories', function () {
    return view('species/speciesLandingPage');
});

Route::get('locationVulnerability', function () {
    return view('species/user-location');
});

Route::get('rock-wallaby', function () {
    return view('species/wallaby');
});

Route::get('potoroo', function () {
    return view('species/potoroo');
});

Route::get('possum', function () {
    return view('species/possum');
});

Route::get('credits', function () {
    return view('credits');
});

Route::resource('species','SpeciesController');
Route::get('/species/getRecordsByRegion/{region}/{common_name}', 'SpeciesController@getRecordsByRegion');