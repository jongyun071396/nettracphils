     <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
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
    <link rel="stylesheet" type="text/css" href="jquery.fullPage.css" /> @yield('custom-css') @yield('map') @yield('footer')
    {{-- ReCAPTCHA --}}
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    {{-- header --}}
<nav class="navbar navbar-default" style="height:50px; background-attachment: fixed; ">
    <div class="container-fluid">     
        <div class="navbar-header">
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ url('img/logo.png') }}"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="border: none;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             </div>
             <div class="collapse navbar-collapse k align-middle">
            <ul class="nav navbar-nav" id="menu-header">
                <li class="{{ request()->segment(1) == '' ? 'active' : '' }}"><a href="{{ url('/') }}" class="sliding-middle-out">Home</a></li>
                <li class="{{ request()->segment(1) == 'about' ? 'active' : '' }}"><a href="{{ url('about') }}" class="sliding-middle-out">About Us</a></li>
                <li class="{{ request()->segment(1) == 'support' ? 'active' : '' }}"><a href="{{ url('support') }}" class="sliding-middle-out">Support</a></li>
                <li class="{{ request()->segment(1) == 'contact-us' ? 'active' : '' }}"><a href="{{ url('contact-us') }}" class="sliding-middle-out">Contact Us</a></li>
                <li class="{{ request()->segment(1) == 'payroll' ? 'active' : '' }}"><a href="{{ url('payroll') }}" class="sliding-middle-out">Payroll System</a></li>
                <li class="{{ request()->segment(1) == 'control-panel' ? 'active' : '' }}"><a href="{{ url('control-panel') }}" class="sliding-middle-out">Control Panel</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('body')
<footer>
                {{-- DESKTOP --}}
<div class="visible-md visible-lg">
    <div class="footer">
        <hr>
        <div class="pull-left ft">
            <a href="{{ url('/') }}"><img id="footer-logo" src="../img/footer.png"></a>
            <span id="footer-nci">© 2017 NetTrac Philippines Inc. A Canadian company serving the world.</span>
        </div>
        <ul class="nav navbar-nav pull-right" id="menu-footer">
            <li class=" inline-menus {{ request()->segment(1) == 'privacy' ? 'active' : '' }}"><a href="{{ url('privacy') }}">Privacy</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'terms-of-service' ? 'active' : '' }}"><a href="{{ url('terms-of-service') }}">Terms of Service</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'employment' ? 'active' : '' }}"><a href="{{ url('employment') }}">Employement</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'site-map' ? 'active' : '' }}"><a href="{{ url('site-map') }}">Site Map</a></li>
        </ul>
    </div>
</div>
        {{-- MOBILE --}}
<div class="visible-sm">
    <div class="footer">
        <hr>
        <div class="pull-left">
            <a href="{{ url('/') }}"><img id="footer-logo" src="../img/footer.png"></a>
            <span id="footer-nci">© 2017 NetTrac Philippines Inc. A Canadian company serving the world.</span>
        </div>
        <ul class="nav navbar-nav pull-right" id="menu-footer">
            <li class=" inline-menus {{ request()->segment(1) == 'privacy' ? 'active' : '' }}"><a href="{{ url('privacy') }}">Privacy</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'terms-of-service' ? 'active' : '' }}"><a href="{{ url('terms-of-service') }}">Terms of Service</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'employment' ? 'active' : '' }}"><a href="{{ url('employment') }}">Employement</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'site-map' ? 'active' : '' }}"><a href="{{ url('site-map') }}">Site Map</a></li>
        </ul>
    </div>
</div>
<div class=" visible-xs">    
    <div class="container">
        <ul class="nav navbar-nav "><hr>
            <li class="inline-menus {{ request()->segment(1) == 'privacy' ? 'active' : '' }}"><a href="{{ url('privacy') }}">Privacy</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'terms-of-service' ? 'active' : '' }}"><a href="{{ url('terms-of-service') }}">Terms of Service</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'employment' ? 'active' : '' }}"><a href="{{ url('employment') }}">Employement</a></li>
            <li class="inline-menus {{ request()->segment(1) == 'site-map' ? 'active' : '' }}"><a href="{{ url('site-map') }}">Site Map</a></li>
        </ul>
        <span id="footer-nci"> 
            <div class="text-center" style="margin-right: 84px;">
                <a href="{{ url('home') }}"><img id="footer-logo" src="../img/footer.png" style="margin-right: 10px;"></a>
			    © 2017 NetTrac Philippines Inc.
            </div>
            <div class="text-center mtop">A Canadian company serving the world.</div>
		</span>
    </div>   
</div>
</footer>
    {{-- BOOTSTRAP --}}
    {{-- CUSTOM JS --}} @yield('custom-js') {{-- FULLPAGE JS --}}
</body>
</html>