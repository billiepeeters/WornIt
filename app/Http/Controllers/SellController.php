<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
{
    public function index(){
        
        return view('sell.index');
    }
    
    public function add(){
        
        return view('sell.add');
    }
    
    public function edit(){
        
        return view('sell.edit');
    }
    
    public function remove(){
        
        return view('sell.remove');
    }
    
    
}
