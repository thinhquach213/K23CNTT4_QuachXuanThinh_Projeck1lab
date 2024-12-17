<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qxtSinhVien extends Model
{
    use HasFactory;

    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'qxt_sinhvien';

    // Nếu bảng không có cột timestamps (created_at, updated_at), thêm dòng này:
    public $timestamps = false;

    // (Tùy chọn) Nếu bảng có khóa chính khác mặc định là "id", thêm:
    protected $primaryKey = 'qxtMaSV';

    // (Tùy chọn) Nếu khóa chính không phải auto-increment:
    public $incrementing = false;

    // (Tùy chọn) Nếu khóa chính không phải kiểu số:
    protected $keyType = 'string';
}
