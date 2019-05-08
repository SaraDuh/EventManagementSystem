<?php
 session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) ) ){
header("Location:Login.php");}
else if($_SESSION['user']!='2'){header("Location:Login.php");}
else{ $attEmail=$_SESSION['Email'];
// echo $_SESSION['user'];

if(isset($_GET['reg'])){
$reg=$_GET['reg'];
if($reg=="false"){
echo '<script> alert("الدورة مسجلة مسبقا");</script>';}
else{ echo '<script> alert("تم التسجيل بنجاح");</script>'; }
}
//////////
if(isset($_GET['updateoverall'])){
$updateoverall=$_GET['updateoverall'];
if($updateoverall=="true"){
echo '<script> alert("تم تسليم التقييم العام بنجاح");</script>';}
else{ echo '<script> alert("لم يتم تسليم التقييم العام");</script>'; }
}
if(isset($_GET['updatepost'])){
$updatepost=$_GET['updatepost'];
if($updatepost=="true"){
echo '<script> alert("تم تسليم الإختبار النهائي بنجاح");</script>';}
else{ echo '<script> alert("لم يتم تسليم الإختبار النهائي بنجاح");</script>'; }
}
if(isset($_GET['updatepre'])){
$updatepre=$_GET['updatepre'];
if($updatepre=="true"){
echo '<script> alert("تم تسليم الإختبار الأولي بنجاح");</script>';}
else{ echo '<script> alert("لم يتم تسليم التقييم الأولي بنجاح");</script>'; }
}
include("Conn.php"); // Connection.


$sqql="SELECT eventID From reg WHERE attEmail='$attEmail'";
$flag=false;
$x=mysqli_query($con,$sqql);
if (mysqli_num_rows($x)==0){
$flag=true;}
// NOevents page


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
  <meta name="description" content="Website Builder Description">
  <title>دوراتي</title>
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
<body onload='NoEvent()'>
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



<?php
// $sql="SELECT eventID, title, description FROM event";
// "SELECT reg.eventID, reg.accepted, reg.attEmail, attendant.aName,attendant.eName,attendant.attEmail,attendant.mobile,attendant.specialization,attendant.position,attendant.employer, attendant.city,attendant.nationality,attendant.abuse FROM reg INNER JOIN attendant ON attendant.attEmail=reg.attEmail";
$sql="SELECT reg.eventID, event.title, event.description, event.endDate FROM reg INNER JOIN event ON reg.eventID=event.eventID WHERE reg.attEmail='$attEmail'";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_assoc($result)){ // printing each section
  $eventID=$row['eventID'];
  $endDate=$row['endDate'];
  $today=date("Y-m-d");
// echo $endDate;
// echo " .... ";
// echo $today;

  // retrieve accepted
$sqql2="SELECT accepted From reg WHERE attEmail='$attEmail' AND eventID='$eventID'"; 
$rs2=mysqli_query($con,$sqql2);
if($row2=mysqli_fetch_row($rs2)){
$accepted=$row2[0];
// echo $accepted;

$print='<section class="header7 cid-qY3BVQgdfx" id="header7-1r">
    <div class="container">
        <div class="media-container-row">
            <div class="media-content align-right">
                <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-2"><a href="focusedEvent.php?eventID='.$eventID.'">'.$row['title'].'</h1>
                <div class="mbr-section-text mbr-white pb-3">
                    <p class="mbr-text mbr-fonts-style display-5">'.$row['description'].'</p>
                </div>
                <div class="mbr-section-btn">';
                if($accepted!=1){
         $print.='<a class="btn btn-md btn-white-outline display-4" id="pre" href="preTest.php" '; 
         $print.='hidden';
         $print.='>التقييم الأولي</a>
                <a class="btn btn-md btn-white-outline display-4" id="material" href="material.php?eventID='.$eventID.'" ';
//                  if($accepted!=1){
         $print.='hidden';
         $print.='>ملحقات الدورة</a>
                <a class="btn btn-md btn-white-outline display-4" id="overall" href="overallForm.php?eventID='.$eventID.'" ';
//                  if($endDate>$today){
         $print.='hidden';
         $print.='>التقييم العام</a>
                <a class="btn btn-md btn-white-outline display-4" id="post" href="postTest.php?eventID='.$eventID.'" ';
//                  if($endDate>$today){
         $print.='hidden';
         $print.='>التقييم النهائي</a>';}
                else if($accepted==1){
         $print.='<a class="btn btn-md btn-white-outline display-4" id="pre" href="preTest.php?eventID='.$eventID.'" '; 
//          $print.='hidden';
         $print.='>التقييم الأولي</a>
                <a class="btn btn-md btn-white-outline display-4" id="material" href="material.php?eventID='.$eventID.'" ';
//          $print.='hidden';
         $print.='>ملحقات الدورة</a>
                <a class="btn btn-md btn-white-outline display-4" id="overall" href="overallForm.php?eventID='.$eventID.'" ';
                 if($endDate>$today){
         $print.='hidden';}
         $print.='>التقييم العام</a>
                <a class="btn btn-md btn-white-outline display-4" id="post" href="postTest.php?eventID='.$eventID.'" ';
                 if($endDate>$today){
         $print.='hidden';}
         $print.='>التقييم النهائي</a>';
         $print.='<a class="btn btn-md btn-white-outline display-4" href="payment.php?';
         $print.='eventID=';
         $print.=$eventID.'"';
                 if($endDate<=$today){
         $print.='hidden';}
         $print.='>الدفع</a>';}

         
         $print.='<br><a class="btn btn-md btn-primary display-4" href="delete.php?';
         $print.='eventID=';
         $print.=$eventID;
         $print.=' ">حذف الدورة&nbsp;</a>';
         $print.='</div></div>
                  <div class="mbr-figure" style="width: 100%;"><image src="https://images.pexels.com/photos/704987/pexels-photo-704987.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" width="1280" height="320" style= " opacity:0.8;"></div></div></div></section>';
echo $print;
// echo"<br>";

}}
  // Free result set
    mysqli_free_result($result);
//     mysqli_close($con);
  }}
  ?>
  

<section class="header7 cid-qY3BVQgdfx" id="NOevents" style="display:block;">
    <div style="padding-bottom:200px;" class="container">
        <div class="media-container-row">
            <div class="media-content align-right">
              <div class="mbr-figure" style="width: 100%;">
              <div class="mbr-section-text mbr-white pb-3">
                   <center><p class="mbr-text mbr-fonts-style display-5">لا يوجد دورات مسجلة</p>
                   <p class="mbr-text mbr-fonts-style display-5">سجل معنا</p>
                   <div class="mbr-section-btn align-center"><a class="btn btn-md btn-primary display-4" href="events.php">عرض الدورات</a></div>
                   </center>
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


  <script>
   
  function NoEvent(){
  var x = '<?php echo $flag; ?>';
  if(x!=1){
  document.getElementById("NOevents").style.display = 'none';}
  }


  
  
  </script>
  

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
