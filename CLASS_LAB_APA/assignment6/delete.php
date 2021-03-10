<?php
include("../assignment5/config.php");
if(isset($_POST['delete_btn']))
{
$id = $_POST['id'];
$query1 = "DELETE FROM STUDENTS WHERE id = $id";
$exec1 = mysqli_query($con, $query1);
if($exec1)
{
    header("location: index.php");

}
}

