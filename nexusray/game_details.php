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
    <title>
        Games
    </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->

    <body style="background-color: rgb(0, 0, 0);">

        <?php
        if (isset($_SESSION['user_id'])) {
            // User is logged in, show the logged-in navigation menu
            include('user_navbar.php');
        } else {
            // User is not logged in, show the default navigation menu
            include('navbar.php');
        }

        ?>
        <!-- Product section-->

        <section class="py-5">
            <?php
            // Connect to the database
            $conn = mysqli_connect("localhost", "root", "", "nexusray");

            // Check if the product ID was passed in the URL
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                // Retrieve the product details from the database
                $sql = "SELECT * FROM games WHERE game_id = $id";
                $result = mysqli_query($conn, $sql);

                // Check if the query was successful
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $name = $row['name'];
                    $description = $row['description'];
                    //$price = $row['price'];
                    // ...
                } else {
                    echo "Product not found";
                }
            } else {
                echo "Invalid product ID";
            }

            ?>
            <style>
                body {
                    color: white
                }
            </style>
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src=<?php echo $row['image_url']; ?>
                            alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">
                            <?php echo $name; ?>
                        </h1>
                        <div class="fs-5 mb-5">
                            <p>
                                <?php echo $row['price']; ?>
                            </p>
                        </div>
                        
                        <p align="justify" , class="lead">
                            <?php echo $row['description']; ?>
                        </p>
                        <div class="d-flex">
                            <button id='add-to-cart' class="btn btn-outline-danger flex-shrink-0" type="button">
                                Get the game
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                <h2>System Requirements</h2>
                    <p align="justify" , class="lead">
                        <?php echo $row['sys_req']; ?>
                    </p>
                </div>
            </div>



            <video controls autoplay muted loop src="<?php echo $row['video_url']; ?>" width="1255"
                height="500"></video>
            <script>
                document.getElementById("add-to-cart").addEventListener("click", function () {
                    <?php
                    echo $_SESSION['user_id'];
                    if (isset($_SESSION['user_id'])) {
                        $user_id = $_SESSION['user_id'];
                        echo $user_id;
                        $product_id = $id;
                        echo $product_id;
                        $sql = "INSERT INTO user_game (user_id, game_id) VALUES ($user_id, $product_id)";
                        if (mysqli_query($conn, $sql)) {
                            // The insert query was successful
                            echo "alert('Added to cart!');";
                        } else {
                            // The insert query failed
                            echo "alert('Error adding to cart! Please try again.');";
                        }
                    } else {
                        // The user is not logged in
                        echo "alert('Please login to add to cart!');";
                    }
                    ?>

                });
            </script>
            <!-- Footer-->
            <footer class="py-5 bg-dark">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright &copy; NexusRay 2023</p>
                </div>
            </footer>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
    </body>

</html>