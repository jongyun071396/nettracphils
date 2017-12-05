<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <title>NetTracPhils</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://expansionscollective.com/testscripts/jquery.fullPage.js"></script>

    {{-- GOOGLE FONTS --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> {{-- FONT AWESOME --}}
    <link rel="stylesheet" type="text/css" href="{{ url('fa/css/font-awesome.min.css') }}"> {{-- ANIMATE CSS --}}
    <link rel="stylesheet" href="{{ url('css/animate.css') }}"> {{-- STYLESHEET --}}
    <link rel="stylesheet" href="{{ url('css/style.css') }}"> {{-- FULLPAGE CSS--}}
    @yield('custom-css') @yield('map') @yield('footer')
    {{-- ReCAPTCHA --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
@include('layouts.header')
@yield('body')
@include('layouts.footer')
@yield('custom-js')
</body>
</html>