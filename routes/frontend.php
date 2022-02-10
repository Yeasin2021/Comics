<?php

use App\Http\Controllers\Theme\FrontEndController;
use Illuminate\Support\Facades\Route;

$router->get('/',[FrontEndController::class,'index'])->name('front-home');
