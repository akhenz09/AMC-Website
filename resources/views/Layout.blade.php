@extends('Style')
@section('style')



<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
    <div class="container">
      <a class="navbar-brand" href="#!"><span style="color: #b85217;">A</span><span style="color: #fff;">MC</span></a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="#!">Home</a>
          </li>
          <li class="dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">About</a>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Welcome</a></li>
              <li><a href="#">News & Announcement</a></li>
              <li><a href="#">Mission</a></li>
              <li><a href="#">Vision</a></li>
              <li><a href="#">Our Team</a></li>
              <li><a href="#">Reviews & Testimonials</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Programs Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Programs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Subscribe now</a>
          </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row">
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="https://www.facebook.com/plereap">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="https://twitter.com/ple_reap">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="https://instagram.com/ple_reap_medicine">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

@yield('content')


</html>
