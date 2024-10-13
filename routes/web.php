<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FaqsController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\StoryController;
use App\Http\Controllers\Frontend\AuthenticationController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/faqs',[FaqsController::class,'index'])->name('faqs.index');

Route::get('/products',[ProductsController::class,'index'])->name('products.index');
Route::get('/products/details',[ProductsController::class,'productDetails'])->name('products.details');

Route::get('/story',[StoryController::class,'index'])->name('story.index');

Route::get('/sign-in',[AuthenticationController::class,'sigin'])->name('sign-in');
Route::get('/sign-up',[AuthenticationController::class,'signup'])->name('sign-up');


