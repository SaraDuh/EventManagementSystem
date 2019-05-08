<?php
session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) )){
header("Location:Login.php");}
else if($_SESSION['user']!='1'){header("Location:Login.php");}
else{ 
// $attEmail=$_SESSION['Email'];
// Conection
include("Conn.php"); // Connection.

if(isset($_GET['eventID'])){
$eventID=$_GET['eventID'];
$sql="DELETE FROM event WHERE eventID='$eventID'";
if (mysqli_query($con,$sql)){
header("Location:events.php"); }}}
  
?>
