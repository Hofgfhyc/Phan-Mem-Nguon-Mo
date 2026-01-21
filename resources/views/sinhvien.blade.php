<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}">Sản phẩm</a></li>
                <li class="nav-item"><a class="nav-link active fw-bold" href="{{ route('sinhvien') }}">Sinh viên</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0">THÔNG TIN SINH VIÊN</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th width="40%">Họ và tên</th>
                            <td>{{ $name }}</td>
                        </tr>
                        <tr>
                            <th>Mã số sinh viên</th>
                            <td>{{ $mssv }}</td>
                        </tr>
                        <tr>
                            <th>Môn học</th>
                            <td>Phần mềm nguồn mở</td>
                        </tr>
                        <tr>
                            <th>Bài tập</th>
                            <td>Xây dựng website Laravel</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('home') }}" class="btn btn-primary">Quay về trang chủ</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">Đại Học Xây Dựng Hà Nội</b></p>
</footer>

</body>
</html>
