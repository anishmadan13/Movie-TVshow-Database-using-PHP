<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<meta content="text/html; charset=utf-8" />
<title>Movies and TV shows</title>
<link rel="stylesheet"  type="text/css" href="CSS/index.css" />
<style type="text/css">
body{
    background:url(https://i.pinimg.com/originals/c5/8b/e5/c58be5a102585a17025361d366c6c37b.jpg) repeat;
    background-size:1920px;
}
.header_under{
    padding:50px 50px 50px 625px;
    font-size:25px;
}
.container_wrapper{
	width:660px;
	height:600px;
	padding:0px;
	position:relative;
	margin-top:16psx;
	margin-left:auto;
	margin-right:auto;
	background:#FFF;
	-moz-box-shadow:0px 0px 10px #B0B0B0;
	-webkit-box-shadow:0px 0px 10px #B0B0B0;
	-khtml-box-shadow:0px 0px 10px #B0B0B0;
}
.info{ height:auto; width:100%;position:relative; top:28px;}
.info1{ height:50px; width:595px; float:right; padding:0px;}
</style>

</head>
<body>
<div class="header_wrapper">
    <div class="login">
        <?php
        $today=date('F j, Y');
        echo '&nbsp;Today is '.$today;
        ?>
        <ul>		
            <li><a href="../loginpage.php">Admin Login</a></li>                
        </ul>
    </div>
</div>

<div class="header_menu">
    <div class="menu">
        <ul>
            <li><a href="../index.php">HOME</a></li>
            <li><a href="movies.php">MOVIES</a></li>
            <li><a href="shows.php">TV SHOWS</a></li>
            <li><a href="vote.php">COMMUNITY VOTE</a></li>
            <li><a href="trailers.php">FEATURED TRAILERS</a></li>
            <li><a href="AboutUs.php">ABOUT US</a></li>   
        </ul>
    </div>
</div>

<div class="header_under">TOP 5 MOST VOTED MOVIES</div>
<div class="container_wrapper">
<?php
require_once('../Administrator/PHP/connect.php');
$getMovie = mysqli_query($connect,"SELECT * FROM tblvote ORDER BY counts desc LIMIT 5");
while($rowMovie = mysqli_fetch_array($getMovie)){
   ?>	
     <div class="content_holder">
        <div class="info">
                <div class="info1">
                <?php
                $movie = strtoupper($rowMovie['moviename']);
                echo '<table cellpadding=0 cellspacing=0>';
                    echo '<tr>';
                        echo '<td><label id=movie>Movie Name  : </label></td>';
                        echo "<td><a href='ViewMovie.php?id=".$rowMovie['moviename']."' id=link>".$movie."</td>";
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td><label id=a1>Votes:</label></td>';
                        echo '<td><label id=a2>'.$rowMovie['counts'].'</label></td>';
                    echo '</tr>';
                echo '</table>';
                ?>
            </div>
        </div>
    </div>
<?php
    }
    ?>