<script src="https://www.paypalobjects.com/api/checkout.js"></script>
@extends('layouts.app')
<style type="text/css">
	 
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
@section('body')

	<div class="container" style="padding:50px">
		<div class="row">
			<div class="col-md-6" style="padding: 5rem">
				<div class="row">
					<div class="col-md-12" style="">
						<h1>New Customer</h1>
						<h4>Are you new to NetTrac™? Continue to checkout and sign up.</h4>
						<br/>
						<a href="{{url('registration')}}">
						<button class="btn btn-primary" style="padding:20px;font-size: 14px">Continue to Checkout</button>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6" style="border-left: 1px solid #B2B2B2;padding: 5rem;">
				<form method="POST" action="{{url('payment_login')}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row">
							<div class="col-md-12">
								<h1>Existing Customer</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7">
							Username:
							<input type="text" name="username" id="username" style="width: 100%;height: 40px">
							<p class="error"></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7">
							Password:
							<input type="password" name="password" id="password" style="width: 100%;height: 40px">
							<p class="error"></p>
							</div>
						</div>
						<div class="row" style="padding-top: 10px">
							<div class="col-md-5">
								<button class="btn btn-primary" style="padding:12px;font-size: 14px;border-radius: 1px">LOG IN</button>
							</div>
						</div>
					</form>
			</div>
		</div>
	</div>
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