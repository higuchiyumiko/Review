<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReviewController;
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

//Route::get('/', function () {  
//    return view('items/index');
//});

Route::controller(ItemController::class)->group(function(){
Route::get('/', 'index');
Route::get('/items', 'nav');
Route::get('/items/search', 'search');
Route::get('/items/register', 'register');
Route::post('/items/store', 'store');
Route::get('items/create/{item}','create');
Route::get('items/show','show');
Route::get('items/edit/{item}','edit');
Route::put('items/update/{item}','update');
Route::delete('/items/delete/{item}', 'delete');
});

Route::controller(ReviewController::class)->group(function(){
Route::post('/review/store', 'store2');
Route::get('/review/show/{id}', 'show');

});
