<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/edit/{id}/', [CategoryController::class, 'edit']);
Route::patch('/update/{id}', [CategoryController::class, 'update']);
Route::get('/delete/{id}', [CategoryController::class, 'delete']);


Route::get('/product', [ProductController::class, 'index']);

Route::prefix('/category')->group(function () {
    Route::get('/add-category', [CategoryController::class, 'add_category'])->name('tambah-kategori');
    Route::post('/process-add', [CategoryController::class, 'process_add'])->name('process-add-category');
});

Route::prefix('/product')->group(function () {
    Route::get('/add-product', [ProductController::class, 'add_product'])->name('tambah-produk');
    Route::post('/process-add', [ProductController::class, 'process_add'])->name('process-add-product');
});
