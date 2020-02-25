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

if(isset($_POST['remove_btn'])){
    $conn = mysqli_connect("localhost","techfocu_lml","7w%!lLsbt[5b","techfocu_lml"); 
    $c = $conn->query("DELETE FROM tables where parent = '".$_GET['id']."' and position = '".$_GET['position']."' and level = '".$_GET['level']."'"); 
    
    header('location:users_invites.php');
}
if(isset($_POST['save_btn'])){
    
    $conn = mysqli_connect("localhost","techfocu_lml","7w%!lLsbt[5b","techfocu_lml"); 
    $a = $conn->query("SELECT * FROM users where email_address = '".$_POST['user_id']."'"); 
    $num  = $a->num_rows; 
    
    if($num >= 1){
        $b = $conn->query("SELECT * FROM users where email_address = '".$_POST['user_id']."' and temp = '".$_POST['password']."'"); 
        $numb  = $b->num_rows;
        if ($numb >= 1) {
            while($s = $a->fetch_array()){
                 $info[] = $s;
            }
            
            if($info[0]['status'] == 1){
                
                
                $b = $conn->query("SELECT * FROM tables where node = '".$info[0]['id']."'"); 
                $numb  = $b->num_rows; 
                
                if($numb <= 0){
                    $c = $conn->query("INSERT INTO tables (parent,node,position,level,status) VALUES ('".$_GET['id']."','".$info[0]['id']."','".$_GET['position']."','".$_GET['level']."','".$_GET['status']."')"); 
                    
                    header('location:users_invites.php');
                    
                } else {
                    $error = "User ID is registered already on a table !";
                }
                
            } else {
                $error = "User ID is not yet active !";
            }
        } else {
            $error = "Incorrect Password !";
        } 
    } else {
        $error = "User does not exist !";
    }  
}
?>
<?php $active    = "account" ?>
<?php $subactive = "none" ?>
<?php include '_header.php'; ?>
	<!-- Main Content -->
	<section class="content">
	    <div class="block-header">
	        <div class="row">
	            <div class="col-lg-12 col-md-12 col-sm-12">
	                <h2>Update Table
	                <small>User invites management</small>
	                </h2>
	            </div> 
	        </div>
	    </div> 
	    <div class="col-lg-12 col-md-12 col-sm-12">
	    	<div class="col-lg-4 col-md-4 col-sm-12"> 
	    	    <form action="" method="post">
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
                                </div>
                            </div> 
                        </div>        
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">                                    
                        			<button  class="btn bg-blue waves-effect waves-light" name="save_btn">Save</button></form>   
                        			<?php if($_GET['node'] != 'none'){ ?>       
            	    	                        <form action="" method="post">                               
                                    			<button  class="btn bg-red waves-effect waves-light" name="remove_btn">Remove Current Slot</button></form>        
                                    <?php } ?>
                                </div>
                            </div> 
                        </div>    
                        
                    </div>
                </div>
	    	</div>  
	    </div>
	</section>  
<?php include '_footer.php'; ?>