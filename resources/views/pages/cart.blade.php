@extends('layouts.master')
<style type="text/css">
	#Proceed{
		background: #2FA46E;
		border: none;
		border-radius: 1px;
	}
</style>
@section('body')
<div class="visible-md visible-lg">
	@foreach ($items as $item)
	<div class="container main_content" style="padding:20px;width: 70%">
		<div class="row header" style="padding:5px;background-color: #128CDF;color:white">
			<div class="col-md-12">
				<h4>SHOPPING CART <i class="fa fa-shopping-cart" aria-hidden="true"></i></h4>
			</div>
		</div>
		<div class="row content" style="padding:5px;border:1px solid #eee;box-shadow: 2px 2px 3px #BEBEBE">
			<div class="col-md-12">
					<div class="row">
						<div class="col-md-3 col-md-offset-1">
							<h3 style="color: #128CDF;">PRODUCT </h3>

						</div>
						<div class="col-md-3">
							<h3 style="color: #128CDF;">TYPE</h3>
						</div>
						<div class="col-md-2">
							<h3 style="color: #128CDF">PRICE</h3>
						</div>
						<div class="col-md-3">
							<h3 style="color: #128CDF">TERM</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-md-offset-1">
							<p style="font-size: 20px">{{$item->name}}</p>
						</div>
						<div class="col-md-3">
							@if($item->id < 6)
								<p style="font-size: 17px">WEB DEVELOPMENT</p>
							@elseif($item->id > 5 && $item->id < 10)
								<p style="font-size: 17px">BULK MAIL</p>
							@elseif($item->id > 10)
								<p style="font-size: 17px">HOSTING</p>
							@endif
						</div>
						<div class="col-md-2">
							<p style="font-size: 17px">Php {{number_format($item->price,2)}}</p>
						</div>
						<div class="col-md-2" style="">
							{{-- {{$item->rowid}} --}}
								<form id="" method="POST" action="increase_cart">
								 <input type="hidden" name="_token" id="qty-token" value="{{ csrf_token() }}">
									{{-- <input type="hidden" name="rowid" value="{{$item->id}}" id="rowid"> --}}
	                            	<select class="form-control qty" data-row="{{$item->rowid}}">
		                            	@for( $init = 1; $init<=12; $init++)
		                            		@if($init == $item->qty)
		                            			<option value="{{$init}}" selected="selected">{{$init.' '. str_plural('Month', $init)}}</option>
		                            		@else
		                            			<option value="{{$init}}">{{$init.' '. str_plural('Month', $init)}}  </option>
		                            		@endif
		                            	@endfor
	                            	</select>
                            	</form>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-md-offset-9">
							<p style="font-size: 17px; color:rgb(233, 97, 44);"> Subtotal: Php. {{number_format($item->subtotal,2)}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-md-offset-6" style="width: 180px;">
							<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
								{{ csrf_field() }}
							<!-- Identify your business so that you can collect the payments. -->
							<input type="hidden" name="business" value="jimkarlperalta7-facilitator@gmail.com">
							<!-- Specify a Buy Now button. -->
							<input type="hidden" name="cmd" value="_xclick">
							<input type="hidden" name="item_name" value="">
							<input type="hidden" name="amount" value="{{$item->subtotal}}">
							<input type="hidden" name="currency_code" value="PHP">
							<button name="submit" class="btn btn-primary" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png" style="width: 150px;">Buy Now</button>
							</form>
						</div>	
						<div class="col-md-3">
							<form method="POST" action="remove_cart">
								<input type="hidden" name="product_id" value="{{$item->id}}">
                        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button class="btn btn-danger" style="border-radius: 5px;"><i class="fa fa-trash" aria-hidden="true"></i> Remove from Cart</button>
							</form>
						</div>
					</div>
			</div>
		</div>
	</div>
	@endforeach
	<div class="container" style="padding:10px">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3 style="color:rgb(233, 97, 44);">TOTAL: <span>Php {{number_format(Cart::total(),2)}}</span></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-3">
				<a href="{{url('customer_login')}}">
					<button class="btn btn-primary" id="Proceed" style="width: 100%;height: 50px">
						Proceed to Checkout
					</button>
				</a>
			</div>
		</div>
	</div>
	<br/>
</div>
<div class="visible-sm visible-xs">
	@foreach ($items as $item)
		<div class="container main_content" style="padding:10px;width: 90%">
			<div class="row header" style="background-color: #128CDF;color:white">
				<div class="col-sm-12" style="padding:5px">
					SHOPPING CART <i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</div>
			</div>
			<div class="row" style="padding:5px;border:1px solid #eee;box-shadow: 2px 2px 3px #BEBEBE">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12">
							<div class="col-md-3 col-md-offset-1">
								<div class="row">
									<div class="col-sm-7">
										<h5 style="color: #128CDF;">PRODUCT </h5>
									</div>
									<div class="col-sm-5">
										{{$item->name}}
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">
									<div class="col-sm-7">
										<h5 style="color: #128CDF;">TYPE</h5>
									</div>
									<div class="col-sm-5">
										@if($item->id < 6)
											WEB DEVELOPMENT
										@elseif($item->id > 5 && $item->id < 10)
											BULK MAIL
										@elseif($item->id > 10)
											HOSTING
										@endif
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="row">
									<div class="col-sm-7">
										<h5 style="color: #128CDF">PRICE</h5>
									</div>
									<div class="col-sm-5">
										Php {{$item->price}}.00
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">
									<div class="col-sm-7">
										<h5 style="color: #128CDF">TERM</h5>
									</div>
									<div class="col-sm-5">
										<form id="" method="POST" action="increase_cart">
								 <input type="hidden" name="_token" id="qty-token" value="{{ csrf_token() }}">
									{{-- <input type="hidden" name="rowid" value="{{$item->id}}" id="rowid"> --}}
	                            	<select class="form-control qty" data-row="{{$item->rowid}}">
		                            	@for( $init = 1; $init<=12; $init++)
		                            		@if($init == $item->qty)
		                            			<option value="{{$init}}" selected="selected">{{$init.' '. str_plural('Month', $init)}}</option>
		                            		@else
		                            			<option value="{{$init}}">{{$init.' '. str_plural('Month', $init)}}  </option>
		                            		@endif
		                            	@endfor
	                            	</select>
                            	</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-md-offset-9">
							<p style="font-size: 17px;color:rgb(233, 97, 44);"> Subtotal: Php. {{number_format($item->subtotal,2)}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-md-offset-6">
							<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
								{{ csrf_field() }}
							<!-- Identify your business so that you can collect the payments. -->
							<input type="hidden" name="business" value="jimkarlperalta7-facilitator@gmail.com">
							<!-- Specify a Buy Now button. -->
							<input type="hidden" name="cmd" value="_xclick">
							<input type="hidden" name="item_name" value="">
							<input type="hidden" name="amount" value="{{$item->subtotal}}">
							<input type="hidden" name="currency_code" value="PHP">
							<button name="submit" class="btn btn-primary" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png" alt="Buy Now">Buy Now</button>
							</form>
						</div>
						<div class="col-md-3 col-md-offset-9">
							<form method="POST" action="remove_cart">
								<input type="hidden" name="product_id" value="{{$item->id}}">
            					<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button class="btn btn-danger" style="border-radius: 1px"><i class="fa fa-trash" aria-hidden="true"></i> Remove from Cart</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endforeach
		<div class="container" style="padding:10px">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3 style="color:rgb(233, 97, 44);">TOTAL: <span>Php {{Cart::total()}}.00</span></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-3">
				<a href="{{url('customer_login')}}">
					<button class="btn btn-primary" id="Proceed" style="width: 100%;height: 50px">
						Proceed to Checkout
					</button>
				</a>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.qty').change(function(){
			var quantity = $(this).val();
			var rowid = $(this).data('row');
			// alert(quantity);
			$.ajax({
				type:'POST',
				url:'increase_cart',
				data:{
					'quantity':quantity,
					'rowid':rowid,
					'_token' : $("#qty-token").val()
				},
				success:function(response)
				{
					if( response == 'success')
					{

						location.reload();
						
					}
				}
			});	
		});
	});

</script>
@endsection