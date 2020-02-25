<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 

use App\Models\User; 
use App\Models\Coms; 

class Settings extends Controller
{
    public function commission(){ 
       return view('admin.settings.commission.index')
            ->with([ 
                "commission"=> Coms::all(),
                "info"      => User::find(Auth::id()),
                "title"     => "Settings",
                "header"    => "Update",
                "sub"       => "Commission Setup",
                "active"    => "commision",
                "subactive" => "none"
            ]); 
    }  
    public function com_save(Request $request){
        if ($request->post()) {

            $counter = 1; 
            $errors  = 0;

            foreach ($request->post() as $k => $v) {
                if($k != '_token'){

                    $com             = Coms::find($counter);
                    $com->meta_value = $v;
                    if (!$com->save()) {
                        $errors = $errors + 1;
                    }

                    $counter = $counter + 1; 
                }
            }

        }

        if ($errors >= 1) {
            return redirect()
                ->route('admin.settings.commission')
                ->with([
                    "error" => "Something wen't wrong !"
                ]); 
        } else {
            return redirect()
                ->route('admin.settings.commission')
                ->with([
                    "success" => "All datas are successfully saved !"
                ]); 
        }
        
    }   
    public function account(){ 
       return view('admin.settings.account.index')
            ->with([ 
                "info"      => User::find(Auth::id()),
                "title"     => "Settings",
                "header"    => "Settings",
                "sub"       => "Account Setup",
                "active"    => "account",
                "subactive" => "none"
            ]); 
    }     
}  