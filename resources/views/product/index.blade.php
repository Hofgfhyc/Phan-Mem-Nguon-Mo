<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 20px;
        }

        .product-card {
            transition: 0.3s;
            border-radius: 15px;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .price {
            font-size: 20px;
            font-weight: bold;
            color: #dc3545;
        }

        .btn-detail {
            border-radius: 20px;
            padding: 6px 18px;
        }
    </style>
</head>

<!-- 👇 Quan trọng: thêm flex vào body -->
<body class="d-flex flex-column min-vh-100">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">My Shop</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bold" href="{{ route('product.index') }}">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sinhvien') }}">Sinh viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{ route('logout') }}">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<div class="bg-white py-4 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <h2 class="fw-bold mb-0">Danh sách sản phẩm</h2>
        <a href="{{ route('product.add') }}" class="btn btn-success btn-lg rounded-pill px-4">
            + Thêm sản phẩm
        </a>
    </div>
</div>

<!-- 👇 flex-fill để chiếm hết phần còn lại -->
<div class="container mt-5 flex-fill">
    <div class="row g-4">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card product-card shadow-sm h-100 border-0 text-center p-3">

                    <img src="https://via.placeholder.com/200x150"
                         class="card-img-top rounded mb-3"
                         alt="Product Image">

                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $product['name'] }}</h5>

                        <p class="price">
                            {{ number_format($product['price']) }} đ
                        </p>

                        <a href="{{ route('product.detail', $product['id']) }}"
                           class="btn btn-outline-primary btn-detail">
                            Xem chi tiết
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- 👇 mt-auto đẩy footer xuống đáy -->
<footer class="bg-dark text-white text-center py-3 mt-auto">
    <p class="mb-0">
        Đại Học Xây Dựng Hà Nội
    </p>
</footer>

</body>
</html>
