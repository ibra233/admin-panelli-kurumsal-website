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

Route::get('/', function () {
    return view('thema.adminThema');
});

Route::get('kategoriekle', function () {
    return view('addCategory');
})->name('kategoriekle');
Route::get('ürünekle', 'App\Http\Controllers\KategoriController@productShow')->name('ürünekle');

Route::post('addCategory/','App\Http\Controllers\KategoriController@addCategory')->name('addCategory');

Route::post('addProduct/','App\Http\Controllers\KategoriController@addProduct')->name('addProduct');

Route::get('ürünliste/','App\Http\Controllers\ListController@productList')->name('productList');

Route::get('deleteList/{id}','App\Http\Controllers\DeleteController@deleteProduct')->name('deleteList');