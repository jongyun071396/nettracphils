@extends('layouts.app')
@section('map')
	<style>
       #map {
        height: 280px;
        width: 100%;
       }
    </style>
@endsection
@section('body')
	{{-- content --}}
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>About Us</h2>
					<p>NetTrac has been designing and hosting web sites and mission critical applications since 1996. We combine technology and service in the right mix allowing customers to customize their solutions while providing them with a highly available hosting environment. Setting the standard on customer service and satisfaction is our corporate goal. Since inception the development of longstanding relationships with all clients, large or small, has always been Job One! </p>
					<div class="col-xs-12">
						<div class="col-xs-6">
							<h3>Our Beliefs:</h3>
							<p>We believe that if you need an organizational chart to know your company, you have lost touch.
							Everyone at NetTrac is responsible to our customers.
							All of our customers are important to us and we strive to make the each customer feel like our only customer.
							NetTrac bases its growth on its customers, not on debt.
							We invest in the best people, processes and technologies to serve you.
							We keep our commitments to our customers and to our vendors.
							We operate honestly and ethically in all of our relationships.
							We encourage open communication throughout our company, and we treat everyone with respect.
							We take pride in our work, and we strive to be the best..
							We are flexible and creative in finding solutions to help our customers and employees be successful.</p>

							<h3>Server Farms & Staff</h3>
							<p>With our main facility located in Waterloo, Canada and staff there and in the South East Asia, we can service your needs 24 hours per day. You will always find friendly support and service at NetTrac.</p>
						</div>

						<div class="col-xs-6">
							<h3>Location</h3>
							    <div id="map"></div>
								    <script>
								      function initMap() {
								        var uluru = {lat: 10.2647906, lng: 123.8372051};
								        var map = new google.maps.Map(document.getElementById('map'), {
								          zoom: 14,
								          center: uluru
								        });
								        var marker = new google.maps.Marker({
								          position: uluru,
								          map: map
								        });
								      }
								    </script>
							    <script async defer
							    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz-Zh4uuML69YgpU6yorTBjEGVA6pftsQ&callback=initMap">
							    </script>
						</div>
					</div>
				<div class="row">
					<div class="col-xs-12 au">
						<h3>NetTrac Offices:</h3>
						<div class="col-xs-3">
							<h4>Head Office Address</h4>
							<p>NetTrac Communications Inc.<br>
							163 General Dr.,<br>
							Kitchener, On.<br>
							Canada, N2K3S7</p>
						</div>
						<div class="col-xs-3">
							<h4>Mailing Address</h4>
							<p>NetTrac Communications Inc.<br>
							P.0. Box 122<br>
							Waterloo, ON<br>
							Canada, N2J 3Z9</p>
						</div>
						<div class="col-xs-3" >
							<h4>Philippine Office</h4>	
							<p>NetTrac Communications Inc.<br>
							Unit 201, SYCA Building,<br> 
							Lagtang Road,<br>
							Talisay City,<br>
							Cebu, Philippines 6045</p>
						</div>
						<div class="col-xs-4" id="ext">
							<h4>You can contact us by emailing</h4>
							<p>Or in North America by calling 1-877-625-5444 <br>
							Or in Australia by calling +61 2 6181-0700 <br>
							Or in S.E. Asia by calling +63 032-268-2565</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection