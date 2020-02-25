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
		                                    <th>Fullname</th>
		                                    <th>Contact</th>
		                                    <th>Address</th>
		                                    <th>Total Amount</th>
		                                    <th>Notes</th>  
		                                    <th>Date</th>  
		                                    <th>Status</th>  
		                                    <th>Action</th>  
		                                </tr>
	                                </thead>
	                                <tbody>
	                                	@if($data)
	                                		@foreach($data as $k => $v)
	                                			<tr>
				                                    <td>{{ date("Y",strtotime('$v->created_at')).'-0000'.$v->id }}</td>
				                                    <td>{{ $v->fullname }}</td>
				                                    <td>{{ $v->contact }}</td>
				                                    <td>{{ $v->address }}</td>
				                                   	<td style="color:green;">P {{ number_format($v->total,2,'.',',') }}</td> 
				                                    <td>{{ $v->notes }}</td>
				                                    <td>{{ $v->created_at->diffForHumans() }}</td>
				                                    <td>
				                                    	@if($v->status == 'Paid')
				                                    		<label class="badge bg-green margin-0">Paid</label>
				                                    	@elseif($v->status == 'Pending')
				                                    		<label class="badge bg-orange margin-0">Pending</label>
				                                    	@else
				                                    		<label class="badge bg-red margin-0">Declined</label>
				                                    	@endif
				                                    </td>   
				                                    <td>
			                                    		@if($v->status == 'Pending')
					                                    	<form action="{{ URL::route('admin.withdrawal.request.update',[$v->id]) }}" method="post">
					                                    		{{ csrf_field() }}
				                                    			<input type="hidden" name="status" value="Paid">
				                                    			<button class="btn btn-sm btn-success">Approved</button>
					                                    	</form>
					                                    	<form action="{{ URL::route('admin.withdrawal.request.update',[$v->id]) }}" method="post">
					                                    		{{ csrf_field() }}
				                                    			<input type="hidden" name="status" value="Declined">
				                                    			<button class="btn btn-sm btn-danger">Declined</button>
					                                    	</form>
			                                    		@endif
			                                    		@if($v->status == 'Paid') 
					                                    	<form action="{{ URL::route('admin.withdrawal.request.update',[$v->id]) }}" method="post">
					                                    		{{ csrf_field() }}
				                                    			<input type="hidden" name="status" value="Declined">
				                                    			<button class="btn btn-sm btn-danger">Decline</button>
					                                    	</form>
			                                    		@endif
			                                    		@if($v->status == 'Declined') 
					                                    	<form action="{{ URL::route('admin.withdrawal.request.update',[$v->id]) }}" method="post">
					                                    		{{ csrf_field() }}
				                                    			<input type="hidden" name="status" value="Paid">
				                                    			<button class="btn btn-sm btn-success">Approved</button>
					                                    	</form>
			                                    		@endif
				                                    </td>
				                                </tr> 
	                                		@endforeach
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