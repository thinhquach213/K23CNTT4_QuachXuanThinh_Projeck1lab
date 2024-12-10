<?php

use Illuminate\Support\Facades\LptSessionController;

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
Route::get('/qxt-session/get',[QxtSessonController::class,'qxtGetSessionData'])->name('qxtsession.get');
Route::get('/qxt-session/set',[QxtSessonController::class,'qxtStoreSessionData'])->name('qxtsession.set');
Route::get('/qxt-session/del',[QxtSessonController::class,'qxtDeleteSessionData'])->name('qxtsession.del');
