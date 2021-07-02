<?php
//String connection to the database
$connect = mysqli_connect("localhost","root","","hope");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>