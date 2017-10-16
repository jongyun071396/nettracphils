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
		<div class="container">
			<div class="row">
				<div class="col-md-12" id="contact-us-margin">
					<div class="col-md-6">
						<h1>Contact Us</h1>
						<p>
							<h4><b>Support Desk Hours</b></h4>
							For GMT -5 Customers <br>	
							8:00AM to 3:30PM and <br>
							8:00PM to 4:30AM 
						</p>
						<p>
							<h4><b>Support Desk Phone Numbers:</b></h4>
							Ontario Customers Call: 1-519-741-9112 and dial Option 1 <br>	
							Toll Free in North America: 1-877-625-5444 and dial Option 1 <br>
							S.E. Asia: +63 032-268-2565 <br>
							Australia: +61 2 6181-0700 
						</p>
						<p>
							<h4><b>NetTrac Communications Inc. </b></h4>
							P.0. Box 122 <br>
							Waterloo, ON <br>
							Canada, N2J3Z9
						</p>
					</div>
					<div class="col-md-6">
						<form class="form form-horizontal col-md-12 " id="container-form" action="/contuct-us.blade.php">
						<h3 class="paddingtitleform">Enter your information here:</h3>
						<hr>
							<div class="form-group">
								<label class="control-label col-sm-4" for="name">*Name:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control"	 placeholder="Enter Name" name="name">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-4" for="email">*Email:</label>
								<div class="col-sm-10">          
									<input type="email" class="form-control" placeholder="Enter Email" name="email">
								</div>
							</div>
							<div class="form-group">        
								<label class="control-label col-sm-4">*Comment/Requests:</label>
								<div class="col-sm-10">          
									<input type="text" class="form-control" placeholder="Enter Comment/Requests" name="comment-requests">
								</div> 
							</div>
							<div class="form-group">
								<label class="control-label col-sm-4">Package:</label>
								<div class="col-sm-10" >
									<select name="payroll-system" id="dropdown">
									    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"></button>
										<ul class="dropdown-menu " role="menu" aria-labelledby="menu1">
										{{-- <option class="dropdown-header"></option> --}}
										<option class="dropdown-header item" value="web-development">WEB DEVELOPMENT</option>
										<option value="free-web" {{ request()->input('package') == 'free-web' ? 'selected' : '' }}>Free Web</option>
										<option value="starter-web" {{ request()->input('package') == 'starter-web' ? 'selected' : '' }}>Started Web</option>
										<option value="corporate-web" {{ request()->input('package') == 'corporate-web' ? 'selected' : '' }}>Corporate Web</option>
										<option value="enterprise-web" {{ request()->input('package') == 'enterprise-web' ? 'selected' : '' }}>Enterprise Web</option>
										<option class="dropdown-header item" value="buld-mail">BULK MAIL</option>
										<option value="be-1000" {{ request()->input('package') == 'be-1000' ? 'selected' : '' }}>BE 1000</option>
										<option value="be-2500" {{ request()->input('package') == 'be-2500' ? 'selected' : '' }}>BE 2500</option>
										<option value="be-3500" {{ request()->input('package') == 'be-3500' ? 'selected' : '' }}>BE 3500</option>
										<option value="be-10000" {{ request()->input('package') == 'be-10000' ? 'selected' : '' }}>BE 10000</option>
										
										<option class="dropdown-header item" value="hosting">HOSTING</option>
										<option value="starter-linux" {{ request()->input('package') == 'starter-linux' ? 'selected' : '' }}>Starter Linux</option>
										<option value="basic-linux" {{ request()->input('package') == 'basic-linux' ? 'selected' : '' }}>Basic Linux</option>
										<option value="business-linux" {{ request()->input('package') == 'business-linux' ? 'selected' : '' }}>Business Linux</option>
										</ul>
									</select>
								</div>
							</div>
							<h3 class="paddingtitleform">Security Information:</h3>
							<hr>
							<div class="form-group">
								<label class="control-label col-sm-4" for="code">Enter the Code:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control"	 placeholder="Enter Code" name="code">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-4" for="btn-code">Security code:</label>
								<div class="col-sm-10">          
									<input type="button" class="btn btn-default" name="btn-code" value="Submit">
								</div>
							</div>
							<div class="form-group text-center" id="btnsend">   
									<button type="submit" class="btn btn-success">Send</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection