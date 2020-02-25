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
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-12 col-md-12 col-sm-12"> 
                <div class="card">
                    <div class="header">
                        <h2><strong>Commision Setup</strong></h2>                        
                    </div>
                    <form action="{{ URL::route('admin.settings.commission.save') }}" method="post">
                    {{ csrf_field() }}
                        <div class="body"> 
                            <h2 class="card-inside-title">Affilate Registration</h2> 
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="col-sm-12">
                                        <div class="form-group">     
                                            <label>Level 1</label>                               
                                            <input type="number" class="form-control" name="level_1" required value="{{ $commission[0]->meta_value }}">                                   
                                        </div>
                                    </div>  
                                    <div class="col-sm-12">
                                        <div class="form-group">     
                                            <label>Level 2</label>                               
                                            <input type="number" class="form-control" name="level_2" required value="{{ $commission[1]->meta_value }}">                                   
                                        </div>
                                    </div>  
                                    <div class="col-sm-12">
                                        <div class="form-group">     
                                            <label>Level 3</label>                               
                                            <input type="number" class="form-control" name="level_3" required value="{{ $commission[2]->meta_value }}">                                   
                                        </div>
                                    </div>  
                                    <div class="col-sm-12">
                                        <div class="form-group">     
                                            <label>Level 4</label>                               
                                            <input type="number" class="form-control" name="level_4" required value="{{ $commission[3]->meta_value }}">                                   
                                        </div>
                                    </div>   
                                </div>
                                <div class="col-sm-4"> 
                                    <div class="col-sm-12">
                                        <div class="form-group">     
                                            <label>Level 5</label>                               
                                            <input type="number" class="form-control" name="level_5" required value="{{ $commission[4]->meta_value }}">                                   
                                        </div>
                                    </div>    
                                    <div class="col-sm-12">
                                        <div class="form-group">     
                                            <label>Level 6</label>                               
                                            <input type="number" class="form-control" name="level_6" required value="{{ $commission[5]->meta_value }}">                                   
                                        </div>
                                    </div>  
                                    <div class="col-sm-12">
                                        <div class="form-group">     
                                            <label>Level 7</label>                               
                                            <input type="number" class="form-control" name="level_7" required value="{{ $commission[6]->meta_value }}">                                   
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4"> 
                                    <div class="col-sm-12">
                                        <div class="form-group">     
                                            <label>Level 8</label>                               
                                            <input type="number" class="form-control" name="level_8" required value="{{ $commission[7]->meta_value }}">                                   
                                        </div>
                                    </div>  
                                    <div class="col-sm-12">
                                        <div class="form-group">     
                                            <label>Level 9</label>                               
                                            <input type="number" class="form-control" name="level_9" required value="{{ $commission[8]->meta_value }}">                                   
                                        </div>
                                    </div>  
                                    <div class="col-sm-12">
                                        <div class="form-group">     
                                            <label>Level 10</label>                               
                                            <input type="number" class="form-control" name="level_10" required value="{{ $commission[9]->meta_value }}">                                   
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <hr>  
                            <h2 class="card-inside-title">Exit Bonus</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="number" class="form-control" name="exit" required value="{{ $commission[10]->meta_value }}">                                   
                                    </div>
                                </div>  
                            </div>  
                            <hr>  
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">                                    
                                        <button class="btn bg-blue waves-effect waves-light">Save</button>                         
                                    </div>
                                </div> 
                            </div>    
                        </div> 
                    </form>   
                </div>
            </div>  
        </div> 
	</section>
@endsection 
@section('extraCss')
	<link href="{{ URL::asset('public/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" /> 
@endsection 
@section('extraJs')
	<script src="{{ URL::asset('public/js/pages/forms/basic-form-elements.js') }}"></script>  
@endsection 