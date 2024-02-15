<?php
@include "config.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Welcome</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon"
        href="assets/cool-geometric-triangular-figure-neon-laser-light-great-backgrounds-wallpapers.jpg" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
    body {
        background-image: url("assets/cool-geometric-triangular-figure-neon-laser-light-great-backgrounds-wallpapers.jpg");
        background-attachment: fixed;
        background-color: rgba(0, 0, 0, 0.5);
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: center;
    }

    a.card-link {
        text-decoration: none;
        color: black;

    }

    .card {
        background-color: rgba(255,255, 255, 0.85);
        /* add any other styles you want for the card */
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
    <div class="container">
        <h1 style="color: white;">Browse available games</h1>

    </div>
    <?php
   include 'fetch_games.php';
?>

</body>

</html>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>