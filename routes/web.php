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
Route::resource('produtos', 'App\Http\Controllers\ProductController') ->names('products') ->parameters(['produtos' => 'products']);
Route::resource('usuarios', 'App\Http\Controllers\UserController') ->names('user') ->parameters(['usuarios' => 'user']);


Route::get('/', function () {
    return view('login');
});

Route::get('/admin', 'App\Http\Controllers\AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'App\Http\Controllers\AuthController@showLogin')->name('login');
Route::post('login/do', 'App\Http\Controllers\AuthController@login')->name('login.do');



Route::get('/pdv', function () {
    return view('pdv');
});

// s


/**
 * Rotas de Autenticação
 */
Route::get('/login', function () {
    return view('login');
});

Route::get('/recover', function () {
    return view('recover');
});

