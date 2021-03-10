<?php
include("../assignment5/config.php");

$id = $_POST['id'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
if($id !== '' || $last_name !== '' || $phone !== '')
{
    // we will update on the basis of id
    $query1 = "update students set last_name = '$last_name' , phone = '$phone' where id = $id" ;
    $exec1 = mysqli_query($con, $query1) or die(mysqli_error($con));
    if($exec1)
    {
        header("location: index.php");

    }
}
else{
    echo 'fill the enteries';
}


