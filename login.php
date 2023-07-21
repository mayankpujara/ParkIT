<?php
session_start();
include('includes/dbconnection.php');
if(isset($_POST['login']))
  {
    $email = $_POST['email'];  
    $password = md5($_POST['password']);  
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);  
    $sql = "select * from users where email = '$email' and pwd = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    if($count == 1){  
        header('Location: booking.php');
    }  
    else{  
        echo "<script>alert('Invalid Details.');</script>";
    }       
    }
  ?>
<!doctype html>
 <html class="no-js" lang="">
<head>
    
    <title>Parking Booking System || Login Page</title>

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
</head>
<body class="bg-light">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                        <h1 style="color: #07d973">Parking Booking System<hr><h1>
                        <h2 style="color: #076337">Login</h2>
                <div class="login-form">
                    <form method="post">                        
                        <div class="form-group">
                            <label>Email-ID</label>
                           <input type="text" name="email" placeholder="Registered Email" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" required="true" class="form-control">
                        </div>
                        <div class="checkbox">
                            
                            <label class="pull-right">
                                <a href="forgot.php">Forgot Password?</a>
                            </label>

                        </div>
                        <button type="submit" name="login" class="btn btn-success btn-flat m-b-30 m-t-30">Login</button>
                       
                       <div class="checkbox" style="padding-bottom: 20px;padding-top: 20px;">
                            
                            <label class="pull-left" >
                                <a href="signup.php">Signup</a>
                            </label>

                        </div>
                        <div class="checkbox" style="padding-bottom: 20px;padding-top: 20px;">
                            
                            <label class="pull-right" >
                                <a href="index.php">Home</a>
                            </label>

                        </div>
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
<?php
include('includes/footer.php');
?>
