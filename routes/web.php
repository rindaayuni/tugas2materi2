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

Route::get('/beranda', function () {
    return view('wedding.beranda');
});

Route::get('/checkout', function () {
    return view('wedding.checkout');
});

Route::get('/login', function () {
    return view('wedding.login');
});

Route::get('/produk', function () {
    return view('wedding.produk');
});

Route::get('/register', function () {
    return view('wedding.register');
});

Route::get('/base', function () {
    return view('templateadmin.base');
});

Route::get('/berandaadmin', function () {
    return view('templateadmin.berandaadmin');
});

Route::get('/loginadmin', function () {
    return view('templateadmin.loginadmin');
});

Route::get('/registeradmin', function () {
    return view('templateadmin.registeradmin');
});

Route::get('/kategori', function () {
    return view('templateadmin.kategori');
});

Route::get('/produk', function () {
    return view('templateadmin.produk');
});







