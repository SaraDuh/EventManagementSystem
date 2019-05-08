<?php
 session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) )){
header("Location:Login.php");}
else if($_SESSION['user']!='1'){header("Location:Login.php");}
else{
include("Conn.php"); // Connection.

if(!isset($_GET['eventID'])) { header("Location:AdminHome.php");}
$eventID=$_GET['eventID'];
$sqlc = sprintf("SELECT eventID FROM event WHERE eventID='$eventID'");
$rowc = mysqli_fetch_array(mysqli_query($con,$sqlc));
if($rowc['eventID']!=$eventID){header("Location:AdminHome.php");}


$my_qry ="SELECT * from event WHERE eventID= '$eventID'";
$result=mysqli_query($con,$my_qry);


  while ($row=mysqli_fetch_array($result))//////////////////////////////// Database column's name
  {
      // echo "ROW 1=". $row[0];
$title=$row['title'];
$description =$row['description'];
$startDate =$row['startDate'];
$endDate =$row['endDate'];
$eDays =$row['eDays'];
$cost =$row['cost'];
$status =$row['status'];
$city =$row['city'];
$targetAudi =$row['targetAudi'];
$location =$row['location'];
$ApprovalNum =$row['ApprovalNum'];
$PartnerName =$row['PartnerName'];
$preTest =$row['preTest'];
$postTest =$row['postTest'];
$survey =$row['survey'];
	}
   if(!$result){Print "<label>  لاتوجد نتيجة </label><br/><br/>";}


//set user value to attribute to send them to the database
if (!(empty($_POST['title']) && empty($_POST['description']) && empty($_POST['eDays']) && empty($_POST['cost']) && empty($_POST['status']) && empty($_POST['city']) && empty($_POST['location']))){
$title =$_POST['title'];
$description =$_POST['description'];
$startDate =$_POST['startDate'];
$endDate =$_POST['endDate'];
$eDays =$_POST['eDays'];
$cost =$_POST['cost'];
$status =$_POST['status'];
$city =$_POST['city'];
$targetAudi =$_POST['targetAudi'];
$location =$_POST['location'];
$ApprovalNum =$_POST['ApprovalNum'];
$PartnerName =$_POST['PartnerName'];
$preTest =$_POST['preTest'];
$postTest =$_POST['postTest'];
$survey =$_POST['survey'];
// $material =$_POST['material'];


$sql= "UPDATE  event SET  title='$title', description='$description', startDate='$startDate', endDate='$endDate', eDays='$eDays', cost='$cost', status='$status', city='$city', targetAudi='$targetAudi', location='$location', ApprovalNum='$ApprovalNum', PartnerName='$PartnerName', preTest='$preTest', postTest='$postTest', survey='$survey' WHERE eventID='$eventID'";



if (mysqli_query($con,$sql)) {
header("Location: focusedEvent.php?eventID=".$eventID."&edited=true");
}else {header("Location:AdminHome.php"); }


}



}



mysqli_close($con);
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-348x219.png" type="image/x-icon">
 

  <title>تعديل دورة</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<!--  CSS for Reg -->
  <link rel="stylesheet" href="assets-reg/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets-reg/tether/tether.min.css">
  <link rel="stylesheet" href="assets-reg/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets-reg/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets-reg/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets-reg/dropdown/css/style.css">
  <link rel="stylesheet" href="assets-reg/socicon/css/styles.css">
  <link rel="stylesheet" href="assets-reg/theme/css/style.css">
  <link rel="stylesheet" href="assets-reg/mobirise/css/mbr-additional.css" type="text/css">





</head>
<body onload="start()">
  <!-- ++++++++++++++++ admin NAVBAR +++++++++++++-->
    <section class="menu cid-qY96Z1hE7F" once="menu" id="menu1-2p">



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
                         <img src="assets/images/logo-348x219.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
            <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="Logout.php">تسجيل الخروج&nbsp;&nbsp;<span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span></a>
            </li>
            <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="search.php">البحث عن مستخدم&nbsp;&nbsp;<span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span></a>
            </li>
         </ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="addEvent.php">إضافة دورة</a></div>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="AdminHome.php">الرئيسية</a></div>
        </div>
    </nav>
