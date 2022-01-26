@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/detail.css') }}">

@section('content')
<div class="bg"><br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Details') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1 style="text-align: center">Welcome</h1>
                        <h2>Please fill your detail</h2><br>
                        <form action="/insertdetail" method="POST">
                            @csrf
                            <label for="name">First Name : </label><br>
                            <input type="text" placeholder="fname" name="fname"><br>
                            <label for="name">Last Name : </label><br>
                            <input type="text" placeholder="lname" name="lname"><br>
                            <label for="name">Phone Number : </label><br>
                            <input type="text" placeholder="Phone number" name="number"><br><br>
                            <input type="submit">
                        </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
</div>
@endsection
