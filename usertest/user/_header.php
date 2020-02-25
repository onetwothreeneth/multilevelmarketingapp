<?php
 session_start();
 if(!isset($_SESSION['id'])){
     header("location:../user");
 }
 
 $conn = mysqli_connect("localhost","techfocu_lml","7w%!lLsbt[5b","techfocu_lml");
 $query = $conn->query("SELECT * FROM users where id ='".$_SESSION['id']."'"); 
 while($a = $query->fetch_array()){
     $row[] = $a;
 }
 $user = $row[0];
  
        function get_invite($id,$ord){
            $default = 'http://admin.ewallet.legendarywordpress.com/public/images/default.jpg';
            if($id != 0){
                $conn = mysqli_connect("localhost","techfocu_lml","7w%!lLsbt[5b","techfocu_lml"); 
                $a = $conn->query("SELECT * FROM users where invited_by = '".$id."' ORDER BY id ".$ord."  LIMIT 1 "); 
                 
                $num  = $a->num_rows;
                
                if($num != 0){ 
                    while($s = $a->fetch_array()){
                         $info[] = $s;
                     }
                    if($info[0]['photo'] != NULL){
                        $img = 'http://admin.ewallet.legendarywordpress.com/'.$info[0]['photo'];
                    } else {
                        $img = $default;
                    }
                    
                    return array(
                        "id"    => $info[0]['id'],
                        "image" => $img
                    );
                } else {
                     return array(
                        "id"    => 0,
                        "image" => $default
                    );
                }
            } else {
                 return array(
                    "id"    => 0,
                    "image" => $default,
                );
            }  
        }
?>

<!doctype html>
<html class="no-js " lang="en"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

	<title> Dashboard - LML</title>
	<!-- Favicon-->
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
	<link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
	<!-- Custom Css -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<link rel="stylesheet" href="../assets/css/color_skins.css">
    <link rel="stylesheet" type="text/css" href="http://fperucic.github.io/treant-js/Treant.css"> 
</head>
<body class="theme-cyan">

	<div class="page-loader-wrapper">
	    <div class="loader"> 
	        <p>Please wait...</p>        
	    </div>
	</div>

	<div class="overlay"></div>
	<!-- Top Bar -->
	<nav class="navbar">
	    <ul class="nav navbar-nav navbar-left">
	        <li>
	            <div class="navbar-header">
	                <a href="javascript:void(0);" class="bars"></a>
	                <a class="navbar-brand"><span class="m-l-10" style="color:white;">LML DASBOARD</span></a>
	            </div>
	        </li>        
	        <li>
	            <a  >
	                <i style="opacity: 0;" class="zmdi zmdi-arrow-left"></i>
	                <i style="opacity: 0;" class="zmdi zmdi-arrow-right"></i>
	            </a>
	        </li> 
	        <li class="float-right">     
	            <a href="index.php" class="mega-menu"><i class="zmdi zmdi-menu"></i></a>
	        </li>        
	    </ul>
	</nav>

	<?php include '_sidebar.php'; ?>