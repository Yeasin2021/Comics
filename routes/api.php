

<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\ComicsController;
use App\Http\Controllers\Backend\ProfileController;
use App\Models\Count;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::group( ['prefix'=>'/user','middleware'=>['guest:api']],function(){
    Route::post('/login',[ApiController::class,'login']);
});
Route::group( ['prefix'=>'/user','middleware'=>['auth:api']],function(){
     Route::get('/logout',[ApiController::class,'logout']);

});

Route::get('/api-imp',[ApiController::class,'getData']);


