<!DOCTYPE html>
<html>
<body onload='Delete()'>

<script> 

// function Delete(){
//   var txt;
//   var rs="no";
// //   var eventID= "<?php echo $eventID?>"
//   if(confirm("هل انت متأكد من الحذف؟")){txt="yes";}
//   else {txt="no";}
//   if (txt=="no"){ 
//   rs="yes";
//   <?php header("Location:myEvents.php"); ?>
// //   window.location.href = "myEvents.php"
// 
// } 
//   }
  
  </script>

</body>

</html>

<?php
session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) )){
header("Location:Login.php");}
else {$attEmail=$_SESSION['Email'];
// Conection
include("Conn.php"); // Connection.


if(isset($_GET['eventID'])){
$eventID=$_GET['eventID'];
$sql="DELETE FROM reg WHERE eventID='$eventID' AND attEmail='$attEmail'";
if (mysqli_query($con,$sql)){
header("Location:myEvents.php"); }}}
  
?>
