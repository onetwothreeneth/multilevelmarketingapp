<?php $active    = "mywallet" ?>
<?php $subactive = "history" ?>
<?php include '_header.php'; ?>
	<!-- Main Content -->
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <h2>History
	                <small>My Wallet</small>
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
	                        <span>Wallet Balance</span>
	                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="700" data-speed="1000" data-fresh-interval="700">0</span></h3> 
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
		                                    <th>Transaction ID</th>
		                                    <th>Action</th>
		                                    <th>Points</th>
		                                    <th>Date</th>
		                                    <th>Status</th> 
		                                    <th>Balance</th> 
		                                </tr>
	                                </thead>
	                                <tbody>
		                                <tr>
		                                    <td>CX521P</td>
		                                    <td>Paid Globe Bill</td>
		                                    <td style="color:red;">- 100 points</td>
		                                    <td>April 27, 2018 - 2:02pm</td>
		                                    <td><label class="badge bg-green margin-0">Approved</label></td> 
		                                    <td>700 points</td>
		                                </tr>
		                                <tr>
		                                    <td>NS226G</td>
		                                    <td>Topped Up wallet points</td>
		                                    <td style="color:green;">+ 2000 points</td>
		                                    <td>April 18, 2018 - 1:06am</td>
		                                    <td><label class="badge bg-amber margin-0">Pending</label></td> 
		                                    <td>800 points</td>
		                                </tr>
		                                <tr>
		                                    <td>HS125Y</td>
		                                    <td>Topped Up wallet points</td>
		                                    <td style="color:green;">+ 1000 points</td>
		                                    <td>April 18, 2018 - 1:00am</td>
		                                    <td><label class="badge bg-red margin-0">Cancelled</label></td> 
		                                    <td>800 points</td>
		                                </tr>
		                                <tr>
		                                    <td>YA532G</td>
		                                    <td>Paid Meralco Bill</td>
		                                    <td style="color:red;">- 200 points</td>
		                                    <td>April 16, 2018 - 5:02pm</td>
		                                    <td><label class="badge bg-green margin-0">Approved</label></td> 
		                                    <td>800 points</td>
		                                </tr>
		                                <tr>
		                                    <td>QY0142S</td>
		                                    <td>Topped Up wallet points</td>
		                                    <td style="color:green;">+ 1000 points</td>
		                                    <td>April 15, 2018 - 2:02pm</td>
		                                    <td><label class="badge bg-green margin-0">Approved</label></td> 
		                                    <td>1000 points</td>
		                                </tr>
		                               <!--  amber  green red  -->
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