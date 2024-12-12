<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qxt- danh sach khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>Danh sach khoa</h1>
        <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Ma khoa</th>
            <th>Ten khoa</th>
            <th>Chuc nang</th>
        </tr>
    </thead>
    <tbody>
                @php
                    $stt = 0;
                @endphp
                @foreach ($qxtkhoas as $item)
                    @php
                        $stt++;
                    @endphp
                <tr>
                    <td>{{ $stt }}</td>
                    <td>{{ $item->QXTMAKH }}</td>
                    <td>{{ $item->QXTTENKH }}</td>
                    <td>
                        <a href="/khoas/detail/{{$item->QXTMAKH}}" class="btn btn-success">
                            Chi tiet</a>
                        edit / delete
                    </td>
                </tr>
            @endforeach
    </tbody>
        </table>

    </section>
</body>
</html>