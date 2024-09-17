<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contacts', function () {return view('pages.contacts');});
Route::get('/about', function () {return view('pages.about');});
