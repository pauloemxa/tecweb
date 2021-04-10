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

Route::get('/login', function () {
    return view('/auth/login');
});
Route::get('/register', function () {
    return view('/auth/register');
});


Route::get('/admin/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin/usuarios', function () {
    return view('usuarios');
});

Route::get('/admin/produtos', function () {
    return view('produtos');
});

Route::get('/admin/clientes', function () {
    return view('clientes');
});

Route::get('/admin/fornecedores', function () {
    return view('fornecedores');
});

Route::get('/admin/vendas', function () {
    return view('vendas');
});

Route::get('/admin/envios', function () {
    return view('envios');
});

