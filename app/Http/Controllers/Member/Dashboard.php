<?php

namespace App\Http\Controllers\Member; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 
use App\Models\Tables; 
use App\Models\Earnings; 
use App\Models\Withdrawals; 

class Dashboard extends Controller
{
    public function index(){ 
       return view('member.dashboard.index')
            ->with([ 
                "summary"   => array(
                    "invites"     => Tables::whereIn('parent',[Auth::id()])->count(),
                    "earnings"    => Earnings::whereIn('user_id',[Auth::id()])->sum('total'),
                    "withdrawals" => Withdrawals::whereIn('user_id',[Auth::id()])->whereIn('status',['paid'])->sum('total'),
                    "balance"     => (Earnings::whereIn('user_id',[Auth::id()])->sum('total') - Withdrawals::whereIn('user_id',[Auth::id()])->whereIn('status',['paid'])->sum('total')),
                ),
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