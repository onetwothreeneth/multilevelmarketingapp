<?php $active    = "mywallet" ?>
<?php $subactive = "topup" ?>
<?php include '_header.php'; ?>
	<!-- Main Content -->
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <h2>Top up
	                <small>My Wallet</small>
	                </h2>
	            </div> 
	        </div>
	    </div> 
	    <div class="col-md-12 col-lg-12">
	    	<div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Top up Form</strong></h2>                        
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
                        <h2 class="card-inside-title">Top up Info</h2>  
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">                                    
	                                <select class="form-control show-tick">
	                                    <option value="">-- Please select --</option>
	                                    <option value="10">500</option>
	                                    <option value="20">1,000</option>
	                                    <option value="30">2,000</option>
	                                    <option value="40">5,000</option>
	                                    <option value="50">10,000</option>
	                                </select>                                 
                                </div>
                            </div> 
                        </div>   
                        <h2 class="card-inside-title">Payment Info</h2>   
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" placeholder="Name on Card">                                   
                                </div>
                            </div>
                            <div class="col-sm-12">
                            	<div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-card"></i></span>
                                    <input type="text" class="form-control credit-card" placeholder="Ex: 0000 0000 0000 0000">
                                </div>
                            </div>
                            <div class="col-sm-12">
                            	<div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                    <input type="text" class="form-control credit-card" placeholder="Card Expiry">
                                </div>
                            </div>
                            <div class="col-sm-12">
                            	<div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                                    <input type="text" class="form-control credit-card" placeholder="CVV">
                                </div>
                            </div>
                        </div>   
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">                                    
                        			<a href="javascript:void(0);" class="btn bg-blue waves-effect waves-light">Top me up</a>                             
                                </div>
                            </div> 
                        </div>   
                    </div>
                </div>
            </div>
	    </div>
	</section>  
<?php include '_footer.php'; ?>