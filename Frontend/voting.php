<?php
require_once('../Administrator/PHP/connect.php');
$id = $_REQUEST['id'];
$vote=("UPDATE tblvote SET counts=counts+1 WHERE moviename='$id'");
if(!mysqli_query($connect,$vote)){
    die(mysqli_error);
}else{
    echo '<script>alert("Thank you for casting your vote!");
            window.location.href="../index.php";</script>';	
}
?>