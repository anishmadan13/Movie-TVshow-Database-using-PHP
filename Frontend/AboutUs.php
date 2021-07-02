<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta content="text/html; charset=utf-8" />
<title>Movies and TV shows</title>
<link rel="stylesheet"  type="text/css" href="CSS/index.css" />
<style>
    body{
        background:url(https://i.pinimg.com/originals/c5/8b/e5/c58be5a102585a17025361d366c6c37b.jpg) repeat;
        background-size:1920px;
    }
    .about{
        font-size:35px;
        text-align:center;
    }
    .desc{
        padding:45px;
    }
    .fa {
        padding: 10px;
        font-size: 40px;
        width: 60px;
        text-align: center;
        text-decoration: none;
        margin: 5px 30px;
        border-radius: 50%;
    }

    .fa:hover {
        opacity: 0.7;
    }

    .fa-facebook {
        background: #3B5998;
        color: white;
    }
    .fa-twitter {
        background: #55ACEE;
        color: white;
    }
    .fa-instagram {
        background: #125688;
        color: white;
    }
    .fa-linkedin {
        background: #007bb5;
        color: white;
    }
    .socials{
        padding-left:150px;
    }
    .container_wrapper{
        height:650px;
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

    <p class="about"> ABOUT ME</p>
    <p class="desc">
    Hello there! I am Anish, the designer of this simple website!
    <br><br>
    I would like to thank you for visiting this website!
    <br><br>
    So about me, I am from Bangalore and i currently study in Sir M.Visvesvaraya Institute of technology pursuing the B.Tech course in the branch, Information Science.
    <br><br>
    One of my strengths are, i really like to learn new stuff and give them out a try. Web developement is one of those which i really enjoyed right from learning the basics to building this website.
    <br><br>
    I guess my dream would be one day to provide my services to the likes of Microsoft, Apple :)
    <br><br><br>
    Anyway, if you have any queries or feedback you would like to share with me with regard to this project, feel free to find my socials below and message me!
    </p>
    <div class="socials">
    <a href="https://www.facebook.com/anish.madan.09" class="fa fa-facebook"></a>
    <a href="https://twitter.com/anish_madan08" class="fa fa-twitter"></a>
    <a href="https://www.linkedin.com/in/anish-madan-922524197" class="fa fa-linkedin"></a>
    <a href="https://www.instagram.com/anish_madan08/" class="fa fa-instagram"></a>
    </div>
</div>

