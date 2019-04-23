<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function list(){
        
        $customers = \App\Customer::all();

    
        return view('index', [
            'customers' => $customers,
        ]);
        
    }


    public function store(){
        
        $customer = new Customer();
        $customer->name = request('name');
        $customer->save();

        return back();
        
    }
}
