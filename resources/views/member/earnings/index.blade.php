@extends('templates.layouts.main.index') 
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
		                                    <th>Type</th>
		                                    <th>Amount</th>
		                                    <th>Date</th>
		                                    <th>Status</th>  
		                                </tr>
	                                </thead>
	                                <tbody>
	                                	@if($earnings)
	                                		<?php $total = 0; ?>
	                                		@foreach($earnings as $k => $v)
	                                			<?php $total = $v->total + $total; ?>
	                                			<tr> 
				                                    <td>{{ $v->type }}</td>
				                                    <td style="color:green;">P {{ number_format($v->total,2,'.',',') }}</td>
				                                    <td>{{ $v->created_at->diffForHumans()}}</td>
				                                    <td><label class="badge bg-green margin-0">Approved</label></td>  
				                                </tr>  
	                                		@endforeach
                                			<tr>  
			                                    <td><b>Total</b></td>
			                                    <td><h6>P {{ number_format($total,2,'.',',') }}</h6></td>  
			                                    <td></td> 
			                                    <td></td> 
			                                </tr>  
	                                	@endif  
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