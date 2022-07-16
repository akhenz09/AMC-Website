@extends('templates.master')
@section('contents')
<form method="post" action="process-card-payment" class="w-96 mx-auto flex flex-col py-12 gap-y-2">
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

    <button class="bg-blue-500 text-white rounded-xl mt-2 p-2">Pay Now</button>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</form>
@endsection
