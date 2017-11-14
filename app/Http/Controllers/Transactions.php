<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckOut;
use Cart;
use App\Http\Requests,App;
use Input;


class Transactions extends Controller
{
    private $paypal;
    private $psigate;
	public function __construct() {
        $this->paypal = new paypal;
        // $this->psigate = new Psigate;
    }

    public function paypal_checkout_process() {
        if (!Input::has('paymentId') || !Input::has('PayerID')) {
            return app()->abort(404);
        }
        $input = Input::only('paymentId', 'PayerID');
        $response = $this->paypal->execute_payment($input);

        // if payment is successfull, redirect to thank you
        if (isset($response->debug_id)) {
            $error['file'] = debug_info('file');
            $error['line'] = debug_info('line');
            $error['msg'] = $response->message;
            $error['ip'] = request()->ip();
            email_admin($error);

            return app()->abort(404);
        } else {
            $this->finish_transaction($response->id);
            return Redirect::to('thank-you');
        }
    }
    
    public function checkout(CheckOut $request) {
       
        /* Save temporarily, then update later */
        // check if user is logged in
        if (Auth::check()) {
            // get user id
            $user_id = Auth::user()->id;
            $customer = User::where(['id' => $user_id])->first();
            $customer_id = $customer->id;
            $country = $customer->country_id;
        } 
        //else {
            // create user & customer
        //     $user = $this->create_user($request);
        //     $customer = $this->create_customer($request, $user->id);
        //     $customer_id = $customer->id;
        //     $country = $request->input('country');
        // }

        /* Payment Method */
        $cart = Cart::content();
        // if PayPal login
        if ($request->input('payment_method') == 'paypal') {
            // call PP payment API 
            $payment = $this->paypal->create_payment();


            // if paypal has error, notify admin
            if (isset($payment->debug_id)) {
                $error['file'] = debug_info('file');
                $error['line'] = debug_info('line');
                $error['msg'] = 'Paypal: ' . json_encode($payment);
                $error['ip'] = request()->ip();
                email_admin($error);
                return app()->abort(500);
            }

            $redirect_link = $payment->links[1]->href;
            // dd($redirect_link);

            // create transaction
            $this->create_transaction($cart, 'paypal', $request, $payment, $customer_id);

            return redirect($redirect_link);
        } else {
            // else, credit card (Psigate)
            $psigate_response = $this->psigate->checkout($request, $country, $customer_id);
            if ($psigate_response->ErrMsg == '') {
                $this->create_transaction($cart, 'psigate', $request, $psigate_response, $customer_id);
                $this->finish_transaction($psigate_response->OrderID);
                return Redirect::to('thank-you');
            } else {
                /*
                * remove added user and customer when failed
                */
                if(!Auth::check()){
                    $this->remove_user($user->id);
                    $this->remove_customer($customer_id);
                }
                
                $error_msg = substr($psigate_response->ErrMsg, strpos($psigate_response->ErrMsg, ':') + 1);
                return Redirect::back()->withInput()->withErrors(['error_msg' => $error_msg]);
            }
        }
    }
    public function thank_you() {
        return 'thank you';
    }
    public function success_transactions(){
        $itemNo            = $_REQUEST['item_number'];
        $itemTransaction   = $_REQUEST['tx']; // Paypal transaction ID
        $itemPrice         = $_REQUEST['amt']; // Paypal received amount
        $itemCurrency      = $_REQUEST['cc']; // Paypal received currency type
         
        $price = '20.00';
        $currency='USD';
         
        if($itemPrice==$price && $itemCurrency==$currency)
        {
            echo "Payment Successful";
        }
        else
        {
            echo "Payment Failed";
        }
    }

}
