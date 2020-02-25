<?php

namespace App\Http\Controllers\Member; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 
use Hash;

use App\Models\User; 
use App\Models\Tables; 
use App\Models\Coms; 
use App\Models\Earnings; 
use App\Models\User_meta; 

class Invites extends Controller
{
    public function index(){ 
       return view('member.invites.index')
            ->with([  
                "info"      => User::find(Auth::id()),
                "title"     => "Invites",
                "header"    => "Invites Table",
                "sub"       => "Welcome LML",
                "active"    => "myinvites",
                "subactive" => "none"
            ]); 
    }  
    public function edit(){ 
       return view('member.invites.edit.index')
            ->with([  
                "info"      => User::find(Auth::id()),
                "title"     => "Update Invites",
                "header"    => "Invites Table",
                "sub"       => "Welcome LML",
                "active"    => "myinvites",
                "subactive" => "none"
            ]); 
    }   
    public function add_invite(Request $request){   
        $a = User::where('mem_id','=',$request->post('user_id'));
        $num  = $a->count(); 
        
        if($num >= 1){ 
            $b = User::where('mem_id','=',$request->post('user_id'))
                     ->where('temp','=',$request->post('password'));
            $numb  = $b->count();

            if ($numb >= 1) {
                $info = $b->first();
                
                if($info->status == 1){
                    
                     
                    $c = Tables::where('node','=',$info->id);
                    $numc  = $c->count(); 
                    
                    if($numc <= 0){ 

                        // if ($request->post('level') >= 2) {
                        //     # code...
                        // } else {

                            $table = new Tables;
                            $table->parent   = $request->post('id');
                            $table->node     = $info->id;
                            $table->position = $request->post('position');
                            $table->level    = $request->post('level');
                            $table->status   = 1;
                            $table->save();


                            if ($request->post('level') == 1) {
                                $bonus = Coms::where('meta_key','=','level_1')->first()->meta_value;
                                $type = "Level 1 direct invite bonus. ";
                            } elseif ($request->post('level') == 2)  {
                                $bonus = Coms::where('meta_key','=','level_2')->first()->meta_value;
                                $type = "Level 2 direct invite bonus. ";
                            } elseif ($request->post('level') == 3)  {
                                $bonus = Coms::where('meta_key','=','level_3')->first()->meta_value;
                                $type = "Level 3 direct invite bonus. ";
                            } elseif ($request->post('level') == 4)  {
                                $bonus = Coms::where('meta_key','=','level_4')->first()->meta_value;
                                $type = "Level 4 direct invite bonus. ";
                            } 
                            
                            $earnings                  = new Earnings;
                            $earnings->user_id         = $request->post('id');
                            $earnings->type            = $type;
                            $earnings->referrer_mem_id = $info->id;
                            $earnings->referred_mem_id = $info->id;
                            $earnings->total           = $bonus; 
                            $earnings->save();


                            $exit_checker = Tables::whereIn('parent',[Auth::id()])->count();
                            if ($exit_checker == 14) {

                                $earnings                  = new Earnings;
                                $earnings->user_id         = $request->post('id');
                                $earnings->type            = "Table Exit Bonus";
                                $earnings->referrer_mem_id = $info->id;
                                $earnings->referred_mem_id = $info->id;
                                $earnings->total           = Coms::where('meta_key','=','exit')->first()->meta_value; 
                                $earnings->save();


                                for($i = 1; $i <= 2; $i++){ 
                                    $errors = true;
                                    $temp = substr(uniqid('', true), -5);
                                    $user = new User;
                                    
                                        $id_checker = User::where('mem_id','LIKE','%FREE%')
                                              ->orderBy('id', 'DESC') 
                                              ->limit(1) 
                                              ->first();

                                    if ($id_checker) {
                                        if ($id_checker->id < 9) {
                                            $id = 'FREE'."-00000".($id_checker->id + 1);
                                        } elseif ($id_checker->id >= 10 && $id_checker->id <= 99) {
                                            $id = 'FREE'."-0000".($id_checker->id + 1);
                                        } elseif ($id_checker->id >= 100 && $id_checker->id <= 999) {
                                            $id = 'FREE'."-000".($id_checker->id + 1);
                                        } elseif ($id_checker->id >= 1000 && $id_checker->id <= 9999) {
                                            $id = 'FREE'."-00".($id_checker->id + 1);
                                        }  elseif ($id_checker->id >= 10000 && $id_checker->id <= 99999) {
                                            $id = 'FREE'."-0".($id_checker->id + 1);
                                        }  else {
                                            $id = 'FREE'."-".($id_checker->id + 1);
                                        }  
                                        
                                    } else{
                                        $id = 'FREE'."-000001";
                                    }

                                    $user->mem_id        = $id;
                                    $user->first_name    = 'none';
                                    $user->middle_name   = 'none';
                                    $user->last_name     = 'none';
                                    $user->email_address = 'none';
                                    $user->password      = Hash::make($temp);
                                    $user->temp          = $temp;
                                    $user->type          = 'affiliate';
                                    $user->status        = 1; 
                                    $user->save();


                                    $earnings                  = new Earnings;
                                    $earnings->user_id         = $request->post('id');
                                    $earnings->type            = "FREE ACCOUNT - MEMBERSHIP ID : ".$id.", TEMPORARY PASSWORD : ".$temp;
                                    $earnings->referrer_mem_id = $info->id;
                                    $earnings->referred_mem_id = $info->id;
                                    $earnings->total           = 0; 
                                    $earnings->save();
                                     
                                    foreach ($request->post() as $key => $value) {
                                        
                                        $meta             = new User_meta;
                                        $meta->user_id    = $id;
                                        $meta->meta_key   = $key;
                                        $meta->meta_value = $value;
                                        $meta->save();

                                    }
                                    
                                }
                            }

                            return redirect()
                                ->route('member.invites.tree')
                                ->with([
                                    "success" => "Invite is successfully added into your table"
                                ]); 

                        // }
    
                    } else { 
                        return redirect()
                            ->route('member.invites.tree')
                            ->with([
                                "error" => "User ID is registered already on a table !"
                            ]); 
                    }
                    
                } else { 
                    return redirect()
                        ->route('member.invites.tree')
                        ->with([
                            "error" => "User ID is not yet active !"
                        ]);     
                }
            } else { 
                return redirect()
                    ->route('member.invites.tree')
                    ->with([
                        "error" => "Incorrect Password !"
                    ]);     
            } 
        } else { 
            return redirect()
                ->route('member.invites.tree')
                ->with([
                    "error" => "User does not exist !"
                ]);     
        }  
    }
}  