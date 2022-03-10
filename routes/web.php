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
Route::get('listagem', 'Product@listProduct');




Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/pdv', function () {
    return view('pdv');
});
Route::get('/cadastros', function () {
    return view('cadastros');
});
Route::get('/valores', function () {
    return view('valores');
});
Route::get('/pedidos', function () {
    return view('pedidos');
});
Route::get('/logistica', function () {
    return view('logistica');
});
Route::get('/fluxo', function () {
    return view('fluxo');
});
Route::get('/crediario', function () {
    return view('crediario');
});
Route::get('/contas', function () {
    return view('contas');
});
Route::get('/estoque', function () {
    return view('estoque');
});
Route::get('/vendas', function () {
    return view('vendas');
});
Route::get('/compras', function () {
    return view('compras');
});
Route::get('/usuarios', function () {
    return view('usuarios');
});
Route::get('/outros', function () {
    return view('outros');
});
Route::get('/agenda', function () {
    return view('agenda');
});
Route::get('/checkout', function () {
    return view('checkout');
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

