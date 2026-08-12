<?php

use App\Http\Controllers\EnquiryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/enqiury', function () {
    return view('enqiuryform');
});
Route::post('/enqiury', [EnquiryController::class, 'store']);