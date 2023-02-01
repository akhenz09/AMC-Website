@extends('Style')
@section('style')

<body>

    <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
        <img src="img/logo.svg" class="logo" href="home">
        <a class="navbar-brand px-2 py-0 " href="home">AMC PODCLASS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link m-2 text-capitalize" href="home">Home</a>
                </li>
                <div class="nav-item dropdown">
                  <a class="nav-link m-2 text-capitalize dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
                    About
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="welcome">Welcome</a>
                    <!--a class="dropdown-item" href="News & Announcement">News & Announcement</a>-->
                    <a class="dropdown-item" href="Mission">Mission</a>
                    <a class="dropdown-item" href="Vision">Vision</a>
                    <a class="dropdown-item" href="Our Team">Our Team</a>

                  </div>
                </div>

                <li class="nav-item">
                    <a class="nav-link m-2 text-capitalize" href="Programs">Programs</a>
                </li>
                <!--li class="nav-item">
                    <a class="nav-link m-2 text-capitalize" href="Programs Features">Program Features</a>
                </li>-->
                <li class="nav-item">
                  <a class="nav-link m-2 text-capitalize" href="subscribe">Enroll now</a>
              </li>
              <!--li class="nav-item">
                <a class="nav-link m-2 text-capitalize" href="login">Login</a>
            </li>-->


                </li>
            </ul>
        </div>

    </nav>





@yield('content')

<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/plereap" role="button"
        ><i class="fa fa-facebook"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/ple_reap" role="button"
        ><i class="fa fa-twitter"></i
      ></a>

      <!-- Google -->
      <!--a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-google"></i
      ></a>-->

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com/ple_reap_medicine" role="button"
        ><i class="fa fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <!--a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-linkedin-in"></i
      ></a>-->

      <!-- Github -->
      <!--a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-github"></i
      ></a>
    </section>-->
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Contact Us</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">

    </section>

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://www.facebook.com/plereap">AMC</a>
  </div>

  </footer>
<!-- Footerend -->

</body>
</html>
