@extends('templates.layouts.main.index') 
@section('content')   
    <?php 
        if(isset($_GET['id']) && !empty($_GET['id']) && 
           isset($_GET['position']) && !empty($_GET['position']) && 
           isset($_GET['level']) && !empty($_GET['level']) && 
           isset($_GET['node']) && !empty($_GET['node'])){
            
            
            if($_GET['node'] != 'none'){
                if(empty($_GET['node_id'])){
                    header('location:users_invites.php');
                }  
            }  
        } else {
            header('location:users_invites.php');
        } 
    ?>

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
            <div class="col-lg-4 col-md-4 col-sm-12"> 
                <form action="{{ URL::route('member.invites.add') }}" method="post">
                {{ csrf_field() }}
                <div class="card">
                    <div class="header">
                        <h2><strong>Updating on Position <?php echo $_GET['position']; ?> at Level <?php echo $_GET['level']; ?></strong></h2>                        
                    </div>
                    <div class="body"> <?php if(isset($error)){ ?><span style="color:red;">* <?php echo $error; ?></span> <?php } ?>
                        <h2 class="card-inside-title">User ID </h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" name="user_id" placeholder="Enter User ID" <?php if($_GET['node'] != 'none'){ ?> value="<?php echo $_GET['node_id']; ?>" <?php } ?> required>                                   
                                </div>
                            </div> 
                        </div>      
                        <h2 class="card-inside-title">Temp Password </h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">                                    
                                    <input type="password" class="form-control" name="password" required>    

                                    <input type="hidden" class="form-control" name="id"       value="<?php echo $_GET['id'] ?>">   
                                    <input type="hidden" class="form-control" name="position" value="<?php echo $_GET['position'] ?>">   
                                    <input type="hidden" class="form-control" name="level"    value="<?php echo $_GET['level'] ?>">   
                                    <input type="hidden" class="form-control" name="node"     value="<?php echo $_GET['node'] ?>">                                   
                                </div>
                            </div> 
                        </div>        
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">                                    
                                    <button  class="btn bg-blue waves-effect waves-light" name="save_btn">Save</button></form>    
                                </div>
                            </div> 
                        </div>    
                        
                    </div>
                </div>
            </div>  
        </div>
    </section>  
@endsection