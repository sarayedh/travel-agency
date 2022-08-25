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
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');


//database insert code
$sql = "INSERT INTO `travel-agency-contact` (`message`, `email`) VALUES ('$message', '$email')";

// insert in database 
$query = mysqli_query($conn, $sql);

if($query)
{
	echo "Your message has been send with success";
  echo " <p class='link'>Click here to <a href='main.html'>return to main page </a> again.</p>
  </div>";
}else
{
    echo "Try sending a new message please ";
}
?>