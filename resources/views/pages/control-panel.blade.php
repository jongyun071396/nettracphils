@extends('layouts.master')

@section('body')
<div class="visible-lg visible-md visible-sm" style="height: 381px;">
	<div class="container" id="payroll-container">
		<div class="row">
			<div class="col-md-12">
				<form class="form form-horizontal " id="container-form" action="{{ url('login') }}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<h3 class="paddingtitleform">Login to your Control Panel here:</h3>
					<hr>
					<div class="form-group pr">
						<label class="control-label col-sm-4" for="username">Username:</label>
						<div class="col-sm-10 input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" class="form-control"	 placeholder="" name="username">
						</div>
					</div>
					
					<div class="form-group pr">
						<label class="control-label col-sm-4" for="pr-password">Password:</label>
						<div class="col-sm-10 input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>          
							<input type="password" class="form-control" placeholder="" name="password">
						</div>
					</div>
					<div class="form-group pr">
						<div class="col-sm-offset-4 col-sm-8">          
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="visible-xs">
	<div class="container" >
		<div class="row" style="padding:50px; padding-bottom: 75px;">
			<form class="form form-horizontal " id="container-form" action="/control-panel.blade.php" style="padding:10px;">
				<h3 class="paddingtitleform">Login to your Control Panel here:</h3>
				<hr>
				<div class="form-group pr-xs">
					<label class="control-label-xs" for="username">Username:</label>
					<div class="col-sm-5 input-group" >
					<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input type="text" placeholder="" name="username" style="height: 30px;width: 100%">
					</div>
				</div>
				<div class="form-group pr-xs">
						<label class="control-label-xs" for="password">Password:</label>
						<div class="col-sm-5 input-group" style="">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="password" 	 placeholder="" name="password" style="height: 30px;width: 100%">
						</div>
				</div>
				<div class="form-group pr">
						<div class="fp" style="text-align: center;">          
							<a href="#">forget password?</a> | <a href="{{url('payroll-register')}}">Sign up</a>
						</div>
				</div>
				<div class="form-group pr">
					<div class="col-sm-3"> 
						<button type="submit" class="btn btn-primary" style="margin-left: 59px; width: 50%">Login</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection