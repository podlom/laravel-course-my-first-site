<?php

// @ts Додайте ваші роути в цей файл

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
