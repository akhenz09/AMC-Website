@extends('templates.master')
@section('contents')

<!-- Page Header Start -->
<!-- Carousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/Podclass.png" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/Masterclass.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/Activerecall.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/Onthego.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
         <img src="img/Powermock.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/c1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="img/c2.jpg" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- Page Header End -->
<h3 class="paymentcreditlHeading">Credit Card Payment</h3>
<section class="paymentcolumn">
<section class="payment">
<form method="post" action="process-card-payment" class="w-96                                                                                                                                    mx-auto flex flex-col py-12 gap-y-2">
    @csrf
    <input type="hidden" name="amount" value="{{ request('amount') }}">
    <input type="hidden" name="product" value="{{ request('product') }}">

    <div class="flex flex-col">
        <label for="fullname">Your name</label>
        <input type="text" id="fullname" name="fullname" class="w-full rounded-md border border-gray-200 p-2">
    </div>
    <div class="flex flex-col">
        <label for="email">Your Email</label>
        <input type="text" id="email" name="email" class="w-full rounded-md border border-gray-200 p-2">
    </div>
    <div class="flex flex-col">
        <label for="phone">Your Phone</label>
        <input type="text" id="phone" name="phone" class="w-full rounded-md border border-gray-200 p-2">
    </div>

    <div class="flex flex-col">
        <label for="card_number">Card Number</label>
        <input type="text" id="card_number" name="card_number" class="w-full rounded-md border border-gray-200 p-2">
    </div>

    <div class="flex gap-x-2">
        <div class="flex flex-col w-3/4">
            <label for="card_exp_month">Expiry Date</label>
            <div class="flex gap-x-2">
                <div>
                    <input type="text" id="card_exp_month" name="card_exp_month" placeholder="MM" class="w-full rounded-md border border-gray-200 p-2">
                </div>
                <div>
                    <input type="text" id="card_exp_year" name="card_exp_year" placeholder="YY" class="w-full rounded-md border border-gray-200 p-2">
                </div>
            </div>
        </div>

        <div class="flex flex-col w-1/4">
            <label for="ccv">CCV</label>
            <div class="flex gap-x-2">
                <div>
                    <input type="text" id="ccv" name="cvc" class="w-full rounded-md border border-gray-200 p-2">
                </div>
            </div>
        </div>

    </div>
    <div><p>Credit/Debit Card Payments include a 4% service fee.</p></div>

    <button class="bg-blue-500 text-white rounded-xl mt-2 p-2">Pay Now</button>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</form>
        </div></div>

</section>
<h3 class="paymentqrHeading">Money Transfer</h3>
</section>
<section class="qr">
<center><img src="img/qrpayment.jpg" class="img-fluid" alt="qr"></center>
</section>
@endsection
