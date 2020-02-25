@extends('templates.layouts.main.index') 
@section('content')   
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <h2>Request Withdrwal
	                <small>My Withdrawals</small>
	                </h2>
	            </div> 
	        </div>
	    </div> 
	    <div class="col-md-12 col-lg-12">
	    	<div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Withdrwal Form</strong></h2>                        
                    </div>
	                <form action="{{ URL::route('member.withdrawal.request') }}" method="post">
	                	{{ csrf_field() }}
	                	<div class="body"> 
	                        <h2 class="card-inside-title">Fill-up Info</h2>
	                        <div class="row clearfix">
	                            <div class="col-sm-12">
	                                <div class="form-group">                                    
	                                    <input type="text" class="form-control" placeholder="Full Name" name="name" required>                                   
	                                </div>
	                            </div>
	                            <div class="col-sm-12">
	                                <div class="form-group">                                   
	                                    <input type="number" class="form-control" placeholder="Contact Number" name="contact" required>                                    
	                                </div>
	                            </div>
	                            <div class="col-sm-12">
	                                <div class="form-group">                                   
	                                    <input type="text" class="form-control" placeholder="Full Address" name="address" required>                                    
	                                </div>
	                            </div>
	                        </div>  
	                        <div class="row clearfix">
	                            <div class="col-sm-12">
	                                <div class="form-group">                                    
	                                    <b>Balance :</b> P {{ number_format($balance,2,'.',',') }}                               
	                                </div>
	                            </div> 
	                            <div class="col-sm-12">
	                                <div class="form-group">                                    
	                                    <input type="number" class="form-control" placeholder="Total Amount to withdraw" max="{{ $balance }}" name="amount" required>                                   
	                                </div>
	                            </div> 
	                            <div class="col-sm-12">
	                                <div class="form-group">                                   
	                                    <textarea rows="5" class="form-control" placeholder="Enter notes / Bank / Remitance Details" name="notes" required></textarea>                                  
	                                </div>
	                            </div>
	                        </div>     
	                        <div class="row clearfix">
	                            <div class="col-sm-4">
	                                <div class="form-group">                                    
	                                    <button class="btn btn-full bg-blue waves-effect waves-light">Request</button>                             
	                                </div>
	                            </div> 
	                        </div>   
	                    </div>
	                </form>
                </div>
            </div>
	    </div>
	</section>  
@endsection