@extends('templates.layouts.main.admin.index') 
@section('content')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>{{ $header }}
                    <small>{{ $sub }}</small>
                    </h2>
                </div> 
            </div>
        </div>   
        <div class="col-md-12 col-lg-12">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card"> 
                    <div class="body"> 
                        <form action="{{ URL::route('admin.affiliates.update',$user->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h2 class="card-inside-title">Membership ID</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="ABC" name="mem_id" required readonly value="{{ $user->mem_id }}">                                   
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Personal Info</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="file" class="form-control" name="photo">                                   
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">                                    
                                        <input type="hidden" name="count" required value="1">
                                        <input type="text" class="form-control" placeholder="First Name" name="fname" required value="{{ $user->first_name }}">                                   
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Middle Name" name="mname" required value="{{ $user->middle_name }}">                                    
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Last Name" name="lname" required value="{{ $user->last_name }}">                                    
                                    </div>
                                </div> 
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Contact Number" name="contact" required value="{{ @$meta[6]->meta_value }}">                                   
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Address" name="address" required value="{{ @$meta[7]->meta_value }}">                                    
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">                                    
                                        <select class="form-control show-tick" name="gender" required>
                                            @if(@$meta[8]->meta_value == 'Male')
                                                <option value="Male" selected>Male</option> 
                                                <option value="Female">Female</option>  
                                            @else
                                                <option value="Male">Male</option> 
                                                <option value="Female" selected>Female</option>  
                                            @endif
                                        </select>                                 
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">                                                              
                                        <select class="form-control show-tick" name="civit" required>
                                            <option value="{{ @$meta[8]->meta_value }}">{{ @$meta[8]->meta_value }}</option> 
                                            <option value="">-----------------------</option> 
                                            <option value="">Civil Status</option> 
                                            <option value="Single">Single</option> 
                                            <option value="Married">Married</option>  
                                            <option value="Divorced">Divorced</option>  
                                            <option value="Widowed">Widowed</option>   
                                        </select>       
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">    
                                        <input type="number" class="form-control" placeholder="Age" name="age" required value="{{ @$meta[9]->meta_value }}">                         
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">    
                                        <input type="date" class="form-control" placeholder="Birthday" name="birthday" required value="{{ @$meta[10]->meta_value }}">                         
                                    </div>
                                </div> 
                            </div>
                            <h2 class="card-inside-title">Account Info</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Email Address" name="email" required value="{{ $user->email_address }}">                                    
                                    </div>
                                </div> 
                                <div class="col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="password" class="form-control" placeholder="Change Password" name="password">                                    
                                    </div>
                                </div>
                            </div>     
                            <h2 class="card-inside-title">Status</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                                                 
                                        <select class="form-control show-tick" name="status">
                                            <option value="" selected>Choose Member</option> 
                                            @if($user->status == 1) 
                                                <option value="1" selected>Activated</option>  
                                                <option value="2" >Unactive</option>  
                                            @else
                                                <option value="1" >Activated</option>  
                                                <option value="2" selected>Unactive</option> 
                                            @endif
                                        </select>                                  
                                    </div>
                                </div>
                            </div>    
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">                                    
                                        <button class="confirm btn btn-full bg-blue waves-effect waves-light">Save Affiliate</button>                             
                                    </div>
                                </div> 
                            </div>   
                        </form> 
                    </div>
                </div>
            </div>
        </div> 
    </section>
@endsection
@section('extraCss')
    <link href="{{ URL::asset('public/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" /> 
@endsection 
@section('extraJs')
    <script src="{{ URL::asset('public/js/pages/forms/basic-form-elements.js') }}"></script>  
@endsection 