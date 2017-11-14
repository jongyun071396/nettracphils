@extends('layouts.app')
@section('body')
	<div class="container" id="site-map-footer" style="padding:17px">
		<div class="row  mb-1">
			<div class="col-md-6">
				<h2>NetTrac Communications Inc. - Site Map</h2>
			</div>
		</div>
		<div class="row" style="">
			<div class="col-md-3">
				<h4>COMPANY INFORMATION</h4>
				<ul style="list-style-type:none">
					<li><a href="{{ url('about') }}">About Us</a></li>
					<li><a href="{{ url('about') }}">Locations</a></li>
					<li><a href="{{ url('about') }}">Connectivity</a></li>
					<li><a href="{{ url('about') }}">Server Farms & Staff</a></li>
					<li><a href="{{ url('home') }}">Free Websites Templates</a></li>
					<li><a href="{{ url('employment') }}">Employment</a></li>
					<li><a href="{{ url('privacy') }}">Privacy Policy</a></li>
					<li><a href="{{ url('terms-of-service') }}">Terms of Service</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<h4>CONTACT US & SUPPORT</h4>
						<ul style="list-style-type:none">
							<li><a href="{{ url('contac-us') }}">Contact Us Form</a></li>
							<li><a href="{{ url('support') }}">Support</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>CUSTOMER INFORMATION</h4>
						<ul style="list-style-type:none">
							<li><a href="">Register a new Account</a></li>
							<li><a href="">Password Recovery</a></li>
							<li><a href="">Account Information</a></li>
							<li><a href="">Order History</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<h4>HOSTING</h4>
						<ul style="list-style-type:none">
							<li><a href="">Linux Hosting</a></li>
							<li><a href="">Windows Hosting</a></li>
							<li><a href="">Virtual Server</a></li>
							<li><a href="">Sharepoint Hosting</a></li>
							<li><a href="">Bulk Mail</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4>DEVELOPMENT</h4>
						<ul style="list-style-type:none">
							<li><a href="">Starter Web Package</a></li>
							<li><a href="">Corporate Web Package</a></li>
							<li><a href="">Enterprise Web Package</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<ul style="list-style-type: none;">
					<li><h4><a href="">DEDICATED SERVERS</a></h4></li>
					<li><h4><a href="">E-COMMERCE</a></h4></li>
					<li><h4><a href="">NEWS</a></h4></li>
					<li><h4><a href="">SHOPPING CART</a></h4></li>
					<li><h4><a href="{{ url('control-panel') }}">CONTROL PANEL</a></h4></li>
				</ul>
			</div>
		</div>
	</div>
@endsection