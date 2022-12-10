<?php
include 'connection.php';

if (isset($_POST['contact-submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $caste = $_POST['caste'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $fathername = $_POST['fathername'];
    $focc = $_POST['focc'];
    $fincome = $_POST['fincome'];
    $fphone = $_POST['fphone'];
    $mothername = $_POST['mothername'];
    $mocc = $_POST['mocc'];
    $mincome = $_POST['mincome'];
    $mphone = $_POST['mphone'];

    if (empty($_FILES['photo']['name'])) {
        $photo = "";
    } else {
        $photo = $_FILES['photo']['name'];
        $photo = time() . $photo;
        $photo = "uploads/" . basename($photo);
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
    }
    if (empty($_FILES['certi']['name'])) {
        $certi = "";
    } else {
        $certi = $_FILES['certi']['name'];
        $certi = time() . $certi;
        $certi = "uploads/" . basename($certi);
        move_uploaded_file($_FILES['certi']['tmp_name'], $certi);
    }

    $exist = "SELECT * FROM `addmission` WHERE email='$email'";
    $res = mysqli_query($con, $exist);
    $numrow = mysqli_num_rows($res);
    if ($numrow > 0) {
        echo "<script>alert('Email Already Registered.')</script>";
        echo "<script>window.open('addmission.php','_self')</script>";
    } else {
        $insertq = "INSERT INTO `addmission`(`name`, `email`, `phone`, `caste`, `age`, `birthday`, `address`, `fathername`, `focc`, `fincome`, `fphone`, `mothername`, `mocc`, `mincome`, `mphone`, `photo`, `certi`) VALUES ('$name','$email','$phone','$caste','$age','$birthday','$address','$fathername','$focc','$fincome','$fphone','$mothername','$mocc','$mincome','$mphone','$photo','$certi')";
        $sql = mysqli_query($con, $insertq);
        if ($sql) {
            echo "<script>alert('Addmission Open.')</script>";
            echo "<script>window.open('student_dashboard.php','_self')</script>";
        } else {
            echo "<script>alert('Something Went Wrong.')</script>";
            echo "<script>window.open('addmission.php','_self')</script>";
        }
    }
}
