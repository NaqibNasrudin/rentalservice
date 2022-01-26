@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/car.css') }}">

@section('content')
<div class="bg"><br>
@if (Route::has('login'))
    <div class="content">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
@endif
<div class="show_vehicle">
        @foreach ($vehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->plate_number }}</td>
            <td>{{ $vehicle->vehicle_type }}</td>
            <td>{{ $vehicle->vehicle_model }}</td>
        </tr><br>
        <button class="vehicle"><a href="{{ url('booking/'.$vehicle->vehicle_id ) }}">Book Vehicle</a></button>
        <button><a href="{{ url('owner/'.$vehicle->vehicle_id ) }}">Owner Detail</a></button>
        <br>
    @endforeach
</div>
</div>
@endsection
