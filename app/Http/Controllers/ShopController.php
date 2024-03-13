<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {
        $products = Product::orderBy('id','desc')->simplePaginate(10);
        return view('shop.shop',compact('products'));
    }
    public function productDetails($id)  {

        // dd($id);
        $product = Product::where('id',$id)->first();
        $ranProducts = Product::where('id', '!=', $id)->inRandomOrder()->take(4)->get();
        return view('shop.detail',compact('product','ranProducts'));

    }
}
