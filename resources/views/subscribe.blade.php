@extends('templates.master')
@section('contents')
    <div class="container mx-auto my-12 flex flex-col gap-6 lg:flex-row">
        <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
            <h2 class="text-center text-2xl font-bold">Podclass</h2>
            <a href="payment?amount=10000&product=podclass" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Purchase</a>
        </div>
        <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
            <h2 class="text-center text-2xl font-bold">Master Class</h2>
            <a href="payment?amount=10000&product=Master Class" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Purchase</a>
        </div>
        <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
            <h2 class="text-center text-2xl font-bold">Active Recall</h2>
            <a href="payment?amount=10000&product=Active Recall" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Purchase</a>
        </div>
        <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
            <h2 class="text-center text-2xl font-bold">On the Go</h2>
            <a href="payment?amount=10000&product=On the Go" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Purchase</a>
        </div>
        <div class="flex flex-col gap-y-4 flex-1 bg-gray-100 text-center p-6 rounded-xl shadow-lg">
            <h2 class="text-center text-2xl font-bold">QBank</h2>
            <a href="payment?amount=10000&product=QBank" class="text-center p-2 bg-blue-500 text-white rounded-xl transition duration-300 ease-in-out hover:bg-blue-600 hover:no-underline">Purchase</a>
        </div>
    </div>
@endsection
