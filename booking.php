<?php
//my database 
$host = "us-cdbr-east-05.cleardb.net";
$dbusername = "bff42cf036cabb";
$dbpassword = "0d9bb62b";
$dbname = "heroku_36128ee037e6d57";

//Creating a database connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (!$conn)
  {
  echo('The connection is not possible: ');
  }

//get the post records
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$location = filter_input(INPUT_POST, 'location');
$place = filter_input(INPUT_POST, 'place');
$Phone = filter_input(INPUT_POST, 'Phone');

//database insert code
$sql = "INSERT INTO `travel-agency` (`name`, `email`, `location`,`place`,`Phone`) VALUES ('$name', '$email', '$location','$place', '$Phone')";

// insert in database 
$query = mysqli_query($conn, $sql);

if($query)
{
	header("Location: main.html");
}else
{
    echo "Try booking again please ";
    echo " <p class='link'>Click here to <a href='booking.html'>try booking </a> again.</p>
    </div>";
}
?>