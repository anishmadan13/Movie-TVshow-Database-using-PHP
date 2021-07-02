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
#sub{ cursor:pointer; width:70px; font-family:"Courier New", Courier, monospace; font-weight:600;height:30px; margin-top:0}
#sub:hover,#can:hover{
	color:#06F;
	-moz-box-shadow:0px 0px 5px #B0B0B0;
	-webkit-box-shadow:0px 0px 5px #B0B0B0;
	-khtml-box-shadow:0px 0px 5px #B0B0B0;
	border:1.5em medium #B0B0B0;
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

<div class="header_under"></div>
<div class="container_wrapper">
    <div class="sidebar_menu">
    	<h3 class="header_1">MOVIES</h3>
            <ul>
                <?php 
                require_once('../Administrator/PHP/connect.php');
                $getCat= mysqli_query($connect,"SELECT id,catname FROM tblcategory");
                while($rowCat = mysqli_fetch_array($getCat)){
                ?>
                <li>
                <a href="MovieByCategory.php?id=<?php echo $rowCat['id']?>"><img src="../Templates/list-style.png" height="8"  width="8"/>&nbsp;<?php echo $rowCat['catname']?></a>
                </li>
                <?php } ?>
            </ul>
    </div>

    <div class="col2">
    	<div class="search_box">
        	<form name="search" id="search" method="post" action="SearchMovie.php" onsubmit="return validate()">
            	<table>
                	<tr>
                    	<td>Category</td>
                    	<td>
                        	<select name="category">
                            <option value="SELECT" selected="selected">--SELECT CATEGORY--</option>
                            <?php 
							$getCat= mysqli_query($connect,"SELECT id,catname FROM tblcategory");
							while($rowCat = mysqli_fetch_array($getCat)){
							?>
                            	<option value="<?php echo $rowCat['id']?>"><?php echo $rowCat['catname']?></option>
                            <?php } ?>
                            </select>
                        </td>
                        <td>
                        	<input type="text" id="search" name="search" placeholder="Enter Movie Name" size="39"/>
                        </td>
                        <td>
                        	<input type="submit" value="Search" id="sub"/>
                		</td>
                    </tr>
                </table>
            </form>
    	</div>
     	<div id="header_title">Movie List</div>
        <?php
		error_reporting(E_ERROR);
		$line = 0;
		$page = 'movies.php';
		$dataperpage = mysqli_query($connect,"SELECT * FROM tblmovie");
		$numpage = mysqli_num_rows($dataperpage);
		$start = $_GET['start'];
		$eu = $start - 0;
		$limit = 8;
		$thisp= $eu + $limit;
		$back = $eu - $limit;
		$next = $eu + $limit;
		if(strlen($start) > 0 && !is_numeric($start)){
			echo 'Data Error';	
		exit();
		}
        $getMovie = mysqli_query($connect,"SELECT * FROM tblmovie ORDER BY moviename LIMIT $eu,$limit");
        while($rowMovie = mysqli_fetch_array($getMovie)){
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
								echo "<td><a href='ViewMovie.php?id=".$rowMovie['moviename']."' id=link>".$movie."</td>";
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
			if($numpage>$limit){
				echo "<table align=center><tr><td align=left>";
					if($back>=0){
						echo "<a href=$page?start=$back>PREV</a>";	
					}
						echo "</td><td align=center width=200>";
							$l = 1;
								for($i = 0; $i < $numpage;$i = $i + $limit){
									if($i<>$eu){
										echo "<a href=$page?start=$i><font color=red>$l\t\t\t\t\t\t\t</font></a>";	
									}else{
										echo "<font color=red>$l\t\t\t\t\t\t\t\t</font>";	
									}		
										$l = $l + 1;
									}
						echo "</td><td align=left>";
							if($thisp<$numpage){
								echo "<a href=$page?start=$next>NEXT</a>";	
							}
				echo "</td></tr></table>";
			}
		?>  
    </div>
</div>
    


