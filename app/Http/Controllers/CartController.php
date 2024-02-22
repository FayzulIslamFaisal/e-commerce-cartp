<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {

        $cartItems = Cart::instance('cart')->content();
        return view('cart.cartitem',compact('cartItems'));
    }

    public function addToCart(Request $request){
        // dd($request);
        $product = Product::find($request->id);
        $price = $product->sale_price ? $product->sale_price : $product->regular_price;
        Cart::instance('cart')->add($product->id, $product->name, $product->quantity,$price )->associate('App\Models\Product');
        return redirect()->route('cart.index')->with('message','Product Item Successfully Add To Cart');
    }
}
