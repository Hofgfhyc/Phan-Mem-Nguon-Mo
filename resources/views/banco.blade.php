<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bàn cờ {{ $n }} x {{ $n }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .chess-board {
            border: 2px solid #333;
            display: inline-block;
        }
        .chess-row {
            display: flex;
        }
        .chess-cell {
            width: 40px;
            height: 40px;
        }
        .black { background: #000; }
        .white { background: #fff; }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('banco.form') }}">Chọn bàn cờ</a></li>
        </ul>
    </div>
</nav>

<div class="container text-center mt-4">
    <h3>BÀN CỜ {{ $n }} x {{ $n }}</h3>

    <div class="chess-board mt-3">
        @for($i = 0; $i < $n; $i++)
            <div class="chess-row">
                @for($j = 0; $j < $n; $j++)
                    <div class="chess-cell {{ (($i+$j)%2==0)?'white':'black' }}"></div>
                @endfor
            </div>
        @endfor
    </div>

    <div class="mt-4">
        <a href="{{ route('banco.form') }}" class="btn btn-primary">Chọn lại n</a>
        <a href="{{ route('home') }}" class="btn btn-secondary">Trang chủ</a>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">Đại Học Xây Dựng Hà Nội</b></p>
</footer>

</body>
</html>
