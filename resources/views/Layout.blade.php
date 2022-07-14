@extends('Style')
@section('style')

<nav id="navbar" class="navbar navbar-expand-lg sticky-top">
  <img src="img/logo.svg" class="logo">
  <a class="navbar-brand px-2 py-0 " href="#">AMC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
  </button>
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-nav mx-auto">
          <li class="nav-item">
              <a class="nav-link m-2 text-capitalize" href="/">Home</a>
          </li>
          <div class="dropdown">
            <a class="nav-link m-2 text-capitalize dropdown-toggle" data-toggle="dropdown">
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
            <a class="nav-link m-2 text-capitalize" href="Subscribe Now">Subscribe now</a>
        </li>

          </li>
      </ul>
  </div>
</nav>

    


@yield('content')


</html>
