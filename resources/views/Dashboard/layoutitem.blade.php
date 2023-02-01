@extends('Style')
@section('style')

<!-- Body -->
<body>
  <nav id="navbar" class="navbar navbar-expand-sm sticky-top">
    <img src="img/logo.svg" class="logo" href="Dashboard">
    <a class="navbar-brand px-2 py-0 " href="Dashboard">AMC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
    </button>


    <ul class="nav justify-content-end">
    <div class="collapse navbar-collapse" id="mynavbar">
<!-- NavBar DropDown -->
      <ul class="navbar-nav me-auto">
        <!--li class="nav-item">
          <a class="nav-link" href="/Home">Home</a>
        </li>
        <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="/Home" role="button" data-bs-toggle="dropdown">About</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="/Welcome">Welcome</a></li>
    <li><a class="dropdown-item" href="/News & Announcement">News & Announcement</a></li>
    <li><a class="dropdown-item" href="/Mission">Mission</a></li>
    <li><a class="dropdown-item" href="/Vision">Vision</a></li>
    <li><a class="dropdown-item" href="/Our Team">Our Team</a></li>
    <li><a class="dropdown-item" href="/Reviews & Testimonials">Reviews & Testimonials</a></li>
  </ul>
  </li>-->
<!-- NavBar -->
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

@yield('contentitem')

</body>
</html>
