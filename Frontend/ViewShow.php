<?php
require_once('../Administrator/PHP/connect.php');
$id = $_REQUEST['id'];
$getShowName = mysqli_query($connect,"SELECT * FROM tblshows WHERE showname = '$id'");
while($rowName = mysqli_fetch_array($getShowName)){
$showname = $rowName['showname'];
for($i=0;$i < strlen($showname); $i++){
    if($showname[$i]==" "){
        $showname[$i]="-";
    }
}	
}

header("Location: http://commonsensemedia.org/tv-reviews/$showname");
exit();

?>
