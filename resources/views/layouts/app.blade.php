<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{-- GOOGLE FONTS --}}
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="{{ url('css/style.css') }}">
@yield('custom-css')
@yield('map')
@yield('footer')
</head>		
<body>
	{{-- header --}}
	<nav class ="navbar navbar-default">
		<div class="container-fluid">
			{{-- logo --}}
			<div class="narbar-header">
				<a href="{{ url('/') }}" class="navbar-brand"><img src="{{ url('img/logo.png') }}"></a>
			</div>
			{{-- menu items --}}
			<div>
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
	<footer class="fixed-bottom">
	<div class="container">
	<div class="solid-border"></div>
		<div class="row">
			<div class="col-xs-12">
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
		</div>
	</div>		
	</footer>	
</body>
</html>