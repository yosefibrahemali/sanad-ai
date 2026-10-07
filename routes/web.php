<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/index.html', function () {
    return view('pages.index');
});

Route::get('/pages/{path}', function ($path) {
    $path = str_replace('.html', '', $path);

    return view('pages.' . $path);
});

