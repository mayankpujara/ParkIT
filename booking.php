<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


if(isset($_POST['book']))
  {
    $name=$_POST['fullname'];
    $contact=$_POST['phone'];
    $vehicle=$_POST['vehicle'];
    $date=$_POST['date'];
    $duration=$_POST['duration'];
    $slot=$_POST['slot'];
    $query=mysqli_query($con, "insert into bookings(full_name, phone, vehicle, date, duration, slot) values('$name','$contact', '$vehicle', '$date', '$duration', '$slot' )");
    if ($query) {
    echo '<script>alert("Parking Slot booked successfully")</script>';
    header('Location: ticket.php');
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}


  ?>
<!doctype html>
 <html class="no-js" lang="">
<head>
    <title>Parking Booking System || Booking Page</title>
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
                        <h1 style="color: #07d973">Welcome User!<hr><h1>
                        <h2 style="color: #076337">Book Your Slot</h2>

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
                            <label>Vehicle Number</label>
                           <input type="text" name="vehicle" maxlength="10" placeholder="Vehicle Number" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                           <input type="date" name="date" required="true" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Duration</label>
                            <select id="duration" name="duration" required="true" class="form-control">
                                <option value="1">1 hour</option>
                                <option value="2">2 hours</option>
                                <option value="3">3 hours</option>
                                <option value="4">4 hours</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Slot ID</label>
                           <input type="text" name="slot" required="true" class="form-control">
                        </div>
                        <button type="submit" name="book" class="btn btn-success btn-flat m-b-30 m-t-30">BOOK</button> 
                        <button type="submit" name="view" class="btn btn-success btn-flat m-b-30 m-t-30"><a href = "ticket.php">VIEW TICKET</a></button>    
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
