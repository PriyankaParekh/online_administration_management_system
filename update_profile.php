<?php
include "connection.php";
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nname = $_POST['nname'];
    $nemail = $_POST['nemail'];
    $nphone = $_POST['nphone'];
    $ncaste = $_POST['ncaste'];
    $nage = $_POST['nage'];
    $nbirthday = $_POST['nbirthday'];
    $naddress = $_POST['naddress'];
    $nfathername = $_POST['nfathername'];
    $nfocc = $_POST['nfocc'];
    $nfincome = $_POST['nfincome'];
    $nfphone = $_POST['nfphone'];
    $nmothername = $_POST['nmothername'];
    $nmocc = $_POST['nmocc'];
    $nmincome = $_POST['nmincome'];
    $nmphone = $_POST['nmphone'];

    $updateq = "UPDATE `addmission` SET `name`='$nname',`email`='$nemail',`phone`='$nphone',`caste`='$ncaste',`age`='$nage',`birthday`='$nbirthday',`address`='$naddress',`fathername`='$nfathername',`focc`='$nfocc',`fincome`='$nfincome',`fphone`='$nfphone',`mothername`='$nmothername',`mocc`='$nmocc',`mincome`='$nmincome',`mphone`='$nmphone' WHERE id='$id'";
    $updateQuery = mysqli_query($con, $updateq);

    if (!empty($_FILES['nphoto']['name'])) {
        $nphoto = $_FILES['nphoto']['name'];
        $nphoto = time() . $nphoto;
        $nphoto = "uploads/" . basename($nphoto);
        move_uploaded_file($_FILES['nphoto']['tmp_name'], $nphoto);
        $updatePhoto = "UPDATE `addmission` SET `photo`='$nphoto' WHERE id='$id'";
        $updateQuery = mysqli_query($con, $updatePhoto);
    }
    if (!empty($_FILES['ncerti']['name'])) {
        $ncerti = $_FILES['ncerti']['name'];
        $ncerti = time() . $ncerti;
        $ncerti = "uploads/" . basename($ncerti);
        move_uploaded_file($_FILES['ncerti']['tmp_name'], $ncerti);
        $updatePhoto = "UPDATE `addmission` SET `certi`='$ncerti' WHERE id='$id'";
        $updateQuery = mysqli_query($con, $updatePhoto);
    }
    if ($updateQuery) {
        echo "<script>alert('Updated Successfully.')</script>";
        echo "<script>window.open('student_profile.php','_self')</script>";
    } else {
        echo "<script>alert('Something Went Wrong.')</script>";
        echo "<script>window.open('student_profile.php','_self')</script>";
    }
}
