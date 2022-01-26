@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/owner.css') }}">

@section('content')
<div class="bg"><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Owner Details') }}</div>

                    <div class="card-body">
                        @foreach ($owners as $owner)
                            <tr>
                                <td><b>First name :</b> {{ $owner->f_name }}</td>
                                <td><b>Last name : </b>{{ $owner->l_name }}</td>
                                <td><b>Phone number : </b>{{ $owner->phone_number}}</td>
                            </tr>
                        @endforeach
                        <br><button><a href="/">Go back</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
</div>
@endsection
