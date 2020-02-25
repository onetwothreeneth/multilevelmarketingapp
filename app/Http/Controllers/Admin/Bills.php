<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 

class Bills extends Controller
{
    public function index(){ 
       return view('admin.bills.index')
            ->with([ 
                "info"      => User::find(Auth::id()),
                "title"     => "Bills & Payment",
                "header"    => "Transaction Logs",
                "sub"       => "Bills & Payment",
                "active"    => "billspayment",
                "subactive" => "receipts"
            ]); 
    }    
}  