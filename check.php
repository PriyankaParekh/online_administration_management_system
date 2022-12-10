<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $user_type = $_POST['user_type'];

    if ($user_type == 'Student') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $selectq = "SELECT * FROM `register` WHERE `email`= ?";

        $findUser = $con->prepare($selectq);
        $findUser->bind_param("s", $email);
        $findUser->execute();
        $res = $findUser->get_result();
        $userDetails = mysqli_fetch_assoc($res);
        $num_rows = mysqli_num_rows($res);


        if ($res->num_rows) {

            $_SESSION['userId'] = $userDetails['id'];
            $_SESSION['userType'] = $user_type;
            $numrow = mysqli_num_rows($res);
            if ($numrow > 0) {
                echo "<script>window.open('student_dashboard.php','_self')</script>";
            }
            $ins = "INSERT INTO `student_login`(`email`, `password`) VALUES ('$email','$password')";
            $result = mysqli_query($con, $ins);
            echo "<script>alert('Successfully Login !!')</script>";
            echo "<script>window.open('student_dashboard.php','_self')</script>";
        } else {
            echo "<script>alert('User Does not Exist !!')</script>";
            echo "<script>window.open('register.php','_self')</script>";
        }
    } elseif ($user_type == 'Admin') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $selectq = "SELECT * FROM `register` WHERE `email`= ?";

        $findUser = $con->prepare($selectq);
        $findUser->bind_param("s", $email);
        $findUser->execute();
        $res = $findUser->get_result();
        $userDetails = mysqli_fetch_assoc($res);

        if ($res->num_rows) {

            $_SESSION['userId'] = $userDetails['id'];
            $_SESSION['userType'] = $user_type;
            $numrow = mysqli_num_rows($res);
            if ($numrow > 1) {
                echo "<script>window.open('student_dashboard.php','_self')</script>";
            }
            $ins = "INSERT INTO `admin_login`(`email`, `password`) VALUES ('$email','$password')";
            $result = mysqli_query($con, $ins);
            echo "<script>alert('Successfully Login !!')</script>";
            echo "<script>window.open('admin_dashboard.php','_self')</script>";
        } else {
            echo "<script>alert('User Does not Exist !!')</script>";
            echo "<script>window.open('register.php','_self')</script>";
        }
    }
}
