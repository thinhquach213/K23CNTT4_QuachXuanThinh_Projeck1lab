@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('sinhvien.create') }}" class="btn btn-primary float-end">Thêm Mới</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã Sinh Viên</th>
                            <th>Họ Tên</th>
                            <th>Ngày Sinh</th>
                            <th>Giới Tính</th>
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0; @endphp
                        @foreach ($sinhvien as $sv)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $sv->MaSV }}</td>
                                <td>{{ $sv->HoTen }}</td>
                                <td>{{ $sv->NgaySinh }}</td>
                                <td>{{ $sv->GioiTinh }}</td>
                                <td>{{ $sv->DiaChi }}</td>
                                <td>{{ $sv->SoDienThoai }}</td>
                                <td>
                                    <a href="{{ route('sinhvien.edit', $sv->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                    <form action="{{ route('sinhvien.destroy', $sv->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
