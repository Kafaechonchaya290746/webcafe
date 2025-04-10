<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>น้องช้าง สะเร็น </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- theme meta -->
    <meta name="theme-name" content="newsbit" />

    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{Asset('Asset/frontend/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{Asset('Asset/frontend/plugins/font-awesome/css/font-awesome.min.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{Asset('Asset/frontend/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{Asset('Asset/frontend/plugins/slick-carousel/slick-theme.css')}}">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{Asset('Asset/frontend/css/style.css')}}">
</head>
<body>
    
    <style>
        .post-thumbnail {
            position: relative;
            overflow: hidden;
        }
    
        .post-image {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
    
        .post-thumbnail:hover .post-image {
            transform: scale(1.05); /* ขยายขนาดรูปเมื่อ hover */
            box-shadow: 0 8px 20px rgba(255, 223, 0, 0.6); /* เงาสีเหลืองนวล */
        }
    
        .post-thumbnail:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(247, 247, 244, 0.3); /* แสงสีเหลือง */
            opacity: 0; /* เริ่มต้นไม่ให้เห็น */
            transition: opacity 0.3s ease;
        }
    
        .post-thumbnail:hover:before {
            opacity: 1; /* แสดงแสงเมื่อ hover */
        }
        
    </style>



<div class="main-navbar clearfix bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg site-main-nav navigation">


                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                  </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Home หน้าเเรก
                                </a>
                                <div class="dropdown-menu" >
                                  <a class="dropdown-item" href="index.html" >หน้าเเรก</a>
                                </div>
                            </li>

                             
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                XXXXXXXXX
                                </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="about.html">XXXXXXX</a>
                                  <a class="dropdown-item" href="terms.html">XXXXXXX</a>
                                  <a class="dropdown-item" href="privacy.html">XXXXX</a>
                                  <a class="dropdown-item" href="privacy.html">XXXXXX</a>
                                </div>
                            </li>
                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               XXXXXX
                                </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="404.html">XXXXX</a>
                                  <a class="dropdown-item" href="search.html">XXXXXXXX</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Account ผู้เข้าใช้
                                </a>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="{{route('login')}}">Log In เข้าสู่ระบบ</a>
                                  <a class="dropdown-item" href="{{route('register')}}">Register ลงทะเบียน</a>
                                </div>
                            </li>
                        </ul>
                        <div class="nav-search ml-auto d-none d-lg-block">
                            <span id="search">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
    <form class="site-search" method="get">
        <input type="text" id="searchInput" name="site_search" placeholder="Enter Keyword Here..." autofocus="">
        <div class="search-close">
            <span class="close-search">
                <i class="fa fa-times"></i>
            </span>
        </div>
    </form>
</div>






<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="{{Asset('Asset/frontend/plugins/jquery/jquery.js')}}"></script>
<!-- Bootstrap jQuery -->
<script src="{{Asset('Asset/frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Slick Slider -->
<script src="{{Asset('Asset/frontend/plugins/slick-carousel/slick.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{Asset('Asset/frontend/plugins/google-map/gmap.js')}}"></script>
<!-- main js -->
<script src="{{Asset('Asset/frontend/js/custom.js')}}"></script>

</body>
</html>