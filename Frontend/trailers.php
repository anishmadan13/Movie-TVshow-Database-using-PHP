<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<meta content="text/html; charset=utf-8" />
<title>Movies and TV shows</title>
<link rel="stylesheet"  type="text/css" href="CSS/index.css" />
<script type="text/javascript" src="Javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.error').delay(1200).fadeOut('normal');
	$('.success').delay(1200).fadeOut('normal');	
});
</script>
<style>
    body{
        background:url(https://i.pinimg.com/originals/c5/8b/e5/c58be5a102585a17025361d366c6c37b.jpg) repeat;
        background-size:1920px;
    }
    .header_1{
        padding:20px 0px 20px 0px;
        text-align:center;
    }
    .points{
        list-style-type:none;
    }
    iframe{
        margin-left:50px;
    }
    .desc{
        padding:20px 0px 10px 50px;
        font-size:27px;
    }
    .next{
        padding-left:400px;
        font-size:25px;
    }
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

<div class="header_under"></div>
<div class="container_wrapper">
    <h3 class="header_1">FEATURED TRAILERS!</h3>
    <ul class="points">
        <li>
        <iframe width="640" height="345" src="https://www.youtube.com/embed/h9Q4zZS2v1k">
        </iframe>
        <br><p class = "desc">THE CONJURING: THE DEVIL MADE ME DO IT – Official Trailer</p>
        </li>
    <li>
        <iframe width="640" height="345" src="https://www.youtube.com/embed/FqAjVAf5fNA">
        </iframe>
        <br><p class = "desc">Fast & Furious 9 – Official Trailer (Universal Pictures)</p>
    </li>
    </ul>
    <a href="trailers2.php" class="next">NEXT</a>
</div>
</div>
        
