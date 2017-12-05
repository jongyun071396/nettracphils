@extends('layouts.master')
<style type="text/css">
	.header{
		border:1px solid #eee;
		padding:15px;
		color:white;
		background-color: #13659C;
	}
	.content{
		background-color: #eee;
		padding:15px;
	}
</style>
@section('body')

{{-- <form method="POST" action="{{'payment'}}" >
{{ csrf_field() }} --}}

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
	{{ csrf_field() }}
	<div class="container" style="padding:50px">
		<div class="row">
			<div class="col-md-5 col-md-offset-3 header">
			Order Summary
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 col-md-offset-3 content">   
				<!-- Identify your business so that you can collect the payments. -->
				<input type="hidden" name="business" value="jimkarlperalta7-facilitator@gmail.com">
				<!-- Specify a Buy Now button. -->
				<input type="hidden" name="cmd" value="_xclick">
				<!-- Specify details about the item that buyers will purchase. -->
				<h4>{{$total_items}} ITEM(S)</h4>
				<h3>Total Amount:</h3>
				<span style="color:#2373A1;font-weight: bold;font-size: 18px">Php {{Cart::total()}}.00</span>
				<br/>
				<input type="hidden" name="item_name" value="">
				<input type="hidden" name="amount" id="amount" value="{{Cart::total()}}">
				<input type="hidden" name="currency_code" value="PHP">
				<label>
				<input type="checkbox" name="agree_terms" required="">
				I have read and agree the 
				<a href="{{url('terms-of-service')}}" target="_blank"><i>Terms of Services</i></a>
				</label>
				<br/>
				<br/>
				<!-- Display the payment button. -->
				<button name="submit" class="btn btn-primary" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png" alt="Buy Now">Continue</button>
			</div>
		</div>
	</div>
</form>
<script>
	 $(function() {
       $.ajax({
       	error: function(data){
       		if($('#amount').val()==0){
       		window.location.replace("Failed");
       		}
       	}

       });
     
       
    });

</script>

@endsection
