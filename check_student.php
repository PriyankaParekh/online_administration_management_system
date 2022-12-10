<?php
include 'connection.php';

// $user_type = $_POST['user_type'];
// if ($user_type == 'Student') {
//     header('location: login.php');
// } elseif ($user_type == 'Admin') {
//     header('location: login.php');
// }

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $exist = "SELECT * FROM `register` WHERE email='$email'";
    $res = mysqli_query($con, $exist);
    $numrow = mysqli_num_rows($res);
    if ($numrow > 0) {
        echo "<script>alert('Email Already Registered.')</script>";
        echo "<script>window.open('register.php','_self')</script>";
    } else {

        $insertq = "INSERT INTO `register` (`fname`, `mname`, `lname`, `course`, `gender`, `phone`, `address`, `email`) VALUES ('$fname','$mname','$lname','$course','$gender','$phone','$address','$email')";
        $sql = mysqli_query($con, $insertq);
        if ($sql) {
            echo "<script>alert('Registered Successfully.')</script>";
            echo "<script>window.open('login.php','_self')</script>";
        } else {
            echo "<script>alert('Something Went Wrong.')</script>";
            echo "<script>window.open('register.php','_self')</script>";
        }
    }
}
