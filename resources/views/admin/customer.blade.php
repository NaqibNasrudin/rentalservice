@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/customer.css') }}">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Customer Detail') }}</div>

                <div class="card-body"><br>
                    @foreach ($customers as $customer)
                    <tr>
                        <td>First name : {{ $customer->cust_fname }}</td><br>
                        <td>Last Name :{{ $customer->cust_lname }}</td><br>
                        <td>Email : {{ $customer->cust_email }}</td><br>
                        <td>Phone Number : {{ $customer->cust_phoneno }}</td><br>
                        <td>Date Pickup : {{ $customer->date_start}}</td><br>
                        <td>Date Return : {{ $customer->date_return }}</td><br>
                    </tr><br>
                    @endforeach
                    <button><a href="{{ url('delete/'.$customer->cust_id ) }}">Delete Customer</a></button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
