<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Age Verification</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .card {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            width: 320px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .card h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .card p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            margin-bottom: 15px;
        }

        input[type="number"]:focus {
            border-color: #667eea;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #667eea;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #5a67d8;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Xác minh độ tuổi</h2>
    <p>Bạn phải đủ 18 tuổi để tiếp tục</p>

    <form method="POST" action="{{ route('age.check') }}">
        @csrf
        <input type="number" name="age" placeholder="Nhập tuổi của bạn" required>
        <button type="submit">Xác nhận</button>
    </form>
</div>

</body>
</html>
