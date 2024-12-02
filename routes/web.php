<?php

use Illuminate\Support\Facades\Concurrency;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Concurrency::run([
        fn () => null,
        fn () => null,
    ]);

    return view('welcome');
});
