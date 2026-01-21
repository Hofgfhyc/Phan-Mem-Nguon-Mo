<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ - PMNM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}"></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('sinhvien') }}"></a></li>
            </ul>
        </div>
    </div>
</nav>

<main>
    <!-- Banner -->
    <div class="bg-light p-5 text-center">
        <h1 class="display-5 fw-bold">BÀI TẬP PHẦN MỀM NGUỒN MỞ</h1>
        <p class="lead">Xây dựng website Laravel cơ bản</p>
    </div>

    <!-- Main content -->
    <div class="container mt-5">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Quản lý sản phẩm</h5>
                        <p class="card-text">Xem danh sách, thêm và chi tiết sản phẩm.</p>
                        <a href="{{ route('product.index') }}" class="btn btn-primary">Vào sản phẩm</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title"> Thông tin sinh viên</h5>
                        <p class="card-text">Xem thông tin sinh viên thực hiện bài tập.</p>
                        <a href="{{ route('sinhvien') }}" class="btn btn-success">Xem sinh viên</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Bàn cờ</h5>
                        <p class="card-text">Tạo bàn cờ động theo kích thước n.</p>
                        <a href="{{ route('banco.form') }}" class="btn btn-primary">Xem bàn cờ</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">Đại Học Xây Dựng Hà Nội</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
