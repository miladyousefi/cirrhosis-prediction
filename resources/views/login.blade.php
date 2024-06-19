<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

    <div class="row" style="height: 100vh; overflow: hidden;">
        <div class="col-md-6 d-flex flex-column justify-content-between p-5" style="background-color: #EFEFEF; overflow: hidden;">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-outline-primary">ثبت نام</button>
                <a href="/">بازگشت</a>
            </div>
            <div class="text-right">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
            </div>
    
            <!-- Login form -->
            <div class="form-container text-right">
                <strong>
                    <h1 class="mb-5">ورود</h1>
                </strong>
    
                <form action="{{ route('dologin') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">نام کاربری خود را وارد کنید</label>
                        <input type="text" class="form-control rounded-0 py-3 text-right border border-0" id="username"
                            name="username" placeholder="نام کاربری" required>
                    </div>
                    <div class="mb-3 text-right">
                        <label for="password" class="form-label">رمز عبور خود را وارد کنید</label>
                        <input type="password" class="form-control rounded-0 py-3 text-right border border-0" id="password"
                            name="password" placeholder="رمز عبور" required>
                        <p class="mt-2">رمزعبور خود را فراموش کردید ؟</p>
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary btn-block py-3 rounded-0">ورود</button>
                        <p class="mt-2">حساب کاربری ندارید ؟</p>
                    </div>
                </form>
            </div>
    
            <!-- Spacer to ensure the form is centered vertically -->
            <div class="flex-grow-1"></div>
        </div>
    
        <!-- Column with background image -->
        <div class="col-md-6 d-flex align-items-center justify-content-center"
            style="background-color: #091930; background-size: cover; background-image: url({{asset('images/half.png')}}); background-position: center; background-repeat: no-repeat; overflow: hidden;">
            <!-- Optional overlay if you want to make text more readable on top of the background image -->
            <div class="overlay"></div>
            <!-- Content in the first column -->
            <div class="content">
                <!-- You can add content here if needed -->
            </div>
        </div>
        <!-- Column with login form -->
    
    </div>
    



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
</body>

</html>
