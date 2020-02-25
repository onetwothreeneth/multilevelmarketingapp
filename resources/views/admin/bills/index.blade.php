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
        <div class="container-fluid"> 
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <h6 class="m-b-20"><i class="zmdi zmdi-eye zmdi-hc-3x"></i></h6>
                            <span>Transactions</span>
                            <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="471" data-speed="1000" data-fresh-interval="700">0</span></h3> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <h6 class="m-b-20"><i class="zmdi zmdi-assignment zmdi-hc-3x"></i></h6>
                            <span>Success</span>
                            <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="450" data-speed="1000" data-fresh-interval="700">0</span></h3> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <h6 class="m-b-20"><i class="zmdi zmdi-shopping-basket zmdi-hc-3x"></i></h6>
                            <span>Failed</span>
                            <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="21" data-speed="1000" data-fresh-interval="700">0</span></h3> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <h6 class="m-b-20"><i class="zmdi zmdi-account-box zmdi-hc-3x"></i></h6>
                            <span>Earnings</span>
                            <h3 class="m-b-10">P<span class="number count-to" data-from="0" data-to="72120" data-speed="1000" data-fresh-interval="700">0</span></h3> 
                        </div>
                    </div>
                </div>
            </div> 
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
                                            <th>Biller</th>
                                            <th>Transaction ID</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th> 
                                            <th>Affiliate Portal</th> 
                                            <th>Transactor</th> 
                                            <th>Earned</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="10%"><img src="{{ URL::asset('public/images/billers/globe.png') }}" width="80%"></td>
                                            <td>Globe Telecoms</td>
                                            <td>T201800001</td>
                                            <td style="color:green;">P 2,105.21</td>
                                            <td>April 27, 2018 - 2:02pm</td>
                                            <td>John Doe</td>
                                            <td>Ben Samson</td>
                                            <td><label class="badge bg-green margin-0">Approved</label></td> 
                                            <td>P 35.00</td>
                                        </tr>
                                        <tr>
                                            <td width="10%"><img src="{{ URL::asset('public/images/billers/meralco.png') }}" width="80%"></td>
                                            <td>Meralco Bill</td>
                                            <td>T201800002</td>
                                            <td style="color:green;">P 1,000.00</td>
                                            <td>April 27, 2018 - 2:02pm</td>
                                            <td>John Doe</td>
                                            <td>Mark Cabrera</td>
                                            <td><label class="badge bg-green margin-0">Approved</label></td> 
                                            <td>P 15.00</td>
                                        </tr>
                                        <tr>
                                            <td width="10%"><img src="{{ URL::asset('public/images/billers/maynilad.png') }}" width="80%"></td>
                                            <td>Maynilad</td>
                                            <td>T201800003</td>
                                            <td style="color:green;">P 405.21</td>
                                            <td>April 27, 2018 - 2:02pm</td>
                                            <td>Maria Eliz</td>
                                            <td>Simon Singson</td>
                                            <td><label class="badge bg-green margin-0">Approved</label></td> 
                                            <td>P 8.00</td>
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
@endsection