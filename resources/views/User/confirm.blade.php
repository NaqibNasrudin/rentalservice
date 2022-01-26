@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">

@section('content')
<div class="bg"><br>
    <div class="container">
        <div class="content">
        <h1>Booking successful !</h1>
        {{ $customer->cust_fname }} 
        {{ $customer->cust_lname }} <br>
        {{ $customer->cust_phoneno }} <br>
        {{ $customer->date_start }} <br>
        {{ $customer->date_return }} <br>
        {{ $vehicles->plate_number }} <br>
        {{ $vehicles->vehicle_type }} <br>
        {{ $vehicles->vehicle_model }} <br>
        <button class="button"><a href="/">CONFIRM</a></button>
        </div>
    </div><br>
</div>
@endsection

