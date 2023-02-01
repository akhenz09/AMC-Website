@extends('templates.master')
@section('contents')

<!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="container d-flex align-items-center justify-content-center text-right h-100">
<!-- Login Form -->
<section>
<div class="container p-5 my-5 border col-md-3">
	<form action="{{ route('userAuth') }}" method="post" accept-charset="utf-8">
		@csrf
		<h1 class="text-info" style="text-align:center;">Login</h1>
		<div>
			<label class="col-md-12 text-muted" style="padding: 10px;padding-left: 0px;">Username</label>
			<input class="col-md-12 form-control"  type="Username" name="txtUsername" required="">
			<label class="col-md-12 text-muted" style="padding: 10px;padding-left:0px;">Password</label>
			<input class="col-md-12 form-control"  type="Password" name="txtPassword" required="">
			<div style="text-align:center;padding: 10px;padding-right: 0px;">
				<input class="btn btn-info" type="submit" name="btnLogin" value="Login">
			</div>
	<div class="text-white">
</div>
</div>
</form>
</div>
</section>

<!-- Signup Form -->
<section>
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
	</div>
	</form>
</div>
		</div>
	</div>
</section>

@endsection
