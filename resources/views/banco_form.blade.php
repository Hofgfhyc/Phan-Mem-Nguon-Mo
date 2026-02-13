<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tạo bàn cờ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .chess-board {
            display: inline-block;
            margin-top: 30px;
        }

        .row-board {
            display: flex;
        }

        .cell {
            width: 40px;
            height: 40px;
        }

        .black {
            background-color: #000;
        }

        .white {
            background-color: #fff;
        }
    </style>
</head>

<!-- 👇 Footer sát đáy -->
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">My Shop</a>
    </div>
</nav>

<div class="container text-center mt-4 flex-fill">

    <h4 class="fw-bold">TẠO BÀN CỜ ĐỘNG</h4>
    <p class="text-muted">Nhập kích thước n để tạo bàn cờ n × n (2 ≤ n ≤ 20)</p>

    <form action="{{ route('banco.form') }}" method="GET" class="d-flex justify-content-center mt-3">
        <div class="input-group w-25">
            <input type="number" name="n" class="form-control"
                   min="2" max="20" required>
            <button type="submit" class="btn btn-primary">Xem bàn cờ</button>
        </div>
    </form>

    {{-- HIỂN THỊ BÀN CỜ --}}
    @if(isset($n) && $n >= 2 && $n <= 20)

        <div class="chess-board">
            @for($i = 0; $i < $n; $i++)
                <div class="row-board">
                    @for($j = 0; $j < $n; $j++)
                        <div class="cell {{ ($i + $j) % 2 == 0 ? 'white' : 'black' }}"></div>
                    @endfor
                </div>
            @endfor
        </div>

    @endif

    <div class="mt-4">
        <a href="{{ route('home') }}" class="btn btn-secondary">Về trang chủ</a>
    </div>

</div>

<footer class="bg-dark text-white text-center py-3 mt-auto">
    <p class="mb-0">Đại Học Xây Dựng Hà Nội</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
