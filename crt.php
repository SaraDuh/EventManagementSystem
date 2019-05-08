<?php
session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) ) ){
header("Location:Login.php");}
else if(!isset($_GET['eventID'])){ header("Location:AdminHome.php");}
else if(!isset($_GET['attEmail'])){ header("Location:AdminHome.php");}

$eventID=$_GET['eventID'];
$attEmail=$_GET['attEmail'];
if($_SESSION['user']!='1'){
if($_SESSION['Email']!=$attEmail)
{header("Location:Login.php");}}
 // $adminEmail=$_SESSION['Email'];

include("Conn.php"); // Connection.

$sqle = "SELECT * FROM event WHERE eventID='$eventID'";
$res=mysqli_query($con, $sqle);
while ($row=mysqli_fetch_array($res)){ //////
$title=$row['title'];
$startDate=$row['startDate'];
$city=$row['city'];
$ApprovalNum=$row['ApprovalNum'];
$PartnerName=$row['PartnerName'];
}
$sql = "SELECT * FROM attendant WHERE attEmail='$attEmail'";
$r=mysqli_query($con, $sql);
while ($row=mysqli_fetch_array($r)){ //////
$aName=$row['aName'];
}


mysqli_close($con);
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="print.css" media="print" />


<style>

body, html {
    height: 40px;
    margin: 0;
	position: absolute;
	width:50px;
}

.bg {
    
    background-image: url("assets/images/11.png");

    width:1000px;
    height:700px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	-webkit-print-color-adjust: exact !important;   
	
    color-adjust: exact !important;

	
}

.name {
    position: absolute;
    top: 200px;
    left: 510px;
    transform: translate(-50%, -50%);
	font-size:30px;
	font-family: winsoft-pro-bold;
	width:300px; 
	text-align: center;
}
.title { 

 position: absolute;
    top: 299px;
    left: 510px;
    transform: translate(-50%, -50%);
	font-size:30px;
	font-family: winsoft-pro-bold;
	width:1000px;
text-align: center;	
}

.partner { 
position: absolute;
    top: 370px;
    left: 160px;
    transform: translate(-50%, -50%);
	font-size:30px;
	font-family: winsoft-pro-bold;
	width:100px; 
text-align: center;


}
.city { 
position: absolute;
    top: 480px;
    left: 600px;
    transform: translate(-50%, -50%);
	font-size:30px;
	font-family: winsoft-pro-bold;
	width:200px; 
text-align: center;


} 

.date { 
position: absolute;
    top: 485px;
   left: 410px;
    transform: translate(-50%, -50%);
	font-size:30px;
	font-family: winsoft-pro-bold;
	width:200px;
	text-align: center;
} 
.num { 
position: absolute;
    top: 545px;
    left: 480px;
    transform: translate(-50%, -50%);
	font-size:30px;
	font-family: winsoft-pro-bold;
	width:100px; 
	text-align: center;
}


@font-face { font-family: winsoft-pro-bold; src: url('winsoft-pro-bold.TTF'); } 

</style>
</head>
<body>

<div class="bg"></div>
<div class="name"><?php echo $aName; ?></div>
<div class="title"><?php echo $title; ?> </div>
<div class="partner"><?php echo $PartnerName; ?></div>
<div class="city"><?php echo "الحدود الشمالية"; ?> </div>
<div class="date"><?php echo $startDate; ?></div>
<div class="num"><?php echo "12345678900000"; ?></div>




</body>
</html>
