<?php
require_once('connect.php');
if($_POST['txtid']=="" || $_POST['txtshowname']=="" || $_POST['txtshowdir']=="" || $_POST['txtshowcat']=="" || $_POST['txtshowimage']==""){
	echo '<script>alert("All Fields are Required");
				window.location.href="AddRemShowPage.php"</script>';	
}else{
$id = $_POST['txtid'];
$showname = $_POST['txtshowname'];
$showdir = $_POST['txtshowdir'];
$showcat = $_POST['txtshowcat'];
$showimage = $_POST['txtshowimage'];

$AddShow = ("INSERT INTO tblshows(id,showname,showdir,showcat,showimage) VALUES ('".$id."','".$showname."','".$showdir."','".$showcat."','".$showimage."')");
	if(!mysqli_query($connect,$AddShow)){
		die(mysqli_error);
	}else{
		echo '<script>alert("1 Record added!");
				window.location.href="AddRemShowPage.php"</script>';	
	}
}
?>