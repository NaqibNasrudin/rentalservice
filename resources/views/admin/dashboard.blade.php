@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

@section('content')
<div class="bg"><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3>Add Vehicle</h3>
                        <br>
                        <tr>
                            <td><b>First name :</b> {{ $owners->f_name }}</td><br>
                            <td><b>Last name : </b>{{ $owners->l_name }}</td><br>
                            <td><b>Phone number : </b>{{ $owners->phone_number}}</td>
                        </tr>
                        <br><br>
                        @foreach ($vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->plate_number }}</td>
                                <td>{{ $vehicle->vehicle_type }}</td>
                                <td>{{ $vehicle->vehicle_model }}</td>
                            </tr>
                            <br>
                            <button><a href="{{ url('edit/'.$vehicle->vehicle_id ) }}">Edit Vehicle</a></button><br>
                            <button><a href="{{ url('view/'.$vehicle->vehicle_id ) }}">View Detail</a></button><br>
                        @endforeach

                        <br><br>
                        <button><a href="/add">Add</a></button>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
</div>
@endsection