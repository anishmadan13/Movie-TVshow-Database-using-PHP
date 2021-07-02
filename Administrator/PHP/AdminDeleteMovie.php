<?php
require_once('connect.php');
$id = $_REQUEST['id'];
$sql = mysqli_query($connect,"DELETE FROM tblmovie WHERE moviename = '$id'") or die(mysqli_error());
echo '<script>alert("1 Record removed from database!");
				window.location.href="AddRemMoviePage.php"</script>';	
?>