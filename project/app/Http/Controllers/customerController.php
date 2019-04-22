<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function list(){
        
        $customers = \App\Customer::all();

    
        return view('index', [
            'customers' => $customers,
        ]);
        
    }
}
