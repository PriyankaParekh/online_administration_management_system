<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            color: #777;
            background: #070d32;
        }

        .container {
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
            position: relative;
            overflow: hidden;

        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea,
        #contact button[type="submit"] {
            font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
        }

        #contact {
            background: #F9F9F9;
            padding: 25px;
            margin: 85px 0;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        #contact h3 {
            display: block;
            font-size: 30px;
            font-weight: 500;
            margin-bottom: 10px;
            text-align: center;
        }


        fieldset {
            border: medium none !important;
            margin: 0 0 10px;
            min-width: 100%;
            padding: 0;
            width: 100%;
        }



        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact input[type="date"],
        #contact textarea {
            width: 100%;
            border: 1px solid #ccc;
            background: #FFF;
            margin: 0 0 5px;
            font-size: 14px;

            padding: 10px;
        }

        #contact input[type="text"]:hover,
        #contact input[type="email"]:hover,
        #contact input[type="tel"]:hover,
        #contact input[type="url"]:hover,
        #contact input[type="date"]:hover,
        #contact textarea:hover {
            -webkit-transition: border-color 0.3s ease-in-out;
            -moz-transition: border-color 0.3s ease-in-out;
            transition: border-color 0.3s ease-in-out;
            border: 1px solid #aaa;
        }

        #contact textarea {
            height: 100px;
            max-width: 100%;
            resize: none;
        }

        #contact button[type="submit"] {
            cursor: pointer;
            width: 100%;
            border: none;
            /* background: #4CAF50; */
            /* background: #43A047; */
            background: #070d32;

            color: #FFF;
            margin: 0 0 5px;
            padding: 10px;
            font-size: 15px;
        }

        #contact button[type="submit"]:hover {
            background: #5f6589;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }

        #contact button[type="submit"]:active {
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .copyright {
            text-align: center;
        }

        #contact input:focus,
        #contact textarea:focus {
            outline: 0;
            border: 1px solid #aaa;
        }

        ::-webkit-input-placeholder {
            color: #888;
        }

        :-moz-placeholder {
            color: #888;
        }

        ::-moz-placeholder {
            color: #888;
        }

        :-ms-input-placeholder {
            color: #888;
        }
    </style>
</head>

<body>
    <!-- <h1>hey student</h1> -->

    <?php
    include 'nav.php';
    ?>

    <div class="container">
        <form id="contact" method="post" action="check_addmission.php" enctype="multipart/form-data">
            <h3>Addmission Form</h3>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Your name" type="text" name="name" required autofocus>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Your Email Address" name="email" type="email" required>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Your Phone Number" name="phone" type="text" required>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Your Caste" name="caste" type="text" required>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Your Age" name="age" type="text" required>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Your Birthday" name="birthday" type="date" required>
                    </fieldset>
                </div>
            </div>
            <fieldset>
                <textarea placeholder="Address" name="address" required></textarea>
            </fieldset>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Father's Name" type="text" name="fathername" required>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Father's Occupation" type="text" name="focc" required>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Father's Income" type="text" name="fincome" required>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Father's Phone No." type="text" name="fphone" required>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Mother's Name" type="text" name="mothername" required>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Mother's Occupation" type="text" name="mocc" required>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Mother's Income" type="text" name="mincome" required>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <input placeholder="Mother's Phone No." type="text" name="mphone" required>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <label for="">Your Photo</label><br>
                        <input placeholder="Photo" type="file" name="photo" required>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <label for="">School Leaving Certificate</label>
                        <input placeholder="Previous Year Leaving Certificate" type="file" name="certi" required>
                    </fieldset>
                </div>
            </div>

            <fieldset style=" text-align: center;">
                <button name="contact-submit" type="submit" id="contact-submit" style="width: 8rem;">Submit</button>
            </fieldset>
            <!-- <p class="copyright">Designed by <a href="#" target="_blank" title="Priyanka">Priyanka</a></p> -->
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>