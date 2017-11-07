<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
@extends('layouts.app')
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
				<form method="POST" action="{{url('login')}}">
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
							</div>
						</div>
						<div class="row">
							<div class="col-md-7">
							Password:
							<input type="password" name="password" id="password" style="width: 100%;height: 40px">
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
		<div class="row">
			<div class="col-md-12">
				<div id="paypal-button"></div>
			</div>
		</div>
	</div>
	
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="herschelgomez@xyzzyu.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Premium Umbrella">
  <input type="hidden" name="amount" value="50.00">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Provide a drop-down menu option field. -->
  <input type="hidden" name="on0" value="Type">Type of umbrella <br />
  <select name="os0">
    <option value="Select Type">-- Select Type --</option>
    <option value="Standard">Standard</option>
    <option value="Collapsable">Collapsable</option>
  </select> <br />

  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png"
    alt="Buy Now">

  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

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
