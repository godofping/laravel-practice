<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function list(){
        

        $activeCustomers = \App\Customer::where('active', 1)->get();
        $inactiveCustomers = \App\Customer::where('active', 0)->get();

    
        return view('customers', compact('activeCustomers','inactiveCustomers'));
        
    }


    public function store(){

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
        ]);
        
        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->active = request('active');
        $customer->save();

        return back();
        
    }
}
