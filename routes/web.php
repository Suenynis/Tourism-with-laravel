<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_for_Admin_Controller;
use App\Http\Controllers\AdminController;
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

Route::get('/index', 'App\Http\Controllers\PagesController@index')->name('home');
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/comments', 'App\Http\Controllers\PagesController@comments');
Route::get('/login', 'App\Http\Controllers\PagesController@login');
Route::get('/registration', 'App\Http\Controllers\PagesController@registration');
Route::get('/tours', 'App\Http\Controllers\PagesController@tours');
Route::get('/user_Page','App\Http\Controllers\PagesController@userPage');
Route::get('/admin_Users', 'App\Http\Controllers\PagesController@adminUsers');

Route::get('/admin_Main','App\Http\Controllers\PagesController@adminMain')->middleware('role:admin')->name('admin-main');
Route::get('/admin_Comments', 'App\Http\Controllers\PagesController@adminComments')->middleware('role:admin');
Route::get('/admin_Tours','App\Http\Controllers\PagesController@adminEdit')->middleware('role:admin');
Route::get('/admin_Index','App\Http\Controllers\PagesController@adminIndex')->middleware('role:admin');

Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/logout', [CustomAuthController::class, 'logout']);
Route::get('/admin_Users',[User_for_Admin_Controller::class, 'showUsers'])->middleware('role:admin')->name('control-users');
Route::get('/admin_Users',[User_for_Admin_Controller::class, 'showTours'])->middleware('role:admin')->name('control-Tours');
Route::middleware('role:admin')->prefix('test')->group(function (){
    Route::get('/test',[User_for_Admin_Controller::class, 'check']);
    Route::resource('admin',AdminController::class);
});
Route::post('/delete-user',[CustomAuthController::class,'deleteuser'])->name('delete-user');



