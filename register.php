<?php
include 'connection.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Calibri, Helvetica, sans-serif;
            background-color: pink;
        }

        .container {
            padding: 50px;
            background-color: lightblue;
        }

        input[type=text],
        input[type=email],
        input[type=password],
        textarea,
        select {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=email]:focus,
        input[type=password]:focus,
        textarea:focus {
            background-color: rgb(4, 4, 50);
            outline: none;
            color: white;
        }

        div {
            padding: 10px 0;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }
    </style>
</head>

<body>

    <form method="post" action="check_student.php">
        <div class="container">
            <center>
                <h1 style="text-transform: uppercase;"> Student Registeration Form</h1>
            </center>
            <hr>
            <center>
                <div style="font-size: larger;">
                    <input type="radio" value="Student" name="user_type" name="gender" checked> Student
                    <input type="radio" value="Admin" name="user_type" name="gender"> Admin

                </div>
            </center>
            <label><b> Firstname </b></label>
            <input type="text" name="fname" placeholder="Firstname" size="15" required />
            <label> <b>Middlename:</b> </label>
            <input type="text" name="mname" placeholder="Middlename" size="15" required />
            <label><b> Lastname:</b> </label>
            <input type="text" name="lname" placeholder="Lastname" size="15" required />
            <div>
                <label><b>
                        Course :</b>
                </label>

                <select name="course">
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                    <option value="B.Tech">B.Tech</option>
                    <option value="MBA">MBA</option>
                    <option value="MCA">MCA</option>
                    <option value="M.Tech">M.Tech</option>
                </select>
            </div>
            <div>
                <label><b>
                        Gender :</b>
                </label><br>
                <input type="radio" value="Male" name="gender" checked> Male
                <input type="radio" value="Female" name="gender"> Female
                <input type="radio" value="Other" name="gender"> Other

            </div>
            <label for="phone"><b>
                    Phone :</b>
            </label>
            <input type="text" name="phone" placeholder="phone no." size="10" / required>

            <label for="address"><b>Current Address :</b></label>
            <textarea cols="80" rows="5" name="address" placeholder="Current Address" size="100" required></textarea>

            <label for="email"><b>Email</b></label>
            <input type="email" name="email" placeholder="Enter Email" size="25" required />

            <button type="submit" class="registerbtn" name="submit">Register</button>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>