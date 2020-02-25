<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 
use App\Models\Withdrawals; 

class Withdrawal extends Controller
{
    public function index(){ 
       return view('admin.withdrawal.index')
            ->with([ 
                "data"      => Withdrawals::all(),
                "info"      => User::find(Auth::id()),
                "title"     => "Withdrawals",
                "header"    => "Affiliate Requests",
                "sub"       => "Withdrawal Management",
                "active"    => "mywithdrawal",
                "subactive" => "requests"
            ]); 
    }     
    public function update(Request $request,$id){ 
        
        $with           = Withdrawals::find($id); 
        $with->status   = $request->post('status');

        if($with->save()){

            return redirect()
                ->route('admin.withdrawal.request')
                ->with([
                    "success" =>  "Withdrawal Status has been approved !"
                ]);

        } else {
            return redirect()
                ->route('admin.withdrawal.request')
                ->with([
                    "error" => "Something wen't wrong !"
                ]); 
        }
    }     
}  