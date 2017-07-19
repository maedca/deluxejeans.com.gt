<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>DELUXE | Deluxe Jeans</title>

    <meta name="description" content="Deluxe es una marca colombiana, que se caracteriza por exaltar la belleza y la sensualidad de las mujeres en todas sus colecciones">
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" />
    <link rel="apple-touch-icon" href="{{asset('img/favicon.png')}}" />

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon.css')}}" rel="stylesheet">
    <link href="{{asset('css/themes/default/default.css')}}" rel="stylesheet">
    <link href="{{asset('css/themes/dark/dark.css')}}" rel="stylesheet">
    <link href="{{asset('css/nivo-slider.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    @yield('styles')
    @yield('scripts')
<body>
    @include('layout.partials.nav')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    @include('flash::message')
    </div>
</div>
    @yield('content')
    @include('layout.partials.footer')