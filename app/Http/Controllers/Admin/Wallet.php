<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 

class Wallet extends Controller
{
    public function index(){ 
       return view('admin.wallet.index')
            ->with([ 
                "info"      => User::find(Auth::id()),
                "title"     => "Wallet",
                "header"    => "Wallet History",
                "sub"       => "Wallet Management",
                "active"    => "mywallet",
                "subactive" => "history"
            ]); 
    }  
    public function reload(){ 
       return view('admin.wallet.reload.index')
            ->with([ 
                "info"      => User::find(Auth::id()),
                "title"     => "Wallet",
                "header"    => "Topup Affiliate",
                "sub"       => "Wallet Management",
                "active"    => "mywallet",
                "subactive" => "topup"
            ]); 
    }  
}  