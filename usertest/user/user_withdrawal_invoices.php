<?php $active    = "mywithdrawal" ?>
<?php $subactive = "invoices" ?>
<?php include '_header.php'; ?>
	<!-- Main Content -->
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <h2>Invoices
	                <small>My Withdrawal</small>
	                </h2>
	            </div> 
	        </div>
	    </div>  
	    <div class="col-md-12 col-lg-12"> 
	        <div class="row clearfix">
	            <div class="col-lg-12 col-md-12">
	                <div class="card">
	                    <div class="header">
	                        <h2>Overview</h2>  
	                    </div>
	                    <div class="body">
	                        <div class="table-responsive">
	                            <table class="table center-aligned-table">
	                                <thead>
		                                <tr>
		                                    <th>Invoice ID</th>
		                                    <th>Message</th>
		                                    <th>Amount</th>
		                                    <th>Date</th>
		                                    <th>Status</th>  
		                                    <th></th>  
		                                </tr>
	                                </thead>
	                                <tbody>
		                                <tr>
		                                    <td>INV0001</td> 
		                                    <td style="color:green;">P2,000.00</td>
		                                    <td>April 27, 2018 - 2:02pm</td>
		                                    <td><label class="badge bg-green margin-0">Approved</label></td>  
		                                    <td><a href="">View Invoice</a></td>
		                                </tr>  
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>
	                </div>                
	            </div>
	        </div>
	    </div>
	</section>  
<?php include '_footer.php'; ?>