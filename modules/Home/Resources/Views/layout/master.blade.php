<!DOCTYPE html>
<html lang="en">
<head>
    <title>StartWork-Trang Chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('/frontend/css/fonts.googleapis.com.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/frontend/css/stackpath.bootstrapcdn.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/frontend/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('/frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/custom.css') }}">

    <link href="{{ asset('/css/fontawesome/css/all.css') }}" rel="stylesheet">
    
</head>

<body>

@include('Home::layout.header')

@yield('content')

@include('Home::layout.footer')


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
</div>


<script src="{{ asset('backend/js/libs/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/frontend/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('/frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('/frontend/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('/frontend/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('/frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/frontend/js/scrollax.min.js') }}"></script>
<script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/frontend/js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

@stack('js')
<script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>
