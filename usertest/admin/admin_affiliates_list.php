<?php $active    = "affiliates" ?>
<?php $subactive = "listed" ?>
<?php include '_header.php'; ?>
	<!-- Main Content -->
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <h2>All Affiliates 
	                <small>Management</small>
	                </h2>
	            </div> 
	        </div>
	    </div> 
	    <div class="container-fluid"> 
	        <div class="row clearfix">
	            <div class="col-lg-3 col-md-6">
	                <div class="card text-center">
	                    <div class="body">
	                        <h6 class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x"></i></h6>
	                        <span>Total Affliates</span>
	                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="621" data-speed="1000" data-fresh-interval="700">0</span></h3> 
	                    </div>
	                </div>
	            </div> 
	            <div class="col-lg-3 col-md-6">
	                <div class="card text-center">
	                    <div class="body">
	                        <h6 class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x"></i></h6>
	                        <span>Total Affiliates Active</span>
	                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="423" data-speed="1000" data-fresh-interval="700">0</span></h3> 
	                    </div>
	                </div>
	            </div> 
	            <div class="col-lg-3 col-md-6">
	                <div class="card text-center">
	                    <div class="body">
	                        <h6 class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x"></i></h6>
	                        <span>Total Affiliates Inactive</span>
	                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="120" data-speed="1000" data-fresh-interval="700">0</span></h3> 
	                    </div>
	                </div>
	            </div> 
	            <div class="col-lg-3 col-md-6">
	                <div class="card text-center">
	                    <div class="body">
	                        <h6 class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x"></i></h6>
	                        <span>Total Affiliates Invites</span>
	                        <h3 class="m-b-10">P<span class="number count-to" data-from="0" data-to="6420" data-speed="1000" data-fresh-interval="700">0</span></h3> 
	                    </div>
	                </div>
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
		                                    <th></th>
		                                    <th>Fullname</th>
		                                    <th>Contact</th>
		                                    <th>Address</th>
		                                    <th>Direct Invites</th>  
		                                    <th></th> 
		                                </tr>
	                                </thead>
	                                <tbody>
		                                <tr>
		                                    <td><img src="../assets/images/sm/avatar1.jpg"></td>
		                                    <td>John Doe <br> <small style="color: royalblue;">johndoe@gmail.com</small></td>
		                                    <td style="color:red;">639963523312</td>
		                                    <td>Taguig City</td>
		                                    <td><b>32</b></td>
		                                    <td><a target="_blank"  href="admin_affiliate_table.php">View Table</a></td> 
		                                    <td><a class="btn btn-sm btn-success">Edit</a><a class="btn btn-sm btn-danger">Delete</a></td>  
		                                </tr> 
	                                </tbody>
	                                <tbody>
		                                <tr>
		                                    <td><img src="../assets/images/sm/avatar2.jpg"></td>
		                                    <td>Maria Cristel <br> <small style="color: royalblue;">maria043@gmail.com</small></td>
		                                    <td style="color:red;">639456255521</td>
		                                    <td>Makati City</td>
		                                    <td><b>8</b></td>
		                                    <td><a target="_blank" href="admin_affiliate_table.php">View Table</a></td> 
		                                    <td><a class="btn btn-sm btn-success">Edit</a><a class="btn btn-sm btn-danger">Delete</a></td>  
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