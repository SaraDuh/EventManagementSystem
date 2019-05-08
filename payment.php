<?php
 session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) ) ){ // if not login
header("Location:Login.php");}
else if($_SESSION['user']!='2'){header("Location:Login.php");} // if not attendant
else{ 
$attEmail=$_SESSION['Email'];

if(!isset($_GET['eventID'])){ // if no eventID exist
header("Location:myEvents.php");}

if(isset($_GET['eventID'])){
$eventID=$_GET['eventID'];
include("Conn.php"); // Connection.

$sqlc = sprintf("SELECT eventID FROM reg WHERE eventID='$eventID' AND attEmail='$attEmail'");
$resultc = mysqli_query($con,$sqlc);
$rowc = mysqli_fetch_array($resultc);
if($rowc['eventID']!=$eventID){header("Location:myEvents.php");}



// SAVE uplouded file.
if(isset($_POST['but_upload'])){

 $name = $_FILES['file']['name'];
 $target_dir = "upload/bills/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);
 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");
 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){

  $query=  "UPDATE `reg` SET image_name='$name' WHERE eventID='$eventID' AND attEmail='$attEmail'";

  mysqli_query($con,$query);

  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

   } //  if( in_array )
  }// if(isset($_POST['but_upload']))
 
$sql = sprintf("SELECT image_name FROM reg WHERE eventID= '$eventID' AND attEmail='$attEmail'");
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['image_name'];
$image_src = "upload/bills/".$image;
 
 } // if isset($_GET['eventID'])){
 else {header("Location:myEvents.php");} 
} // else

// mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="ar">
<head>

   <!-- Site made with Mobirise Website Builder v4.8.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-348x219.png" type="image/x-icon">
  <meta name="description" content="Website Creator Description">
  <title>الدفع</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <!-- payment style -->
<link href="https://fonts.googleapis.com/css?family=tajawal" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<style>
body {
/*   background: lightblue; */
  font-family: 'tajawal';
  font-weight: 300;
  line-height: 1.5;
}
</style>
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

              <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="events.php">عرض الدورات</a></div>
      </div>
  </nav>
</section>

<section class="header10 cid-qY2JU7k46e mbr-parallax-background" id="header10-1f">
    <div class="container">

<center style="color:white;">
  <h1>دفع الرسوم</h1>
<!--   <p><h3>هل تريد الدفع الآن عبر التحويل؟</h3></p> -->
  <p><h4>اذا كنت تفضل الدفع نقداً الرجاء الدفع عند الحضور</h4></p>
<!-- 
   <?php echo $attEmail; ?>
 -->
</center>
  
    </div>
</section>

<section class="features7 cid-qY2K95OrIn" id="features7-1h"> 
   <div class="container">
       <div class="row justify-content-center" style="color:black;"> 
          <div class="buttons-ctn">
              
<!--   <input type="file"> -->
  <center>
     <h5>او التحويل إلى الحساب التالي: 34567898765434567</h5><br>
    <h3>الرجاء إرفاق ملف الإيصال</h3>

  </center>

<br><br>
<form method="post" action="" enctype='multipart/form-data'>
  <input type='file' name='file' />
  <input type='submit' value='Save name' name='but_upload'>
</form>
          </div>
       </div>
   </div>
</section><!--  حساب التحويل ~~> -->

<section class="features7 cid-qY2K95OrIn" id="features7-1h"> 
   <div class="container">
       <div class="row justify-content-center"> 
          <div class="buttons-ctn">
      
<?php if($image!=null){ echo "<strong><center><span class='mbri-save' style='font-size:18px'></span> ملف الإيصال اللذي ارفقته تجده بالأسفل</center></strong>"."<br>"."<img src='$image_src'alt='Not uploaded yet'";}?>

          </div>
       </div>
   </div>
</section>

<!-- End -->

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
