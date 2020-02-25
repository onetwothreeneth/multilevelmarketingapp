<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request;   
use Illuminate\Support\Facades\Input;  
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller; 
use Hash;

use App\Models\User; 
use App\Models\User_meta; 

class Affiliate extends Controller
{ 
    public function masssave(Request $request){
        
        for($i = 1; $i <= $request->post('count'); $i++){ 
            $errors = true;
            $temp = substr(uniqid('', true), -5);
            $user = new User;
            
                $id_checker = User::where('mem_id','LIKE','%'.$request->post('mem_id').'%')
                      ->orderBy('id', 'DESC') 
                      ->limit(1) 
                      ->first();

            if ($id_checker) {
                if ($id_checker->id < 9) {
                    $id = $request->post('mem_id')."-00000".($id_checker->id + 1);
                } elseif ($id_checker->id >= 10 && $id_checker->id <= 99) {
                    $id = $request->post('mem_id')."-0000".($id_checker->id + 1);
                } elseif ($id_checker->id >= 100 && $id_checker->id <= 999) {
                    $id = $request->post('mem_id')."-000".($id_checker->id + 1);
                } elseif ($id_checker->id >= 1000 && $id_checker->id <= 9999) {
                    $id = $request->post('mem_id')."-00".($id_checker->id + 1);
                }  elseif ($id_checker->id >= 10000 && $id_checker->id <= 99999) {
                    $id = $request->post('mem_id')."-0".($id_checker->id + 1);
                }  else {
                    $id = $request->post('mem_id')."-".($id_checker->id + 1);
                }  
                
            } else{
                $id = $request->post('mem_id')."-000001";
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
             
            foreach ($request->post() as $key => $value) {
                
                $meta             = new User_meta;
                $meta->user_id    = $id;
                $meta->meta_key   = $key;
                $meta->meta_value = $value;
                $meta->save();

            }
            
        }
        
        if($errors){

            return redirect()
                ->route('admin.affiliates.list')
                ->with([
                    "success" =>  $request->post('count')." Affiliates ID has been generated !"
                ]);

        } else {
            return redirect()
                ->route('admin.affiliates.list')
                ->with([
                    "error" => "Something wen't wrong !"
                ]); 
        }
    }
    public function mass(Request $request){  
        return view('admin.affiliates.mass.index')
            ->with([  
                "info"      => User::find(Auth::id()), 
                "title"     => "Affiliates",
                "header"    => "Mass Affiliate Registration",
                "sub"       => "Affiliate Management",
                "active"    => "affiliates",
                "subactive" => "mass"
            ]); 
    }
    public function table(Request $request,$id){  
        return view('admin.affiliates.tree.index')
            ->with([  
                "info"      => User::find(Auth::id()),
                "data"      => User::find($id),
                "title"     => "Affiliates",
                "header"    => "All Affiliates",
                "sub"       => "Affiliate Management",
                "active"    => "affiliates",
                "subactive" => "listed"
            ]); 
    }
    public function index(){   

        $aff  = User::whereIn('type',['affiliate'])->whereIn('status',[1,2])->get();
        $data = array();
        if($aff){
            foreach ($aff as $k => $v) {
                array_push(
                    $data, 
                    array(
                        "info"    => $v,
                        "metas"   => User_meta::whereIn('user_id',[$v->mem_id])->get(),
                        "invites" => User::whereIn('invited_by',[$v->id])->whereIn('status',[1])->count()
                ));
            }
        }

        return view('admin.affiliates.index')
            ->with([ 
                "total"     => User::whereIn('type',['affiliate'])->count(),
                "activea"   => User::whereIn('type',['affiliate'])->whereIn('status',[1,2])->count(),
                "inactive"  => User::whereIn('type',['affiliate'])->whereIn('status',[0])->count(),
                "invites"   => User::whereIn('type',['affiliate'])->where('invited_by','!=','')->count(),
                "data"      => $data,
                "info"      => User::find(Auth::id()),
                "title"     => "Affiliates",
                "header"    => "All Affiliates",
                "sub"       => "Affiliate Management",
                "active"    => "affiliates",
                "subactive" => "listed"
            ]); 
    }   
    public function new(){ 
        return view('admin.affiliates.new.index')
            ->with([ 
                "info"      => User::find(Auth::id()),
                "title"     => "Affiliates",
                "header"    => "Add new",
                "sub"       => "Affiliate Management",
                "active"    => "affiliates",
                "subactive" => "addnew"
            ]); 
    } 
    public function edit(Request $request,$id){  
        return view('admin.affiliates.edit.index')
            ->with([ 
                "info"      => User::find(Auth::id()),
                "data"      => User::whereIn('type',['affiliate'])->whereIn('status',[1,2])->get(),
                "user"      => User::find($id),
                "meta"      => User_meta::whereIn("user_id",[User::find($id)->mem_id])->get(),
                "title"     => "Affiliates",
                "header"    => "Edit info",
                "sub"       => "Affiliate Management",
                "active"    => "affiliates",
                "subactive" => "listed"
            ]); 
    }   
    public function invite(){ 
        return view('admin.affiliates.new.invite')
            ->with([ 
                "data"      => User::whereIn('type',['affiliate'])->whereIn('status',[1,2])->get(),
                "info"      => User::find(Auth::id()),
                "title"     => "Affiliates",
                "header"    => "Add new Invite",
                "sub"       => "Affiliate Management",
                "active"    => "affiliates",
                "subactive" => "addinvite"
            ]); 
    }    
    public function update(Request $request,$id){

        $user = User::find($id);

        if(Input::file('photo')){    
            $file = Input::file('photo'); 
            $file->move('public/images/admin/profile' , $file->getClientOriginalName()); 
            $img  = 'public/images/admin/profile/'.$file->getClientOriginalName();

            $user->photo = $img;
        } 
   
        $user->first_name    = $request->post('fname');
        $user->middle_name   = $request->post('mname');
        $user->last_name     = $request->post('lname');
        $user->email_address = $request->post('email');
        $user->status        = $request->post('status');

        if($request->post('password')){   
            $user->password      = Hash::make($request->post('password'));
        }
        if($user->save()){
            
            $meta = User_meta::whereIn("user_id",[$request->post('mem_id')]);

            if($meta->delete()){

                foreach ($request->post() as $key => $value) {
                    
                    $meta             = new User_meta;
                    $meta->user_id    = $request->post('mem_id');
                    $meta->meta_key   = $key;
                    $meta->meta_value = $value;
                    $meta->save();

                }

                return redirect()
                    ->route('admin.affiliates.list')
                    ->with([
                        "success" => "Affiliate account has been saved !"
                    ]);
            } else {
                return redirect()
                    ->route('admin.affiliates.list')
                    ->with([
                        "error" => "Something went wrong !"
                    ]); 
            }

        } else {
            return redirect()
                ->route('admin.affiliates.list')
                ->with([
                    "error" => "Something went wrong !"
                ]); 
        }
    }
    public function savenew(Request $request){

        $user = new User;

        if(Input::file('photo')){    
            $file = Input::file('photo'); 
            $file->move('public/images/admin/profile' , $file->getClientOriginalName()); 
            $img  = 'public/images/admin/profile/'.$file->getClientOriginalName();

            $user->photo = $img;
        } 
        if($request->post('invited_by')){   
            $user->invited_by = $request->post('invited_by');
        }


        $id_checker = User::where('mem_id','LIKE','%'.$request->post('mem_id').'%')
                  ->orderBy('id', 'DESC') 
                  ->limit(1) 
                  ->first();
        
        if ($id_checker) {
            if ($id_checker->id < 9) {
                $id = $request->post('mem_id')."-00000".($id_checker->id + 1);
            } elseif ($id_checker->id >= 10 && $id_checker->id <= 99) {
                $id = $request->post('mem_id')."-0000".($id_checker->id + 1);
            } elseif ($id_checker->id >= 100 && $id_checker->id <= 999) {
                $id = $request->post('mem_id')."-000".($id_checker->id + 1);
            } elseif ($id_checker->id >= 1000 && $id_checker->id <= 9999) {
                $id = $request->post('mem_id')."-00".($id_checker->id + 1);
            }  elseif ($id_checker->id >= 10000 && $id_checker->id <= 99999) {
                $id = $request->post('mem_id')."-0".($id_checker->id + 1);
            }  else {
                $id = $request->post('mem_id')."-".($id_checker->id + 1);
            }  
            
        } else{
            $id = $request->post('mem_id')."-000001";
        }

        $user->mem_id        = $request->post('mem_id');
        $user->first_name    = $request->post('fname');
        $user->middle_name   = $request->post('mname');
        $user->last_name     = $request->post('lname');
        $user->email_address = $request->post('email');
        $user->password      = Hash::make($request->post('password'));
        $user->type          = 'affiliate';
        $user->status        = 1; 

        if($user->save()){

            $id = User::whereIn('mem_id',        [$request->post('mem_id')])
                      ->whereIn('email_address', [$request->post('email')])
                      ->whereIn('first_name',    [$request->post('fname')])
                      ->first()
                      ->id;

            foreach ($request->post() as $key => $value) {
                
                $meta             = new User_meta;
                $meta->user_id    = $id;
                $meta->meta_key   = $key;
                $meta->meta_value = $value;
                $meta->save();

            }

            return redirect()
                ->route('admin.affiliates.list')
                ->with([
                    "success" => "New Affiliate account has been saved !"
                ]);

        } else {
            return redirect()
                ->route('admin.affiliates.list')
                ->with([
                    "error" => "Something wen't wrong !"
                ]); 
        }
    }
    public function delete(Request $request,$id){

        $user = User::find($id);

        $user->status = 0;

        if($user->save()){ 
            return redirect()
                ->route('admin.affiliates.list')
                ->with([
                    "success" => "Successfully deleted !"
                ]);  
        } else { 
            return redirect()
                ->route('admin.affiliates.list')
                ->with([
                    "error" => "Something wen't wrong !"
                ]);  
        }
    }

}  