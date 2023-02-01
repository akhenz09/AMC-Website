@extends('templates.master')
@section('contents')

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container-fluid text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Programs</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-black" href="/">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Programs</li>
                <li class="breadcrumb-item"><a class="text-black" href="Programs">Programs Features</a></li>
                <li class="breadcrumb-item"><a class="text-black" href="subscribe">Enroll now</a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

 <!-- Signup Form -->
	<div class="container p-5 my-5 border col-md-3 d-flex">
	<form action="{{ route('saveRegistration')}}" method="post" accept-charset="utf-8">
	@csrf
	<h1 class="text-info" style="text-align:center;">Sign Up</h1>
	<label class="col-md-12 text-muted">First Name</label>
	<input class="col-md-12 form-control" type="text" name="txtFname">
	<label class="col-md-12 text-muted">Surname</label>
	<input class="col-md-12 form-control" type="text" name="txtSname">
	<label class="col-md-12 text-muted">Email</label>
	<input class="col-md-12 form-control" type="Email" name="txtEmail">
	<label class="col-md-12 text-muted">Username</label>
	<input class="col-md-12 form-control" type="Username" name="txtUsername">
	<label class="col-md-12 text-muted">Password</label>
	<input class="col-md-12 form-control" type="Password" name="txtPassword">
	<div class="col-md-12" style="text-align: center;padding: 20px;padding-right: 0px;">
	<button class="btn btn-info" type="submit">Register</button>
<!-- Signup Form end -->
          <div class="text-white">
</div>
</div>
</form>
</div>
</div>
</div>



<!-- Background image end -->

@endsection
