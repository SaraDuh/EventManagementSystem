<?php session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user'])) ){
$inout="تسجيل الدخول";}
else{ $inout="تسجيل  الخروج";}

if(!isset($_GET['eventID'])){
header("Location:events.php");}

if(isset($_GET['eventID'])){
if($_SESSION['user']==2)
$attEmail=$_SESSION['Email'];
$eventID=$_GET['eventID'];

include("Conn.php"); // Connection.



// $sql= "SELECT `eventID`, `title` FROM `event`";
$sql = "SELECT `eventID`, `title`, `description`, `startDate`, `endDate`, `eDays`, `cost`, `status`, `city`, `targetAudi`, `location` FROM `event` WHERE eventID='$eventID'";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result)){
      // echo "ROW 1=". $row[0];
  //$eventID= $row[0];
  $title= $row[1];
  $description= $row[2];
  $startDate= $row[3];
  $endDate= $row[4];
  $eDays= $row[5];
  $cost= $row[6];
  $status= $row[7];
  $city= $row[8];
  $targetAudi= $row[9];
  $location= $row[10];
 

}
    // Free result set
    mysqli_free_result($result);
}}
mysqli_close($con);
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
  <meta name="description" content="Website Creator Description">
  <title> <?php  echo $title?></title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
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


<section class="engine"></section><section class="header10 cid-qY2JU7k46e mbr-parallax-background" id="header10-1f">





    <div class="container">
        <div class="media-container-column mbr-white col-lg-8 col-md-10 ml-auto">
            <h1 class="mbr-section-title align-right mbr-bold pb-3 mbr-fonts-style display-2">
      <?php  echo $title?>
              </h1>

            <p class="mbr-text align-right pb-3 mbr-fonts-style display-4">
         <?php  echo $description?> </p>
		 
		 
		 

		 
            <div class="mbr-section-btn align-right ">
			
			
			
			
			<!--<a class="btn btn-md btn-primary display-4" <?php// $url = "eventreg.php?eventID=" . eventID;  echo " href=\"" . $url . "\"> التسجيل";?>></a> -->
			
			
			
			<?php  
			 if($status=="متاحة") { 
			 if( !(isset($_SESSION['user'])) || ($_SESSION['user']=='2') ){
			 $class="btn btn-md btn-primary display-4";
			$url = "eventreg.php?eventID=" . $eventID;   echo "<a class=\"".$class."\" href=\"" . $url . "\">التسجيل </a>";}}?>
      </div>
			
			</div>
			
			
			
			
<!-- POP UP MSG  -->
        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="features7 cid-qY2K95OrIn" id="features7-1h">




    <div class="container">
        <div class="row justify-content-center">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="media">
                    <div class="card-img pr-2">
                        <span class="mbri-contact-form"></span>

                    </div>
                    <div class="card-box media-body">
                        <h4 class="card-title py-3 mbr-fonts-style display-7">حالة الدورة</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                           <?php  echo $status?> </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="media">
                    <div class="card-img pr-2">
                        <span class="mbr-iconfont mbri-clock"></span>
                    </div>
                    <div class="card-box media-body">
                        <h4 class="card-title py-3 mbr-fonts-style display-7">
                            تاريخ الدورة</h4>
                        <p class="mbr-text mbr-fonts-style display-7"> <?php  echo $startDate?></p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="media">
                    <div class="card-img pr-2">
                        <span class="mbr-iconfont mbri-globe"></span>
                    </div>
                    <div class="media-body card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-7"> المدينة والموقع</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                          <?php  echo $city?> <br><?php  echo $location?></p>
                    </div> 
                </div>                    
            </div>


        </div>
    </div>
</section>

<section class="features7 cid-qY2K9LBiYy" id="features7-1i">

    <div class="container">
        <div class="row justify-content-center">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="media">
                    <div class="card-img pr-2">
                        <span class="mbr-iconfont mbri-users"></span>
                    </div>
                    <div class="card-box media-body">
                        <h4 class="card-title py-3 mbr-fonts-style display-7">
                            الجمهور المستهدف</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                           <?php  echo $targetAudi?> </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="media">
                    <div class="card-img pr-2">
                        <span class="mbr-iconfont mbri-menu"></span>
                    </div>
                    <div class="card-box media-body">
                        <h4 class="card-title py-3 mbr-fonts-style display-7">
                            عدد أيام الدورة</h4>
                        <p class="mbr-text mbr-fonts-style display-7"> <?php  echo $eDays?></p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="media">
                    <div class="card-img pr-2">
                        <span class="mbr-iconfont mbri-cash"></span>
                    </div>
                    <div class="media-body card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-7">
                            الرسوم</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                   <?php  echo  $cost?> SR  </p>
                    </div>
                </div>
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


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>


</body>
</html>
