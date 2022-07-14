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
              <a class="nav-link m-2 text-capitalize nav-active" href="#header">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link m-2 text-capitalize" href="#skills">About</a>
          </li>

          <li class="nav-item">
              <a class="nav-link m-2 text-capitalize" href="#about">Program</a>
          </li>
          <li class="nav-item">
              <a class="nav-link m-2 text-capitalize" href="#projects">Program Feature</a>
          </li>
          <li class="nav-item">
              <a class="nav-link m-2 text-capitalize" href="#posts">Subscribe now</a>
          </li>

          </li>
      </ul>
  </div>
</nav>

    


@yield('content')


</html>
