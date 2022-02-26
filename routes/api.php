

<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\ComicsController;
use App\Http\Controllers\Backend\ProfileController;
use App\Models\Count;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



Route::get('/test',[ApiController::class,'getSliderContent'])->name('admin.test');