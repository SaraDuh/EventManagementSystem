<?php 
session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user'])) ){
$inout="تسجيل الدخول";
}
else{
$inout="تسجيل  الخروج";
}

include("Conn.php"); // Connection.


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
  <meta name="description" content="Website Generator Description">
  <title>Events</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu cid-qY9absRliM" once="menu" id="menu1-2q">

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
              <span class="navbar-caption-wrap">
</span>
          </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item"> <?php if(isset($_SESSION['user']) && $_SESSION['user']=='2'){ 
                echo'<a class="nav-link link text-white display-4" href="myEvents.php"><span class="mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>دوراتي&nbsp;</a>';}?></li>
              <li class="nav-item"> <?php if(isset($_SESSION['user']) && $_SESSION['user']=='2'){ 
                echo'<a class="nav-link link text-white display-4" href="myprofile.php"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>حسابي&nbsp;</a>';}?></li>
              <li class="nav-item"><a class="nav-link link text-white display-4" href=<?php if($inout=="تسجيل الدخول"){echo "'Login.php'";} else {echo "'Logout.php'";}?><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>&nbsp;<?php echo $inout; ?> &nbsp;</a></li></ul>
              
              <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="events.php">عرض الدورات</a></div>
              <?php if(isset($_SESSION['user']) && $_SESSION['user']=='1'){ 
               echo'<div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="AdminHome.php">الرئيسية</a></div>';}?>
      </div>
  </nav>
</section>

<section class="engine"><a href="https://mobiri.se/x">css templates</a></section><section class="mbr-section content4 cid-qY2JpjrYkJ" id="content4-1e">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">&nbsp;</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-2"><strong>الدورات المتاحة</strong></h3>
                
            </div>
        </div>
    </div>
</section>

<!-- <div id ="eventDIV">  -->
<?php
$sql="SELECT eventID, title, description FROM event";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_assoc($result)){

$eventID=$row['eventID'];
$print='<section class="header7 cid-qY2AxjEfNn" id="header7-13">
   <div class="container">
       <div class="media-container-row">
           <div class="media-content align-right">
               <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-2">'.$row['title'].'</h1>
               <div class="mbr-section-text mbr-white pb-3">
                   <p class="mbr-text mbr-fonts-style display-5">'.$row['description'].'</p>
               </div>
               <div class="mbr-section-btn">
                   <a class="btn btn-md btn-white-outline display-4" href="focusedEvent.php?';
                 $print.='eventID=';
                  $print.=$eventID;
$print.='">المزيد</a></div>
           </div>
           <div class="mbr-figure" style="width: 100%;"><img src="assets/images/j.jpg" style="opacity:0.9;" width="1200" height="300"></div>
       </div>
   </div>
</section>';

echo $print;
}
echo"<br>";
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
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>