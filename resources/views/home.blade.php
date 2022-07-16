@extends('templates.master')
@section('contents')
    {{-- <body> --}}
        <!-- Carousel -->
        <div id="demo" class="carousel slide carousel-fade shadow-2-strong" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
            </div>
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active" loading="lazy">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item" loading="lazy">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item" loading="lazy">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item" loading="lazy">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item" loading="lazy">
                    <div class="mask"
                        style="
                    background: linear-gradient(
                      45deg,
                      rgba(29, 236, 197, 0.7),
                      rgba(91, 14, 214, 0.7) 100%
                    );
                  ">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Carousel Controls-->
            <a class="carousel-control-prev ccontrols" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <!-- Carousel End -->

        <!-- Facts -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="counter">
                        <div class="counter-icon">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        </div>
                        <span class="counter-value">380</span>
                        <h6>Passing Rate</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="counter blue">
                        <div class="counter-icon">
                            <i class="fa fa-flag" aria-hidden="true"></i>
                        </div>
                        <span class="counter-value">359</span>
                        <h6>Nationalities Represented</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="counter blue">
                        <div class="counter-icon">
                            <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        </div>
                        <span class="counter-value">359</span>
                        <h6>Specialty</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="counter blue">
                        <div class="counter-icon">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                        </div>
                        <span class="counter-value">359</span>
                        <h6>Average Work Experience</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="counter blue">
                        <div class="counter-icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <span class="counter-value">359</span>
                        <h6>Avarage Age</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        <!-- About-->
        <div class="container-xxl about">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6" data-aos="fade-down-left" data-aos-once="true">
                        <div class="row img-twice position-relative h-100">
                            <div class="col-6">
                                <img class="img-fluid rounded img-7 mx-auto d-block" src="img/2.svg" alt=""
                                    loading="lazy">
                            </div>
                            <div class="col-6 align-self-end">
                                <img class="img-fluid rounded img-7 mx-auto d-block" src="img/1.svg" alt=""
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-down-right" data-aos-once="true">
                        <p class="text-primary text-uppercase mb-2">// About Us</p>
                        <h1 class="display-6 mb-4">AMC PROGRAMS</h1>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                            erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                            erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Quality Lectures
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Bundle Programs
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Online Subscription
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Alpha - Omega
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="Programs">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About end-->

        <!-- Programs-->
        <!-- Programs Sub-->
        <div class="container-xxl pt-0">
            <div class="container">
                <!-- Programs Sub Cat-->
                <div class="text-center mx-auto mb-5" data-aos="fade-up" style="max-width: 500px;">
                    <p class="text-primary text-uppercase mb-2"></p>
                    <h1 class="display-6 mb-4">Explore The Categories Of Our Courses</h1>
                </div>
                <!-- Programs/Product Item-->
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                            <div class="text-center p-4">
                                <div class="d-inline-block border border-primary rounded-pill px-3 mb-3"> ₱42500</div>
                                <h3 class="mb-3">Podclass</h3>
                                <span>All-inclusive bridging program</span>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="img/1.svg" alt="" loading="lazy">
                                <div class="product-overlay">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                            class="fa fa-eye text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                            <div class="text-center p-4">
                                <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">₱11999</div>
                                <h3 class="mb-3">Masterclass</h3>
                                <span>Intensive MCQ-Heavy crash course</span>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="img/2.svg" alt="" loading="lazy">
                                <div class="product-overlay">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                            class="fa fa-eye text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                            <div class="text-center p-4">
                                <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">₱11999</div>
                                <h4 class="mb-3">Active recall</h4>
                                <span>Evidence Based Study Techniques for Knowledge Reinforcement</span>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="img/3.svg" alt="" loading="lazy">
                                <div class="product-overlay">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                            class="fa fa-eye text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Programs End-->

        <!-- Team Start -->
<div class="container-xxl team">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">// Our Team</p>
            <h1 class="display-6 mb-4">We're Super Professional At Our Skills</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <img class="img-fluid" src="img/Team.jpg" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center rounded overflow-hidden">
                    <img class="img-fluid" src="img/Team.jpg" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center rounded overflow-hidden">
                    <img class="img-fluid" src="img/Team.jpg" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item text-center rounded overflow-hidden">
                    <img class="img-fluid" src="img/Team.jpg" alt="">
                    <div class="team-text">
                        <div class="team-title">
                            <h5>Full Name</h5>
                            <span>Designation</span>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-square btn-light rounded-circle" href=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


    {{-- </body> --}}

    {{-- </html> --}}
@endsection
