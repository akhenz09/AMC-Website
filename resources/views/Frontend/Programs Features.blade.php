@extends('templates.master')
@section('contents')

  <!-- Page Header Start -->
<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container-fluid text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Programs Features</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-black" href="/">Home</a></li>
                <li class="breadcrumb-item"><a class="text-black" href="/">Programs</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Programs Features</li>
                <li class="breadcrumb-item"><a class="text-black" href="subscribe">Enroll now</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="row">
    <div class="column testing1">
      <h2>Column1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
    </div>

    <div class="column">
      <h2>Column2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
    </div>
</div>

@endsection
