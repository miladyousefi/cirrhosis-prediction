<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد دکتر</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    {{-- JS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#toggleSidebar').on('click', function() {
                $('.sidebar').toggleClass('active');
                $('.main-content').toggleClass('active');
                $('#toggle-cross').addClass('d-block');
                if ($('.sidebar').hasClass('active')) {
                    $('.sidebar').css({
                        'display': 'flex', // Show the sidebar
                        'width': '100%', // Set width to 100%
                        'z-index': '1000' // Set z-index to 1000
                    });
                    $('.main-content').hide(); // Hide the main content

                } else {
                    $('.sidebar').css({
                        'display': 'none', // Hide the sidebar
                        'width': '', // Reset width
                        'z-index': '' // Reset z-index
                    });
                    $('.main-content').show(); // Show the main content

                }
            });

            $('#toggle-cross').on('click', function(e) {
                e.stopPropagation(); // Prevent the click event from bubbling up
                $('#toggleSidebar').click(); // Trigger the sidebar toggle when clicking the cross button
            });
        });
    </script>

</head>

<body class="text-right">

    <div class="wrapper">

        @include('user.layouts.side')
        <div class="main-content">
            @include('user.layouts.header')

            <div class="content">
                <div class="container-fluid">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-info rounded-0">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger rounded-0">
                            <strong>خطاهای زیر روی داده است!</strong><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger rounded-0">
                            {{ session('error') }}
                        </div>
                    @endif
                    @yield('content')
                </div>
               
            </div>
        </div>
    </div>
</body>

</html>
