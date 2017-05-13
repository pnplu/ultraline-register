<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "ultraline_db";

$conn = mysqli_connect($host, $user, $pass, $db_name) or die("Connection Error!");
mysqli_set_charset($conn, "utf8");

 ?>
