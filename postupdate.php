<?php
session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) ) ){
header("Location:Login.php");}
 if ($_SESSION['user']=2){
include("Conn.php"); // Connection.
if (isset($_GET['eventID'])){ 
$eventID=$_GET['eventID'];
$attEmail=$_SESSION['Email'];
$my_qry ="UPDATE reg SET  post='1' WHERE attEmail='$attEmail' AND eventID='$eventID'";
$result=mysqli_query($con,$my_qry);
if ($result){header("Location:myEvents.php?updatepost=true");}
else{header("Location:myEvents.php?updatepost=false");}
 }else{ header("Location:myEvents.php?updatepost=false");} 
 } else {header("Location: myEvents.php?updatepost=false"); } 
mysqli_close($con);
?>