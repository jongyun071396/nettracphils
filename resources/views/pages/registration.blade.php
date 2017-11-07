<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
@extends('layouts/app')
@section('footer')
	<style>
		footer {
		    height: 100px;
		    bottom: 0;
		    width: 100%;
		}
		.header{
			background-color: #004C70;
			color:white;
			padding:10px;
			font-size: 18px;
		}
		.box{
			border:1px solid #bbb;
		}
		input{
			height: 35px;
			width: 100%;
		}
		.content{
			padding:5px;
		}
	</style>
@endsection
@section('body')
	<form method="POST" action="{{ url('register') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="container" style="padding:50px">
			<div class="row">
				<div class="col-md-8 ">
					<div class="row box">
						<div class="col-md-12 " style="">
							<div class="row header" style="background-color:#004C70;color:white; ">
								<div class="col-md-12" style="">
									Billing Information
								</div>
							</div>
							<br/>
							<div class="row content" style="">
								<div class="col-md-6">
									<label>First Name</label>
									<input type="text" name="fName" required="">
								</div>
								<div class="col-md-6">
									<label>Last Name</label>
									<input type="text" name="lName" required="">
								</div>
							</div>
							<div class="row content" style="">
								<div class="col-md-6">
									<label>Company Name</label>
									<input type="text" name="comp_name" required="">
								</div>
								<div class="col-md-6">
									<label>Phone Number</label>
									<input type="text" name="phone_number" required="">
								</div>
							</div>
							<div class="row content">
								<div class="col-md-6">
									<label>City</label>
									<input type="text" name="city" required="">
								</div>
								<div class="col-md-6">
									<label>Province/State</label>
									<input type="text" name="state" required="">
								</div>
							</div>
							<div class="row content">
								<div class="col-md-6">
									<label>Address 1</label>
									<input type="text" name="address1" required="">
								</div>
								<div class="col-md-6">
									<label>Address 2</label>
									<input type="text" name="address2" required="">
								</div>
							</div>
							<div class="row content">
							
								<div class="col-md-6">
									<label>Zip or Postal Code</label>
									<input type="text" name="zip" required="">
								</div>
							</div>
							<br/>
						</div>

					</div>
					<br/>
					<div class="row box">
						<div class="col-md-12">
							<div class="row header" style="background-color:#004C70;color:white; ">
								<div class="col-md-12" style="" required="">
									Account Information
								</div>
							</div>
							<div class="row content">
								<div class="col-md-6">
									<label>Email Address</label>
									<input type="email" name="email_add" required="">
								</div>
								<div class="col-md-6">
									<label>Username</label>
									<input type="text" name="username" required="">
								</div>
							</div>
							<div class="row content">
								<div class="col-md-6">
									<label>Password</label>
									<input type="password" name="password" required="">
								</div>
								<div class="col-md-6">
									<label>Confirm Password</label>
									<input type="password" name="confirm_pass" required="">
								</div>
							</div>
							<br/>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-md-offset-1 box">
					<div class="row header" style="background-color:#004C70;color:white; ">
						<div class="col-md-12">
								Order Summary
						</div>
					</div>
					<div class="row content" style="padding: 10px">
						<div class="col-md-12">
							<h4>Total Amount:</h4> <span style="color:rgb(233, 97, 44);font-size: 20px;font-weight: bold">Php {{Cart::total()}}.00</span>
							<br/>
							<i>Pay with your PayPal account.</i>
							<br/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div id="paypal-button"></div>
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-6">
							<button class="btn btn-primary">Continue Checkout 
							<i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
						</div>
					</div>	
					<br/>
					</div>
				</div>
			</div>
	</form>
@endsection
<script>
  paypal.Button.render({
    env: 'production',  // Or 'sandbox'
    commit: true,       // Show 'Pay Now' button
    payment: function () {
      /*
       * Set up the payment here
       */
    },
    onAuthorize: function (data, actions) {
      /*
       * Execute the payment here
       */
    }
  }, '#paypal-button');
</script>