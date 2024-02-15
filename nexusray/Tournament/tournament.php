<?php
@include "config.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="css/styles.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;500;600;700&family=Work+Sans:wght@600&display=swap"
        rel="stylesheet">
    <title>Tournament</title>
    <style>
        body {
            background-image: url("../assets/cool-geometric-triangular-figure-neon-laser-light-great-backgrounds-wallpapers.jpg");
            background-attachment: fixed;
            background-color: rgba(0, 0, 0, 0.5);
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center;
        }
    </style>

</head>

<body>
    <?php
    if (isset($_SESSION['user_id'])) {
        // User is logged in, show the logged-in navigation menu
        include('user_navbar.php');
    } else {
        // User is not logged in, show the default navigation menu
        include('navbar.php');
    }

    ?>
    <div class="tournaments">
        <h1>Live Tournaments</h1>
        <div class="boxBx">
            <div class="box">
                <img src="rainbow-six.jpg" alt="">
                <div class="content">
                    <h2><span>50</span> Matches in progress..</h2>

                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="Valorant Tourney.avif" alt="">
                <div class="content">
                    <h2><span>56</span> Matches in progress..</h2>

                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="HD-wallpaper-gaming-poster-of-call-of-duty-warzone.jpg" alt="">
                <div class="content">
                    <h2><span>23</span> Matches in progress..</h2>

                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="257_S_League_Of_Legends.jpg" alt="">
                <div class="content">
                    <h2><span>27</span> Matches in progress..</h2>

                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="fortnite-wallpaper.webp" alt="">
                <div class="content">
                    <h2><span>40</span> Matches in progress..</h2>

                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="CS 2.avif" alt="">
                <div class="content">
                    <h2><span>48</span> Matches in progress..</h2>

                    <div class="btn">
                        <a href="#" class="watch">Watch</a>
                        <a href="#" class="join">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tourney2">
        <h5>Upcoming Tournaments</h5>
        <div class="boxBx">
            <div class="box">
                <img src="AL.png" alt="">
                <div class="content">
                    <h2>TBA</h2>

                    <div class="btn">
                        <a href="#" class="sr">Set Reminder</a>
                        <a href="#" class="su">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="tom-clancys-the-division-2.jpg" alt="">
                <div class="content">
                    <h2>TBA</h2>
                    <div class="btn">
                        <a href="#" class="sr">Set Reminder</a>
                        <a href="#" class="su">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
</body>


</html>