<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\DeleteController;
use App\Http\Controllers\Back\KategoriController;
use App\Http\Controllers\Back\ListController;
use App\Http\Controllers\Back\ReservationController;
use App\Http\Controllers\Back\UpdateController;
use App\Http\Controllers\Front\MenuController;
use App\Http\Controllers\Front\AddController;
use App\Http\Controllers\Front\ShowController;
use App\Http\Controllers\Front\HomeController;


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



Route::middleware('isLogged')->prefix('admin')->group(function () {
    Route::get('/', [ListController::class, 'homeShow'])->name('home');

    Route::get('kategoriekle', function () {
        return view('Back.addCategory');
    })->name('kategoriekle');
    Route::post('videoGaleryAdd', [KategoriController::class, 'videoGaleryAdd'])->name('videoGaleryAdd');

    Route::post('updateAboutUs', [UpdateController::class, 'updateAboutUs'])->name('updateAboutUs');
    Route::post('updateVision', [UpdateController::class, 'updateVision'])->name('updateVision');
    Route::post('updateMission', [UpdateController::class, 'updateMission'])->name('updateMission');
    Route::post('imageGaleryAdd', [KategoriController::class, 'imageGaleryAdd'])->name('imageGaleryAdd');
    Route::get('hakkimizda', [ListController::class, 'aboutUs'])->name('aboutUsAdmin');
    Route::get('musterimesajlari', [ListController::class, 'customerMessage'])->name('customerMessageAdmin');
    Route::get('vizyonumuz', [ListController::class, 'vision'])->name('visionAdmin');
    Route::get('misyonumuz', [ListController::class, 'mission'])->name('missionAdmin');
    Route::get('resimsil{id}', [DeleteController::class, 'deleteImageGalery'])->name('deleteImageGalery');
    Route::get('videosil{id}', [DeleteController::class, 'deleteVideoGalery'])->name('deleteVideoGalery');
    Route::get('video-galerisi', [ListController::class, 'videoGalery'])->name('videoGaleryAdmin');
    Route::get('resim-galerisi', [ListController::class, 'imageGalery'])->name('imageGaleryAdmin');
    Route::post('contactUpdate', [UpdateController::class, 'contactUpdate'])->name('contactUpdate');
    Route::post('workTimeUpdate', [UpdateController::class, 'workTimeUpdate'])->name('workTimeUpdate');
    Route::get('ürünekle', [KategoriController::class, 'productShow'])->name('ürünekle');
    Route::get('isbasvurulari', [ListController::class, 'jobApplication'])->name('jobApplicationAdmin');
    Route::post('addCategory/', [KategoriController::class, 'addCategory'])->name('addCategory');
    Route::get('rezervasyonkabul/{reservationId}', [ReservationController::class, 'reservationAccept'])->name('reservationAccept');

    Route::get('rezervasyononaylanmis', [ListController::class, 'reservationAcceptedList'])->name('reservationAcceptedList');

    Route::post('reservationRejection/{reservationId}', [ReservationController::class, 'reservationRejection'])->name('reservationRejection');
    Route::post('addProduct/', [KategoriController::class, 'addProduct'])->name('addProduct');

    Route::get('ürünliste/', [ListController::class, 'productList'])->name('productList');

    Route::get('kategoriliste/', [ListController::class, 'categoryList'])->name('kategoriliste');

    Route::get('deleteList/{id}', [DeleteController::class, 'deleteProduct'])->name('deleteList');

    Route::post('updateProduct/{id?}', [UpdateController::class, 'updateProduct'])->name('updateProduct');

    Route::get('deleteCategory/{id}', [DeleteController::class, 'deleteCategory'])->name('deleteCategory');

    Route::post('updateCategory/{id}', [UpdateController::class, 'updateCategory'])->name('updateCategory');


    Route::get('kullaniciekle', function () {
        return view('Back.addUser');
    })->name('kullaniciEkle');

    Route::post('addUser', [AuthController::class, 'add'])->name('addUser');


    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('rezervasyonliste', [ListController::class, 'reservationList'])->name('reservationList');
});

Route::middleware(['loggedIn'])->group(function () {
    Route::post('doLogin', [AuthController::class, 'login'])->name('doLogin');
    Route::get('giris', function () {
        return view('back.login');
    })->name('login');
});


//Front routeları

Route::get('/', [HomeController::class, 'get'])->name('anasayfa');

Route::post('reservation', [HomeController::class, 'reservation'])->name('reservation');





Route::get('menuler', [MenuController::class, 'menuGet'])->name('menuler');

Route::get('fotografgalerisi', [ShowController::class, 'showImageGalery'])->name('imageGalery');

Route::get('videogalerisi', [ShowController::class, 'showVideoGalery'])->name('videoGalery');

Route::get('misyonumuz', [ShowController::class, 'showMission'])->name('mission');
Route::get('vizyonumuz', [ShowController::class, 'showVision'])->name('vision');
Route::get('yorumlar', [ShowController::class, 'showComment'])->name('comment');

Route::post('addComment', [AddController::class, 'commentAdd'])->name('addComment');

Route::get('rezervasyon', function () {
    return view('Front.reservation');
})->name('reservationShow');

Route::get('hakkimizda', [ShowController::class, 'showAboutUs'])->name('aboutus');

Route::get('iletisim', function () {
    return view('Front.contact');
})->name('contactShow');

Route::post('customerMessage', [AddController::class, 'customerMessage'])->name('customerMessage');

Route::post('jobApplication', [AddController::class, 'jobApplication'])->name('jobApplication');

Route::get('insankaynaklari', function () {
    return view('Front.humanResources');
})->name('hrShow');
