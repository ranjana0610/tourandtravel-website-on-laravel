<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Backend\CustomerController;


Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/about', [AboutController::class,'about'])->name('about');
Route::get('/gallery', [GalleryController::class,'gallery'])->name('gallery');
Route::get('/contact', [ContactController::class,'contact'])->name('contact');
// Route::post('/send-contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/send-phpmailer', [ContactController::class, 'send'])->name('phpmailer.send');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboards');
    Route::get('/customer', [CustomerController::class, 'customerlist'])->name('customerlist');
});


