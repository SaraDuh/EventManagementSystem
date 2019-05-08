<?php
include("Conn.php"); // Connection.


$attEmail = mysqli_real_escape_string($con, $_POST['emailname']);
$eventID = mysqli_real_escape_string($con, $_POST['eventIDname']);
$accepted = mysqli_real_escape_string($con, $_POST['accVal']);

$cell = mysqli_real_escape_string($con, $_POST['cellname']);

//echo"<script>alert('$accepted');</script>";
echo $cell;
echo $accepted;
// $sql="INSERT INTO abs (eventID, attEmail, d1a)
// VALUES ('90', '$email', '5')";

// $sql = "UPDATE abs SET d1a ='7' WHERE attEmail='$email' AND eventID ='100'"; // eDays=
$sql = "UPDATE abs SET $cell='$accepted' WHERE eventID='$eventID' AND attEmail='$attEmail'"; // eDays



if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "Updated";
?>
