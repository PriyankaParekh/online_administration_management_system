<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "administration";

$con = mysqli_connect($server, $user, $password, $db);
if (!$con) {
?>
    <script>
        alert("Connection Failed");
    </script>
<?php
}

?>