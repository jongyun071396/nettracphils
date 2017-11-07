@extends('layouts.app')

@section('body')
<div class="visible-lg visible-md visible-sm">
<div class="container" id="control-panel-container">
	<div class="row">
		<div class="col-md-12">
			<form class="form form-horizontal" id="container-form" action="{{ url('login') }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<h3 class="paddingtitleform">Login to your Control Panel here:</h3>
				<hr>
				<div class="form-group pr">
					<label class="control-label col-sm-4" for="cp-name">Username:</label>
			<div class="col-sm-10 input-group">
					<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input type="text" class="form-control"	 placeholder="" name="username" id="username">
					</div>
				</div>
				<div class="form-group pr">
					<label class="control-label col-sm-4" for="cp-passwrd">Password:</label>
					<div class="col-sm-10 input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
						<input type="password" class="form-control"	 placeholder="" name="password" id="password">
					</div>
				</div>
				<div class="form-group text-center">      
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<div class="visible-xs">
	<div class="container" >
		<div class="row" style="padding:50px">
			<form class="form form-horizontal " id="container-form" action="/control-panel.blade.php" style="padding:30px">
				<h3 class="paddingtitleform">Login to your Control Panel here:</h3>
				<hr>
				<div class="form-group pr">
						<label class="control-label" for="username">Username:</label>
						<div class="input-group" style="">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="" name="username" style="height: 30px;width: 100%">
						</div>
				</div>
				<div class="form-group pr">
						<label class="control-label" for="password">Password:</label>
						<div class="col-sm-5 input-group" style="">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="password" placeholder="" name="password" style="height: 30px;width: 100%">
						</div>
				</div>
				<div class="form-group pr">
						<div class="col-sm-8 fp" style="text-align: center;">          
							<a href="#">forget password?</a> | <a href="{{url('payroll-register')}}">Sign up</a>
						</div>
				</div>
					<div class="form-group pr" style="position: relative;">
						<div class="col-sm-5">          
							<button type="submit" class="btn btn-primary" style="width: 100%">Login</button>
						</div>
					</div>
			</form>
		</div>
	</div>
</div>
@endsection