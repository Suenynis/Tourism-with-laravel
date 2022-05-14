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

Route::get('/index', 'App\Http\Controllers\PagesController@index');
Route::get('/comments', 'App\Http\Controllers\PagesController@comments');
//Route::get('/login', 'App\Http\Controllers\PagesController@login');
//Route::get('/registration', 'App\Http\Controllers\PagesController@registration');
Route::get('/tours', 'App\Http\Controllers\PagesController@tours');
Route::get('/admin_Main','App\Http\Controllers\PagesController@adminMain');
Route::get('/admin_Comments', 'App\Http\Controllers\PagesController@adminComments');
Route::get('/admin_Tours','App\Http\Controllers\PagesController@adminEdit');
Route::get('/admin_Index','App\Http\Controllers\PagesController@adminIndex');
Route::get('/admin_Users', 'App\Http\Controllers\PagesController@adminUsers');
//Route::get('/registration', [\App\Http\Controllers\UserController::class,'create']);

Route::name('user.')->group(function (){
    Route::view('/private' ,'private') -> middleware('auth')->name('private');


    Route::get('/login',function (){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('pages.login');
    })->name('login');



    Route::get('/registration',function (){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('pages.registration');
    })->name('registration');

    Route::post('/registration',[\App\Http\Controllers\RegisterController::class,'store']);

   // Route::post('/login')
});




