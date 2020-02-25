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
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-4 col-md-4 col-sm-12"> 
                <div class="card">
                    <div class="header">
                        <h2><strong>Profile</strong></h2>                        
                    </div>
                    <div class="body"> 
                        <h2 class="card-inside-title">Personal Info</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" placeholder="First Name">                                   
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">                                   
                                    <input type="text" class="form-control" placeholder="Middle Name">                                    
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">                                   
                                    <input type="text" class="form-control" placeholder="Last Name">                                    
                                </div>
                            </div>
                        </div>  
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" placeholder="Contact Number">                                   
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">                                   
                                    <input type="text" class="form-control" placeholder="Email Address">                                    
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">                                   
                                    <input type="text" class="form-control" placeholder="Address">                                    
                                </div>
                            </div>
                        </div>    
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">                                    
                                    <a href="javascript:void(0);" class="btn bg-blue waves-effect waves-light">Save</a>                             
                                </div>
                            </div> 
                        </div>    
                    </div> 
                    <hr>
                    <div class="body"> 
                        <h2 class="card-inside-title">Security Settings</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" placeholder="Secret Question">                                   
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">                                   
                                    <input type="text" class="form-control" placeholder="Answer">                                    
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">                                   
                                    <input type="text" class="form-control" placeholder="Forgot password Email">                                    
                                </div>
                            </div>
                        </div>  
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" placeholder="Password">                                   
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">                                   
                                    <input type="text" class="form-control" placeholder="Confirm Password">                                    
                                </div>
                            </div> 
                        </div>    
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">                                    
                                    <a href="javascript:void(0);" class="btn bg-blue waves-effect waves-light">Save</a>                             
                                </div>
                            </div> 
                        </div>    
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