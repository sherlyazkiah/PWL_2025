<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Basic routing
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2341720241 Sherly Lutfi Azkiah Sulistyawati';
});