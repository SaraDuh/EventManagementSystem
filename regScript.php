<?php
include("Conn.php"); // Connection.


$eDays=-1;
$attEmail = mysqli_real_escape_string($con, $_POST['emailname']);
$eventID = mysqli_real_escape_string($con, $_POST['eventIDname']);

$sql = "UPDATE reg SET accepted ='1' WHERE eventID ='$eventID' AND attEmail='$attEmail'"; // eDays
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
} else echo "Updated";

$sqlD = sprintf("SELECT eDays FROM event WHERE eventID='$eventID'"); // GET EVENT NAME
 if ($result=mysqli_query($con,$sqlD)){
   while ($row=mysqli_fetch_row($result)){$eDays= $row[0];} 
   }else echo "ops1";
// echo $eDays;

$sqlExist="SELECT * FROM abs WHERE attEmail='$attEmail' AND eventID='$eventID'";
$rs = mysqli_query($con,$sqlExist);
if(!mysqli_num_rows($rs)>0){
// }
// else {

  if($eDays==1){ // day1
$sqlABS ="INSERT INTO abs (eventID, attEmail, d1a, d1b, d2a, d2b, d3a, d3b, d4a, d4b, d5a, d5b, d6a, d6b, d7a, d7b, d8a, d8b) VALUES ('$eventID', '$attEmail', '0', '0', '-1', '-1', '-1', '-1', '-1', '-1', '-1','-1', '-1', '-1', '-1', '-1', '-1', '-1')";
if( mysqli_query($con,$sqlABS) ){
echo "yesss";} else echo"zgg";
}
 else if($eDays==2){ // day2
$sqlABS ="INSERT INTO abs(eventID, attEmail, d1a, d1b, d2a, d2b, d3a, d3b, d4a, d4b, d5a, d5b, d6a, d6b, d7a, d7b, d8a, d8b) VALUES ('$eventID', '$attEmail', '0', '0', '0', '0', '-1', '-1', '-1', '-1', '-1','-1', '-1', '-1', '-1', '-1', '-1', '-1')";
mysqli_query($con,$sqlABS);
}
 else if($eDays==3){ // day3
$sqlABS ="INSERT INTO abs(eventID, attEmail, d1a, d1b, d2a, d2b, d3a, d3b, d4a, d4b, d5a, d5b, d6a, d6b, d7a, d7b, d8a, d8b) VALUES ('$eventID', '$attEmail', '0', '0', '0', '0', '0', '0', '-1', '-1', '-1','-1', '-1', '-1', '-1', '-1', '-1', '-1')";
mysqli_query($con,$sqlABS);
}
 else if($eDays==4){ // day4
$sqlABS ="INSERT INTO abs(eventID, attEmail, d1a, d1b, d2a, d2b, d3a, d3b, d4a, d4b, d5a, d5b, d6a, d6b, d7a, d7b, d8a, d8b) VALUES ('$eventID', '$attEmail', '0', '0', '0', '0', '0', '0', '0', '0', '-1','-1', '-1', '-1', '-1', '-1', '-1', '-1')";
mysqli_query($con,$sqlABS);
}
 else if($eDays==5){ // day5
$sqlABS ="INSERT INTO abs(eventID, attEmail, d1a, d1b, d2a, d2b, d3a, d3b, d4a, d4b, d5a, d5b, d6a, d6b, d7a, d7b, d8a, d8b) VALUES ('$eventID', '$attEmail', '0', '0', '0', '0', '0', '0', '0', '0', '0','0', '-1', '-1', '-1', '-1', '-1', '-1')";
mysqli_query($con,$sqlABS);
}
  if($eDays==6){ // day6
$sqlABS ="INSERT INTO abs(eventID, attEmail, d1a, d1b, d2a, d2b, d3a, d3b, d4a, d4b, d5a, d5b, d6a, d6b, d7a, d7b, d8a, d8b) VALUES ('$eventID', '$attEmail', '0', '0', '0', '0', '0', '0', '0', '0', '0','0', '0', '0', '-1', '-1', '-1', '-1')";
mysqli_query($con,$sqlABS);
}
 else if($eDays==7){ // day7
$sqlABS ="INSERT INTO abs(eventID, attEmail, d1a, d1b, d2a, d2b, d3a, d3b, d4a, d4b, d5a, d5b, d6a, d6b, d7a, d7b, d8a, d8b) VALUES ('$eventID', '$attEmail', '0', '0', '0', '0', '0', '0', '0', '0', '0','0', '0', '0', '0', '0', '-1', '-1')";
mysqli_query($con,$sqlABS);
}
 else if($eDays==8){ // day8
$sqlABS ="INSERT INTO abs(eventID, attEmail, d1a, d1b, d2a, d2b, d3a, d3b, d4a, d4b, d5a, d5b, d6a, d6b, d7a, d7b, d8a, d8b) VALUES ('$eventID', '$attEmail', '0', '0', '0', '0', '0', '0', '0', '0', '0','0', '0', '0', '0', '0', '0', '0')";
mysqli_query($con,$sqlABS);
}
}

?>
