@extends('templates.layouts.main.index') 
@section('content')
	<!-- Main Content -->
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
	                        <h6 class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x"></i></h6>
	                        <span>Total Invites</span>
	                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{ $summary['invites'] }}" data-speed="1000" data-fresh-interval="700">0</span></h3> 
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="card text-center">
	                    <div class="body">
	                        <h6 class="m-b-20"><i class="zmdi zmdi-assignment zmdi-hc-3x"></i></h6>
	                        <span>Total Earnings</span>
	                        <h3 class="m-b-10">P<span class="number count-to" data-from="0" data-to="{{ $summary['earnings'] }}" data-speed="1000" data-fresh-interval="700">0</span></h3> 
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="card text-center">
	                    <div class="body">
	                        <h6 class="m-b-20"><i class="zmdi zmdi-shopping-basket zmdi-hc-3x"></i></h6>
	                        <span>Total Withdrawal</span>
	                        <h3 class="m-b-10">P<span class="number count-to" data-from="0" data-to="{{ $summary['withdrawals'] }}" data-speed="1000" data-fresh-interval="700">0</span></h3> 
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="card text-center">
	                    <div class="body">
	                        <h6 class="m-b-20"><i class="zmdi zmdi-account-box zmdi-hc-3x"></i></h6>
	                        <span>Balance</span>
	                        <h3 class="m-b-10">P<span class="number count-to" data-from="0" data-to="{{ $summary['balance'] }}" data-speed="1000" data-fresh-interval="700">0</span></h3> 
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="row clearfix"> 
	            <div class="col-md-6 col-lg-6">
	                <div class="card">
	                    <div class="body">
	                        <h3 class="m-b-0">P {{ $summary['withdrawals'] }}</h3>
	                        <p class="text-muted">Withdrawals this month</p>
	                        <div class="progress">
	                            <div class="progress-bar l-blush" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
	                        </div> 
	                    </div>
	                </div>
	                <div class="card overflowhidden">
	                    <div class="body">
	                        <h6>Withdrawals Graph</h6>
	                        <h3>P {{ $summary['withdrawals'] }}</h3>
	                    </div>
	                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
	                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgba(3, 116, 192, 0.7)"
	                        data-offset="90" data-width="100%" data-height="135px" data-line-Width="2" data-line-Color="rgba(3,116, 192, 0.7)"
	                        data-fill-Color="rgba(3,116,192, 0.2)">0,{{ $summary['withdrawals'] }}</div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-6">
	                <div class="card">
	                    <div class="body">
	                        <h3 class="m-b-0">P {{ $summary['earnings'] }}</h3>
	                        <p class="text-muted">Earned this month</p>
	                        <div class="progress">
	                            <div class="progress-bar l-blush" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
	                        </div> 
	                    </div>
	                </div>
	                <div class="card overflowhidden">
	                    <div class="body">
	                        <h6>Earnings Graph</h6>
	                        <h3>P {{ $summary['earnings'] }}</h3>
	                    </div>
	                    <div class="sparkline" data-type="line" data-spot-Radius="0" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
	                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgba(3, 116, 192, 0.7)"
	                        data-offset="90" data-width="100%" data-height="135px" data-line-Width="2" data-line-Color="rgba(3,116, 192, 0.7)"
	                        data-fill-Color="rgba(3,116,192, 0.2)">0,{{ $summary['earnings'] }}</div>
	                </div>
	            </div>
	        </div>
	        <div class="row clearfix">
	            <div class="col-lg-3 col-md-6">
	                <div class="card text-center">
	                    <div class="body">
	                        <h6 class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x"></i></h6>
	                        <span>Wallet Balance</span>
	                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="0" data-speed="1000" data-fresh-interval="700">0</span> points</h3> 
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="card text-center">
	                    <div class="body">
	                        <h6 class="m-b-20"><i class="zmdi zmdi-assignment zmdi-hc-3x"></i></h6>
	                        <span>Top ups</span>
	                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="0" data-speed="1000" data-fresh-interval="700">0</span> points</h3> 
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="card text-center">
	                    <div class="body">
	                        <h6 class="m-b-20"><i class="zmdi zmdi-account-box zmdi-hc-3x"></i></h6>
	                        <span>Bayad Center Transactions</span>
	                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="0" data-speed="1000" data-fresh-interval="700">0</span></h3> 
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="card text-center">
	                    <div class="body">
	                        <h6 class="m-b-20"><i class="zmdi zmdi-shopping-basket zmdi-hc-3x"></i></h6>
	                        <span>Bayad Center Views</span>
	                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="0" data-speed="1000" data-fresh-interval="700">0</span></h3> 
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>  
@endsection