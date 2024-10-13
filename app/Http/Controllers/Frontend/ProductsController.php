<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('frontend.products.product');
    }
    public function productDetails(){

        return view('frontend.products.product-details');
    }
}
