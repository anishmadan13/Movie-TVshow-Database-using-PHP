<?php
require_once('../Administrator/PHP/connect.php');
$id = $_REQUEST['id'];
$getMovieName = mysqli_query($connect,"SELECT * FROM tblmovie WHERE moviename = '$id'");
while($rowName = mysqli_fetch_array($getMovieName)){
$moviename = $rowName['moviename'];
for($i=0;$i < strlen($moviename); $i++){
    if($moviename[$i]==" "){
        $moviename[$i]="-";
    }
}	
}

header("Location: http://commonsensemedia.org/movie-reviews/$moviename");
exit();

?>
