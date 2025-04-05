<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ProductCollectionController;
use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;

// Include admin routes
require base_path('routes/admin.php');
// Route::get('/', function () {
//     return view('welcome'); 
// });

Route::get('generate-token', [TokenController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact.us');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.us');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/testimonials', [HomeController::class, 'testimonial'])->name('testimonials');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog-single', [BlogController::class, 'viewBlog'])->name('blog.view');
Route::get('/product-collection', [ProductCollectionController::class, 'index'])->name('collection');
