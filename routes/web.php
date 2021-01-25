<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

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

Route::get('/', [GeneralController::class, 'welcome'])->name('welcome');
Route::get('/services', [GeneralController::class, 'show_service'])->name('service');
Route::get('/price-list', [GeneralController::class, 'show_pricelist'])->name('pricelist');
//Route::get('/catalogue', [GeneralController::class, 'show_catalogue'])->name('catalogue');

//Route::get('/promo-packs', [GeneralController::class, 'show_promo'])->name('promo');
Route::get('/gallery', [GeneralController::class, 'show_gallery'])->name('gallery');
Route::get('/about-me', [GeneralController::class, 'show_aboutme'])->name('aboutme');
Route::get('/contact', [GeneralController::class, 'show_contact'])->name('contact');

Route::get('/file-upload', [GeneralController::class, 'show_upload'])->middleware('auth');
Route::post('/file-upload', [GeneralController::class, 'store']);
Route::get('/view-uploads', [GeneralController::class, 'viewUploads'])->name('viewuploads')->middleware('auth');
Route::delete('/view-uploads/{id}', [GeneralController::class, 'destroy']);

Route::get('setlocale/{locale}', [GeneralController::class, 'set_locale']);

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');