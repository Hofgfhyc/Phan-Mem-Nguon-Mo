<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"></a></li>
                <li class="nav-item"><a class="nav-link active fw-bold" href="{{ route('product.index') }}"></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('sinhvien') }}"></a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<div class="bg-white py-4 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <h2 class="fw-bold mb-0">DANH SÁCH SẢN PHẨM</h2>
        <a href="{{ route('product.add') }}" class="btn btn-success btn-lg">Thêm sản phẩm</a>
    </div>
</div>

<!-- Product Cards -->
<div class="container mt-4">
    <div class="row g-4">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">{{ $product['name'] }}</h5>
                        <p class="text-danger fs-5">{{ number_format($product['price']) }} đ</p>
                        <a href="{{ route('product.detail', $product['id']) }}" class="btn btn-outline-primary">
                            Xem chi tiết
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">Đại Học Xây Dựng Hà Nội</b></p>
</footer>

</body>
</html>
