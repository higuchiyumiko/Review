<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LikeController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::controller(ItemController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/items', 'nav')->name('nav');
    Route::get('/items/search', 'search');
    Route::get('/items/register', 'register');
    Route::post('/items/store', 'store');
    Route::get('items/create/{item}','create');
    Route::get('items/show','show')->name('show');
    Route::get('items/detail/{item}','detail');
    Route::get('items/edit/{item}','edit');
    Route::put('items/update/{item}','update');
    Route::delete('/items/delete/{item}', 'delete');
});

Route::controller(ReviewController::class)->middleware(['auth'])->group(function(){
    Route::post('/review/store', 'store2');
    Route::get('/review/show/{review}', 'show');
});
Route::controller(LikeController::class)->middleware(['auth'])->group(function(){
    Route::get('/review/like/{review}', 'likes')->name('likes');
    Route::get('/review/unlike/{ewview}', 'unlikes')->name('unlikes');
});
require __DIR__.'/auth.php';
