@section('title','Login')
@extends('templates.layouts.auth.admin.index')
@section('content')
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain"> 
                <form class="form" method="post" action="{{ URL::route('admin.auth.check') }}">
                    {{ csrf_field() }}
                    <div class="header"> 
                        <img src="{{ URL::asset('public/images/logo/logo.png') }}" width="20%">
                    </div>
                    <div class="content">                                                
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Username" name="email" required>
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Password" class="form-control" name="password" required>
                            <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        </div>
                    </div>
                    <div class="footer"> 
                        <button class="btn btn-block btn-raised bg-blue waves-effect waves-light">SIGN IN</button> 
                    </div>
                </form> 
            </div>
        </div>
    </div>  
@endsection