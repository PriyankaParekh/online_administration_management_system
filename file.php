<?php
include "connection.php";

$userid = 0;
if (isset($_POST['userid'])) {
  $userid = mysqli_real_escape_string($con, $_POST['userid']);
}
$sql = "select * from addmission where id=" . $userid;
$result = mysqli_query($con, $sql);

$response = "<table border='0' width='100%'>";
while ($row = mysqli_fetch_array($result)) {
  $id = $row['id'];
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

  $response .= "<tr>";
  $response .= "<td>Phone : </td><td>" . $phone . "</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Caste : </td><td>" . $caste . "</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Age : </td><td>" . $age . "</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Birthday : </td><td>" . $birthday . "</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Address : </td><td>" . $address . "</td>";
  $response .= "</tr>";

  $response .= "<tr>";
  $response .= "<td>Father's Name : </td><td>" . $fathername . "</td>";
  $response .= "</tr>";
  $response .= "<tr>";
  $response .= "<td>Father's Occupation : </td><td>" . $focc . "</td>";
  $response .= "</tr>";
  $response .= "<tr>";
  $response .= "<td>Father's Income : </td><td>" . $fincome . "</td>";
  $response .= "</tr>";
  $response .= "<tr>";
  $response .= "<td>Father's Phone : </td><td>" . $fphone . "</td>";
  $response .= "</tr>";
  $response .= "<tr>";
  $response .= "<td>Mother's Name : </td><td>" . $mothername . "</td>";
  $response .= "</tr>";
  $response .= "<tr>";
  $response .= "<td>Mother's Occupation : </td><td>" . $mocc . "</td>";
  $response .= "</tr>";
  $response .= "<tr>";
  $response .= "<td>Mother's Income : </td><td>" . $mincome . "</td>";
  $response .= "</tr>";
  $response .= "<tr>";
  $response .= "<td>Mother's Phone : </td><td>" . $mphone . "</td>";
  $response .= "</tr>";
}

$response .= "</table>";

echo $response;
echo "<table>";
echo "<tr>";
echo "<td>Previous Year Leaving Certificate:</td><td><td><img src='$certi' class='ms-lg-5' style='height: 4rem; width: 4rem;'></td></td>";
echo "</tr>";
echo "</table>";
exit;
