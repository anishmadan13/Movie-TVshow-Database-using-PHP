<?php
require_once('connect.php');
$id = $_REQUEST['id'];
$sql = mysqli_query($connect,"DELETE FROM tblshows WHERE showname = '$id'") or die(mysqli_error());
echo '<script>alert("1 Record removed from database!");
				window.location.href="AddRemShowPage.php"</script>';	
?>