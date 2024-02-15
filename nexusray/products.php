<?php
@include "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Game style.css" />
    <title>Products</title>

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
        background-color: rgba(255, 255, 255, 0.85);
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
  <h1 style="color: white;">Browse available gaming accessories</h1>

  </div>
    <?php
   include 'fetch_products.php';
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
</body>

</html>