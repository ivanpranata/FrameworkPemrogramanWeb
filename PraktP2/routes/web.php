<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function()
{
    return view('profil');
});

Route::get('/pengaturan', function()
{
    return view('pengaturan');
});

Route::get('/bebas', function()
{
    return view('bebas');
});