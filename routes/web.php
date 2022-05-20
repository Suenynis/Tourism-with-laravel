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
<<<<<<< HEAD
Route::get('/services', 'App\Http\Controllers\PagesController@services');
=======
Route::get('/registration',[\App\Http\Controllers\RegisterController::class,'show'])->name('savedata');
Route::post('/registration_get',[\App\Http\Controllers\RegisterController::class,'savedata'])->name('registration_get');
/*Route::name('user.')->group(function (){
    Route::view('/private' ,'private') -> middleware('auth')->name('private');


    Route::get('/login',function (){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('pages.login');
    })->name('login');
    Route::post('/login',[\App\Http\Controllers\LoginController::class,'login']);



    Route::get('/registration',function (){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('pages.registration');
    })->name('registration');

    Route::post('/registration',[\App\Http\Controllers\RegisterController::class,'savedata'])->name('registr');

    Route::post('/login',[\App\Http\Controllers\LoginController::class,'login']);
}); */


>>>>>>> b160b33c79382548d58b2e8fd7dcab4f23c7209f


