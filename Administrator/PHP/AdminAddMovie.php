<?php
require_once('connect.php');
if($_POST['txtid']=="" || $_POST['txtmoviename']=="" || $_POST['txtmoviedir']=="" || $_POST['txtmoviecat']=="" || $_POST['txtmovieimage']==""){
	echo '<script>alert("All Fields are Required");
				window.location.href="AddRemMoviePage.php"</script>';	
}else{
$id = $_POST['txtid'];
$moviename = $_POST['txtmoviename'];
$moviedir = $_POST['txtmoviedir'];
$moviecat = $_POST['txtmoviecat'];
$movieimage = $_POST['txtmovieimage'];

$Addmovie = ("INSERT INTO tblmovie(id,moviename,moviedir,moviecat,movieimage) VALUES ('".$id."','".$moviename."','".$moviedir."','".$moviecat."','".$movieimage."')");
	if(!mysqli_query($connect,$Addmovie)){
		die(mysqli_error);
	}else{
		echo '<script>alert("1 Record added!");
				window.location.href="AddRemMoviePage.php"</script>';	
	}
$Addtovote = ("INSERT INTO tblvote(moviename,counts) VALUES ('".$moviename."',0)");
if(!mysqli_query($connect,$Addtovote)){
	die(mysqli_error);
}else{
	echo '<script>alert("1 Record added!");
			window.location.href="AddRemMoviePage.php"</script>';	
}
}
?>