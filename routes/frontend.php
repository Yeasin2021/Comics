<?php

use App\Http\Controllers\Backend\ComicsController;
use App\Http\Controllers\Theme\FrontEndController;
use Illuminate\Support\Facades\Route;

$router->get('/',[FrontEndController::class,'index','comicControllerData'])->name('front-home');

// Route::get('/comics',[FrontEndController::class,'comicControllerData'])->name('comics');

