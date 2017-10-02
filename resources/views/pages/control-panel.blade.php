@extends('layouts.app')

@section('body')
<div class="container" id="control-panel-container">
	<div class="row">
		<div class="col-md-12">
			<form class="form form-horizontal col-md-12 " id="container-form" action="/contuct-us.blade.php">
				<h3 class="paddingtitleform">Login to your Control Panel here:</h3>
				<hr>
				<div class="form-group pr">
					<label class="control-label col-sm-4" for="cp-name">Username:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control"	 placeholder="Username" name="cp-username">
					</div>
				</div>
				<div class="form-group pr">
					<label class="control-label col-sm-4" for="cp-passwrd">Password:</label>
					<div class="col-sm-10">          
						<input type="password" class="form-control" placeholder="Password" name="cp-password">
					</div>
				</div>
				<div class="form-group text-center">
					<a href="#">forget password?</a>
				</div>
				<div class="form-group text-center">        
					<button type="submit" class="btn btn-success">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection