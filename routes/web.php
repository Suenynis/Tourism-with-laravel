<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/index', 'App\Http\Controllers\PagesController@index');
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/comments', 'App\Http\Controllers\PagesController@comments');
Route::get('/login', 'App\Http\Controllers\PagesController@login');
Route::get('/registration', 'App\Http\Controllers\PagesController@registration');
Route::get('/tours', 'App\Http\Controllers\PagesController@tours');
Route::get('/admin_Main','App\Http\Controllers\PagesController@adminMain');
Route::get('/admin_Comments', 'App\Http\Controllers\PagesController@adminComments');
Route::get('/admin_Tours','App\Http\Controllers\PagesController@adminEdit');
Route::get('/admin_Index','App\Http\Controllers\PagesController@adminIndex');
Route::get('/admin_Users', 'App\Http\Controllers\PagesController@adminUsers');
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');


