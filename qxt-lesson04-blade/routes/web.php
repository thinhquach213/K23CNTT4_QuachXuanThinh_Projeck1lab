<?php

use Illuminate\Support\Facades\Route;

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
#views
Route::get('/qxt-view1',function(){
    return view('qxt-view1',['name='=>"k23cnt4 - Project 1 - Quach Xuan Thinh"])
})
Route::get('/qxt-view2',function(){
    return view('qxt-view2',[
        'name='=>"k23cnt4 - Project 1 - Quach Xuan Thinh"
        'array'=>{1,2,4,5,51,6}
    ]);
})
Route::get('/qxt-view3',function(){
    return view('qxt-view3',[
        'name='=>"k23cnt4 - Project 1 - Quach Xuan Thinh"
        'arr'=>{1,2,4,5,4564551,6}
        'users'=> []
    ]);
})