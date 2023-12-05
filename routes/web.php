<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeleteCommentController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\DuyuruController;
use App\Http\Controllers\IlanController;
use App\Http\Controllers\StoreCommentController;

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/registerPost',[AuthController::class, 'registerPost'])->name('registerPost');

Route::get('/login',[AuthController::class, 'login'])->name('login');
 Route::post('/login',[AuthController::class, 'loginPost'])->name('loginPost');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');


Route::get('/home', function () {
    return view('home');
});

Route::get('/universite',[UniversiteController::class, 'index']);
Route::get('/universite_detay/{id}', [UniversiteController::class, 'universite_detay'])->name('universite_detay');

Route::get('/duyurular',[DuyuruController::class,'index']);

Route::get('/ilanlar',[IlanController::class,'index'])->name('ilanlar');
Route::get('ilan_ekle',[IlanController::class,'ilan_ekle'])->name('ilan_ekle');
Route::post('ilan_ver',[IlanController::class,'ilan_ver'])->name('ilan_ver');


Route::post('/universite/{id}/yorumlar',[StoreCommentController::class,'universite_yorum_ekle'])->name('universite_yorum_ekle');
Route::delete('/universite/{id}/yorumlar/{comment}',[DeleteCommentController::class,'universite_yorum_sil'])->name('universite_yorum_sil');

Route::get('devlet_universite_getir',[UniversiteController::class,'devlet_universite_getir'])->name('devlet_universite_getir');
Route::get('vakif_universite_getir',[UniversiteController::class,'vakif_universite_getir'])->name('vakif_universite_getir');



