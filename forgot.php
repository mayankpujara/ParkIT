<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['reset'])){
    $password = $_POST['newpassword'];
    $confirm = $_POST['confirmpassword'];
    $email = $_POST['email'];
    if($password == $confirm){
            $password = md5($password);
            $query=mysqli_query($con,"update users set pwd='$password' where email='$email'");
            if($query)
            {
                echo "<script>alert('Password successfully changed');</script>";
                session_destroy();
                header('location: login.php');
            }
            else{
                echo "<script>alert('Error in changing password');</script>";
            }
        }
}
?>
<!doctype html>
 <html class="no-js" lang="">
<head>
    
    <title>Parking Booking System || Forgot Password Page</title>
   

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../admin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../admin/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head>
<body class="bg-light">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                        <h1 style="color: #07d973">Parking Booking System<hr><h1>
                        <h2 style="color: #076337">Forgot Password</h2>
                <div class="login-form">
                    <form action="" method="post" onsubmit="return checkpass();">
                         <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                        <div class="form-group">
                            <label>User Email ID</label>
                           <input type="email" name="email" placeholder="Email ID" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                           <input type="password" class="form-control" name="newpassword" placeholder="New Password" required="true">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="true">
                        </div>
                        <div class="checkbox">    
                        </div>
                        <button type="submit" name="reset" class="btn btn-success btn-flat m-b-30 m-t-30">RESET
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../admin/assets/js/main.js"></script>

</body>
</html>
