<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký tài khoản</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
        }

        .card {
            border: none;
            border-radius: 16px;
            animation: fadeIn 0.6s ease-in-out;
        }

        .form-control, .form-select {
            border-radius: 10px;
            padding: 10px;
        }

        .form-control:focus, .form-select:focus {
            box-shadow: 0 0 0 0.2rem rgba(78,115,223,.25);
        }

        .btn-primary {
            border-radius: 10px;
            padding: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">

            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white rounded-top">
                    <h4 class="mb-0">ĐĂNG KÝ TÀI KHOẢN</h4>
                    <small>Laravel Sign In</small>
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('check.signin') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Tài Khoản" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Re-Password</label>
                                <input type="password" name="repass" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">MSSV</label>
                                <input type="text" name="mssv" class="form-control"  required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Lớp</label>
                                <input type="text" name="class" class="form-control"  required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Giới tính</label>
                            <select name="gender" class="form-select">
                                <option value="Khác">Khác</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary">Sign In</button>
                        </div>

                    </form>

                </div>

                <div class="card-footer text-center text-muted">
                    © PMNM - Hong Phuc
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
