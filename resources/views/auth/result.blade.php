<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .result-card {
            width: 420px;
            padding: 30px;
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            text-align: center;
            animation: fadeInUp 0.8s ease;
        }

        .circle {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: pulse 1.5s infinite;
        }

        .circle.success {
            background: linear-gradient(135deg, #28a745, #7CFC98);
        }

        .circle.fail {
            background: linear-gradient(135deg, #dc3545, #ff7a7a);
        }

        .circle span {
            font-size: 60px;
            color: #fff;
            font-weight: bold;
        }

        h3 {
            margin-bottom: 10px;
        }

        p {
            color: #555;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.08); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>

<div class="result-card">

    {{-- Vòng tròn hiệu ứng --}}
    <div class="circle {{ $success ? 'success' : 'fail' }}">
        <span>{{ $success ? '✓' : '✕' }}</span>
    </div>

    {{-- Tiêu đề --}}
    <h3 class="{{ $success ? 'text-success' : 'text-danger' }}">
        {{ $message }}
    </h3>

    {{-- Mô tả --}}
    @if($success)
        <p>Bạn đã đăng ký tài khoản thành công.</p>
    @else
        <p>Thông tin bạn nhập chưa chính xác.<br>
           Vui lòng kiểm tra lại và thử lại.</p>
    @endif

    {{-- Nút điều hướng --}}
    <div class="mt-4">
        <a href="{{ route('signin') }}" class="btn btn-outline-primary me-2">
            Quay lại đăng ký
        </a>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Trang chủ
        </a>
    </div>

</div>

</body>
</html>
