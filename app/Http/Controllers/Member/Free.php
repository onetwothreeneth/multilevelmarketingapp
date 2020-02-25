<?php

namespace App\Http\Controllers\Member; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 

class Free extends Controller
{
    public function index(){ 
       return view('member.free.index')
            ->with([ 
                "info"      => User::find(Auth::id()), 
                "title"     => "Free Accounts",
                "header"    => "Free Accounts",
                "sub"       => "Accounts Management",
                "active"    => "freeaccounts",
                "subactive" => "none"
            ]); 
    }  
}  