<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\ComicsController;
use App\Models\Count;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;






Route::get('login',[AuthController::class,'loginForm'])->name('login-form');
Route::post('admin-post',[AuthController::class,'login'])->name('login');





Route::group(['middleware' => 'authuser'],function () {

    
// Route::get('/admin',[AdminController::class,'adminIndex'])->name('admin_panel');
Route::get('/admin',[AdminController::class,'adminHome'])->name('admin.home');
Route::get('/test',[AdminController::class,'sliderShow'])->name('admin.test');



/*----------- Slider Part Start here -----------------------------*/ 
Route::get('/admin-slider-content-form',[AdminController::class,'sliderContentForm'])->name('slider.content.form');
Route::post('/admin-slider-content-add',[AdminController::class,'sliderContentAdd'])->name('slider.content.add');
Route::get('/admin-slider-content-show',[AdminController::class,'sliderContentShow'])->name('slider.content.show');
Route::get('/admin-slider-content-edit-{id}',[AdminController::class,'sliderContentEdit'])->name('slider.content.edit');
Route::post('/admin-slider-content-update-{id}',[AdminController::class,'sliderContentUpdate'])->name('slider.content.update');
Route::get('/admin-slider-content-delete-{id}',[AdminController::class,'sliderContentDelete'])->name('slider.content.delete');
/*----------- Slider Part end here -----------------------------*/ 

/*---------------------------------About part Start here -------------------------------*/

Route::get('/admin-about-content-form',[AdminController::class,'aboutContentForm'])->name('admin-about-form');
Route::post('/admin-about-content-store-1',[AdminController::class,'aboutContentStoreOne'])->name('admin-about-store-one');
// Route::post('/admin-about-content-store-2',[AdminController::class,'aboutContentStoreTwo'])->name('admin-about-store-two');
// Route::post('/admin-about-content-store-3',[AdminController::class,'aboutContentStoreThree'])->name('admin-about-store-three');
// Route::post('/admin-about-content-store-4',[AdminController::class,'aboutContentStoreFour'])->name('admin-about-store-four');


/*---------------------------------About part End here -------------------------------*/
/*---------------------------------Blog part Start here here -------------------------------*/

Route::get('/admin-blog-index',[AdminController::class,'blogIndex'])->name('blog.index');
Route::get('/admin-blog-form',[AdminController::class,'blogForm'])->name('blog.form');
Route::post('/admin-blog-store',[AdminController::class,'blogStore'])->name('blog.store');
Route::get('/admin-blog-edit-{id}',[AdminController::class,'blogEdit'])->name('blog.edit');
Route::post('/admin-blog-update-{id}',[AdminController::class,'blogUpdate'])->name('blog.update');
Route::get('/admin-blog-delete-{id}',[AdminController::class,'blogDelete'])->name('blog.delete');
Route::any('/admin-blog-published-{id}',[AdminController::class,'blogPublished'])->name('blog.published');
Route::any('/admin-blog-unpublished-{id}',[AdminController::class,'blogUnpublished'])->name('blog.unpublished');

// Route::any('/admin-blog-count-{id}',[AdminController::class,'blogCount'])->name('count');
Route::any('/admin-blog-details-{id}',[AdminController::class,'singleBlogDetails'])->name('blog-details');

/*---------------------------------Blog part End here here -------------------------------*/














/*  Comics Part here  */

Route::get('admin-comics-index',[ComicsController::class,'comicsIndex'])->name('comics-index');
Route::get('admin-comics-form',[ComicsController::class,'comicsForm'])->name('comics');
Route::post('admin-comics-store',[ComicsController::class,'comicsStore'])->name('comics-store');
Route::get('admin-comics-edit-{id}',[ComicsController::class,'comicsEdit'])->name('comics-edit');
Route::post('admin-comics-update-{id}',[ComicsController::class,'comicsUpdate'])->name('comics-update');
Route::get('admin-comics-delete-{id}',[ComicsController::class,'comicsDelete'])->name('comics-delete');
Route::any('admin-comics-published-{id}',[ComicsController::class,'comicsPublished'])->name('comics-published');
Route::any('admin-comics-unpublished-{id}',[ComicsController::class,'comicsUnpublished'])->name('comics-unpublished');

Route::get('admin-comics-description-{id}',[ComicsController::class,'comicsDescriptionView'])->name('comics-view');
Route::get('admin-comics-image-form-{id}',[ComicsController::class,'comicsImageShowForm'])->name('image-form-show-by-id');

// Route::get('admin-comics-image-edit-{id}',[ComicsController::class,'comicsImageEdit'])->name('image-edit');

// Route::post('admin-comics-image-update-{id}',[ComicsController::class,'comicsImageUpload'])->name('image-upload-by-id');
Route::post('admin-comics-image-store-{id}',[ComicsController::class,'comicsImageUpload'])->name('image-upload');

Route::get('admin-comics-category-index',[ComicsController::class,'categoryIndex'])->name('comics-category-index');
Route::get('admin-comics-category-form',[ComicsController::class,'categoryForm'])->name('comics-category-form');
Route::post('admin-comics-category-add',[ComicsController::class,'categoryAdd'])->name('comics-category-add');
Route::get('admin-comics-category-edit-{id}',[ComicsController::class,'categoryEdit'])->name('comics-category-edit');
Route::post('admin-comics-category-update-{id}',[ComicsController::class,'categoryUpdate'])->name('comics-category-update');
Route::get('admin-comics-category-delete-{id}',[ComicsController::class,'categoryDelete'])->name('comics-category-delete');
Route::any('admin-comics-category-published-{id}',[ComicsController::class,'categoryPublished'])->name('comics-category-published');
Route::any('admin-comics-category-unpublished-{id}',[ComicsController::class,'categoryUnpublished'])->name('comics-category-unpublished');


Route::get('admin-app-name-edit-{id}',[ComicsController::class,'appNameEdit'])->name('comics-app-name-edit');
Route::post('admin-app-name-update-{id}',[ComicsController::class,'appNameUpdate'])->name('comics-app-name-update');

Route::any('/admin-comic-details-{id}',[ComicsController::class,'singleComicsDetails'])->name('comics-details');












Route::get('logout',[AuthController::class,'logout'])->name('logout');

});