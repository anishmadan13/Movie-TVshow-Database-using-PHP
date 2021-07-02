<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<meta content="text/html; charset=utf-8" />
<title>Movies and TV shows</title>
<style type="text/css">
body{
    background:url(https://i.pinimg.com/originals/c5/8b/e5/c58be5a102585a17025361d366c6c37b.jpg) repeat;
    background-size:1920px;
}
.header_under{
    padding:50px 0px 0px 625px;
    font-size:25px;
}
.info{
    padding-right:200px;
}
.rating{
    padding:50px 0px 0px 250px;
}
</style>
<link rel="stylesheet"  type="text/css" href="CSS/index.css" />
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

<div class="header_under">COMMUNITY VOTE</div>
<div class="container_wrapper">
<div id="header_title">Please vote for your favourite movie from the list given below!</div>
<?php
require_once('../Administrator/PHP/connect.php');
$data=mysqli_query($connect, "SELECT * FROM tblmovie ORDER BY RAND() LIMIT 4");
$numpage = mysqli_num_rows($data);
while($rowMovie = mysqli_fetch_array($data)){
?>
<div class="content_holder">
        <div class="info">
            <?php echo "<img src=../Administrator/PHP/upload_images/movie/$rowMovie[movieimage] height=70 width=70/>"; ?> 
            <div class="info1">
                <?php
                $movie = strtoupper($rowMovie['moviename']);
                echo '<table cellpadding=0 cellspacing=0>';
                    echo '<tr>';
                        echo '<td><label id=movie>Movie Name  :  </label></td>';
                        echo "<td><a href='voting.php?id=".$rowMovie['moviename']."' id=link>".$movie."</td>";
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td><label id=a1>Director:</label></td>';
                        echo '<td><label id=a2>'.$rowMovie['moviedir'].'</label></td>';
                    echo '</tr>';
                    echo '<tr>';
                        echo '<td><label id=a1>Genre:</label></td>';
                        echo '<td><label id=a2>'.$rowMovie['moviecat'].'</label></td>';
                    echo '</tr>';
                echo '</table>';
                ?>
            </div>
        </div>
    </div>
<?php
    }
?>
<div class="rating">
<button onclick="document.location='votingList.php'">CLICK HERE TO SEE MOVIES WITH HIGHEST VOTES</button>
</div>
</div>