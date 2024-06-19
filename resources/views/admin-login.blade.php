<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ورود</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            direction: rtl; /* Right-to-left text direction for Persian */
            margin: 0; /* Remove default margin to prevent overflow */
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }
        .container {
            height: 100%;
        }
        .login-form {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        .image-container {
            background: url('/images/banner.jpg') no-repeat center center;
            background-size: cover;
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body class="text-right">
    <div class="h-100">
        <div class="row h-100">
            <div class="col-md-4 d-flex align-items-center">
                <div class="login-form w-100 p-5">
                    <form class="w-100" action="{{route('admin.dologin')}}" method="POST">
                        @csrf
                        <h3 class="text-center mb-4">ورود</h3>
                        <div class="mb-3">
                            <label for="username" class="form-label">نام کاربری</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="نام کاربری خود را وارد کنید">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">رمز عبور</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="رمز عبور خود را وارد کنید">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">ورود</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8 p-0">
                <div class="image-container"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
