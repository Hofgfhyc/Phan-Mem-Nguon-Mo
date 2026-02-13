<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .info-card {
            border-radius: 15px;
        }

        .card-header {
            font-weight: bold;
            letter-spacing: 1px;
        }

        table th {
            background-color: #f1f1f1;
        }
    </style>
</head>

<!-- 👇 Flex layout để footer luôn nằm dưới -->
<body class="d-flex flex-column min-vh-100">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">My Shop</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.index') }}">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bold" href="{{ route('sinhvien') }}">Sinh viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{ route('logout') }}">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container mt-5 flex-fill">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card info-card shadow border-0">

                <div class="card-header bg-secondary text-white text-center">
                    THÔNG TIN SINH VIÊN
                </div>

                <div class="card-body">
                    <table class="table table-bordered align-middle text-center">
                        <tr>
                            <th width="40%">Họ và tên</th>
                            <td class="fw-bold">{{ $name }}</td>
                        </tr>
                        <tr>
                            <th>Mã số sinh viên</th>
                            <td class="fw-bold text-primary">{{ $mssv }}</td>
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

                <div class="card-footer text-center bg-white">
                    <a href="{{ route('home') }}" class="btn btn-primary rounded-pill px-4">
                        Quay về trang chủ
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Footer sát đáy -->
<footer class="bg-dark text-white text-center py-3 mt-auto">
    <p class="mb-0">Đại Học Xây Dựng Hà Nội</p>
</footer>

</body>
</html>
