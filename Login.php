<?php 
session_start();
include("Conn.php"); // Connection.


 if(isset($_GET['valid'])){
      echo '<script type="text/javascript">alert("خطأ في اسم المستخدم أو كلمة المرور !")</script>';
    } 
	if(isset($_GET['regTOev'])){
      echo '<script type="text/javascript">alert("الرجاء تسجيل الدخول حتى يتسنى لك الانضمام للدورة !")</script>';
    }
if(isset($_GET['emailex'])){
$emailex=$_GET['emailex'];
if($emailex=="true"){
echo '<script> alert("!البريد الألكتروني موجود مسبقا الرجاء تسجيل الدخول");</script>';}
}

			//here we check if the form fill with information and the type selected and save it in attributes
if (isset($_POST['Email']) && isset($_POST['password'])&& isset($_POST['user'])) 
{
$Email=$_POST['Email'];
$password=$_POST['password'];
$user=$_POST['user'];
  //we check the attribute type if it is 1 we select the information from jobseeker table,2 we select the information from employer table and 3 we select the information from trainingcenter table
if($user==="1")
$my_qry='SELECT * from admin WHERE adminEmail="'.$Email.'" AND password="'.$password.'"'; ////////////////////////////////////////////////////////////
 
if($user==="2")
$my_qry='SELECT * from attendant WHERE attEmail="'.$Email.'" AND password="'.$password.'"'; 
 
   
else
echo "no user";
  
  
	$result = mysqli_query($con,$my_qry);
 //if the query succssful we statr session to save user information for use it in other pages 
 
 
	if ($result) {
//-----------------Start the session---------------------
 session_start();  
  $_SESSION['Email']=$Email;
  $_SESSION['user']=$user;
  $_SESSION['password']=$password;
  // Fetch one and one row
  
 $flag= false;
 $reg=false;
  while ($row=mysqli_fetch_array($result))
  {
if($user==="1")
  $Email=$row['adminEmail'];
else
 if($user==="2")
  $Email=$row['attEmail'];
	 
  $_SESSION['Email']=$Email;
  $_SESSION['user']=$user;
  $_SESSION['password']=$password;
  $flag= true;
  }

	  
   //we check the attribute type if it is 1 the user will go to jobseeker profile page ,2 the user will go to employer profile page and 3 the user will go to trainingcenter profile page
  if($flag){
      if($user==="1")
  header('Location:AdminHome.php');
      if($user==="2")
  header('Location:home.php');

}
  else
    header('Location:Login.php?valid=false');
          
}
}
 mysqli_close($con);
  
      
  
  
?>

<!DOCTYPE html>
<html  >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-348x219.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  <title>تسجيل الدخول</title>
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
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-4" href="Login.php"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>&nbsp;تسجيل الدخول&nbsp;</a></li></ul>

                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="events.php">عرض الدورات</a></div>
        </div>
    </nav>
</section>

<section class="engine"></section><section class="cid-qY8SRAtEBW mbr-fullscreen mbr-parallax-background" id="header15-1y">



    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
<div class="row">
    <div class="mbr-white col-lg-8 col-md-7 content-container">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">مرحباً بك من جديد</h1>
        <p class="mbr-text pb-3 mbr-fonts-style display-5">يمكنك تصفح الدورات المتاحة والانضمام للدورات التي تحوز على اهتمامك</p>
    </div>
    <div class="col-lg-4 col-md-5">
    <div class="form-container">
        <div class="media-container-column" data-form-type="formoid">
            <form class="mbr-form"  action="#" method="post" dir="rtl">

                <div data-for="email">
                    <div class="form-group">
                        <input type="email" class="form-control px-3"  name="Email" data-form-field="email" placeholder="البريد الألكتروني"  id="email-header15-1y" value=""  required>
                    </div>
                </div>
                <div data-for="password">
                    <div class="form-group">
                        <input type="password" class="form-control px-3" name="password" data-form-field="password"  pattern=".{8,}" placeholder="كلمة المرور" id="phone-header15-1y" value="" required>
                    </div>
                </div>
				 <div class="form-group form-control" style="background-color:#f5f5f5;" >    
                <input type="radio" name="user" value="1" required> مشرف&nbsp;
				<input type="radio" name="user" value="2" required> متسخدم<br></div> 
				<p class="mbr-text pb-3 mbr-fonts-style display-5" style="color:white; font-size:18px;"> هل أنت مستخدم جديد؟ <a href="RegistrationForm.php"> سجل الآن </a> </p>

                <center><span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-primary display-4">تسجيل الدخول</button></span><center>
            </form>
        </div>
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
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>


</body>
</html>
