<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Bootstrap -->




    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('js/main.js') }}"></script>
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="{{ url('css/landingpage.css') }}">
    <link rel="stylesheet" href="{{ url('css/ourteam.css') }}">
    <link rel="stylesheet" href="{{ url('css/subscribe.css') }}">
    <link rel="stylesheet" href="{{ url('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ url('css/programs.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js" integrity="sha512-+/4Q+xH9jXbMNJzNt2eMrYv/Zs2rzr4Bu2thfvzlshZBvH1g+VGP55W8b6xfku0c0KknE7qlbBPhDPrHFbgK4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>AMC</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">








    @vite('resources/js/app.js')
    </head>
    <body>


{{-- Main Navigation --}}
<header>
<section>
    <div class="container-nav">
<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
<img src="img/logo.png" class="logo" href="home">
<a class="navbar-brand px-2 py-9 " href="home">AMC PODCLASS</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    <div class="bar4"></div>
</button>

<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item">
            <a class="nav-link m-2 text-capitalize" href="Programs Features item">Programs Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link m-2 text-capitalize" href="Programs item">Programs</a>
      </li>
          @if(session()->has('user'))
          <li class="nav-item">
            <a class="nav-link m-2 text-capitalize" href="{{ route('items') }}">Enrolee's</a>
        </li>
        <li class="nav-item">
          <a class="nav-link m-2 text-capitalize" href="logout">Logout</a>
      </li>
          @else
          <li class="nav-item">
            <a class="nav-link m-2 text-capitalize" href="Signup">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link m-2 text-capitalize" href="{{ route('login') }}">Login</a>
      </li>
          @endif
        </ul>
      </div>
    </nav>

</div>
</section>
</header>
{{-- //: Main Navigation --}}

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
    $(document).ready(function(){
    $("#team-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
</script>


<script>
    $(document).ready(function(){
$('.counter-value').each(function(){
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    },{
        duration: 3500,
        easing: 'swing',
        step: function (now){
            $(this).text(Math.ceil(now));
        }
    });
});
});
  </script>

<script>
    $(document).ready(function(){
$('.counter-valuepercent').each(function(){
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    },{
        duration: 3500,
        easing: 'swing',
        step: function (now){
            $(this).text(Math.ceil(now));
        }
    });
});
});
  </script>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>


@yield('contentitem')



<!-- Footer -->
    <section class="footer">
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/plereap" role="button"
          ><i class="fa-brands fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/ple_reap_main" role="button"
          ><i class="fa-brands fa-twitter"></i></a>

        <!-- Google -->
        <!--a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-google"></i
        ></a>-->

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com/ple_reap_medicine" role="button"
          ><i class="fa-brands fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/amc-podclass-by-ple-reap-279717245/" role="button"
          ><i class="fa-brands fa-linkedin-in"></i
        ></a>

        <!-- Github -->
        <!--a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fa fa-github"></i
        ></a>
      </section>-->
      <!-- Section: Social media -->

       <!-- Section: Form -->




        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
              <p class="pt-2">
                <strong>EMAIL US: contactus@ple-reap.com</strong>
              </p>
              <p class="pt-2">
              <strong>MOBILE: 09171496445</strong>
            </p>
            </div>
            <!--Grid column-->

      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
              <!--p class="pt-2">
                <strong>Contact Us</strong>
              </p>-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <!--div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" />
                <label class="form-label" for="form5Example21">Email address</label>
              </div>
            </div>-->
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <!--button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>-->
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
      <a class="text-white" href="https://www.facebook.com/plereap">AMC PODCLASS</a>
    </div>

    </footer>
  <!-- Footerend -->

    </section>
<!-- Footerend -->


</body>
</html>






