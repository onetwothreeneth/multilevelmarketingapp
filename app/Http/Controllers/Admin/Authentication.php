<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 

class Authentication extends Controller
{ 
    public function index(){ 
       return view('admin.auth.login.index'); 
    }  
    public function check(Request $request){
        if (Auth::attempt([
                'email_address' => $request->post('email'), 
                'password'      => $request->post('password'),
                'type'          => 'admin'
        ],false)) {
  
            $request->session()->put('type','admin');
            return redirect()
                ->route('admin.auth.login')
                ->with([
                    "success" => "Authenticated"
                ]);

        } else {

            return redirect()
                ->route('admin.auth.login')
                ->with([
                    "error" => "Invalid login credentials !"
                ]);

        } 
    }   
    public function logout(Request $request){ 
        Auth::logout(); 

        return redirect()
            ->route('admin.auth.login')
            ->with([
                "success" => "You have successfully logged out to your account !"
            ]); 
    } 
}  