<?php

namespace App\Http\Controllers;  // Đảm bảo khai báo `namespace` là dòng đầu tiên

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\qxtKhoaController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/khoas', [qxtKhoaController::class, 'qxtGetAllKhoa'])->name('qxtkhoa.qxtGetAllKhoa');
Route::get('/khoas/detail/{makh}', [qxtKhoaController::class, 'qxtGetKhoa'])->name('qxtkhoa.qxtGetKhoa');
Route::get('/khoas/edit/{makh}', [qxtKhoaController::class, 'qxteditKhoa'])->name('qxtkhoa.qxteGetKhoa');

