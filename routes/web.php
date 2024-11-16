<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('pages.home');
Route::get('/shop', function () {
  return view('pages.shop'); 
})->name('pages.shop');
Route::get('/product-details', function () {
  return view('pages.product-details');
})->name('pages.product-details');
Route::get('/checkout', function () {
  return view('pages.checkout');
})->name('pages.checkout');
Route::get('/cart', function () {
  return view('pages.cart');
})->name('pages.cart');
Route::get('/blog', function () {
  return view('pages.blog');
})->name('pages.blog');
Route::get('/blog-single', function() {
  return view('pages.blog-single');
})->name('pages.blog-single');
Route::get('/404', function() {
  return view('pages.404');
})->name('pages.404');
Route::get('/contact-us', function() {
  return view('pages.contact-us');
})->name('pages.contact-us');





