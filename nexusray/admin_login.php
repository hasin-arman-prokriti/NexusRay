<?php
$login = true;
$showError = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'config.php';
  $user_id = $_POST["user_id"];
  $password = $_POST["password"];

  if ($user_id == "admin" && $password == "admin") {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $showError = true;
    $_SESSION['user_id'] = $user_id;


    header('Location: admin/admin.php');
  } else {
    $showError = "Invalid Credentials";
    header('Location: admin/admin.php');

  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Login</title>
</head>
<div class="p-5 text-center bg-image" style="
      background-image: url(https://wallpapers.com/images/hd/geometric-black-and-red-abstract-n5xls2io03aniapp.jpg);
      height: 200px;
    ">

</div>

<body>

    

    <div class="container background-color #0e4759 my-4">
        <h1 class="text-center">Admin Login</h1>
        <form action="admin_login.php" method="post">
            <div class="form-group">
                <label for="user_id">Admin ID</label>
                <input type="text" class="form-control" id="user_id" name="user_id" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>


            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>
</html>