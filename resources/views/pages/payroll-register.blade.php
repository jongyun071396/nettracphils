@extends('layouts/app')
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
	{{-- expr --}}
	<div class="container" id="payroll-reg-container">
		<div class="row">
			<div class="col-md-12">
			{{-- <h5>
			<p class="text-center">
				NetTrac introduces an EASY and RELIABLE online Pay Roll and Human Resources Management System that been programmed EXCLUSIVELY for users in the Philippines.
				This system is Guaranteed to reduce the amount of time you spend managing pay roll and generating Government Mandated Reports and save you large amounts of cash not only in the time savings but in preventing costly pay roll errors.
				Put the time you save into building your business, not doing hours of bookkeeping.
				Reports are 'ONE PRINT', meaning you generate your 1601-C's on the fly.Generate 2316's instantly. See more in our features list. 
				How easy is it to use? Simply follow the online step by step documentation. Need support? Just Call Us during Regular Business Hours. 
				Pricing: The NetTrac Payroll System is only available to NetTrac Phils Hosting Customers as low as 20PHP per employee per month. <br>
			</p></h5> --}}
				<form class="form form-horizontal col-md-12" id="container-form" action="/payroll-register.blade.php">
				<h3 class="paddingtitleform">Payroll System Registration:</h3>
				<hr>
					<div class="form-group prr">
						<label class="control-label col-sm-4" for="name">Username:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control"	 placeholder="Firstname" name="fname">
						</div>
					</div>
					<div class="form-group prr">
						<label class="control-label col-sm-4" for="password">Password:</label>
						<div class="col-sm-10">
							<input type="password" class="form-control"	 placeholder="Password" name="password">
						</div>
					</div>
					<div class="form-group prr">
						<label class="control-label col-sm-4" for="cpwd">Confirmed-Password:</label>
						<div class="col-sm-10">
							<input type="password" class="form-control"	 placeholder="Confirmed-Password" name="cpwd">
						</div>
					</div>
					<div class="form-group prr">
						<label class="control-label col-sm-4" for="name">Firstname:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control"	 placeholder="Firstname" name="fname">
						</div>
					</div>
					<div class="form-group prr">
						<label class="control-label col-sm-4" for="lname">Lastname:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" placeholder="Lastname" name="lname">
						</div>
					</div>
					<div class="form-group prr">
						<label class="control-label col-sm-4" for="email">Email:</label>
						<div class="col-sm-10">          
							<input type="email" class="form-control" placeholder="Email" name="email">
						</div>
					</div>
					<div class="form-group prr">        
						<label class="control-label col-sm-4" for="address">Address:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" placeholder="Address" name="address">
						</div> 
					</div>
					<div class="form-group prr">        
						<label class="control-label col-sm-4" for="phone-number">Phone Number:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" placeholder="Phone Number" name="phone-number">
						</div> 
					</div>
					<div class="form-group prr">        
						<label class="control-label col-sm-4" for="company-name">Company Name:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" placeholder="Company Name" name="company-name">
						</div> 
					</div>
					<div class="form-group prr">        
						<label class="control-label col-sm-4" for="no-of-employees">Number of Employees:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" placeholder="Number of Employees" name="no-of-employees">
						</div> 
					</div>
					<div class="form-group prr">
						<label class="control-label col-sm-4">Current Payroll System </label>
						<div class="col-sm-10" >
						<select name="payroll-system" id="dropdown">
						    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Manual</button>
							<ul class="dropdown-menu " role="menu" aria-labelledby="menu1">
							<option class="dropdown-header">Manual</option>
							<option value="peach-tree">Peach Tree</option>
							<option value="quick-books">Quick Books</option>
							<option value="other">Other</option>
							</ul>
						</select>
						</div>
					</div>
					<div class="form-group prr">        
						<label class="control-label col-sm-4" for="book-keeper">Book Keeper/Accountant Name:</label>
						<div class="col-sm-10">          
							<input type="text" class="form-control" placeholder="Book Keeper/Accountant Name" name="book-keeper">
						</div> 
					</div>
					<div class="form-group prr">
						<label class="control-label col-sm-4">Are you a CPA?</label>
						<div class="col-sm-10">
						    <label class="radio-inline">
								<input type="radio" name="optradio">Yes
							</label>
							<label class="radio-inline">
								<input type="radio" name="optradio">No
							</label>
						</div>
					</div>
					<div class="form-group text-center r">        
						<button type="submit" class="btn btn-primary r">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
		