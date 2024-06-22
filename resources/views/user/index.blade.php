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
                <div style="width: 500px">
                  <a  class="btn" href="{{ route('dashboard') }}">
                    <div class="col-12 border border-secondary text-dark px-5 py-4 mb-3 rounded" style="width: 460px !important;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-clipboard-minus-fill" style="color: rgb(78, 118, 240)" viewBox="0 0 16 16">
                            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zM6 9h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1"/>
                          </svg>
                        <br>
                        <h3 class="mt-4">پرونده الکترونیک سلامت (EHR)
                        </h3>
                       </div>
                  </a>
                  <br>
                  <a  class="btn" href="{{ route('note') }}">
                    <div class="col-12 border border-secondary text-dark px-5 py-4 mb-3 rounded" style="width: 460px !important;">

                          <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" style="color: rgb(78, 118, 240)" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15"/>
                          </svg>
                        <br>
                        <h3 class="mt-4">نظرات
                        </h3>
                       </div>
                  </a>

                </div>

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
