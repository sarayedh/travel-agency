<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
   
    <link rel="stylesheet" href="stylelogin.css"/>
</head>
<body>
<?php

    $connect = mysqli_connect("localhost","root","password","html-app-test");
    session_start();
    if (isset($_POST['email'])) {
        $email = $_POST['email'];    
        $name = $_POST['name'];
 
        // Check user is exist in the database
        $query    = "SELECT id FROM `travel-agency` WHERE email='$email'
                     AND name='$name'";
        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
          
            // Redirect to user dashboard page
          
            header("Location: ImportData/ImportBooking.php");
            
        } else {
            echo " You didn't Book , Please Try again
                  <p class='link'>Click here to <a href='booking.html'>Book</a> again.</p>
                  </div>";
        }
    } 
?>
</body>
</html>