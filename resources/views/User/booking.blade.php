@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/booking.css') }}">

@section('content')
<div class="bg"><br>
    <h3>BOOKING FORM</h3>
    <div class="booking_detail">
        <form action="/confirm" method="POST">
            @csrf
            <input type="hidden" value="{{ $vehicles->vehicle_id }}" name="id">
            <label for="name">First Name : </label><br>
            <input type="text" placeholder="First name" name="fname"><br><br>
            <label for="name">Last Name : </label><br>
            <input type="text" placeholder="Last name" name="lname"><br><br>
            <label for="name">Email : </label><br>
            <input type="text" placeholder="Email" name="email"><br><br>
            <label for="name">Phone Number : </label><br>
            <input type="text" placeholder="Phone number" name="number"><br><br>
            <label for="name">Date Pickup : </label><br>
            <input type="date" placeholder="Date Pickup" name="pick"><br><br>
            <label for="name">Date Return : </label><br>
            <input type="date" placeholder="Date return" name="return"><br><br>
            <input type="submit">
        </form>
    </div><br>
</div>
@endsection
