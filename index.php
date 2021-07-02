<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<meta content="text/html; charset=utf-8" />
<title>Movies and TV shows</title>
<style>
    body{
        background:url(https://i.pinimg.com/originals/c5/8b/e5/c58be5a102585a17025361d366c6c37b.jpg) repeat;
        background-size:1920px;
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
                <li><a href="Frontend/AboutUs.php">ABOUT US</a></li>   
            </ul>
        </div>
    </div>

    <div class="header">
        <div id = "news_header">LATEST NEWS</div>
            <div class = "news_content">
                <ul style="list-style-type:none;">
                    <li><a href="https://screenrant.com/black-panther-2-killmonger-return-michael-b-jordan-response/">
                    <figure>
                        <img src="https://static0.srcdn.com/wordpress/wp-content/uploads/2019/08/Killmonger-Michael-B-Jordan-Black-Panther.jpg?q=50&fit=crop&w=960&h=500&dpr=1.5" alt="Trulli" style="width:100%">
                        <figcaption>Michael B. Jordan Reveals He's Unlikely To Return For Black Panther 2</figcaption>
                    </figure>
                    </a></li>
                    <li><a href="https://screenrant.com/13-musical-movie-adaptation-cast-announcement/">
                    <figure>
                        <img src="https://static0.srcdn.com/wordpress/wp-content/uploads/2020/03/Netflix-Logo.jpg?q=50&fit=crop&w=960&h=500&dpr=1.5" alt="Trulli" style="width:100%">
                        <figcaption>Netflix’s Film Adaptation of 13: The Musical Announces Its Cast</figcaption>
                    </figure>
                    </a></li>
                    <li><a href="https://screenrant.com/13-musical-movie-adaptation-cast-announcement/">
                    <figure>
                        <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2020/11/Stephen-King-Firestarter.jpg?q=50&fit=crop&w=960&h=500&dpr=1.5" alt="Trulli" style="width:100%">
                        <figcaption>Stephen King Sends Love To Firestarter Reboot Cast & Crew Ahead Of Filming</figcaption>
                    </figure>
                    </a></li>
                    <li><a href="https://screenrant.com/wrath-man-red-band-movie-trailer-jason-statham/">
                    <figure>
                        <img src="https://static3.srcdn.com/wordpress/wp-content/uploads/2021/03/Wrath-Of-Man-Trailer-Three.jpg?q=50&fit=crop&w=960&h=500&dpr=1.5" alt="Trulli" style="width:100%">
                        <figcaption>Wrath of Man Red Band Trailer Teases Violent Jason Statham Revenge Movie</figcaption>
                    </figure>
                    </a></li>
                    <li><a href="https://screenrant.com/captain-america-4-movie-director-kari-skogland-response/">
                    <figure>
                        <img src="https://static0.srcdn.com/wordpress/wp-content/uploads/2021/04/Sam-Wilson-as-Captain-America-in-Marvel-Comics-and-Falcon-and-Winter-Soldier.jpg?q=50&fit=crop&w=960&h=500&dpr=1.5" alt="Trulli" style="width:100%">
                        <figcaption>Falcon & Winter Soldier Director Open to Helming Captain America 4</figcaption>
                    </figure>
                    </a></li>
                    <li><a href="https://screenrant.com/mortal-kombat-liu-kang-spam-move-gag-gamers-mock/">
                    <figure>
                        <img src="https://static2.srcdn.com/wordpress/wp-content/uploads/2021/04/Mortal-Kombat-Liu-Kang-Kano-Mocks-gamers-who-spam-fighting-.jpg?q=50&fit=crop&w=960&h=500&dpr=1.5" alt="Trulli" style="width:100%">
                        <figcaption>Mortal Kombat Mocks Gamers Who Spam Fighting Moves</figcaption>
                    </figure>
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>