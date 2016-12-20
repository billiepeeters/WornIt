<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index(){
        
        return view('shoppingcart.index');
    }
    
    public function edit(){
        
        return view ('shoppingcart.edit');
    }
    
    public function remove(){
        
        return view ('shoppingcart.remove');
    }
}
