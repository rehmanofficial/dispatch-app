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



/**************************
 * Authentication Routes
 **************************/
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

Route::get('/logout', function () {
    return view('logout');
});


/***************
 * App Routes
 ***************/
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/all-loads', function () {
    return view('all-loads');
})->name('all-loads');

Route::get('/add-new-load', function () {
    return view('add-new-load');
})->name('add-new-load');

Route::get('/all-carriers', function () {
    return view('all-carriers');
})->name('all-carriers');

Route::get('/add-new-carrier', function () {
    return view('add-new-carrier');
})->name('add-new-carrier');

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/all-brokers', function () {
    return view('all-brokers');
})->name('all-brokers');

Route::get('/add-new-broker', function () {
    return view('add-new-broker');
})->name('add-new-broker');

Route::get('/all-drivers', function () {
    return view('all-drivers');
})->name('all-drivers');

Route::get('/add-new-driver', function () {
    return view('add-new-driver');
})->name('add-new-driver');

Route::get('/assign-drivers', function () {
    return view('assign-drivers');
})->name('assign-drivers');

Route::get('/dispatchers', function () {
    return view('dispatchers');
})->name('dispatchers');

Route::get('/all-invoices', function () {
    return view('all-invoices');
})->name('all-invoices');

Route::get('/add-new-invoice', function () {
    return view('add-new-invoice');
})->name('add-new-invoice');

Route::get('/add-old-invoice', function () {
    return view('add-old-invoice');
})->name('add-old-invoice');

Route::get('/google-map', function () {
    return view('google-map');
})->name('google-map');

Route::get('/weather-map', function () {
    return view('weather-map');
})->name('weather-map');

Route::get('/timezone-map', function () {
    return view('timezone-map');
})->name('timezone-map');
