     <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>

<body>
    {{-- header --}}
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            {{-- logo --}}
            <div class="visible-md visible-lg" style="padding: 0 5rem;">
                <div class="navbar-header">
                    <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ url('img/logo.png') }}"></a>
                </div>
                {{-- menu items --}}
                <ul class="nav navbar-nav" id="menu-header">
                    <li class="{{ request()->segment(1) == '' ? 'active' : '' }}"><a href="{{ url('/') }}" class="sliding-middle-out">Home</a></li>
                    <li class="{{ request()->segment(1) == 'about' ? 'active' : '' }}"><a href="{{ url('about') }}" class="sliding-middle-out">About Us</a></li>
                    <li class="{{ request()->segment(1) == 'support' ? 'active' : '' }}"><a href="{{ url('support') }}" class="sliding-middle-out">Support</a></li>
                    <li class="{{ request()->segment(1) == 'contact-us' ? 'active' : '' }}"><a href="{{ url('contact-us') }}" class="sliding-middle-out">Contact Us</a></li>
                    <li class="{{ request()->segment(1) == 'payroll' ? 'active' : '' }}"><a href="{{ url('payroll') }}" class="sliding-middle-out">Payroll System</a></li>
                    <li class="{{ request()->segment(1) == 'control-panel' ? 'active' : '' }}"><a href="{{ url('control-panel') }}" class="sliding-middle-out">Control Panel</a></li>
                </ul>
            </div>
        <div class="visible-sm">
                <div class="navbar-header">
                    <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ url('img/logo.png') }}"></a>
                </div>
                
                     <ul class="nav navbar-nav" id="menu-header">
                    <li class="{{ request()->segment(1) == '' ? 'active' : '' }}"><a href="{{ url('/') }}" class="sliding-middle-out">Home</a></li>
                    <li class="{{ request()->segment(1) == 'about' ? 'active' : '' }}"><a href="{{ url('about') }}" class="sliding-middle-out">About Us</a></li>
                    <li class="{{ request()->segment(1) == 'support' ? 'active' : '' }}"><a href="{{ url('support') }}" class="sliding-middle-out">Support</a></li>
                    <li class="{{ request()->segment(1) == 'contact-us' ? 'active' : '' }}"><a href="{{ url('contact-us') }}" class="sliding-middle-out">Contact Us</a></li>
                    <li class="{{ request()->segment(1) == 'payroll' ? 'active' : '' }}"><a href="{{ url('payroll') }}" class="sliding-middle-out">Payroll System</a></li>
                    <li class="{{ request()->segment(1) == 'control-panel' ? 'active' : '' }}"><a href="{{ url('control-panel') }}" class="sliding-middle-out">Control Panel</a></li>
                </ul>
                
        </div>
            <div class="visible-xs">
				<div class="navbar-header">
                    <a href="{{ url('/') }}" class="navbar-brand pull-right"><img src="{{ url('img/logo.png') }}"></a>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                   	<ul class="nav navbar-nav" id="responsive-menu-header">
                   		<li class="{{ request()->segment(1) == '' ? 'active' : '' }}"><a href="{{ url('/') }}" class="sliding-middle-out">Home</a></li>
                    <li class="{{ request()->segment(1) == 'about' ? 'active' : '' }}"><a href="{{ url('about') }}" class="sliding-middle-out">About Us</a></li>
                    <li class="{{ request()->segment(1) == 'support' ? 'active' : '' }}"><a href="{{ url('support') }}" class="sliding-middle-out">Support</a></li>
                    <li class="{{ request()->segment(1) == 'contact-us' ? 'active' : '' }}"><a href="{{ url('contact-us') }}" class="sliding-middle-out">Contact Us</a></li>
                    <li class="{{ request()->segment(1) == 'payroll' ? 'active' : '' }}"><a href="{{ url('payroll') }}" class="sliding-middle-out">Payroll System</a></li>
                    <li class="{{ request()->segment(1) == 'control-panel' ? 'active' : '' }}"><a href="{{ url('control-panel') }}" class="sliding-middle-out">Control Panel</a></li>
                   	</ul>
                </div>
                <span style="font-size:25px;cursor:pointer;color:#bbb;" onclick="openNav()" style="margin-top: 10%">&#9776;</span>
                </div>
          
            </div>
    </nav>

    @yield('body')
    <footer class="fixed-bottom">

        <div class="solid-border"></div>

        <div class="visible-md visible-lg">
            <div class="footer">

                <div class="pull-left">
                    <a href="{{ url('/') }}"><img id="footer-logo" src="../img/footer.png"></a>
                    <span id="footer-nci">© 2017 NetTrac Philippines Inc. A Canadian company serving the world.</span>
                </div>
                <div class="pull-right">
                    <ul class="nav navbar-nav pull-right" id="menu-footer">
                        <li class="{{ request()->segment(1) == 'privacy' ? 'active' : '' }}"><a href="{{ url('privacy') }}">Privacy</a></li>
                        <li class="{{ request()->segment(1) == 'terms-of-service' ? 'active' : '' }}"><a href="{{ url('terms-of-service') }}">Terms of Service</a></li>
                        <li class="{{ request()->segment(1) == 'employment' ? 'active' : '' }}"><a href="{{ url('employment') }}">Employement</a></li>
                        <li class="{{ request()->segment(1) == 'site-map' ? 'active' : '' }}"><a href="{{ url('site-map') }}">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="visible-sm visible-xs" style="position: fixed">
			<div class="" style="text-align: center;">
				<ul class="nav navbar-nav footer_menus" style="display: inline">
                        <li class="{{ request()->segment(1) == 'privacy' ? 'active' : '' }}"><a href="{{ url('privacy') }}">Privacy</a></li>
                        <li class="{{ request()->segment(1) == 'terms-of-service' ? 'active' : '' }}"><a href="{{ url('terms-of-service') }}">Terms of Service</a></li>
                        <li class="{{ request()->segment(1) == 'employment' ? 'active' : '' }}"><a href="{{ url('employment') }}">Employement</a></li>
                        <li class="{{ request()->segment(1) == 'site-map' ? 'active' : '' }}"><a href="{{ url('site-map') }}">Site Map</a></li>
                    </ul>
			</div>
            <div class="footer" style="text-align: center;">
                    <a href="{{ url('/') }}"><img id="footer-logo" src="../img/footer.png"></a>
                    <span id="footer-nci">
							© 2017 NetTrac Philippines Inc. A Canadian company serving the world.
					</span>
               

            </div>
        </div>

    </footer>
    {{-- BOOTSTRAP --}}
    <script src="{{ url('js/bootstrap.js') }}"></script>
    {{-- CUSTOM JS --}} @yield('custom-js') {{-- FULLPAGE JS --}}
    <script>
        $(document).ready(function() {
            /*$('#fullpage').fullpage();*/
        });

        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        	document.getElementById("mySidenav").style.height = "370px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

</body>

</html>