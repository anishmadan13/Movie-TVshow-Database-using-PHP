<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:../../loginpage.php");	
}else{
?>
<!DOCTYPE html>
<head>
<meta content="text/html; charset=utf-8" />
<title>ADD/REMOVE TV SHOW</title>
<link rel="stylesheet" type="text/css" href="../../CSS/index.css" />
<script type="text/javascript" src="../Javascript/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
</script>
<style>
body{
        background:url(https://i.pinimg.com/originals/c5/8b/e5/c58be5a102585a17025361d366c6c37b.jpg) repeat;
        background-size:1920px;
    }
.home_content{
	width:660px;
	height:500px;
	float:right;
	margin-right:8px;
	padding:0px;	
}

.home_content .header{
	font-weight:bold;
	color:#333;
	border-bottom:2px solid #dadada;
	padding-bottom:3px;
	padding-left:3px;
}
.home_content .banner{
	height:210px;
	margin-top:0px;
	width:100%;
	-moz-box-shadow:0px 0px 10px #B0B0B0;
	-webkit-box-shadow:0px 0px 10px #B0B0B0;
	-khtml-box-shadow:0px 0px 10px #B0B0B0;
	border:1px medium #B0B0B0;
}

.form{
	width:640px;
	height:500px;
	padding:7px 7px;	
}

label{
	width:105px;
	font:"Times New Roman", Times, serif;
	font-size:14px;
	font-weight:bold;
	color:#333;
	margin-top:5px;
	display:inline-block;
    padding-bottom:25px;
}
#button1{
	width:100px;
	font-weight:bold;
	border:1px solid #CCC;
	background:#EEE;
	margin-left:111px;
	color:#06F;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
	cursor:pointer;
}
#button2{
	width:100px;
	font-weight:bold;
	border:1px solid #CCC;
	background:#EEE;
	color:#06F;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
	cursor:pointer;
}

.table{
	height:35px;
	background:#5B5B5B;
	color:#FFF; 
	border-bottom:5px solid #BAFD3E;
	border-top:1px dotted #CCC;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
	margin-left:0;
}

textarea{
	display:inline-block;
	border:1px solid #D4D4D4;
	font:"MS Serif", "New York", serif;
	padding:5px 5px;
	font-size:12px;
	color:#333;
	max-width:300px;
	max-height:300px;
}
input,select{
	padding:5px 5px;
	border:1px solid #D4D4D4;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#333;
	display:inline-block;
}

.mid{
	padding-bottom:8px;
}
</style>
</head>

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
<div class="container_wrapper">
<div class="home_content">
    	<h2 class="header">Add New TV SHOW</h2>	
        	<div class="form">
            	<form  method="post" action="AdminAddShow.php" name="myform"/>
                    <div>
                    	<label for="ID" class="mid">Series ID</label>
                        <input type="text" name="txtid" id="txtid" placeholder="Enter ID" size="39"/><p>  (1-Action, 2-Adventure, 3-Comedy, 4-Horror, 5-Drama, 6-Romance, 7-Thriller)
                    </div>
                    <div>
                    	<label for="ShowName">Series Name</label>
                        <input type="text" name="txtshowname" id="txtshowname" placeholder="Show Name" size="39"/>
                    </div>
                    <div>
                    	<label for="Director">Series Director</label>
                        <input type="text" name="txtshowdir"  id="txtshowdir" placeholder="Director" size="39"/>
                    </div>
                    <div>
                    	<label for="category">Series Category</label>
                        <input type="text" name="txtshowcat"  id="txtshowcat" placeholder="Category" size="39"/>
                    </div>
                    <div>
                    	<label for="image">Series Image</label>
                        <input type="text" name="txtshowimage"  id="txtshowimage" placeholder="Image name" size="39"/>
                    </div>
                    <div>
                    	<input type="submit" value="Add Show" id="button1" name="add"/>
                        <input type="reset" value="Cancel" id="button2"/>
                    </div>                  
                </form>
                <br /><br />
                <table  width="650" border="0" cellpadding="1" cellspacing="0">
                	<tr>
                    	<th class="table">Name</th><th class="table">Director</th><th class="table">Genre</th><th class="table">Action</th>
                    </tr>
					<?php
                    require_once('connect.php');
					$line = 0;
                    $getUsers = mysqli_query($connect,"SELECT * FROM tblshows") or die(mysqli_error());
                    while($row = mysqli_fetch_array($getUsers)){
						if($line == 1){
							$bgcolor = '#E0EEF8';
							$line = 0;
						}else{
							$bgcolor = '#FFFFFF';
							$line = 1;
						}
                    ?>			
                    <tr align="center" bgcolor="<?php echo $bgcolor?>" height="30">
                    	<td align="center"><?php echo $row['showname']?></td>
                        <td align="center"><?php echo $row['showdir']?></td>
                        <td align="center"><?php echo $row['showcat']?></td>
                        <td align="center" width="120">&nbsp;|&nbsp;<a href="AdminDeleteShow.php?id=<?php echo $row['showname']?>" class="link" onclick="return confirm('Do you want to delete this?')">DELETE</a></td>
                    </tr>  
                    <?php } ?>
                </table>
            </div>
        
    </div>
</div>
<?php 	
}
?>