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
                        <form action="{{ URL::route('admin.affiliates.savenew') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <h2 class="card-inside-title">Custom Membership ID Prefix</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="ABC" name="mem_id" required>                                   
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
                                        <input type="text" class="form-control" placeholder="First Name" name="fname" required>                                   
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Middle Name" name="mname" required>                                    
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Last Name" name="lname" required>                                    
                                    </div>
                                </div> 
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Contact Number" name="contact" required>                                   
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Address" name="address" required>                                    
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">                                    
                                        <select class="form-control show-tick" name="gender" required>
                                            <option value="">Gender</option> 
                                            <option value="Male">Male</option> 
                                            <option value="Female">Female</option>  
                                        </select>                                 
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">    
                                        <input type="text" class="form-control" placeholder="Civil Status" name="civil" required>                         
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">    
                                        <input type="number" class="form-control" placeholder="Age" name="age" required>                         
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">    
                                        <input type="date" class="form-control" placeholder="Birthday" name="birthday" required>                         
                                    </div>
                                </div> 
                            </div>
                            <h2 class="card-inside-title">Account Info</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Email Address" name="email" required>                                    
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>                                    
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm" required>                                    
                                    </div>
                                </div>
                            </div>      
                            <h2 class="card-inside-title">Invited By</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                                                 
                                        <select class="form-control show-tick" name="invited_by" required>
                                            @if($data)
                                                @foreach($data as $v)
                                                    <option value="{{ $v->id }}">
                                                        {{ $v->first_name }}
                                                        {{ $v->middle_name }}
                                                        {{ $v->last_name }}
                                                    </option>  
                                                @endforeach
                                            @endif
                                        </select>                                  
                                    </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Payment Info</h2>   
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <select class="form-control show-tick" name="package" required>
                                            <option value="">-- Choose package --</option> 
                                            <option value="10">Package A</option> 
                                            <option value="10">Package B</option> 
                                            <option value="10">Package C</option> 
                                            <option value="10">Package D</option> 
                                        </select>                                 
                                    </div>
                                </div> 
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Total Payment" name="payment" required>                                   
                                    </div>
                                </div> 
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Paid" name="paid" required">                                   
                                    </div>
                                </div> 
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Balance" name="balance" required>                                   
                                    </div>
                                </div>  
                            </div>   
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">                                    
                                        <button class="btn btn-full bg-blue waves-effect waves-light">Save Affiliate</button>                             
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