<?php
session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) ) ){
header("Location:Login.php");}
else if($_SESSION['user']!='1'){header("Location:Login.php");}
else if(!isset($_GET['eventID'])){ header("Location:AdminHome.php");}
else
{  $adminEmail=$_SESSION['Email'];
$eventID=$_GET['eventID'];

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
  <meta name="description" content="Web Site Creator Description">
  <title>إضافةالمرفقات</title>
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
<section class="mbr-section article content1 cid-qY90UQ2iF0" id="content2-22">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-2">
                <blockquote><strong><h3>ملحقات الدورة</h3></strong><span style="font-style: normal;">  </span></blockquote>
                <!--   <input type="file"> -->
                <center>
                <h3>يمكنك إضافة المرفقات التابعة للدورة التدريبية هنا</h3><br>
                <h5>الرجاء الضغط على 'حفظ المرفق' عند إضافة كل مرفق</h5>
                <br><br>
                </center>
            </div>
        </div>
           <center>
             <form method="post" action="" enctype='multipart/form-data'>
<!--                 <label class="form-control-label mbr-fonts-style ">رفع الملفات المطلوبة</label> -->
<!--                  <input onclick="myFunction()" type="button" value="إضافة مرفق" onclick="window.location.href='payment.html'" /> &nbsp; -->
                 <!--     <input type="file"  id="exampleInputFile" aria-describedby="fileHelp" name="file">  -->
                 <div id="addItem"><input type='file' name='file'/></div>
                 <input class="btn btn-primary btn-form display-4" type='submit' value='حفظ المرفق' name='but_upload'><br><br>
             </form>	
           </center>					                             
    </div>
</section>
 
 <?php 
// SAVE uplouded file.
if(isset($_POST['but_upload'])){

 $name = $_FILES['file']['name'];
 $target_dir = "upload/files/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);
 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif","pdf","ppt","doc","docs","docx","xls","xlsx","pptx");
 // Check extension
 
  $qr="SELECT material FROM materials WHERE material='$name' AND eventID='$eventID' ";
    $rss=mysqli_query($con,$qr);
    $row2=mysqli_fetch_array($rss);
    if($row2['material']!=$name){ // if not exist
 
 if( in_array($imageFileType,$extensions_arr) ){

  $query=  "INSERT INTO `materials`(`matID`, `material`, `eventID`) VALUES ( '','$name','$eventID' )";

  if( mysqli_query($con,$query) ){
  echo '<script>alert("تمت إضافة المرفق بنجاح");</script>';
//   echo'<center><div class="mbr-text col-12 col-md-8 mbr-fonts-style display-2"><h5>تمت إضافة المرفق بنجاح</h5><br><br></div></center>';
}
  else {  echo '<script>alert("لم تتم الإضافة. حاول مرة آخرى");</script>';
//   echo'<center><div class="mbr-text col-12 col-md-8 mbr-fonts-style display-2"><h5>لم تتم الإضافة. حاول مرة آخرى</h5><br><br></div></center>'; 
  }

  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
     
    } //  if( in_array )
   } else { echo '<script>alert("المرفق موجود مسبقاً");</script>';
//   echo'<center><div class="mbr-text col-12 col-md-8 mbr-fonts-style display-2"><h5>المرفق موجود مسبقاً</h5><br><br></div></center>'; 
   }

  }// if(isset($_POST['but_upload']))
 
$sql = sprintf("SELECT material FROM materials WHERE eventID='$eventID'");
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$file = $row['material'];
$file_src = "upload/files/".$file;
 
} // else

//  mysqli_close($con);
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