</section> 

<section class="engine"></section>


<section class="mbr-section form1 cid-qY9s4NNvpp" id="form1-3" style="background-color:#f2f2f2;" >




    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">&nbsp;</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">&nbsp;</h3>
            </div>
        </div>
    </div>
    <div class="container style='background:white;'">
        <div class="row justify-content-center " style="background-color: white;margin-top:-120px;">
            <div class="media-container-column col-lg-8" >


                    <form class="mbr-form" action="" method="post" dir="rtl" style="text-align:right;" >
					 <center style="padding-bottom:20px; padding-top:40px;"><h4>تعديل معلومات الدورة</h4></center>
                        <div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">عنوان الدورة التدريبية<span style="color:red;">*</span></label>
								    <input type="text" class="form-control"  id="exampleInputEmail1" name="title" value="<?php echo $title; ?>" required>
                                </div>
                            </div>
                              <div class="col-md multi-horizontal">
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">الفئة المستهدفه<span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="targetAudi" value="<?php echo $targetAudi; ?>" required >
                                </div>
                            </div>

                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">وصف الدورة التدريبية<span style="color:red;">*</span></label>
								    <textarea class="form-control" id="exampleTextarea" rows="6" name="description"  required> <?php echo $description; ?></textarea>
                                </div>
                            </div>
                        </div>

						<div class="row row-sm-offset">
                            <div class="col-md-3 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">حالة الدورة التدريبية<span style="color:red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-3 multi-horizontal" >
                                <div class="form-group">
                                  <label><input type="radio" id="ava" name="status" value="متاحة"  />متاحه</label>
								</div>
                            </div>
							<div class="col-md-3 multi-horizontal" >
                                <div class="form-group">
                                   <label><input type="radio" id="notava" name="status" value="غير متاحة"
                                      />غير متاحه</label>
								</div>
                            </div>

                        </div>

						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">عدد أيام الدورة التدريبية<span style="color:red;">*</span></label>
								   <input type="number"  class="form-control" id="Edays" name="eDays" value="<?php echo $eDays; ?>" required >
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">الرسوم<span style="color:red;">*</span></label>
								   <input type="number"  class="form-control" id="Edays" name="cost" value="<?php echo $cost; ?>"  required >
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">تاريخ بدء الدورة التدريبية<span style="color:red;">*</span></label>
								   <input type="date" id="startDate" class="form-control" name="startDate" value="<?php echo $startDate; ?>" required>
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">تاريخ انتهاء الدورة التدريبية<span style="color:red;">*</span></label>
								   <input type="date" id="endDate" class="form-control" name="endDate" value="<?php echo $endDate; ?>" required>
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                 <label class="form-control-label mbr-fonts-style ">المنطقة<span style="color:red;">*</span></label>
								 <select class="form-control"  name="city" id ="city" >
                                   <option value="منطقة الرياض" <?php if($city=="منطقة الرياض")echo 'selected="selected"'; ?>>الرياض</option>
                                   <option value="منطقة مكة المكرمة" <?php if($city=="منطقة مكة المكرمة")echo 'selected="selected"'; ?>>مكة المكرمة</option>
                                   <option value="منطقة المدينة المنورة" <?php if($city=="منطقة المدينة المنورة")echo 'selected="selected"'; ?>>المدينة المنوره</option>
                                   <option value="منطقة القصيم" <?php if($city=="منطقة القصيم")echo 'selected="selected"'; ?>>القيصم</option>
                                   <option value="المنطقة الشرقية" <?php if($city=="المنطقة الشرقية")echo 'selected="selected"'; ?>>الشرقية</option>
                                   <option value="منطقة عسير" <?php if($city=="منطقة عسير")echo 'selected="selected"'; ?>>عسير</option>
                                   <option value="منطقة تبوك" <?php if($city=="منطقة تبوك")echo 'selected="selected"'; ?>>تبوك</option>
                                   <option value="منطقة حائل" <?php if($city=="منطقة حائل")echo 'selected="selected"'; ?>>حائل</option>
                                   <option value="منطقة الحدود الشمالية" <?php if($city=="منطقة الحدود الشمالية")echo 'selected="selected"'; ?>>الحدود الشمالية</option>
                                   <option value="منطقة جازان" <?php if($city=="منطقة جازان")echo 'selected="selected"'; ?>> جازان</option>
								   <option value="منطقة نجران"<?php if($city=="منطقة نجران")echo 'selected="selected"'; ?> > نجران</option>
								   <option value="منطقة الباحة"<?php if($city=="منطقة الباحة")echo 'selected="selected"'; ?> > الباحة</option>
								   <option value="منطقة الجوف"<?php if($city=="منطقة الجوف")echo 'selected="selected"'; ?> > الجوف</option>
                                </select>

                                </div>
                            </div>
                            </div>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">   مقر انعقاد الدورة
                                   <span style= "color:red;">*</span></label>
								    <input class="form-control" type="text" id="location" name="location" value="<?php echo $location; ?>"  required></input>
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">   رقم اعتماد الشهادة للدورة
                                  </label>
								    <input class="form-control" type="text" id="ApprovalNum" name="ApprovalNum" value="<?php if($ApprovalNum==null)echo ""; else echo $ApprovalNum; ?>" ></input>
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">   اسم الشريك
                                    </label>
								    <input class="form-control" type="text" id="PartnerName" name="PartnerName" value="<?php if($PartnerName==null)echo ""; else echo $PartnerName; ?>"  ></input>
                                </div>
                            </div>
                        </div>
							<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">  رابط الإختبار الأولي
                                    </label>
								    <input class="form-control" type="url" id="preTest" name="preTest" value="<?php if($preTest==null)echo ""; else echo $preTest; ?>" ></input>
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">  رابط الإختبار النهائي
                                    </label>
								    <input class="form-control" type="url" id="postTest" name="postTest" value="<?php if($postTest==null)echo ""; else echo $postTest; ?>" ></input>
                                </div>
                            </div>
                        </div>
				    	<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">  رابط التقييم العام
                                    </label>
								    <input class="form-control" type="url" id="survey" name="survey" value="<?php if($survey==null)echo ""; else echo $survey; ?>" ></input>
                                </div>
                            </div>
                        </div>
						
						
						<!-- <div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
								<form>
                                   <label class="form-control-label mbr-fonts-style ">رفع الملفات المطلوبة</label>
								   <input   onclick="myFunction()" type="button" value="إضافة مرفق" onclick="window.location.href='payment.html'" />

								   <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
								   <div id="addItem"></div>
								   </form>
                                </div>
                            </div>
                        </div> -->



                        <span class="input-group-btn">
                            <button  type="submit" class="btn btn-primary btn-form display-4">تعديل الدورة</button>
                        </span>
                    </form>

            </div>
        </div>
    </div>
</section>


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
function myFunction() {
    var x = document.createElement("INPUT");
    x.setAttribute("type", "file");
    document.getElementById('addItem').appendChild(x);
}


	
function start(){
var s= <?php 
if($status=="متاحة")echo '1'; else echo '0';?>; 
	if(s==1){document.getElementById("ava").checked = true;}
	else{document.getElementById("notava").checked=true;}
}
</script>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>

<!--  Scribt for Reg -->
  <script src="assets-reg/web/assets/jquery/jquery.min.js"></script>
  <script src="assets-reg/popper/popper.min.js"></script>
  <script src="assets-reg/tether/tether.min.js"></script>
  <script src="assets-reg/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets-reg/smoothscroll/smooth-scroll.js"></script>
  <script src="assets-reg/dropdown/js/script.min.js"></script>
  <script src="assets-reg/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets-reg/parallax/jarallax.min.js"></script>
  <script src="assets-reg/theme/js/script.js"></script>



</body>
</html>
