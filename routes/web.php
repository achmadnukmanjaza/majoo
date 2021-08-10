<?php

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
//SETTING OTOMATIS KE PAGE CATALOG PRODUCT

Route::get('/', 'App\Http\Controllers\MajooController@catalog');


// CATALOG

Route::get('/catalog', 'App\Http\Controllers\MajooController@catalog');

Route::get('/buy/{id_produk}','App\Http\Controllers\MajooController@buy')->name('catalog.buy');

Route::post('/store/{id_produk}','App\Http\Controllers\MajooController@store')->name('catalog.store');

Route::get('/pesanan/{id_beli}/edit','App\Http\Controllers\MajooController@editbeli');

Route::post('/pesanan/{id_beli}/update','App\Http\Controllers\MajooController@updatebeli');

// LOGIN LOGOUT

Route::get('/login','App\Http\Controllers\AuthController@login')->name('login');

Route::post('/postlogin','App\Http\Controllers\AuthController@postlogin');

Route::get('/logout','App\Http\Controllers\AuthController@logout');



// MIDDLEWARE ADMIN

Route::group(['middleware' => 'auth'],function(){
    
    // MASTER CATALOG

    Route::get('/master_catalog', 'App\Http\Controllers\MajooController@masterCatalog');

    Route::get('/master_catalog/create','App\Http\Controllers\MajooController@createCatalog')->name('master_catalog.create');

    Route::post('/master_catalog/store','App\Http\Controllers\MajooController@insertCatalog')->name('master_catalog.store');

    Route::get('/master_catalog/{id_produk}/edit','App\Http\Controllers\MajooController@editCatalog');

    Route::post('/master_catalog/{id_produk}/update','App\Http\Controllers\MajooController@update');

    Route::get('/master_catalog/{id_produk}/delete','App\Http\Controllers\MajooController@delete');

    // PESANAN

    Route::get('/pesanan', 'App\Http\Controllers\MajooController@pesanan');

}); 
