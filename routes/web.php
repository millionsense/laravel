<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return 'Welcome to laravel.mjlab.org!';
});


Route::get('/upload', function(){
    return view('upload');
});

Route::post('/upload', [UploadController::class, 'upload']);
