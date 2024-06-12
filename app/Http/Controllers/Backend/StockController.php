<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;


class StockController extends Controller
{
    public function Stock(){
        $product = Product::latest()->get();
        $customer = Customer::latest()->get();
        return view('backend.stock.stock_page',compact('product','customer'));

    } // End Method 

}
