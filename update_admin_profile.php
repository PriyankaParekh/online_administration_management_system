<?php

include 'connection.php';
$id = $_GET["id"];
$sql = "SELECT * FROM `addmission`where id='$id'";
$sqlQuery =  mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .container table tr th {
            background: #070d32;
            color: white;
            width: 45%;
            border: 1px solid #888;
        }

        .update input {
            width: 100%;
        }
    </style>
</head>

<body>

    <?php
    include "nav.php";
    ?>
    <div class="container details" id="details" style="display: block;">
        <center style="margin: 0 5rem;">
            <table style="width:100%" class="table table-striped table-hover mt-3">
                <?php
                while ($row = mysqli_fetch_assoc($sqlQuery)) {
                    $id = $row['id'];
                    $photo = $row['photo'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $caste = $row['caste'];
                    $age = $row['age'];
                    $birthday = $row['birthday'];
                    $address = $row['address'];
                    $fathername = $row['fathername'];
                    $focc = $row['focc'];
                    $fincome = $row['fincome'];
                    $fphone = $row['fphone'];
                    $mothername = $row['mothername'];
                    $mocc = $row['mocc'];
                    $mincome = $row['mincome'];
                    $mphone = $row['mphone'];
                    $certi = $row['certi'];
                }
                ?>
                <img src="<?php echo "$photo" ?>" alt="" style="height: 8rem; width: 8rem; border-radius: 50%; margin: 2rem 0;">
                <h2><?php echo "$name" ?></h2>
                <tr>
                    <th>Email:</th>
                    <td><?php echo "$email" ?></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><?php echo "$phone" ?></td>
                </tr>
                <tr>
                    <th>Caste:</th>
                    <td><?php echo "$caste" ?></td>
                </tr>
                <tr>
                    <th>Age:</th>
                    <td><?php echo "$age" ?></td>
                </tr>
                <tr>
                    <th>Birthday:</th>
                    <td><?php echo "$birthday" ?></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><?php echo "$address" ?></td>
                </tr>
                <tr>
                    <th>Father's Name:</th>
                    <td><?php echo "$fathername" ?></td>
                </tr>
                <tr>
                    <th>Father's Occupation:</th>
                    <td><?php echo "$focc" ?></td>
                </tr>
                <tr>
                    <th>Father's Income:</th>
                    <td><?php echo "$fincome" ?></td>
                </tr>
                <tr>
                    <th>Father's Phone:</th>
                    <td><?php echo "$fphone" ?></td>
                </tr>
                <tr>
                    <th>Mother's Name:</th>
                    <td><?php echo "$mothername" ?></td>
                </tr>
                <tr>
                    <th>Mother's Occupation:</th>
                    <td><?php echo "$mocc" ?></td>
                </tr>
                <tr>
                    <th>Mother's Income:</th>
                    <td><?php echo "$mincome" ?></td>
                </tr>
                <tr>
                    <th>Mother's Phone:</th>
                    <td><?php echo "$mphone" ?></td>
                </tr>
                <tr>
                    <th>Previous Year Leaving Certificate:</th>
                    <td><img src="<?php echo "$certi" ?>" alt="certi" style="height: 8rem; width: 8rem;"></td>
                </tr>
            </table>
        </center>
    </div>

    <form action="update_admin_next.php" enctype="multipart/form-data" method="POST">
        <div class="container update" id="update" style="display: none;">
            <center style="margin: 0 5rem;">
                <table style="width:100%" class="table table-striped table-hover mt-3">
                    <input type="hidden" name="id" value="<?php echo "$id" ?>">
                    <tr>
                        <th>Name:</th>
                        <td><input type="text" name="nname" value="<?php echo "$name" ?>"></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><input type="email" name="nemail" value="<?php echo "$email" ?>"></td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td><input type="text" name="nphone" value="<?php echo "$phone" ?>"></td>
                    </tr>
                    <tr>
                        <th>Caste:</th>
                        <td><input type="text" name="ncaste" value="<?php echo "$caste" ?>"></td>
                    </tr>
                    <tr>
                        <th>Age:</th>
                        <td><input type="text" name="nage" value="<?php echo "$age" ?>"></td>
                    </tr>
                    <tr>
                        <th>Birthday:</th>
                        <td><input type="text" name="nbirthday" value="<?php echo "$birthday" ?>"></td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td><input type="text" name="naddress" value="<?php echo "$address" ?>"></td>
                    </tr>
                    <tr>
                        <th>Father's Name:</th>
                        <td><input type="text" name="nfathername" value="<?php echo "$fathername" ?>"></td>
                    </tr>
                    <tr>
                        <th>Father's Occupation:</th>
                        <td><input type="text" name="nfocc" value="<?php echo "$focc" ?>"></td>
                    </tr>
                    <tr>
                        <th>Father's Income:</th>
                        <td><input type="text" name="nfincome" value="<?php echo "$fincome" ?>"></td>
                    </tr>
                    <tr>
                        <th>Father's Phone:</th>
                        <td><input type="text" name="nfphone" value="<?php echo "$fphone" ?>"></td>
                    </tr>
                    <tr>
                        <th>Mother's Name:</th>
                        <td><input type="text" name="nmothername" value="<?php echo "$mothername" ?>"></td>
                    </tr>
                    <tr>
                        <th>Mother's Occupation:</th>
                        <td><input type="text" name="nmocc" value="<?php echo "$mocc" ?>"></td>
                    </tr>
                    <tr>
                        <th>Mother's Income:</th>
                        <td><input type="text" name="nmincome" value="<?php echo "$mincome" ?>"></td>
                    </tr>
                    <tr>
                        <th>Mother's Phone:</th>
                        <td><input type="text" name="nmphone" value="<?php echo "$mphone" ?>"></td>
                    </tr>
                    <tr>
                        <th>Photo:</th>
                        <td><input type="file" name="nphoto"></td>
                    </tr>
                    <tr>
                        <th>Previous Year Leaving Certificate:</th>
                        <td><input type="file" name="ncerti"></td>
                    </tr>
                </table>
                <button class="btn btn-lg" name="update" style="background: #070d32; color: white;margin: 1rem 5rem;">Update</button>

            </center>

        </div>
    </form>
    <button class="btn btn-lg" name="edit" style="background: #070d32; color: white; float:right;margin: 1rem 5rem;" onclick="edit()">Edit Profile</button>



    <script>
        function edit() {
            document.getElementById("update").style.display = "block";
            document.getElementById("details").style.display = "none";
        }
    </script>
</body>

</html>