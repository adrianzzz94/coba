<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\GoodsController;
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

//Get dipakai untuk routes yg hanya berhubungan untuk memanggil data tanpa pemrosesan ke dlm database

//Patch / Put digunakan untuk mengupdate data

//Delete untuk menghapus data

//Routes Goods Index 
Route::get('/goods', [GoodsController::class, 'index'])->name('goods');
Route::get('/goods/create', [GoodsController::class, 'create'])->name('goods.create');
Route::post('/goods', [GoodsController::class, 'store'])->name('goods.store');
Route::get('/goods/{goods}', [GoodsController::class, 'show'])->name('goods.show');
Route::get('/goods/{goods}/edit', [GoodsController::class, 'edit'])->name('goods.edit');
Route::patch('/goods/{goods}', [GoodsController::class, 'update'])->name('goods.update');
Route::delete('/goods/{goods}', [GoodsController::class, 'destroy'])->name('goods.destroy');




//test galihiii
//test galihhh
