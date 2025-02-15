<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::resource('admin/blogs', BlogController::class);
Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

