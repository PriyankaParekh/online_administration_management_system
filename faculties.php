<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .row {
            text-align: center;
            justify-content: center;
            margin: 6rem 0;
        }

        body {
            background: #eff2f6;
        }

        .card {
            margin: 1.3rem;
            box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-20px);
        }
    </style>
</head>

<body>
    <?php
    include 'nav.php';
    ?>
    <center>
        <div class="row">
            <div class="card col-md-4" style="width: 18rem;">
                <img src="image/user.jpg" class="card-img-top mt-2" alt="...">
                <div class="card-body">
                    <h4>Prof. Meena Patel</h4>
                    <h5>Professor</h5>
                    <p class="card-text">meenapatel@gmail.com</p>
                </div>
            </div>
            <div class="card col-md-4" style="width: 18rem;">
                <img src="image/user.jpg" class="card-img-top mt-2" alt="...">
                <div class="card-body">
                    <h4>Prof. Ramesh Patel</h4>
                    <h5>Assistant Professor</h5>
                    <p class="card-text">rameshpatel@gmail.com</p>
                </div>
            </div>
            <div class="card col-md-4" style="width: 18rem;">
                <img src="image/user.jpg" class="card-img-top mt-2" alt="...">
                <div class="card-body">
                    <h4>Prof. Suresh Panchal</h4>
                    <h5>Assistant Professor</h5>
                    <p class="card-text">sureshpanchal@gmail.com</p>
                </div>
            </div>
        </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>