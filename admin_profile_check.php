<?php

include 'connection.php';
$details = "SELECT * FROM `addmission`";
$detailsQuery =  mysqli_query($con, $details);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>


    <style>
        .dataTables_wrapper {
            margin-top: 3rem;
        }

        .table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        tr {
            vertical-align: middle;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="justify-content: flex-end;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: flex-end;">
                <ul class="navbar-nav text-center" style="float: right;">
                    <li class="nav-item">
                        <a class="nav-link" style="text-decoration: none;" aria-current="page" href="admin_dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="text-decoration: none;" href="about_admin.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="text-decoration: none;" href="addmission_details.php">Admission Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="text-decoration: none;" href="admin_profile_check.php">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="text-decoration: none;" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container" style="overflow-x:auto;">
        <table class="table table-striped table-hover" id="myTable">
            <thead>
                <tr style="background: #070d32; color: white; width: 100%;">
                    <th>Sr. No</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 1;
                while ($eventDetailsQueryDetails = mysqli_fetch_assoc($detailsQuery)) {
                    $id = $eventDetailsQueryDetails['id'];
                    $photo = $eventDetailsQueryDetails['photo'];
                    $name = $eventDetailsQueryDetails['name'];
                    $email = $eventDetailsQueryDetails['email'];
                ?><td><?php echo $counter++; ?></td><?php
                                                    echo "<td><img src='$photo' style='height: 4rem; width: 4rem; border-radius: 50%;'></td>";
                                                    echo "<td>$name</td>";
                                                    echo "<td>$email</td>";
                                                    ?>
                    <td> <a href="update_admin_profile.php?id=<?php echo $id; ?>" class="btn edit btn-primary ms-3">Edit</a> <a href="delete.php?id=<?php echo $id; ?>" class="btn btn-primary ms-3" data-id="<?php echo $eventDetailsQueryDetails['id']; ?>">Delete</a></td>

                <?php
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="view" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Disapprove</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Approve</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.info').click(function() {

                var userid = $(this).data('id');

                // AJAX request
                $.ajax({
                    url: 'file.php',
                    type: 'post',
                    data: {
                        userid: userid
                    },
                    success: function(response) {
                        // Add response in Modal body
                        $('.modal-body').html(response);

                        // Display Modal
                        $('#view').modal('show');
                    }
                });
            });
        });
    </script>

</body>

</html>