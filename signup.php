<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


if(isset($_POST['submit']))
  {
    $name=$_POST['fullname'];
    $contno=$_POST['phone'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $ret=mysqli_query($con, "select email from users where email='$email' || phone='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
        echo '<script>alert("This email or Contact Number already associated with another account")</script>';
    }
    else{
    $query=mysqli_query($con, "insert into users(full_name, phone, email, pwd) value('$name','$contno', '$email', '$password' )");
    if ($query) {
    echo '<script>alert("You have successfully registered")</script>';
    header('Location: login.php');
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
}

  ?>
<!doctype html>
 <html class="no-js" lang="">
<head>
    <title>Parking Booking System || Signup Page</title>
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
if(document.signup.password.value!=document.signup.repeatpassword.value)
{
alert('Passwords does not match');
document.signup.repeatpassword.focus();
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
                        <h2 style="color: #076337">Create Your account</h2>

                <div class="login-form">
                    <form method="post" onsubmit="return checkpass();">
                         
                        <div class="form-group">
                            <label>Full Name</label>
                           <input type="text" name="fullname" placeholder="Full Name" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                           <input type="text" name="phone" maxlength="10" pattern="[0-9]{10}" placeholder="Mobile Number" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email ID</label>
                           <input type="email" name="email" placeholder="Email ID" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                           <input type="password" name="password" placeholder="Set your Password" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Re-Confirm Password</label>
                            <input type="password" name="repeatpassword" placeholder="Re-enter your password" required="true" class="form-control">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">SIGN UP</button> 
                        <div class="checkbox">
                            <label class="pull-left"> 
                            <a href="login.php">Already Registered?</a>
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
