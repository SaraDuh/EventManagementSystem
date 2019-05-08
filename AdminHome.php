<?php
 session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) )){
header("Location:Login.php");}
else if($_SESSION['user']!='1'){header("Location:Login.php");}
else{
include("Conn.php"); // Connection.

}
?>


<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-348x219.png" type="image/x-icon">
  <meta name="description" content="Site Creator Description">
  <title>صفحة المشرف</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
  <body>
    <body>
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


<?php
$sql="SELECT eventID, title, description FROM event";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_assoc($result)){
$eventID=$row['eventID'];
// echo $eventID;
$print='<section class="engine"><a href=""></a></section><section class="features12 cid-qY3K060js9" id="features12-1u">
    <div class="container">
        <h2 class="mbr-section-title pb-2 mbr-fonts-style display-2"><a href="focusedEvent.php?eventID='.$eventID.'">'.$row['title'].'</a></h2>
        <h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-5">'.$row['description'].'</h3>

        <div class="media-container-row pt-5">
            <div class="block-content align-right">
                                 <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                             <span class="mbr-iconfont mbri-contact-form"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                              <a href="addMaterial.php?eventID='.$eventID.'">إضافة المرفقات</a> </h4>
                        </div>
                    </div>

                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            إضافة المرفقات المطلوبة للدورة التدريبية</p>
                    </div>
                </div>
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbri-print"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                              <a href="issueCertificate.php?eventID='.$eventID.'">   إصدار شهادات </a> </h4>
                        </div>
                    </div>
                     <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                              <a href="badges.php?eventID='.$eventID.'">  إصدار تعاريف </a> </h4>
                        </div>
                </div>
                 <a class="btn btn-md btn-primary display-4" href="deleteEvent.php?eventID='.$eventID.'">حذف الدورة </a>           

            </div>
            <div class="mbr-figure" style="width: 50%;">
                <img src="assets/images/pichome.jpg" alt="Mobirise" title="">
            </div>
            <div class="block-content align-left  ">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                             <span class="mbr-iconfont mbri-menu"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                              <a href="regTable.php?eventID='.$eventID.'"> قائمة المسجلين </a> </h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">عرض المسجلين بهذه الدورة</p>
                    </div>
                </div>
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbri-bulleted-list"></span>
                        </div>
                        <div class="mbr-crt-title">
                            <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                            <a href="Absence.php?eventID='.$eventID.'">    قائمة الحضور </a> </h4>
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                            تسجيل الدخول والخروج للمقبولين</p>
                    </div>            
                </div>         
                   <a class="btn btn-md btn-primary display-4" href="EditEvent.php?eventID='.$eventID.'">تعديل </a>           
            </div>
        </div>
    </div>
</section>';



echo $print;
// echo $eventID;
// echo"<br>";
}

  // Free result set
    mysqli_free_result($result);
    mysqli_close($con);
  }
  ?>


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


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>


</body>
</html>
