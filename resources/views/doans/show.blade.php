<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chi tiết đồ án</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Chi tiết đồ án</h2>
                <table class="table table-bordered">
                    <tr>
                        <th>Tên đồ án</th>
                        <td>{{ $doan->name }}</td>
                    </tr>
                    <tr>
                        <th>Mô tả</th>
                        <td>{{ $doan->description }}</td>
                    </tr>

                    <tr>
                        <th>Ngày làm</th>
                        <td>{{ $doan->ngaytao }}</td>
                    </tr>
                    <tr>
                        <th>Chi phí</th>
                        <td>{{ $doan->price }}</td>
                    </tr>
                </table>

                <a href="{{ route('doans.index') }}" class="btn btn-primary">Quay lại</a>
            </div>
        </div>
    </div>
</body>

</html>