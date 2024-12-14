<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin chi tiết khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
       <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin chi tiết khoa can sua</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="QXTMAKH" class="col-sm-2 col-form-label">Ma Khoa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" 
                                   id="QXTMAKH" 
                                   value="{{$khoa->QXTMAKH}}">
                                   
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                        <label for="QXTTENKH" class="col-sm-2 col-form-label">Ten khoa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                                   id="QXTTENKH" 
                                   value="{{$khoa->QXTTENKHOA}}">
                                   
                        </div>
                    </div>
                <div class="card-footer">
                    <a href="/khoas" class="btn btn-primary">Back</a>
                </div>
            </div>
       </form>
    </section>
</body>
</html>

