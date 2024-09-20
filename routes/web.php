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

//Route get// Homepage
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@home');

Route::get('/about', 'HomeController@about');

Route::get('/blogHome', 'HomeController@blogHome');

Route::get('/blogSingle', 'HomeController@blogSingle');

Route::get('/contact', 'HomeController@contact');

Route::get('/elements', 'HomeController@elements');

Route::get('/hotels', 'HomeController@hotels');

Route::get('/insurance', 'HomeController@insurance');

Route::get('/packages', 'HomeController@packages');
