<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SinhVien; // Đảm bảo tên model đúng chuẩn PascalCase

class SinhVienController extends Controller // Sửa tên class thành SinhVienController
{
    public function index()
    {
        // Lấy danh sách sinh viên phân trang
        $sinhvien = SinhVien::paginate(5);

        // Trả về view với dữ liệu sinh viên
        return view('index', compact('sinhvien'))
            ->with('i', (request()->input('page', 1) - 1) * 5); // Tính số thứ tự
    }
}
