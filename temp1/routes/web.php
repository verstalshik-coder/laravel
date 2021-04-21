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

Route::get('/', 'App\Http\Controllers\MainController@landing');

Route::get('/main', 'App\Http\Controllers\MainController@main');

Route::get('/dpage', 'App\Http\Controllers\MainController@dpage');

Route::get('/login', 'App\Http\Controllers\MainController@login');
Route::post('/login/loginuser', 'App\Http\Controllers\MainController@userLog');

Route::get('/register', 'App\Http\Controllers\MainController@register');
Route::post('/register/reguser', 'App\Http\Controllers\MainController@userReg');

Route::get('/userexit','App\Http\Controllers\MainController@exit');

Route::get('/test','App\Http\Controllers\MainController@test');
Route::get('/test1','App\Http\Controllers\MainController@test1');
Route::get('/test2','App\Http\Controllers\MainController@test2');
