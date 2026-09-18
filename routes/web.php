<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route ::get ('/',[HomeController::class,'home'])->name('home.home');
Route ::get ('/contact',[ContactController::class,'contact'])->name('contact.contact');
Route::get('user/{id}', [HomeController::class, 'user'])->name('home.user');
Route::get('article/{title}/comment/{comment}', [HomeController::class, 'article'])->name('home.article');