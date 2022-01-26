@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

@section('content')
<div class="bg">

    <h2>RENTAL SERVICE</h2>
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
    <div class="vehicle-type">
        <div class="car">
            <button><a href="/car">CAR</a></button>
        </div>
        <div class="motor">
            <button><a href="/motor">MOTORCYCLE</a></button>
        </div>
        <div class="van">
            <button><a href="/van">VAN</a></button>
        </div>
    </div>
<br>
<br>
<div class="gallery">
    <a target="_blank" href="img_new.jpg">
        <img src="{{URL::asset('/image/new.png')}}" width="600" height="400">
    </a>
</div>
<div class="weather-card">
    <div id="openweathermap-widget-11"></div>
    <script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script>
    <script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 11,cityid: '1763070',appid: 'e275ab309bd1d35b3a17022e298ae453',units: 'metric',containerid: 'openweathermap-widget-11',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>
</div>
</div>
@endsection
