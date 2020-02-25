<?php $active    = "mywithdrawal" ?>
<?php $subactive = "requests" ?>
<?php include '_header.php'; ?>
	<!-- Main Content -->
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <h2>Affiliate Requests
	                <small>Withdrawal Management</small>
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
		                                    <th>Request ID</th>
		                                    <th>Affiliate Info</th>
		                                    <th>Message</th>
		                                    <th>Amount</th>
		                                    <th>Date</th>
		                                    <th>Status</th>  
		                                    <th>Action</th>  
		                                </tr>
	                                </thead>
	                                <tbody>
		                                <tr>
		                                    <td>RQ0001</td>
		                                    <td>John Doe <br><small style="color: royalblue;">johndoe@gmail.com</small></td>
		                                    <td>Pang Enroll lang ng mga bata</td>
		                                    <td style="color:green;">P2,000.00</td>
		                                    <td>April 27, 2018 - 2:02pm</td>
		                                    <td><label class="badge bg-green margin-0">Approved</label></td>  
		                                    <td><a class="btn btn-sm btn-danger">Disapprove</a></td>
		                                </tr>
		                                <tr>
		                                    <td>RQ0002</td>
		                                    <td>John Doe <br><small style="color: royalblue;">johndoe@gmail.com</small></td>
		                                    <td>Pang kaen</td>
		                                    <td style="color:green;">P1,000.00</td>
		                                    <td>April 24, 2018 - 3:02pm</td>
		                                    <td><label class="badge bg-orange margin-0">Pending</label></td>  
		                                    <td><a class="btn btn-sm btn-success">Approve</a></td>
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