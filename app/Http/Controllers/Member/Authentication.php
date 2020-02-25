<?php

namespace App\Http\Controllers\Member; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 

class Authentication extends Controller
{ 
    public function index(){ 
       return view('member.auth.login.index'); 
    }  
    public function check(Request $request){
        if (Auth::attempt([
                'mem_id' => $request->get('email'), 
                'password'      => $request->get('password'),
                'type'          => 'affiliate',
                'status'        => '1'
        ],false)) {
            $request->session()->put('type','member');
            return redirect()
                ->route('member.auth.login')
                ->with([
                    "success" => "Authenticated"
                ]);

        } else {

            return redirect()
                ->route('member.auth.login')
                ->with([
                    "error" => "Invalid login credentials !"
                ]);

        } 
    }   
    public function logout(Request $request){ 
        Auth::logout(); 

        return redirect()
            ->route('member.auth.login')
            ->with([
                "success" => "You have successfully logged out to your account !"
            ]); 
    } 
}  