@extends('layouts.header')
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

<form method="POST" action="{{'payment'}}" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="container" style="padding:50px">
		<div class="row">
			<div class="col-md-5 col-md-offset-3 header">
				Order Summary
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 col-md-offset-3 content">   
                <h4>{{$total_items}} ITEM(S)</h4>
				<h3>Total Amount:</h3>
				<span style="color:#2373A1;font-weight: bold;font-size: 18px">Php {{Cart::total()}}.00</span>
				<br/>
				<label>
					<input type="checkbox" name="agree_terms" required="">
					I have read and agree the 
					<a href="{{url('terms-of-service')}}" target="_blank"><i>Terms of Services</i></a>
				</label>
				<br/>
				<br/>
				<label>
                    <button class="btn btn-primary">Continue</button>
				</label>
			</div>
		</div>

</div>
</form>
@endsection
