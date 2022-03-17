<?php

require 'frontend.php';
require 'backend.php';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/helper', function () {
    return view('welcome');
});
Route::post('/helper-post', function (Request $request) {
    $MAIL_USERNAME = $request -> {'MAIL_USERNAME'};
    $MAIL_PASSWORD = $request -> {'MAIL_PASSWORD'};
    $MAIL_FROM_ADDRESS = $request -> {'MAIL_FROM_ADDRESS'};
    //MAIL_USERNAME MAIL_PASSWORD MAIL_FROM_ADDRESS
    // $google_client_sec = $request -> {'google_client_sec'};
    // $google_callback = $request -> {'google_callback'};
    $data = [

        // 'GOOGLE_CLIENT_ID' =>  $google_client_id,
        // 'GOOGLE_CLIENT_SECRET' =>  $google_client_sec,
        'MAIL_USERNAME' =>  $MAIL_USERNAME,
        'MAIL_PASSWORD' =>  $MAIL_PASSWORD,
        'MAIL_FROM_ADDRESS' =>  $MAIL_FROM_ADDRESS,
      ];
      update_env($data);
     toastr()->success('Google Credential updated success!');
     return redirect()->back();
})->name('update-app');




