<?php
@include "config.php";
session_start();
$user_id = $_SESSION['user_id'];
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
    <?php
    // connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nexusray";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // query the database for all products in the cart
    $sql = "SELECT * FROM user_product WHERE user_id = '$user_id'";
    $result = $conn->query($sql);

    // display the products in a table
    if ($result->num_rows > 0) {
        echo '<table style="border-collapse: collapse; width: 100%;">';
        echo '<thead style="background-color: #ddd; font-weight: bold;"><tr><th style="padding: 10px; border: 1px solid #000;">Product Name</th><th style="padding: 10px; border: 1px solid #000;">Price</th></tr></thead>';

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $code = "select * from products where product_id = '$row[product_id]'";
            $code_result = $conn->query($code);
            $code_row = $code_result->fetch_assoc();

            echo '<tr style="background-color: #fff;"><td style="padding: 10px; border: 1px solid #000;">' . $code_row["name"] . '</td><td style="padding: 10px; border: 1px solid #000;"> $' . $code_row["price"] . '</td></tr>';
        }
        //total sum
        $total = "select sum(price) as total_price from products where product_id in (select product_id from user_product where user_id = '$user_id')";
        $total_result = $conn->query($total);
        $total_row = $total_result->fetch_assoc();
        $total_price = $total_row["total_price"];
        $total_price = number_format($total_price, 2, '.', ',');

        echo '<tr style="background-color: #ddd;"><td style="padding: 10px; border: 1px solid #000; font-weight: bold;">Total Price:</td><td style="padding: 10px; border: 1px solid #000; font-weight: bold;"> $'.$total_price.'</td></tr>';

        echo "</table>";
        echo '<a href="payment_form.php"><button style="margin-top: 20px; padding: 10px 20px; font-size: 18px;">Proceed to Payment</button></a>';

    } else {
        echo "0 results";
    }

    // close the database connection
    $conn->close();
    ?>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy;2023 NexusRay, Dhaka</p>
        </div>
    </footer>







    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>