<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;



class ProductController extends Controller
{
   public function index()
   {
       
       $product = \App\Product::all();
       $data['products'] = $product;

       
       return view('products.overview', compact($data));
    
   } 
}

