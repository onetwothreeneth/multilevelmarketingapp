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
                            <h6 class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x"></i></h6>
                            <span>Total Affliates</span>
                            <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{ $total }}" data-speed="1000" data-fresh-interval="700">0</span></h3> 
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <h6 class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x"></i></h6>
                            <span>Total Affiliates Active</span>
                            <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{ $activea }}" data-speed="1000" data-fresh-interval="700">0</span></h3> 
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <h6 class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x"></i></h6>
                            <span>Total Affiliates Inactive</span>
                            <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{ $inactive }}" data-speed="1000" data-fresh-interval="700">0</span></h3> 
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <h6 class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x"></i></h6>
                            <span>Total Affiliates Invites</span>
                            <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{ $invites }}" data-speed="1000" data-fresh-interval="700">0</span></h3> 
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
                                            <th></th>
                                            <th>Fullname</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Temporary Pass</th>
                                            <th>Direct Invites</th>   
                                            <th></th> 
                                        </tr>
                                    </thead> 
                                    @if($activea != 0)  
                                        @foreach($data as $k => $v)
                                            <tbody>
                                                <tr @if($v['info']->payment == 'free') style="background-color: #dcfcdc;" @endif>
                                                    <td width="5%">
                                                        @if($v['info']->photo)  
                                                            <img src="{{ URL::asset('/') }}{{ $v['info']->photo }}" width="100%">
                                                        @else
                                                            <img src="{{ URL::asset('public/images/default.jpg') }}" width="100%" 
                                                            >
                                                        @endif
                                                    </td>
                                                    <td><b>{{ $v['info']->mem_id }}</b></td>
                                                    <td>
                                                        @if($v['info']->first_name  != 'none')
                                                            {{ $v['info']->first_name }} {{ $v['info']->middle_name }} {{ $v['info']->last_name }} <br> 
                                                        @else
                                                            Not set<br> 
                                                        @endif
                                                        
                                                        <small style="color: royalblue;">{{ $v['info']->email_address }}</small></td>
                                                    <td style="color:red;">{{ @$v['metas'][5]->meta_value }}</td>
                                                    <td>{{ @$v['metas'][6]->meta_value }}</td>
                                                    <td><b>{{ $v['info']->temp }}</b></td>
                                                    <td><b>{{ $v['invites'] }}</b></td> 
                                                    <td>
                                                        <a href="{{ URL::route('admin.affiliates.edit',$v['info']->id) }}" class="btn btn-sm btn-success">Edit</a>
                                                        <a href="{{ URL::route('admin.affiliates.delete',$v['info']->id) }}" class="confirms btn btn-sm btn-danger">Delete</a>
                                                    </td>  
                                                </tr> 
                                            </tbody> 
                                        @endforeach
                                    @else 
                                        <tbody>
                                            <tr>
                                                <td colspan="6" class="text-center">No data found !</td> 
                                            </tr> 
                                        </tbody> 
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div> 
	</section>
@endsection