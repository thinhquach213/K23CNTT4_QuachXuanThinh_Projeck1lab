<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\qxtSinhVienController;

/*
|---------------------------------------------------------------------------|
| Web Routes                                                               |
|---------------------------------------------------------------------------|
| Đây là nơi bạn có thể đăng ký các route web cho ứng dụng của mình.       |
| Những route này sẽ được tải bởi RouteServiceProvider và tất cả chúng   |
| sẽ được gán vào nhóm middleware "web".                                   |
|---------------------------------------------------------------------------|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route hiển thị danh sách sinh viên
Route::get('/qxt-sinhvien', [qxtSinhVienController::class, 'qxtlist'])->name('QxtSinhVien.qxtlist');

// Route hiển thị form tạo sinh viên mới (GET)
Route::get('/qxt-sinhvien/create', [qxtSinhVienController::class, 'qxtCreate'])->name('QxtSinhVien.qxtcreate');

// Route xử lý form khi người dùng gửi yêu cầu tạo sinh viên mới (POST)
Route::post('/qxt-sinhvien/create', [qxtSinhVienController::class, 'qxtCreateSubmit'])->name('QxtSinhVien.qxtcreateSubmit');
