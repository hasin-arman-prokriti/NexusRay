<?php
@include "config.php";
session_start();


$user_id = $_POST['user_id'];
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];


$resident_sql = "INSERT INTO `user` (`user_id`, `password`, `name`, `email`, `image_url`) VALUES ('$user_id', '$password', '$name', '$email', '')";

mysqli_query($connect, $resident_sql);

header("location: add_success.php");


?>