<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them moi sinh vien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        input{
            border-radius: 0 !important;
        }
    </style>
</head>
<body>
    <section class="container">
        <form action="{{route('QxtSinhVien.qxtcreateSubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Them Moi Sinh Vien</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="qxtMaSV" class="col-sm-2 col-form-label">Ma sinh viên</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="qxtMaSV" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="qxtTenSV" class="col-sm-2 col-form-label">Ho Sinh Vien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="qxtTenSV" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="qxtPhai" class="col-sm-2 col-form-label">Gioi Tinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="qxtPhai" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="qxtNgaySinh" class="col-sm-2 col-form-label">Ngay Thang Nam Sinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="qxtNgaySinh" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="qxtNoiSinnh" class="col-sm-2 col-form-label">Noi Sinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="qxtNoiSinh" value="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="qxtMaKH" class="col-sm-2 col-form-label">Ma Khoa</label>
                        <div class="col-sm-10">
                            <select name="qxtMaKh" id="qxtMaKH">
                                <option value="">-- chon khoa --</option>
                                <option value="">Anh Van</option>
                                <option value="">Toan Ly</option>
                                <option value="">Tin Hoc</option>
                                <option value="">Triet Hoc</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Them Moi</button>
                        <a href="/qxt-sinhvien" class="btn btn-secondary">Quay lai</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>
</html>