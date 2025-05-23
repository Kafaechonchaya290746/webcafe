<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>น้องช้าง สะเร็น </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- THEME CSS -->
    <link rel="stylesheet" href="{{asset('asset/frontend/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/plugins/slick-carousel/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/css/style.css')}}">
</head>

<body>
    <section class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="text-center">
            <h3 class="mb-4">เข้าสู่ระบบด้วย LINE</h3>
            <a href="{{ route('line.LineLogin') }}" class="d-inline-block">
                <img src="https://scdn.line-apps.com/n/line_add_friends/btn/en.png" width="200" alt="Line Login">
            </a>
        </div>
    </section>

    <!-- THEME JAVASCRIPT FILES -->
    <script src="{{asset('asset/frontend/plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('asset/frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/frontend/plugins/slick-carousel/slick.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="{{asset('asset/frontend/plugins/google-map/gmap.js')}}"></script>
    <script src="{{asset('asset/frontend/js/custom.js')}}"></script>
</body>
</html>