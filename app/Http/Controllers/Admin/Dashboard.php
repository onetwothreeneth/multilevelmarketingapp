<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 

class Dashboard extends Controller
{
    public function index(){ 
       return view('admin.dashboard.index')
            ->with([ 
                "info"      => User::find(Auth::id()),
                "users"     => User::whereIn('type',['affiliate'])->whereIn('status',[1])->count(),
                "title"     => "Dashboard",
                "header"    => "Dashboard Summary",
                "sub"       => "Welcome LML",
                "active"    => "dashboard",
                "subactive" => "none"
            ]); 
    }  
}  