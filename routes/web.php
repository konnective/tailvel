<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/blog', [FrontendController::class, 'blog'])->name('blog.blog');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/ecom', [FrontendController::class, 'ecom'])->name('ecom');
Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/blogs', function () {
    return view('blog.blogs');
});
Route::get('/about', function () {
    return view('blog.about');
});
Route::get('/article', function () {
    return view('blog.article');
});
Route::get('/blog-copilot', function () {
    return view('frontend.copilot');
});
Route::get('/blog-canva', function () {
    return view('frontend.canva');
});
Route::get('/blog-list-canva', function () {
    return view('frontend.canva-list');
});

Route::get('/blog-category-canva', function () {
    return view('frontend.canva-category');
});
Route::get('/blog-about-canva', function () {
    return view('frontend.canva-about');
});
Route::get('/blog-contact-canva', function () {
    return view('frontend.canva-contact');
});
Route::get('/portfolio', function () {
    return view('portfolio.index');
});

require __DIR__.'/auth.php';
