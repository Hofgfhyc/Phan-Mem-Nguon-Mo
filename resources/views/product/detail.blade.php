<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 40px;
            width: 420px;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            text-align: center;
        }

        h1 {
            margin-bottom: 25px;
            color: #333;
        }

        .info {
            font-size: 18px;
            margin-bottom: 20px;
            color: #555;
        }

        .info span {
            font-weight: bold;
            color: #222;
        }

        .button-group {
            margin-top: 25px;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            margin: 5px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-back {
            background: #6c757d;
            color: white;
        }

        .btn-back:hover {
            background: #5a6268;
        }

        .btn-edit {
            background: #28a745;
            color: white;
        }

        .btn-edit:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Chi tiết sản phẩm</h1>

    <div class="info">
        ID sản phẩm: <span>{{ $id }}</span>
    </div>

    <div class="button-group">
        <a href="{{ route('product.index') }}" class="btn btn-back">
            ← Quay lại
        </a>

        <a href="#" class="btn btn-edit">
            Chỉnh sửa
        </a>
    </div>
</div>

</body>
</html>
