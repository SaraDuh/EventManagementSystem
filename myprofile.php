<?php 
session_start();
if( !(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user'])) ) {
header("Location:Login.php");}
else if($_SESSION['user']!='2'){header("Location:Login.php");}
else{$attEmail=$_SESSION['Email'];
include("Conn.php"); // Connection.

if(isset($_GET['updated'])){
$updated=$_GET['updated'];
if($updated=="true"){
echo '<script> alert("تم تعديل المعلومات بنجاح");</script>';}
else{ echo '<script> alert("لم يتم تعديل المعلومات! حاول مره اخرى.");</script>'; }
}
// $sql = "SELECT `eventID`, `title`, `description`, `startDate`, `endDate`, `eDays`, `cost`, `status`, `city`, `targetAudi`, `location`, `material` FROM `event`";
$my_qry ="SELECT * from attendant WHERE attEmail= '$attEmail'";
$result=mysqli_query($con,$my_qry);

  // Fetch one and one row
  while ($row=mysqli_fetch_array($result))//////////////////////////////// Database column's name
  {
      // echo "ROW 1=". $row[0];
$aName =$row['aName'];
$eName =$row['eName'];
$mobile =$row['mobile'];
$gender =$row['gender'];
$specialization =$row['specialization'];
$city =$row['city'];
$nationality =$row['nationality'];
$abuse =$row['abuse'];
$type =$row['type'];
// if has card
$cardID =$row['cardID'];
$cardDate =$row['cardDate'];
// if student or emp
$position =$row['position'];
$employer =$row['employer'];
// only if emp
$department =$row['department'];
$workTel =$row['workTel'];
$workTrans =$row['workTrans'];
$fax =$row['fax'];
$faxTran =$row['faxTran'];

	}
   if(!$result){Print "<label>  no result  </label><br/><br/>";
}
mysqli_close($con);
}
?>

<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets-profile/images/logo-348x219.png" type="image/x-icon">
  <meta name="description" content="Site Creator Description">
  <title>حسابي</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


  <link rel="stylesheet" href="assets-profile/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets-profile/tether/tether.min.css">
  <link rel="stylesheet" href="assets-profile/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets-profile/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets-profile/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets-profile/socicon/css/styles.css">
  <link rel="stylesheet" href="assets-profile/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets-profile/dropdown/css/style.css">
  <link rel="stylesheet" href="assets-profile/theme/css/style.css">
  <link rel="stylesheet" href="assets-profile/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body onload="InfoFunction()">

<section class="menu cid-qY9aBc8Cm9" once="menu" id="menu1-2z">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="home.php">
                         <img src="assets-profile/images/logo-348x219.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
               
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="myEvents.php"><span class="mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>دوراتي&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="myprofile.php"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>حسابي&nbsp;</a>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="Logout.php"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>&nbsp;تسجيل الخروج&nbsp;</a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="events.php">عرض الدورات</a></div>
        </div>
    </nav>
</section>

<section class="engine"></section><section class="mbr-section content4 cid-qYI3vQtOH0" id="content4-3h">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">حسابي الشخصي</h2>



                
            </div>
        </div>
    </div>
</section>

<section class="features6 cid-qYImrq2UpA" id="features6-3j">
    
   
    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-bootstrap"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7"><strong>المعلومات الشخصية&nbsp;</strong></h4>
                  <center><table>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $aName; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: الاسم بالعربي</p></td>
                      </tr>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $eName; ?> &nbsp;</p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">:الاسم بالانجليزي </p></td>
                      </tr>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $nationality; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: الجنسية </p></td>
                      </tr>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $gender; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: الجنس  </p></td>
                      </tr>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo "0".$mobile; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: رقم الجوال </p></td>
                      </tr>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $attEmail; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: البريد الإلكتروني </p></td>
                      </tr>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $specialization; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: المجال</p></td>
                      </tr>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $city; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: المدينة</p></td>
                      </tr>
                  </table></center>
                  </div>
                 <center><label><p class="mbr-text mbr-fonts-style display-7">هل سبق لك التعامل مع ضحايا العنف الأسري؟ <?php if($abuse==0){echo "لا";} else {echo "نعم";} ?></p></label></center>
            </div>
        </div>
    </div>

</section>

<section class="features6 cid-qYInsJGCcZ" >
    
    <div class="container" id="EmpDiv" >
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-edit"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7"><strong>المعلومات الوظيفية&nbsp;</strong></h4>
                    <center><table>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $position;?></p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: المسمى الوظيفي</p></td>
                      </tr>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $employer; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: جهة العمل</p></td>
                      </tr>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $department; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: القسم </p></td>
                      </tr>
                      <tr>
					  <div id="workte">
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $workTel; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: هاتف العمل</p></td>
					  </div>
                      </tr>
                      <tr>
					  <div id="worktra">
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $workTrans; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: تحويلة</p></td>
					   </div>
                      </tr>
                      <tr>
					   <div id="faxte">
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $fax; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: الفاكس</p></td>
					   </div>
                      </tr>
                      <tr>
					  <div id="faxtra">
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $faxTran; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: تحويلة</p></td>
					   </div>
                      </tr>
                  </table></center>
                </div>
            </div>

        </div>

    </div>

</section> <!-- if employed -->

<section class="features6 cid-qYInsJGCcZ">
    
    <div class="container" id="StuDiv" >
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-edit"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7"><strong>المعلومات الوظيفية&nbsp;</strong></h4>
                    <center><table>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $position;?></p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: التخصص</p></td>
                      </tr>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $employer; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: جهة الدراسة</p></td>
                      </tr>
                  </table></center>
                </div>
            </div>

        </div>

    </div>

</section>  <!-- if student -->

<section class="features6 cid-qYI2quie1z" >
    

    <div class="container" id="CardDiv"  >
        <div class="media-container-row" >

            <div class="card p-3 col-12 col-md-6">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-contact-form"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7"><strong>معلومات بطاقة التسجيل بهيئة التخصصات</strong><strong>&nbsp;الصحية</strong></h4>
                 <center><table>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $cardID;?></p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: رقم تسجيل البطاقة</p></td>
                      </tr>
                      <tr>
                       <td><p class="mbr-text mbr-fonts-style display-7"> <?php echo $cardDate; ?> </p></td> 
                       <td><p class="mbr-text mbr-fonts-style display-7">: تاريخ انتهاء البطاقة </p></td>
                      </tr>
                 </table></center>
                </div>
            </div>
        </div>
		
    </div>
									                  <center>      <span class="input-group-btn">
									<a class="btn btn-md btn-primary display-4" href="EditMyProfile.php">تعديل بياناتي الشخصية</a>
                        </span> </center>	
<br><br><br><br><br>
</section> <!-- if has card -->
<!-- style="display:none; -->

<section once="" class="cid-qY2enTpP2p" id="footer7-c">





    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">





                <li class="foot-menu-item mbr-fonts-style display-7">&nbsp;</li><li class="foot-menu-item mbr-fonts-style display-7">&nbsp;</li><li class="foot-menu-item mbr-fonts-style display-7">&nbsp;</li><li class="foot-menu-item mbr-fonts-style display-7">&nbsp;</li><li class="foot-menu-item mbr-fonts-style display-7">&nbsp;</li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">






                <div class="soc-item">
                        <a href="http://twitter.com/nfsp1" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="http://www.facebook.com/profile.php?id=NFSP.NGHA" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="http://youtube.com/NFSP2005" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="http://instagram.com/nfsp1" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="mailto:Training_NFSP@ngha.med.sa" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social mbri-letter socicon" style="font-size: 27px; font-weight: bold;"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-5">&nbsp;جميع الحقوق محفوظة ©&nbsp;2018
                </p>
            </div>
        </div>
    </div>
</section>


<script>
// if(type==="1"){ employed();}
// else if(type==="2"){ unemployed();}
// else if(type==="3"){ student();}
// 
// if(cardID!==null){ card();}
// 
// function employed() {
// document.getElementByID("features6-3k").show();
// document.getElementByID("features6-3r").hide();
// }
// function unemployed() {
// document.getElementByID("features6-3k").hide();
// document.getElementByID("features6-3r").hide();
// }
// function student() {
// document.getElementByID("features6-3k").hide();
// document.getElementByID("features6-3r").show();
// }
// function card() {
// document.getElementByID("divv").hide;
// }


function InfoFunction(){
	var type = "<?php echo $type ?>";
    var cardID = "<?php echo $cardID ?>";
	var cardDate = "<?php echo $cardDate ?>";
	var workTel = "<?php echo $workTel ?>";
	var workTrans = "<?php echo $workTrans ?>";
	var fax = "<?php echo $fax ?>";
	var faxTran = "<?php echo $faxTran ?>";
    if(type==1) {
    $("#EmpDiv").show();
	}	
	
	else{  $("#EmpDiv").hide();}
	    if(type==3) {
    $("#StuDiv").show(); }
	else{  $("#StuDiv").hide();}
	
    if(cardDate==="0000-00-00" || cardID==null){
    $("#CardDiv").hide(); }
	else{  $("#CardDiv").show();}

	
	
	
	
	
	
}

</script>

  <script src="assets-profile/web/assets/jquery/jquery.min.js"></script>
  <script src="assets-profile/popper/popper.min.js"></script>
  <script src="assets-profile/tether/tether.min.js"></script>
  <script src="assets-profile/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets-profile/smoothscroll/smooth-scroll.js"></script>
  <script src="assets-profile/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets-profile/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets-profile/dropdown/js/script.min.js"></script>
  <script src="assets-profile/theme/js/script.js"></script>
  
  
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>

  
  
  <input name="animation" type="hidden">
  </body>
</html>