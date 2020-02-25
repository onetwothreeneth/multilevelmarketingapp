<?php $active    = "mywallet" ?>
<?php $subactive = "topup" ?>
<?php include '_header.php'; ?>
	<!-- Main Content -->
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <h2>Topup Affiliate
	                <small>Wallet Management</small>
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
                    <div class="col-12"> 
                        <h2 class="card-inside-title">Choose Affiliate</h2>  
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <select class="form-control show-tick">
                                        <option value="">-- Please select --</option>
                                        <option value="John Doe">John Doe</option> 
                                        <option value="Kobe Bryan">Kobe Bryan</option> 
                                        <option value="Maria Cristel">Maria Cristel</option> 
                                        <option value="Ben Marsh">Ben Marsh</option> 
                                    </select>                                 
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
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                        			<a href="admin_wallet_history.php" class="btn bg-blue waves-effect waves-light pull-right">Top up Affiliate</a>                             
                                </div>
                            </div> 
                        </div>   
                    </div>
                </div>
            </div>
	    </div>
	</section>  
<?php include '_footer.php'; ?>