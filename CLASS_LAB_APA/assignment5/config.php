<?php
$user_name = "root";
$password = "";
$database_name = "apa_db";
$server = "localhost:3301";
$con = mysqli_connect($server, $user_name, $password, $database_name) or die(mysqli_error($con));
