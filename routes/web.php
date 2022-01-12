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
    return view('index');
});

Route::get('/login', function() {
    return view('auth/login');
})->name('login');

Route::get('/register', function() {
    return view('auth/register');
})->name('register');

Route::get('/pendanaan', function() {
    return view('pendanaan.index');
})->name('pendanaan.index');

Route::get('/pendanaan/1', function() {
    return view('pendanaan.view');
})->name('pendanaan.view');

Route::get('/pendanaan/1/payment', function() {
    return view('pendanaan.payment');
})->name('pendanaan.payment');

Route::get('/peminjaman', function () {
    return view('peminjaman.index');
})->name('peminjaman.index');