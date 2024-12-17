<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\qxtSinhVien;

class qxtSinhVienController extends Controller
{
    // Lấy danh sách sinh viên
    public function qxtlist()
    {
        $qxtSinhViens = qxtSinhVien::all(); // Lấy tất cả danh sách sinh viên
        return view('QxtSinhVien.qxt-list', ['qxtsinhviens' => $qxtSinhViens]);
    }

    // Hiển thị form tạo mới sinh viên
    public function qxtCreate()
    {
        return view('qxtSinhVien.qxt-create'); // Đảm bảo tên view chính xác
    }

    // Xử lý tạo mới sinh viên
    public function qxtCreateSubmit(Request $request)
    {
        // Validate dữ liệu (thêm phần kiểm tra để chắc chắn dữ liệu hợp lệ)
        $request->validate([
            'qxtMaSV' => 'required|string|max:255',
            'qxtHoSV' => 'required|string|max:255',
            'qxtPhai' => 'required|string|max:10',
            'qxtNgaySinh' => 'required|date',
            'qxtNoiSinh' => 'required|string|max:255',
            'qxtMaKH' => 'required|string|max:255',
        ]);

        // Tạo mới sinh viên
        $qxtSinhVien = new qxtSinhVien();
        $qxtSinhVien->qxtMaSV = $request->qxtMaSV;
        $qxtSinhVien->qxtHoSV = $request->qxtHoSV;
        $qxtSinhVien->qxtPhai = $request->qxtPhai;
        $qxtSinhVien->qxtNgaySinh = $request->qxtNgaySinh;
        $qxtSinhVien->qxtNoiSinh = $request->qxtNoiSinh;
        $qxtSinhVien->qxtMaKH = $request->qxtMaKH;
        $qxtSinhVien->save(); // Lưu thông tin sinh viên vào cơ sở dữ liệu

        // Quay lại với thông báo
        return back()->with('qxtSinhVien_created', 'Đã thêm một sinh viên thành công!');
    }
}
