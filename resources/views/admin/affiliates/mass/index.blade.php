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
                        <form action="{{ URL::route('admin.affiliates.masssave') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h2 class="card-inside-title">Custom Membership ID Prefix</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="ABCD" name="mem_id" required>                                   
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Number of ID's to generate</h2>   
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">        
                                        <input type="number" class="form-control"  name="count" required max="100">                             
                                    </div>
                                </div>   
                            </div>    
                            <input type="hidden" class="form-control" value="none" placeholder="First Name" name="fname" required>                                  
                            <input type="hidden" class="form-control" value="none" placeholder="Middle Name" name="mname" required> 
                            <input type="hidden" class="form-control" value="none" placeholder="Last Name" name="lname" required>  
                            <input type="hidden" class="form-control" value="none" placeholder="Contact Number" name="contact" required>    
                            <input type="hidden" class="form-control" value="none" placeholder="Address" name="address" required>     
                            <input type="hidden" class="form-control" value="none" placeholder="gender" name="gender" required>      
                            <input type="hidden" class="form-control" value="none" placeholder="Civil Status" name="civil" required>      
                            <input type="hidden" class="form-control" value="none" placeholder="Age" name="age" required>      
                            <input type="hidden" class="form-control" value="none" placeholder="Birthday" name="birthday" required>                                     
                            <input type="hidden" class="form-control" value="none" placeholder="Email Address" name="email" required>                                       
                            <input type="hidden" class="form-control" value="none" placeholder="Password" name="password" required> 
                            <input type="hidden" class="form-control" value="none" placeholder="Confirm Password" name="confirm" required> 
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">                                    
                                        <button class="btn btn-full bg-blue waves-effect waves-light">Generate Affiliates</button>                             
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