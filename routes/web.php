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


Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pdv', function () {
    return view('pdv');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});


/**
 * Rotas de Autenticação
 */
Route::get('/login', function () {
    return view('login');
});

Route::get('/recover', function () {
    return view('recover');
});

