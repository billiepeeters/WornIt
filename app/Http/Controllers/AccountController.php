<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return view('account.index');
    }
    
    public function edit(){
        return view('account.edit');
    }
    
    public function remove(){
        return view('account.remove');
    }
}
