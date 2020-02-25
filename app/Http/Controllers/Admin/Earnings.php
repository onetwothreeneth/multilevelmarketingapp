<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 

class Earnings extends Controller
{
    public function index(){ 
       return view('admin.earnings.index')
            ->with([ 
                "info"      => User::find(Auth::id()),
                "title"     => "Earnings",
                "header"    => "Summary",
                "sub"       => "Earnings Reports",
                "active"    => "myearnings",
                "subactive" => "summary"
            ]); 
    }     
}  