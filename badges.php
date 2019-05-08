<?php
session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) ) ){
header("Location:Login.php");}
else if(!isset($_GET['eventID'])){ header("Location:AdminHome.php");}
if($_SESSION['user']!='1'){header("Location:Login.php");}
$eventID=$_GET['eventID'];
 // $adminEmail=$_SESSION['Email'];
include("Conn.php"); // Connection.

$sqle = "SELECT * FROM event WHERE eventID='$eventID'";
$res=mysqli_query($con, $sqle);
while ($row=mysqli_fetch_array($res)){ //////
$title=$row['title'];
$PartnerName=$row['PartnerName'];

}

mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="printing.css" media="print" />
<style>
.container {
    position: relative;
    text-align: center;
    color: black;
	
	
}


.course1 {
    position: absolute;
    top: 150px;
    left: 680px;
	width:350px;
    transform: translate(-50%, -50%);
	font-family: winsoft-pro-bold;
	font-size:25px;
}
.partner1 {

    position: absolute;
    top: 350px;
    left: 735px;
width:150px;
    transform: translate(-50%, -50%);
	font-family: winsoft-pro-bold;
	font-size:25px;
}
.course2 { 
position: absolute;
    left: 1070px;
	top: 150px;
	width:350px;
    transform: translate(-50%, -50%);
	font-family: winsoft-pro-bold;
	font-size:25px;
} 
@font-face { font-family: winsoft-pro-bold; src: url('winsoft-pro-bold.TTF'); } 
.partner2 {
width:150px;
    position: absolute;
    top: 350px;
    left: 1120px;
    transform: translate(-50%, -50%);
	font-family: winsoft-pro-bold;
	font-size:25px;
}
.course3 { 
position: absolute;
    left: 300px;
    top: 150px;
	width:350px;
    transform: translate(-50%, -50%);
	font-family: winsoft-pro-bold;
	font-size:25px;
} 
.partner3 {
width:150px;
    position: absolute;
    top: 350px;
    left: 350px;
    transform: translate(-50%, -50%);
	font-family: winsoft-pro-bold;
	font-size:25px;
}



</style>
</head>
<body>



<div class="container">
  <img src="assets/images/Organizer1.png" alt="org" style="width:340px;">
    <img src="assets/images/Speaker2.png" alt="org" style="width:340px"hspace="40">
    <img src="assets/images/Participant2.png" alt="org" style="width:340px;">

  
  <div class="course1"><?php echo $title; ?> </div>
  <div class="partner1"><?php echo $PartnerName; ?></div>
  <div class="course2"><?php echo $title; ?> </div>
  <div class="partner2"><?php echo $PartnerName; ?> </div>
  <div class="course3"><?php echo $title; ?> </div>
  <div class="partner3"><?php echo $PartnerName; ?> </div>
  
</div>

</body>
</html> 
