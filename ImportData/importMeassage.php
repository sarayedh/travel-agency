<?php

//my database 
$host = "localhost";
$dbusername = "root";
$dbpassword = "password";
$dbname = "html-app-test";

//Creating a database connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (!$conn)
  {
  echo('The connection is not possible: ');
  }


$sql = "SELECT * FROM `travel-agency-contact`";
$result=mysqli_query($conn,$sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}else{
    echo"<table border=1>";

    while($row = mysqli_fetch_array($result))
    {
    echo"<tr>
    <td>". $row[0]."</td>
    <td>". $row[1]."</td>
    <td>". $row[2]."</td>
    </tr>";
   }
   echo "</table>";
   $conn->close();
   echo " <p class='link'>Click here to <a href='main.html'>return to main page </a> again.</p>
   </div>";
}

?>