<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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


Route::get('/', [BarangController::class, 'dashboard'])->name('dashboard');
Route::get('/TambahData',[BarangController::class, 'tambahbarang'])->name('tambahbarang');
Route::post('/insertdata',[BarangController::class, 'insertdata'])->name('insertdata');
Route::get('/tampildatabarang/{id}',[BarangController::class, 'tampildatabarang'])->name('tampildatabarang');
Route::post('/updatedatabarang/{id}',[BarangController::class, 'updatedatabarang'])->name('updatedatabarang');
Route::get('/deletedatabarang/{id}',[BarangController::class, 'deletedatabarang'])->name('deletedataruangan');
Route::get('/dashboardbarangmasuk',[BarangController::class, 'detailbarang'])->name('detailbarang');
Route::get('/dashboardbarangterhapus',[BarangController::class, 'tampildatabarangterhapus'])->name('tampildatabarangterhapus');

