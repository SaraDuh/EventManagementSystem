<?php  
 session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) )){
header("Location:Login.php");}
else if($_SESSION['user']!='1'){header("Location:Login.php");}


else{ // $adminEmail=$_SESSION['Email'];
include("Conn.php"); // Connection.

if (!(isset($_GET['eventID']))){header("Location:myEvents.php");}
$eventID=$_GET['eventID'];

$sqle = "SELECT * FROM event WHERE eventID='$eventID'";
$res=mysqli_query($con, $sqle);
while ($row=mysqli_fetch_array($res)){ //////
$title=$row['title'];
}

$output = '';
if(isset($_POST["export"]))
{
	$qry = "SELECT reg.eventID, reg.accepted, reg.attEmail, attendant.aName,attendant.eName,attendant.attEmail,attendant.mobile,attendant.specialization,attendant.position,attendant.employer, attendant.city,attendant.type,attendant.cardID,attendant.cardDate,attendant.department,attendant.workTel,attendant.workTrans,attendant.fax,attendant.faxTran,attendant.nationality,attendant.abuse FROM reg INNER JOIN attendant ON attendant.attEmail=reg.attEmail AND reg.eventID='$eventID'";
 $result = mysqli_query($con, $qry);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
		 		<th>اسم الدورة</th>
					<th>الاسم بالعربي</th>
					  <th>الاسم بالانجليزي</th>
					    <th>الايميل</th> 
						   <th>الجوال</th>
						    <th>المجال</th> 
								 <th>الجنسية</th> 
								  <th>المدينة</th> 
								   <th>التعامل مع العنف</th>
                         <th>الحاله الوظيفية</th>                            
                         <th>المسمى الوظيفي/التخصص</th>                            
                         <th>جهة العمل/الدراسة</th>                            
                         <th>القسم</th>                            
                         <th>رقم التسجيل للبطاقة</th>                         
						 <th>تاريخ انتهاء البطاقة</th>                            
						 <th>هاتف العمل</th>                            
						 <th>تحويلة هاتف العمل</th>                            
						 <th>الفاكس</th>                            
						 <th>تحويلة الفاكس</th>                            
						                         
						                         
					                          
						 
                        
                        
                       
                         
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
$abuse =$row['abuse'];
if($abuse=='0')
$abuse = "لا";
 else
$abuse ="نعم";

$type=$row['type'];
if($type=='1')
$type="موظف";
else if($type=='2')
$type="غير موظف";
else
$type="طالب";


$cardID =$row['cardID'];
if($cardID==""||$cardID==null)
$cardID="لايوجد";	
$cardDate =$row['cardDate'];
if($cardDate==""||$cardDate==null||$cardDate=='0000-00-00')
$cardDate="لايوجد";	
$position =$row['position'];
if($position==""||$position==null)
$position="لايوجد";
$employer =$row['employer'];
if($employer==""||$employer==null)
$employer="لايوجد";
$department =$row['department'];
if($department==""||$department==null)
$department="لايوجد";
$workTel =$row['workTel'];
if ($workTel=='0')
$workTel="لايوجد";
$workTrans =$row['workTrans'];
if ($workTrans=='0')
$workTrans="لايوجد";
$fax =$row['fax'];
if ($fax=='0')
$fax="لايوجد";
$faxTran =$row['faxTran'];
if ($faxTran=='0')
$faxTran="لايوجد";








   $output .= '
                     <tr>  
					 
					   <td>'.$title.'</td>
					   <td>'.$row["aName"].'</td>
					   <td>'.$row["eName"].'</td> 
					     <td>'.$row["attEmail"].'</td> 
						    <td>'.$row["mobile"].'</td>
							<td>'.$row["specialization"].'</td>
							  <td>'.$row["nationality"].'</td> 
							   <td>'.$row["city"].'</td>  
							    <td>'.$abuse.'</td>
                         <td>'.$type.'</td>  
                         <td>'.$position.'</td>  
                         <td>'.$employer.'</td>  
                         <td>'.$department.'</td>  
                         <td>'.$cardID.'</td>  
                         <td>'.$cardDate.'</td>  
                         <td>'.$workTel.'</td>  
                         <td>'.$workTrans.'</td>  
                         <td>'.$fax.'</td>  
                         <td>'.$faxTran.'</td>  
                          
                        
                        
                           
                        
                        
                          
                       
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=قائمة المسجلين.xls');
  echo $output;
 } else echo "no row";
}
else echo "no ex";
}
?>