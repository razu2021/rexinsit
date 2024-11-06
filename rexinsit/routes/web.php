<?php

use App\Http\Controllers\website\websiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[websiteController::class,'index']);