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


$sql = "SELECT * FROM `travel-agency`";
$result=mysqli_query($conn,$sql);

if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}else{
    echo "Your Booking was already confirmed ";
    echo"<table border=1>";

    while($row = mysqli_fetch_array($result))
    {
    echo"<tr>
    <td>". $row[0]."</td>
    <td>". $row[1]."</td>
    <td>". $row[2]."</td>
    <td>". $row[3]."</td>
    <td>". $row[4]."</td>
    <td>". $row[5]."</td>
    </tr>";
   }
   echo "</table>";
   $conn->close();
   echo " <p class='link'>Click here to <a href='main.html'>return to main page </a> again.</p>
                  </div>";
}

?>