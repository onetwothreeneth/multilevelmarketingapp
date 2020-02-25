<?php

namespace App\Http\Controllers\Member; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 
use App\Models\Earnings; 
use App\Models\Withdrawals; 

class Withdrawal extends Controller
{
    public function index(){ 
       return view('member.withdrawals.index')
            ->with([  
                "balance"   => (Earnings::whereIn('user_id',[Auth::id()])->sum('total') - Withdrawals::whereIn('user_id',[Auth::id()])->whereIn('status',['paid'])->sum('total')),
                "info"      => User::find(Auth::id()),
                "title"     => "Withdrawals",
                "header"    => "Requests",
                "sub"       => "My Withdrawal",
                "active"    => "mywithdrawal",
                "subactive" => "requests"
            ]); 
    }  
    public function invoices(){ 
       return view('member.withdrawals.invoices.index')
            ->with([  
                "data"      => Withdrawals::whereIn("user_id",[Auth::id()])->get(),
                "info"      => User::find(Auth::id()),
                "title"     => "Invoices",
                "header"    => "Invoices Table",
                "sub"       => "My Withdrawal",
                "active"    => "mywithdrawal",
                "subactive" => "invoices"
            ]); 
    }  
    public function add(Request $request){ 
        
        $with           = new Withdrawals;
        $with->user_id  = Auth::id();
        $with->fullname = $request->post('name');
        $with->contact  = $request->post('contact');
        $with->address  = $request->post('address');
        $with->total    = $request->post('amount');
        $with->notes    = $request->post('notes');
        $with->status   = 'Pending';

        if($with->save()){

            return redirect()
                ->route('member.withdrawal.invoices')
                ->with([
                    "success" =>  "Withdrawal Request has been submitted for review"
                ]);

        } else {
            return redirect()
                ->route('member.withdrawal')
                ->with([
                    "error" => "Something wen't wrong !"
                ]); 
        }
    }  
}  