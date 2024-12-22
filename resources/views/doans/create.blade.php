<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thêm Đồ Án</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Thêm <b>Đồ Án</b> Mới</h2>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('doans.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên đồ án</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Người hướng dẫn</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>




                    <div class="form-group">
                        <label for="ngaytao">Ngày làm</label>
                        <input type="date" class="form-control" id="ngaytao" name="ngaytao" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Chi phí làm</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>

                    <button type="submit" class="btn btn-success">Lưu Đồ Án</button>
                    <a href="{{ route('doans.index') }}" class="btn btn-secondary">Hủy</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>