<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;
use Illuminate\Routing\Redirector;

class cart_controller extends Controller
{
    
    public function getCart()
    {

        if (Request::isMethod('post')) {
            $product_id = Request::get('product_id');
            $product = Product::find($product_id);
            $id = uniqid();
            $item = [
                'id' => $product_id, 
                'name' => $product->title, 
                'qty' => 1, 
                'price' => $product->price,
                'options'=>[
                    'product_type' => $product->product_type,
                    'unique_id' => $id
                ]
            ];
        
            Cart::add($item);
        }

        $cart = Cart::content();
        return redirect('cart');
    }

    public function cart_view(){
        $items = Cart::content();

        return view('pages.cart')->with(compact('items'));
    }
    public function remove_cart(){
        $rowId = Cart::search(array('id' => Request::get('product_id')));
        Cart::remove($rowId[0]);
        return redirect('cart');
    }
    public function increase_cart(){
        $qty = $_POST['quantity'];
        $id = $_POST['rowid'];

        Cart::update($id, $qty);
        $cart = Cart::content();
        return 'success';

    }
}
