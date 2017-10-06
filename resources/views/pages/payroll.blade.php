@extends('layouts.app')
@section('footer')
	<style>
		footer {
		
		    height: 100px;
		    bottom: 0;
		    width: 100%;
		}
	</style>
@endsection
@section('body')
<div class="container" id="payroll-container">
	<div class="row">
		<div class="col-md-12">
			<form class="form form-horizontal col-md-12 " id="container-form" action="/control-panel.blade.php">
				<h3 class="paddingtitleform">Payroll System Login:</h3>
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
						<input type="password" class="form-control" placeholder="" name="pr-password">
					</div>
				</div>
				<div class="form-group pr">
					<div class="col-sm-offset-4 col-sm-8 fp">          
						<a href="#">forget password?</a> | <a href="{{url('payroll-register')}}">Sign up</a>
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
@endsection