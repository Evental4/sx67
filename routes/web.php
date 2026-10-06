<?php

use Illuminate\Support\Facades\Route;

Route::get('/1', function () {
    return view('home');
});

Route::get('/cat', function () {
    return view('cat');
});

Route::get('/journal', function () {
    return view('journal');
});

Route::get('/admin', function () {
    return view('admin');
}); 