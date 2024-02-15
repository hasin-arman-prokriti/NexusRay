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
            background-color: rgba(84, 180, 211, 0.85);
            /* add any other styles you want for the card */
        }
    </style>

</head>


<body>
    <!-- Responsive navbar-->
    <?php
    if (isset($_SESSION['user_id'])) {
        // User is logged in, show the logged-in navigation menu
        include('user_navbar.php');
    } else {
        // User is not logged in, show the default navigation menu
        include('navbar.php');
    }

    ?>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-info rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">Welcome to NexusRay!</h1>
                    <p align="justify" , Class="fs-5">A whole new world for the die hard gamers around the world!
                        NexusRay is an all in one gaming platform that allows a gamer to download/purchase games,
                        purchase gaming accessories, and participate in tournaments around the world. Players can
                        also do or watch streams on this platform. By adding people they meet while playing a game,
                        players are able to make friends by adding them on this platform. On special occasions, the
                        platform will offer sales and giveaways. Before downloading a game, Players can also watch
                        gameplays and game ratings on this platform. Top users will have the opportunity to meet the
                        best players from around the world.

                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <a href="games.php" class="card-link">
                        <div class="card  border-0 h-100">
                            <div class="card-body bg-info text-center p-4 p-lg-5 pt-0 pt-lg-5">
                                <h2 class="fs-4 fw-bold">Games</h2>
                                <p class="mb-0">You can download or purchase the most recent games on NexusRay.
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <a href="products.php" class="card-link">
                        <div class="card bg-info border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-5">
                                <h2 class="fs-4 fw-bold">Store</h2>
                                <p align="justify" , class="mb-0">Not only this platform allows gamers to download
                                    or
                                    purchase games but also purchase the latest and best gaming peripherals from our
                                    accessories store for better gaming experience.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <a href="streaming.php" class="card-link">
                        <div class="card bg-info border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-5">

                                <h2 class="fs-4 fw-bold">Streaming</h2>
                                <p align="justify" , class="mb-0">You can stream your own games or watch gamers from
                                    across the world stream using NexusRay.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <a href="Tournament/tournament.php" class="card-link">
                        <div class="card bg-info border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-5">

                                <h2 class="fs-4 fw-bold">Tournament</h2>
                                <p align="justify" , class="mb-0">This website notify you of the most recent global
                                    competitions with prize money. On our platform, Gamers can also take part in
                                    those
                                    competitions.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                </div>
            </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy;2023 NexusRay, Dhaka</p>
        </div>
        <div class="container">
            <a href="admin_login.php">
                <p class="m-0 text-center text-white">Go to Admin Page</p>
            </a>
        </div>
    </footer>







    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>