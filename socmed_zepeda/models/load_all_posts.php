<?php
include 'db/dbconnect.php';




$sql = "SELECT account.aid,"
        . " account.firstname,"
        . " account.lastname,"
        . " post.pid, post.content,"
        . " post.post_date,"
        . " post.post_time"
        . " FROM account"
        . " INNER JOIN post ON account.aid=post.aid;";

$result = $con-> query($sql);


while($row=mysqli_fetch_assoc($result)){
    echo "<div class='post'>";
        echo "<div class='post'>";
        echo $row['firstname']."".$row['lastname'];
        echo "</div>";
        echo "<div class='post-content'>";
        echo $row['content'];
        echo "</div>";
    echo "</div>";
}
$con->close();


