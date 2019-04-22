<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function list(){

        $customers = [
            "Alex",
            "Albert",
            "Dade",
        ];
    
        return view('index', [
            'customers' => $customers,
        ]);
        
    }
}
