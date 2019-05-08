<?php
 session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) ) ){
header("Location:Login.php");}
else if($_SESSION['user']!='2'){header("Location:Login.php");}
else if(!isset($_GET['eventID'])){ header("Location:myEvents.php");}
else{
$attEmail=$_SESSION['Email'];
$eventID=$_GET['eventID'];
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
  <link rel="shortcut icon" href="assets-material/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  
  <!--    material css -->
  <link rel="stylesheet" href="assets-material/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets-material/tether/tether.min.css">
  <link rel="stylesheet" href="assets-material/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets-material/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets-material/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets-material/theme/css/style.css">
  <link rel="stylesheet" href="assets-material/mobirise/css/mbr-additional.css" type="text/css">
  
  <!--   Regular assets -->
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  


  
</head>
<body>
  <!-- ++++++++++++++++ ATT NAVBAR +++++++++++++-->
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
          <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                  <a class="nav-link link text-white display-4" href="myEvents.php"><span class="mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>دوراتي&nbsp;</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link link text-white display-4" href="myprofile.php"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>حسابي&nbsp;</a>

              </li><li class="nav-item"><a class="nav-link link text-white display-4" href="Logout.php"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>&nbsp;تسجيل الخروج&nbsp;</a></li></ul>

              <div class="navbar-buttons mbr-section-btn" ><a   class="btn btn-sm btn-primary display-4" href="events.php">عرض الدورات</a></div>
      </div>
  </nav>
</section>

<section class="header12 cid-r0eteX2teI mbr-fullscreen mbr-parallax-background" id="header12-0" style="background-image: url('assets-material/images/mbr-2-1920x1280.jpg');">

    

    

       <div class="container  ">
            <div class="media-container">
                <div class="col-md-12 align-center">
                    <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1">ملحقات</h1>
                    <?php 
         $sqlT = sprintf("SELECT title FROM event WHERE eventID='$eventID'"); // GET EVENT Title
           if ( $rowT=mysqli_fetch_array(mysqli_query($con,$sqlT)) ) { // style="color: #006699;"
           echo'<center><p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5"><a href="focusedEvent.php?eventID='.$eventID.'">'.$rowT[0].'</a></p></center>';} ?>
            <div class="icons-media-container mbr-white">
            <?php
            $sql = sprintf("SELECT material FROM materials WHERE eventID='$eventID' ");
            $result = mysqli_query($con,$sql);
            while( $row = mysqli_fetch_array($result) ){

            $file = $row['material'];
            $file_src = "upload/files/".$file;
            //   <span class="mbri-layers mbr-iconfont"></span>
            echo'<div class="card col-12 col-md-6 col-lg-3" style="color:black;"><a style="color:black;"href="'.$file_src.'"><div class="icon-block"><span class="mbr-iconfont mbri-pages" style="color:black;"></span></div><h5 class="mbr-fonts-style display-5">'.$file.'</h5></a></div>';
            }?>  
                   
                    </div>
                </div>
            </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
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
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-googleplus socicon" style="font-size: 1px; color: rgb(51, 51, 51);"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-behance socicon" style="color: rgb(79, 73, 67); font-size: 1px;"></span>
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


  <section class="engine"><a href="https://mobiri.se/t">amp template</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
<!--    material script -->
  <section class="engine"><a href="https://mobiri.se/t">amp template</a></section><script src="assets-material/web/assets/jquery/jquery.min.js"></script>
  <script src="assets-material/popper/popper.min.js"></script>
  <script src="assets-material/tether/tether.min.js"></script>
  <script src="assets-material/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets-material/smoothscroll/smooth-scroll.js"></script>
  <script src="assets-material/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets-material/parallax/jarallax.min.js"></script>
  <script src="assets-material/theme/js/script.js"></script>
  
  
</body>
</html>