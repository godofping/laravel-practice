<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function list(){
        

        $activeCustomers = \App\Customer::Active()->get();
        $inactiveCustomers = \App\Customer::Inactive()->get();

    
        return view('customers', compact('activeCustomers','inactiveCustomers'));
        
    }


    public function store(){

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
        ]);
        
        Customer::create($data);

        return back();
        
    }
}
