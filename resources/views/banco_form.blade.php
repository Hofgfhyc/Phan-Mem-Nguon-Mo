<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chọn kích thước bàn cờ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.index') }}"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sinhvien') }}"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Banner -->
<div class="bg-light p-4 text-center">
    <h4 class="fw-bold">TẠO BÀN CỜ ĐỘNG</h4>
    <p class="text-muted">Nhập kích thước n để tạo bàn cờ n × n</p>
</div>

<!-- Content -->
<div class="container mt-4 text-center">
    <h5 class="mb-3">CHỌN KÍCH THƯỚC BÀN CỜ</h5>
    <p class="text-muted">Giới hạn: 2 ≤ n ≤ 20</p>

    <form action="{{ route('banco.view') }}" method="GET" class="d-flex justify-content-center mt-4">
        <div class="input-group w-25">
            <input type="number" name="n" class="form-control" placeholder="Ví dụ: 8" min="2" max="20" required>
            <button type="submit" class="btn btn-primary">Xem bàn cờ</button>
        </div>
    </form>

    <div class="mt-4">
        <a href="{{ route('home') }}" class="btn btn-secondary">Về trang chủ</a>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">Đại Học Xây Dựng Hà Nội</b></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
