<?php $active    = "affiliates" ?>
<?php $subactive = "addinvite" ?>
<?php include '_header.php'; ?>
	<!-- Main Content -->
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <h2>Add new Invite
	                <small>Affiliate Management</small>
	                </h2>
	            </div> 
	        </div>
	    </div> 
	    <div class="col-md-12 col-lg-12">
	    	<div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Affiliate Form</strong></h2>                        
                    </div>
                    <div class="body"> 
                        <h2 class="card-inside-title">Personal Info</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <select class="form-controlx show-tick">
                                        <option value="">-- Please Upline --</option> 
                                        <option value="10">John DOe</option> 
                                        <option value="10">Maria Cristrek</option> 
                                        <option value="10">Mark Samson</option>
                                        <option value="10">Albert Hamsten</option> 
                                    </select>                                 
                                </div>
                            </div> 
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
                        <h2 class="card-inside-title">Wallet Topup</h2>  
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">                                    
	                                <select class="form-control show-tick">
	                                    <option value="">-- Please select --</option>
                                        <option value="0">No Wallet Topup for now</option>
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
                                    <select class="form-control show-tick">
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
                                    <input type="text" class="form-control" placeholder="Total Payment">                                   
                                </div>
                            </div> 
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" placeholder="Paid">                                   
                                </div>
                            </div> 
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" placeholder="Balance">                                   
                                </div>
                            </div> 
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" placeholder="Cash">                                   
                                </div>
                            </div> 
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" placeholder="Change">                                   
                                </div>
                            </div> 
                        </div>   
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">                                    
                        			<a href="javascript:void(0);" class="btn bg-blue waves-effect waves-light">Save Invite</a>                             
                                </div>
                            </div> 
                        </div>   
                    </div>
                </div>
            </div>
	    </div>
	</section>  
<?php include '_footer.php'; ?>