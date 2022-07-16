@extends('templates.master')
@section('contents')

<!-- Page Header Start -->
<div class="container page-header">
  <div class="container text-center pt-5 pb-3">
      <h1 class="display-4 text-white">Programs</h1>
      <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
              <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
          </ol>
      </nav>
  </div>
</div>
<!-- Page Header End -->

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
                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
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
                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
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
                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
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
                        <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
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
                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
<!-- Programs End-->

@endsection
