<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryBuilder;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ThongTinSVController;
use App\Http\Controllers\UserController;

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

Route::get('/query-builder', [QueryBuilder::class, 'queryBuilder']);

Route::get('/thongtinsv', [ThongTinSVController::class, 'thongTinSv']);
Route::get('/list-product/{id?}', [ProductController::class, 'showProduct']);
Route::get('/update-product', [ProductController::class, 'updateProduct']);

// Route::resource('user', UserController::class);

Route::group(['prefix' => 'user'], function () {
    Route::get('/list-user', [UserController::class, 'index']);
});


Route::resource('product', ProductController::class);
Route::post('/search', [ProductController::class, 'search'])->name('search');

// Route::get('/', [App\Http\Controllers\CutBladeController::class, 'index'])->name('home');


//layout Cắt giao diện component 
Route::get('/', [App\Http\Controllers\CutBladeController::class, 'index'])->name('home');
Route::get('/quanlyuser', [App\Http\Controllers\CutBladeController::class, 'quanLyUser'])->name('quanLyUser');
  


















































