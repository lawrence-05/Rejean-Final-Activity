<?php

include 'db/dbconnect.php';

$aid = $_SESSION['aid'];

$Sql = "SELECT * FROM post WHERE aid=$aid";

$result = $con->query($Sql);


while($row = mysqli_fetch_assoc ($result)){
  echo "<div class='post'>";
    echo "<div class='post-name'>";
    echo $_SESSION['firstname']." ".$_SESSION['lastname'];
    echo "</div>";
    echo "<div class='post-content'>";
    echo $row['content'];
    echo "</div>";
  echo "</div>";
    
}


$con->close();
