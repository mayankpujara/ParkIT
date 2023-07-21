<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['generate']))
  {
    $query = mysqli_query($con, "select * from bookings");
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    echo"<center>";
    echo "Slot ID: " . $row["slot"] . "<br>";
    echo "Full Name: " . $row["full_name"] . "<br>";
    echo "Mobile Number: " . $row["phone"] . "<br>";
    echo "Vehicle Number: " . $row["vehicle"] . "<br>";
    echo "Date of booking: " . $row["date"] . "<br>";
    echo "Duration of Booking: " . $row["duration"] . "hours". "<br><hr width = 100px>";
}
    echo "<button type='submit' name='logout' class='btn btn-success btn-flat m-b-30 m-t-30' onclick><a href = 'index.php'>LOGOUT</a></button>";
mysqli_close($conn);
}

if(isset($_POST['logout'])){
    header('Location: index.php');
}

?>

<!doctype html>
 <html class="no-js" lang="">
<head>
    <title>Parking Booking System || Ticket Page</title>
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
</script>
</head>
<body class="bg-light">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <center>
            <div class="login-content">
                        <h1 style="color: #07d973">Welcome User!<hr><h1>
                <div class="login-form">
                    <form method="post" onsubmit="return checkpass();">
                        <button type="submit" name="generate" class="btn btn-success btn-flat m-b-30 m-t-30">GENERATE TICKET</button>     
                        <button type="submit" name="logout" class="btn btn-success btn-flat m-b-30 m-t-30">LOGOUT</button><br><br>
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
