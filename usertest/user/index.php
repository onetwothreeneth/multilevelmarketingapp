<?php 

   session_start();
    
    
 if(isset($_GET['success'])){
   $_SESSION['id'] = $_GET['id'];
        header('location:user_dasboard.php'); 
 }  else {
    unset($_SESSION['id']);
    session_destroy(); 
 }
?>
<!doctype html>
<html class="no-js " lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Login - LML</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/main.css">    
    <link rel="stylesheet" href="../assets/css/color_skins.css">
</head>
<style type="text/css">
    body{
        background-image: url(http://kb4images.com/images/business-wallpaper/37531252-business-wallpaper.jpg);
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>
<body class="theme-cyanx">
    <div class="authentication sidebar-collapse">  
        <div class="page-header">
            <div class="container">
                <div class="col-md-12 content-center">
                    <div class="card-plain">
                        <form class="form" method="get" action="http://localhost/ewallet/admin/userlogin">
                            <div class="header"> 
                                <h5>Dashboard Login</h5>
                            </div>
                            <?php if(isset($_GET['error'])){ ?>
                                <p style="color:red;">Wrong login credentials</p>
                            <?php } ?>
                            <div class="content">                                                
                                <div class="input-group">
                                    <input type="hidden" class="form-control"  name="_token" value="bhjgh12n4bvhj1kn41">
                                    <input type="text" class="form-control" placeholder="Enter User Name" name="user" required>
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-account-circle"></i>
                                    </span>
                                </div>
                                <div class="input-group">
                                    <input type="password" placeholder="Password" class="form-control"  name="password" required />
                                    <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                                </div>
                            </div>
                            <div class="footer">
                                <button class="btn btn-info btn-round btn-lg btn-block ">SIGN IN</button>
                                <!--<a href="user_dasboard.php" class="btn btn-info btn-round btn-lg btn-block ">SIGN IN</a>-->
                                <h5><a href="forgot.php" class="link">Forgot Password ?</a></h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container"> 
                    <div class="copyright">
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        &copy;
                        <span><a target="_blank">LML APP</a></span>
                    </div>
                </div>
            </footer>
        </div>
    </div> 

    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="../assets/js/pages/authentication/page.js"></script>
</body> 
</html>