<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return 'hello, world!';
});

Route::get('about', [PageController::class, 'about'])->name('about');
