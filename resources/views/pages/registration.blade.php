<head>
 <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>
@extends('layouts.master')
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
		    /* Media query for mobile viewport */
	    @media screen and (max-width: 400px) {
	        #paypal-button-container {
	            width: 100%;
	        }
	    }
	    
	    /* Media query for desktop viewport */
	    @media screen and (min-width: 400px) {
	        #paypal-button-container {
	            width: 250px;
	            display: inline-block;
	        }
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
							<div class="row content" style="margin-top: 20px;">
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
				<br>
				<div class="col-md-3 col-md-offset-1 box col-sm-col3 mt-5">
					<div class="row header" style="background-color:#004C70;color:white; ">
						<div class="col-md-12">
								Order Summary
						</div>
					</div>
					<div class="row content" style="padding: 10px">
						<div class="col-md-12">
							<h4>Total Amount:</h4> <span style="color:rgb(233, 97, 44);font-size: 20px;font-weight: bold">Php {{Cart::total()}}.00</span>
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-6">
							<button type="submit" name="register" class="btn btn-primary">
								Continue Checkout <i class="fa fa-angle-double-right" aria-hidden="true"></i>
							</button>
						</div>
					</div>	
					<br/>
				</div>
			</div>
		</div>
	</form>
@endsection
<script>

    // Render the PayPal button

    paypal.Button.render({

        // Set your environment

        env: 'sandbox', // sandbox | production

        // Specify the style of the button

        style: {
            label: 'paypal',
            size:  'medium',    // small | medium | large | responsive
            shape: 'rect',     // pill | rect
            color: 'blue',     // gold | blue | silver | black
            tagline: false    
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:    'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
            production: '<insert production client id>'
        },

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '0.01', currency: 'USD' }
                        }
                    ]
                }
            });
        },

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                window.alert('Payment Complete!');
            });
        }

    }, '#paypal-button-container');

</script>
