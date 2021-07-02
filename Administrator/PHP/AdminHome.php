<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:../../loginpage.php");	
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MOVIES AND TV SHOWS</title>
<link rel="stylesheet" type="text/css" href="../../Frontend/CSS/index.css" />
<script type="text/javascript" src="../Javascript/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../Javascript/formvalidation.js"></script>
</head>
<style>
    body{
        background:url(https://i.pinimg.com/originals/c5/8b/e5/c58be5a102585a17025361d366c6c37b.jpg) repeat;
        background-size:1920px;
    }
    .header{
        padding-top:35px;
        padding-left:50px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    .desc{
        padding-top:50px;
        padding-left:50px;
        font-size:20px;
        
        font-family: cursive;
    }
    p{
        font-size:25px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
</style>

<div class="header_wrapper">
	<div class="login">
          <?php
				$today = date("F j, Y");
				echo '&nbsp;Today is '.$today;
				?>
            <ul>
            	
                <li><a href="logout.php">Admin Logout</a></li>
            </ul>
   	</div>
</div>

<div class="header_menu">
	<div class="menu">
    	<ul>
        	<li><a href="AdminHome.php">HOME</a></li>
            <li><a href="AddRemMoviePage.php">ADD/REMOVE MOVIE</a></li>
            <li><a href="AddRemShowPage.php">ADD/REMOVE TV SHOW</a></li>
    	</ul>
    </div>
</div>

<div class="header_under"></div>
<!--Start Container for the web content-->
<div class="container_wrapper">
	
    <div class="home_content">
    <div class="banner">
        <h2 class="header">Hello Admin, <?php echo $_SESSION['name']?></h2>
    </div>
    </div>
    <div class = "desc">
    <p class="welcome">Welcome to the admin panel of the website.</p> 
    <br><br>
    On this page you can access the admin privilages of this website.
    <br><br>
    You can add or remove Movies or TV Shows based on the user's needs.
    <br><br>
    To do this, simply select your desired option from the menu shown above and follow the instructions.
    <br><br><br>
    Thank You once again for visiting our website!
</div>
</div>

</body>
</html>
<?php 	
}
?>