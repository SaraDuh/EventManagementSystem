<?php session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) && isset($_GET['eventID']))){
header("Location:Login.php?regTOev=true");
}
else{
include("Conn.php"); // Connection.


if(isset($_GET['eventID'])){
if($_SESSION['user']=2){
	$attEmail=$_SESSION['Email'];	
}


$eventID=$_GET['eventID'];

$sql2="SELECT * FROM reg WHERE attEmail='$attEmail' AND eventID='$eventID'";
$rs = mysqli_query($con,$sql2);
if(mysqli_num_rows($rs)>0){
header("Location:myEvents.php?reg=false");}
else {
$sql=  "INSERT INTO `reg`(`attEmail`, `eventID`, `image_name`, `image`, `accepted`, `pre`, `post`, `overall`) VALUES ('$attEmail','$eventID', '', '','0','','','')";
echo $sql;
$result = mysqli_query($con,$sql);
if ($result) {header("Location:myEvents.php?reg=true");}

else { header("Location:Login.php");}

}
}
}






// }
mysqli_close($con);
?>