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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/test', function () {
    return view('test');
});
Route::get('/test2', function () {
    return view('test2');
});

Route::get('/add', 'PageController@add');
Route::get('/approved', 'PageController@approved');
Route::get('/AR', 'PageController@AR');
Route::get('/exam', 'PageController@exam');
Route::get('/ARexam', 'PageController@ARexam');
Route::get('/rejected', 'PageController@rejected');
Route::get('/send', 'PageController@send');
//Route::post('/saveTask', 'TaskController@store');
Route::get('/reminder', 'PageController@reminder');
Route::get('/reminder2', 'PageController@reminder2');
Route::get('/ARview', 'PageController@ARviewMedicals');
Route::get('/search', 'PageController@search');
Route::get('/tst1', function(){
     return view('test1');
     });
Route::get('/phpfirebase_sdk','FirebaseController@index');