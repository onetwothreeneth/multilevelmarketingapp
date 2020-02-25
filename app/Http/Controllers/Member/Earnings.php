<?php

namespace App\Http\Controllers\Member; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 
use App\Models\Earnings as Earn; 

class Earnings extends Controller
{
    public function index(){ 
       return view('member.earnings.index')
            ->with([ 
                "earnings"  => Earn::whereIn('user_id',[Auth::id()])->orderBy('updated_at','DESC')->get(),
                "info"      => User::find(Auth::id()),
                "users"     => User::whereIn('type',['affiliate'])->whereIn('status',[1])->count(),
                "title"     => "Earnings",
                "header"    => "Summary",
                "sub"       => "Welcome LML",
                "active"    => "myearnings",
                "subactive" => "summary"
            ]); 
    }  
}  