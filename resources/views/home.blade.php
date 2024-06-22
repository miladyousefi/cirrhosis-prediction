<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>سیستم پیش بینی بیماری سیروز کبدی</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

</head>

<body>

    <div class="row" style="height: 100vh; overflow: hidden; ">

        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center p-5"
            style="background-color: #EFEFEF;">
            <!-- Header -->
            <!-- Login form -->
            <div class="form-container text-center">
                <h2>سیستم پیش بینی بیماری سیروز کبدی</h2>
                <div style="width: 500px">
                    <p class="p-3">
                        سیروز کبدی یک بیماری مزمن و پیش‌رونده کبدی است که در آن بافت کبدی سالم با بافت زخم (فیبروز) جایگزین می‌شود. این سیستم‌ پیش‌بینی بیماری سیروز کبدی به کمک روش‌های هوش مصنوعی و تحلیل داده‌های پزشکی طراحی شده‌اند تا بتوانند در مراحل اولیه بیماری را شناسایی کنند و از پیشرفت آن جلوگیری کنند.
                    </p>
                </div>

                <a href="{{ route('login') }}" class="btn btn-primary py-3 rounded-0 mt-5 text-white" style="padding-left: 100px !important;padding-right: 100px !important;">شروع</a>
            </div>

            <!-- Spacer to ensure the form is centered vertically -->
            <div class="flex-grow-1"></div>
        </div>

        <!-- Column with background image -->
        <div class="col-md-6 d-flex align-items-center justify-content-center"
            style="background-color: #091930; background-image: url({{ asset('images/half.png') }}); background-size: cover; background-position: center;">
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

<script src="{{ asset('/sw.js') }}"></script>
<script>
   if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
     console.error("Service workers are not supported.");
  }
</script>
</body>

</html>
