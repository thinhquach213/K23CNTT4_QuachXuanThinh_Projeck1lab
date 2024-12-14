<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach sinh vien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách sinh viên</h1>
            </div>
            < class="card-body">
                <table class="table table-bordered">
                    <thead>
                            <tr>
                            <th class="text-center">#</th>
                            <th>Mã sinh viên</th>
                            <th>Họ Sinh Vien</th>
                            <th>Ten Sinh Vien</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Nơi sinh</th>
                            <th>Mã khoa</th>
                            <th>Học bổng</th>
                            <th class="text-center">Chức năng</th>
                            </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt=0;
                        @endphp
                        @foreach ($qxtsinhviens as $item)
                            @php
                            $stt++;
                            @endphp
                            <tr>
                                <td>1</td>
                                <td>{{$item->qxtMaSV}}</td>
                                <td>{{$item->qxtHoSV}}</td>
                                <td>{{$item->qxtTenSV}}</td>
                                <td>{{$item->qxtPhai}}</td>
                                <td>{{$item->qxtNgaySinh}}</td>
                                <td>{{$item->qxtNoiSinh}}</td>
                                <td>{{$item->qxtMaKh}}</td>
                                <td class="text-right">{{$item->qxtHocBOng}}</td>
                                <td class="text-center">
                                View / edit / delete
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
                <div class="class-footer">
                    <h3> Tong So Sinh Vien: {{$qxtsinhviens->count()}}</h3>
                        <a href="/qxt-sinhvien/create" class="btn btn-primary">Them Moi</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>