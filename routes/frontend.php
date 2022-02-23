<?php

use App\Http\Controllers\Backend\ComicsController;
use App\Http\Controllers\Theme\FrontEndController;
use Illuminate\Support\Facades\Route;

$router->get('/',[FrontEndController::class,'index','comicControllerData'])->name('front-home');

// Route::get('/comics',[FrontEndController::class,'comicControllerData'])->name('comics');

Route::post('subscriber',[FrontEndController::class,'subscriberMail'])->name('subscriberMail');

Route::any('/comic-details-{id}',[ComicsController::class,'singleComicsDetails'])->name('comics-details');
Route::any('/blog-details-{id}',[AdminController::class,'singleBlogDetails'])->name('blog-details');

