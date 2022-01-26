@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/add.css') }}">

@section('content')
<div class="bg"><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Vehicle') }}</div>

                    <div class="card-body">
                        <form action="/addvehicle" method="POST">
                            @csrf
                            <label for="name">Plate Number : </label><br>
                            <input type="text" placeholder="Plate number" name="plate"><br><br>
                            <label for="name">Vehicle Type : </label><br>
                            <label for="name"></label>
                            <select name="type" id="">
                                <option value="Car">Car</option>
                                <option value="Motorcycle">Motorcycle</option>
                                <option value="Van">Van</option>
                            </select><br><br>
                            <label for="name">Vehicle Model : </label><br>
                            <input type="text" placeholder="Vehicle model" name="model"><br><br>
                            <input type="submit">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div><br>
</div>
@endsection
