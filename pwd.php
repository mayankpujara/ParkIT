<?php      
    if(isset($_POST['reset'])){
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        if($password == $confirm){
            try {
                $conn = new PDO("mysql:host=localhost;dbname=chef2door", 'root', '');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
                $sql = "UPDATE profile SET pwd='$password' WHERE user_id=2";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
      
                header('location: login.html');
              } catch(PDOException $e) {
                echo "<br>Error in Updating values.<br>" . $e->getMessage();
              }
        }
        else{
            header('location: forgot.php');
        }
    }
?>