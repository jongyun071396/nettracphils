<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart,App,Redirect;

class paypal extends Controller
{
    private $cart;
    private $token;
    private $http_headers;

    public function __construct() {
        $this->cart = Cart::content();
        $this->token = $this->get_token();
        $this->http_headers = [
            'Content-Type: application/json',
            'Authorization: Bearer '.$this->token
        ];
    }

    public function create_payment() {
        $payment = json_decode($this->payment());
        // echo '<pre>'; print_r($payment); echo '</pre>';exit();
        return $payment;
    }

    public function execute_payment($input) {
        $url = env('PAYPAL_URL').'v1/payments/payment/'.$input['paymentId'].'/execute';
        $data = '{ "payer_id" : "'.$input['PayerID'].'" }';
        // curl php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->http_headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        return json_decode($response);
    }

    public function payment() {
        $items = [];
        $tax_rate = 0;
        $cart_total = str_replace(',', '', Cart::total());
        $tax = number_format($cart_total * $tax_rate, 2);
        $total = number_format($cart_total + $tax, 2);
        // add each cart items  to items array
        foreach (Cart::content() as $key => $value) {
            $temp = [];
            $temp['name'] = $value->name;
            $temp['quantity'] = 1;
            $temp['price'] = $value->price * $value->qty;
            $temp['sku'] = $value->id;
            $temp['currency'] = 'PHP';
            $items[] = $temp;
        }
        // prepare data
        $data = [
            'intent' => 'sale',
            'redirect_urls' => [
                'return_url' => url('checkout-process'),
                'cancel_url' => url('cart') 
            ],
            'payer' => [
                'payment_method' => 'paypal'
            ],
            'transactions' => [
                [
                    'amount' => [
                        'total' => $total,
                        'currency' => 'PHP',
                        'details' => [
                            'subtotal' => Cart::total(),
                            'tax' => $tax
                        ]
                    ],
                    'description' => 'Nettrac service purchase.',
                    'item_list' => [
                        'items' => $items
                    ]
                ]
            ]
        ];
       /* echo '<pre>';
            print_r($data);
        echo '</pre>';exit();*/
        // curl php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, env('PAYPAL_URL').'v1/payments/payment');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->http_headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        return $response;
    }
    public function get_token() {
        $url = env('PAYPAL_URL').'v1/oauth2/token';
        $post_fields = 'grant_type=client_credentials';
        $user_password = env('PAYPAL_CLIENT_ID').':'.env('PAYPAL_SECRET');

        // php curl
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
        curl_setopt($ch, CURLOPT_USERPWD, $user_password);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $json = json_decode($response);
        $token = $json->access_token;

        return $token;
    }
}
