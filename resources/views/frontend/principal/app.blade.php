<!DOCTYPE html>
<html lang="en">
<head>
    <title>Estacion 22</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <link href="{{ asset('css/sicajan/sicajan.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    @yield('after_styles_end')
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
@include('frontend.principal.nav')
@yield('content')
@include('frontend.principal.footer')
<script type="text/javascript" src="{{ asset('js/sicajan/sicajan.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
@yield('after_scripts_end')
</body>
</html>
