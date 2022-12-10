<?php

include 'connection.php';
$id = $_GET["id"];
$sql = "DELETE FROM `addmission`where id='$id'";
$sqlQuery =  mysqli_query($con, $sql);

if ($sqlQuery) {
    echo "<script>alert('Deleted Successfully.')</script>";
    echo "<script>window.open('admin_profile_check.php','_self')</script>";
} else {
    echo "<script>alert('Something Went Wrong.')</script>";
    echo "<script>window.open('admin_profile_check.php','_self')</script>";
}
