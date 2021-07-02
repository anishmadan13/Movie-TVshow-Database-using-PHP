<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MOVIE AND TV SHOW</title>
<link rel="stylesheet"  type="text/css" href="Frontend/CSS/index.css"/>
<script type="text/javascript" src="Administrator/Javascript/jquery-1.6.2.min.js"></script>
<style>
#loginform{
	padding:0px;
	margin:0px;
	width:310px;
	height:400px;
	margin-left:auto;
	margin-right:auto;
}
body{
        background:url(https://i.pinimg.com/originals/c5/8b/e5/c58be5a102585a17025361d366c6c37b.jpg) repeat;
        background-size:1920px;
    }
</style>
</head>

<body>
<div class="header_wrapper">
        <div class="login">
          		<?php
				$today = date('F j, Y');
				echo '&nbsp;Today is '.$today;
				?>
            <ul>		
                <li><a href="loginpage.php">Admin Login</a></li>                
            </ul>
   		</div>
</div>

<div class="header_menu">
	<div class="menu">
    	<ul>
        	<li><a href="index.php">HOME</a></li>
            <li><a href="Frontend/movies.php">MOVIES</a></li>
            <li><a href="Frontend/shows.php">TV SHOWS</a></li>
            <li><a href="Frontend/vote.php">COMMUNITY VOTE</a></li>
            <li><a href="Frontend/trailers.php">FEATURED TRAILERS</a></li>   
            <li><a href="Frontend/News.php">ABOUT US</a></li>           
    	</ul>
    </div>
</div>

<div class="header_under"></div>
		<div class="login_wrapper">
        	<div class="submenu"></div>
        		<div id="loginform">
                <div id="header_title">Admin Login Form</div>
                
            	<form action="login.php" method="post" id="form">
                	<table>
                    	<tr>
                        	<td>Username</td>
                            <td><input type="text" name="username" size="39"/></td>
                        </tr>
                        <tr>
                        	<td>Password</td>
                            <td><input type="password" name="password" size="39"/></td>
                        </tr>
                         <tr>
                        	<td>&nbsp;</td>
                            <td><input type="submit" value="Login"/>&nbsp;<input type="reset" value="Cancel"/></td>
                        </tr>
                    </table>
                </form>
                <?php
				if(isset($_GET['error_log'])){
				?>
                <div class="error">Wrong username of password!</div>
               	<?php }?>
            </div>
        </div>
	</div>
</body>
</html>