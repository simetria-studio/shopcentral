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
Route::get('/shoppingtv', function () {
    return view('paginas.pagina1');
});
Route::get('/delivery', function () {
    return view('paginas.pagina2');
});
Route::get('/login', function () {
    return view('fluxo-login.login');
});
