<?php

// config file from the assignment 5
include("../assignment5/config.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
if($first_name !== '' || $last_name !== '')
{
    $query = "INSERT INTO STUDENTS (first_name, last_name, phone) values('$first_name','$last_name','$phone')";
    $exec = mysqli_query($con, $query) or die(mysqli_error($con));
    if($exec )
    {
        header("location: index.php");
    }
}
else{
    echo 'Please fill the enteries';
}
?>
