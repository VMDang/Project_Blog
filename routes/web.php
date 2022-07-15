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
    return view('welcome');
});

//Route::get('/users/createUser',function (){
//    return view('users/createUser');
//})->name('form-register');

Route::get('/users/createUser',[\App\Http\Controllers\UserController::class,'form_register'])->name('form_register');
Route::post('/users/createUser',[\App\Http\Controllers\UserController::class,'register'])->name('register');


Route::get('/post/create','Postcontroler@add')->name('post.add');
Route::post('/post/create','PostController@create')->name('post.create');


