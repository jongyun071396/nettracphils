<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use DB;
use App\Product;
use Illuminate\Http\Request;
use Cart;


class PagesController extends Controller
{	
	public function __invoke() {
		return null !== request()->segment(1) ? view('pages.'.request()->segment(1)) : view('pages.home');
	}

    public function index(){

        $products = Product::all()->groupBy('product_type');

        return view('pages.home')->with( compact('products') );

    }
    //login.blade.php
	public function authenticate(Request $request) {
		$username = $request->input('username');
		$password = $request->input('password');

        if (auth()->attempt(['username' => $username, 'password' => $password])) {
            if (auth()->check())
			{
				$value =session()->get($username);
				echo 'Welcome '.$username; 
			}
        }
        else {
        	return 'Something went wrong.';
        }
    }

    public function register(Request $request){
    	$first_name   = $request->input('fName');
        $last_name    = $request->input('lName');
        $company_name = $request->input('comp_name');
        $phone_number = $request->input('phone_number');
        $city         = $request->input('city');
        $state        = $request->input('state');
        $address1     = $request->input('address1');
        $address2     = $request->input('address2');
        $zip          = $request->input('zip');
        $email_add    = $request->input('email_add');
        $username     = $request->input('username');
        $password     = $request->input('password');

    	$data = [
    				'fName'       => $first_name,
                    'lName'       => $last_name,
                    'comp_name'   => $company_name,
                    'phone_number'=> $phone_number,
                    'city'        => $city,
                    'state'       => $state,
                    'address1'    => $address1,
                    'address2'    => $address2,
                    'zip'         => $zip,
                    'email_add'   => $email_add,
                    'username'    => $username,
    				'password'    => bcrypt($password),
    				
    		];

    	DB::table('users')->insert($data);

    	return redirect('customer_login')->with(compact('data') );
    }
    public function customer_login(){
        return view('pages.customer_login');
    }

    public function checkout(){
        $total_items = count(Cart::content());
        return view('pages.checkout')->with(compact('total_items'));
    }
    public function payment_login(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');

        if (auth()->attempt(['username' => $username, 'password' => $password])) {
            // Authentication passed...
            if (auth()->check())
            {
                return redirect('checkout');
            }
            else
            {
                return redirect('customer_login');
            }
        }
    }
    public function sign_out()
    {
        auth()->logout();
        return redirect('customer_login');
    }
}
