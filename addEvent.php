<?php
 session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) )){
header("Location:Login.php");}
else if($_SESSION['user']!='1'){header("Location:Login.php");}
else{
include("Conn.php"); // Connection.


//set user value to attribute to send them to the database
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['eDays']) && isset($_POST['cost']) && isset($_POST['status']) && isset($_POST['city']) && isset($_POST['targetAudi']) && isset($_POST['location']))


{
// $eventID =$_POST['eventID'];
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


$sql= "INSERT INTO `event`(`eventID`, `title`, `description`, `startDate`, `endDate`, `eDays`, `cost`, `status`, `city`, `targetAudi`, `location`, `ApprovalNum`, `PartnerName`, `preTest`,`postTest`,`survey`) VALUES ('','$title','$description','$startDate','$endDate','$eDays','$cost','$status','$city','$targetAudi','$location','$ApprovalNum','$PartnerName','$preTest','$postTest','$survey')";


if (mysqli_query($con,$sql)) {
	$sql2="SELECT * FROM event WHERE title='$title'";
	
if($R=mysqli_query($con,$sql2)){
$row=mysqli_fetch_row($R);
$eventID = $row [0];

header("Location: focusedEvent.php?eventID=".$eventID);
}}
else {header("Location: Login.php"); }
}}

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
  <meta name="description" content="Web Page Builder Description">
  <title>إضافة دورة</title>
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
<body>
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
					 <center style="padding-bottom:20px; padding-top:40px;"><h4>إضافة دورة جديدة </h4></center>
                        <div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">عنوان الدورة التدريبية<span style="color:red;">*</span></label>
								    <input type="text" class="form-control"  id="exampleInputEmail1" name="title" >
                                </div>
                            </div>
                              <div class="col-md multi-horizontal">
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">الفئة المستهدفه<span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="targetAudi" >
                                </div>
                            </div>

                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">وصف الدورة التدريبية<span style="color:red;">*</span></label>
								    <textarea class="form-control" id="exampleTextarea" rows="6" name="description" ></textarea>
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
                                  <label><input type="radio" id="ava" name="status" value="متاحة" checked/>متاحه</label>
								</div>
                            </div>
							<div class="col-md-3 multi-horizontal" >
                                <div class="form-group">
                                   <label><input type="radio" id="ava" name="status" value="غير متاحة"
                                      />غير متاحه</label>
								</div>
                            </div>

                        </div>

						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">عدد أيام الدورة التدريبية<span style="color:red;">*</span></label>
								   <input type="number"  class="form-control" id="Edays" name="eDays" >
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">الرسوم<span style="color:red;">*</span></label>
								   <input type="number"  class="form-control" id="Edays" name="cost" >
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">تاريخ بدء الدورة التدريبية<span style="color:red;">*</span></label>
								   <input type="date" id="startDate" class="form-control" name="startDate"  required>
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">تاريخ انتهاء الدورة التدريبية<span style="color:red;">*</span></label>
								   <input type="date" id="endDate" class="form-control" name="endDate" required>
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md multi-horizontal" >
                                <div class="form-group">
                                 <label class="form-control-label mbr-fonts-style ">المنطقة<span style="color:red;">*</span></label>
								 <select class="form-control"  name="city" id ="city" >
                                   <option value=" الرياض">الرياض</option>
                                   <option value=" مكة المكرمة">مكة المكرمة</option>
                                   <option value=" المدينة المنورة">المدينة المنورة</option>
                                   <option value=" القصيم">القصيم</option>
                                   <option value="ال الشرقية">الشرقية</option>
                                   <option value=" عسير">عسير</option>
                                   <option value=" تبوك">تبوك</option>
                                   <option value=" حائل"> حائل</option>
                                   <option value=" الحدود الشمالية">الحدود الشمالية</option>
                                   <option value="  جازان">جازان</option>
								   <option value="  نجران"> نجران</option>
								   <option value=" الباحة"> الباحة</option>
								   <option value="  الجوف">الجوف</option>
                                </select>

                                </div>
                            </div>
                            </div>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">   مقر انعقاد الدورة
                                   <span style= "color:red;">*</span></label>
								    <input class="form-control" type="text" id="location" name="location" ></input>
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">   رقم اعتماد الشهادة للدورة
                                  </label>
								    <input class="form-control" type="text" id="ApprovalNum" name="ApprovalNum" ></input>
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">   اسم الشريك
                                    </label>
								    <input class="form-control" type="text" id="PartnerName" name="PartnerName" ></input>
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">  رابط الإختبار الأولي
                                    </label>
								    <input class="form-control" type="url" id="preTest" name="preTest" ></input>
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">  رابط الإختبار النهائي
                                    </label>
								    <input class="form-control" type="url" id="postTest" name="postTest" ></input>
                                </div>
                            </div>
                        </div>
				    	<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">  رابط التقييم العام
                                    </label>
								    <input class="form-control" type="url" id="survey" name="survey" ></input>
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
                            <button  type="submit" class="btn btn-primary btn-form display-4">اضافة دورة</button>
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
