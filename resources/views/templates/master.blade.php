<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMC</title>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- BS4 -->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- BS4 end -->

    <style>
        /* Make the image fully responsive */

        /* Page Header */
        .page-header {
            margin-top: 3rem;
            margin-bottom: 6rem;
            background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(../img/1.png) center center no-repeat;
            background-size: cover;
        }

        /* Page Header End */

        /* NavBar */
        .navbar {
            background: #242424b0;

        }

        .navbar-background {
            padding: 2px 20px;
        }

        .navbar-brand {
            color: #eaf0ee;
            border: 3px solid #f50e0681;
            font-size: 30px;
        }

        .navbar-brand:hover {
            background: #ff5f5793;
            color: #242424;
        }

        .navbar-toggler {
            border: 3px solid #ff5f579c;
            padding: 3px;

        }

        .logo {
            width: 80px;
            cursor: pointer;
            padding-right: 10px;
        }

        .bar1,
        .bar2,
        .bar3 {
            width: 23px;
            height: 3px;
            margin: 5px;
            background: #ff5e57;
        }

        .change .bar1 {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .change .bar2 {
            opacity: 0;
        }

        .change .bar3 {
            transform: rotate(45deg) translate(-5px, -8px);
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            background: #ff5e57;
            color: #fff;
        }

        .dropdown-item {
            color: #fff;
        }

        .nav-link {
            color: #f1fffa;
            font-size: 25px;
            padding: 10px 20px !important;
            border-radius: 5px;
        }

        .nav-link:hover {
            background: #ff5e57;
            color: #f1fffa;

        }

        .nav-active:hover {
            background: #ff5e57;
        }



        /* NavBar End */

        /* Carousel */
        .carousel-inner img {
            width: 100%;
            height: 100%;

        }


        /* HomePage Carousel */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;
        }

        .carousel-item:nth-child(1) {
            background-image: url('/img/1.svg');
            object-fit: cover;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;

        }

        .carousel-item:nth-child(2) {
            background-image: url('/img/2.svg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(3) {
            background-image: url('/img/3.svg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(4) {
            background-image: url('/img/4.svg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(5) {
            background-image: url('/img/5.svg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }


        /* Carousel */

        /* Fact Counter CSS */
        .counter {
            color: #eaa636;
            font-family: 'Open Sans', sans-serif;
            text-align: center;
            height: 190px;
            width: 190px;
            padding: 30px 25px 25px;
            margin: 0 auto;
            margin-top: 30%;
            margin-bottom: 100%;
            border: 3px solid #eaa636;
            border-radius: 20px 20px;
            position: relative;
            z-index: 1;
        }

        .counter:before,
        .counter:after {
            content: "";
            background: #f3f3f3;
            border-radius: 20px;
            box-shadow: 4px 4px 2px rgba(0, 0, 0, 0.2);
            position: absolute;
            left: 15px;
            top: 15px;
            bottom: 15px;
            right: 15px;
            z-index: -1;
        }

        .counter:after {
            background: transparent;
            width: 100px;
            height: 100px;
            border: 15px solid #eaa636;
            border-top: none;
            border-right: none;
            border-radius: 0 0 0 20px;
            box-shadow: none;
            top: auto;
            left: -10px;
            bottom: -10px;
            right: auto;
        }

        .counter .counter-icon {
            font-size: 35px;
            line-height: 35px;
            margin: 0 0 15px;
            transition: all 0.3s ease 0s;
        }

        .counter:hover .counter-icon {
            transform: rotateY(360deg);
        }

        .counter .counter-value {
            color: #555;
            font-size: 30px;
            font-weight: 600;
            line-height: 20px;
            margin: 0 0 5px;
            display: block;
            transition: all 0.3s ease 0s;
        }

        .counter:hover .counter-value {
            text-shadow: 2px 2px 0 #d1d8e0;
        }

        .counter h3 {
            font-size: 17px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0 0 15px;
        }

        .counter.blue {
            color: #4accdb;
            border-color: #4accdb;
        }

        .counter.blue:after {
            border-bottom-color: #4accdb;
            border-left-color: #4accdb;
        }

        @media screen and (max-width:990px) {
            .counter {
                margin-bottom: 50px;
                margin-top: 10px;
            }

        }


        /* Fact Counter END CSS*/

        /* About CSS*/
        /*** About ***/
        .img-twice::before {
            position: absolute;
            content: "";
            width: 60%;
            height: 80%;
            top: 10%;
            left: 20%;
            background: var(--primary);
            border: 25px solid var(--light);
            border-radius: 6px;
            z-index: -1;
        }

        .about {
            margin-bottom: 10%;

        }

        .img-7 {
            position: relative;
        }

        /* About CSS end*/

        /*** Product CSS ***/
        .product-item {
            transition: .5s;
        }

        .product-item:hover {
            background: var(--primary) !important;
        }

        .product-item:hover * {
            color: var(--light);
        }

        .product-item:hover .border-primary {
            border-color: var(--light) !important;
        }

        .product-item .product-overlay {
            position: absolute;
            width: 100%;
            height: 0;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, .5);
            overflow: hidden;
            opacity: 0;
            transition: .5s;
        }

        .product-item:hover .product-overlay {
            height: 100%;
            opacity: 1;
        }

        /*** Product END CSS ***/
    </style>

    @vite('resources/js/app.js')
</head>
<body>
    {{-- Main Navigation --}}
    <nav id="navbar" class="navbar navbar-expand-lg sticky-top">
        <img src="img/logo.svg" class="logo">
        <a class="navbar-brand px-2 py-0 " href="#">AMC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link m-2 text-capitalize" href="/">Home</a>
                </li>
                <div class="nav-item dropdown">
                  <a class="nav-link m-2 text-capitalize dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    About
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="welcome">Welcome</a>
                    <a class="dropdown-item" href="News & Announcement">News & Announcement</a>
                    <a class="dropdown-item" href="Mission">Mission</a>
                    <a class="dropdown-item" href="Vision">Vision</a>
                    <a class="dropdown-item" href="Our Team">Our Team</a>

                  </div>
                </div>

                <li class="nav-item">
                    <a class="nav-link m-2 text-capitalize" href="Programs">Programs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2 text-capitalize" href="Programs Features">Program Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link m-2 text-capitalize" href="subscribe">Subscribe now</a>
              </li>

                </li>
            </ul>
        </div>
    </nav>
    {{-- //: Main Navigation --}}

    @yield('contents')
</body>
</html>
