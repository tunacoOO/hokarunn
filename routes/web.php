<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('posts.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [PostController::class, 'index'])->name('top')->middleware('auth');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts/create',[PostController::class,'imagePost'])->name('image.post');
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/search',[PostController::class,'search'])->name('posts.search');
Route::get('/search',[ArticleController::class,'search'])->name('articles.search');
Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');