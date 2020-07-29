<?php

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

Auth::routes();
Route::get('register', function(){
    return view('404');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');


// ---- Adverts Routes ---- //
Route::post('/adverts/ajax', 'AdvertsController@ajax')->name('adverts.ajax');
Route::get('/adverts/destroy/{id}', 'AdvertsController@destroy')->name('adverts.destroy');
Route::get('/adverts/image-crop/{id}', 'AdvertsController@imageCrop')->name('adverts.image_crop');
Route::post('/adverts/store-cropped-image/', 'AdvertsController@storeCroppedImage')->name('adverts.store_cropped_image');
Route::resource('adverts', 'AdvertsController');

// ---- Testing Routes ---- //
Route::prefix('/admin')->as('admin.')->group(function () {
    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/login', 'AdminController@login')->name('login');
    Route::post('/login', 'AdminController@checkLogin')->name('check_login');
    Route::delete('/logout', 'AdminController@logout')->name('logout');
    Route::post('/ajax', 'AdminController@ajax')->name('ajax');
});
