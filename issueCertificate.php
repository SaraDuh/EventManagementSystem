<?php
session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) ) ){
header("Location:Login.php");}
else if($_SESSION['user']!='1'){header("Location:Login.php");}
else if(!isset($_GET['eventID'])){ header("Location:AdminHome.php");}
else{ // $adminEmail=$_SESSION['Email'];
$eventID=$_GET['eventID'];

include("Conn.php"); // Connection.

$sqle = "SELECT title FROM event WHERE eventID='$eventID'";
$r=mysqli_query($con, $sqle);
while ($row=mysqli_fetch_array($r)){ //////
$title=$row['title'];}

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
  <title>Table</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
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



<section class="engine"></section>
<section class="section-table cid-qY2NFuioNf" id="table1-1l">



  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">إصدار الشهادات</h2>
<!-- 	  <h6 class="mbr-section-title mbr-fonts-style align-center pb-3 display-7"><?php echo $title ; ?> <h6> -->
      <?php $sqlT = sprintf("SELECT title FROM event WHERE eventID='$eventID'"); // GET EVENT Title
           if ( $rowT=mysqli_fetch_array(mysqli_query($con,$sqlT)) ) { // style="color: #006699;"
           echo'<center><p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5"><a href="focusedEvent.php?eventID='.$eventID.'">'.$rowT[0].'</a></p></center>';} ?>

      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">:البحث</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
            <tr class="table-heads ">



              <th class="head-item mbr-fonts-style display-7">إصدار الشهادة</th>
					  <th class="head-item mbr-fonts-style display-7">الحضور</th>
					  <th class="head-item mbr-fonts-style display-7">التقييم العام</th>
					  <th class="head-item mbr-fonts-style display-7">الاختبار النهائي</th>
					  <th class="head-item mbr-fonts-style display-7">الاختبار الأولي</th>
					  <th class="head-item mbr-fonts-style display-7">الاسم</th>
<!-- 					  <th class="head-item mbr-fonts-style display-7" id="test"></th> -->


					  </tr>
            </thead>
	<?php


/////

$absok='-';
$qry = "SELECT eDays FROM event WHERE eventID='$eventID'"; // event days
$result1=mysqli_query($con, $qry);
while ($row1=mysqli_fetch_array($result1)){ $eDays= $row1['eDays'];}

$qry = "SELECT reg.accepted,  attendant.aName, reg.pre, reg.post, reg.overall FROM reg INNER JOIN attendant ON attendant.attEmail=reg.attEmail AND reg.eventID='$eventID'";
$result=mysqli_query($con, $qry);
while ($row=mysqli_fetch_array($result)){ //////
$accepted=$row['accepted'];
$pre=$row['pre'];
$post= $row['post'];
$overall= $row['overall'];
if($accepted==1 && $pre==1 && $post==1 && $overall==1){ /////
$qry2 = "SELECT * FROM abs WHERE eventID='$eventID'"; // now check abs
$result=mysqli_query($con, $qry2);
while ($row=mysqli_fetch_array($result)){ //////
$d1a= $row['d1a'];  $d1b= $row['d1b'];
$d2a= $row['d2a'];  $d2b= $row['d2b'];
$d3a= $row['d3a'];  $d3b= $row['d3b'];
$d4a= $row['d4a'];  $d4b= $row['d4b'];
$d5a= $row['d5a'];  $d5b= $row['d5b'];
$d6a= $row['d6a'];  $d6b= $row['d6b'];
$d7a= $row['d7a'];  $d7b= $row['d7b'];
$d8a= $row['d8a'];  $d8b= $row['d8b'];


if($eDays==1) {if($d1a=='1' && $d1b=='1') $absok='حاضر';}
if($eDays==2) {if($d1a=='1' && $d1b=='1'&& $d2a=='1' && $d2b=='1') $absok='حاضر';}
if($eDays==3) {if($d1a=='1' && $d1b=='1'&& $d2a=='1' && $d2b=='1'&& $d3a=='1' && $d3b=='1') $absok='حاضر';}
if($eDays==4) {if($d1a=='1' && $d1b=='1'&& $d2a=='1' && $d2b=='1'&& $d3a=='1' && $d3b=='1' && $d4a=='1' && $d4b=='1') $absok='حاضر';}
if($eDays==5) {if($d1a=='1' && $d1b=='1'&& $d2a=='1' && $d2b=='1'&& $d3a=='1' && $d3b=='1' && $d4a=='1' && $d4b=='1'&& $d5a=='1' && $d5b=='1') $absok='حاضر';}
if($eDays==6) {if($d1a=='1' && $d1b=='1'&& $d2a=='1' && $d2b=='1'&& $d3a=='1' && $d3b=='1' && $d4a=='1' && $d4b=='1'&& $d5a=='1' && $d5b=='1' && $d6a=='1' && $d6b=='1') $absok='حاضر';}

if($eDays==7) {if($d1a=='1' && $d1b=='1'&& $d2a=='1' && $d2b=='1'&& $d3a=='1' && $d3b=='1' && $d4a=='1' && $d4b=='1'&& $d5a=='1' && $d5b=='1'  && $d6a=='1' && $d6=='1'&& $d7a=='1' && $d7b=='1') $absok='حاضر';}

if($eDays==8) {if($d1a=='1' && $d1b=='1'&& $d2a=='1' && $d2b=='1'&& $d3a=='1' && $d3b=='1' && $d4a=='1' && $d4b=='1'&& $d5a=='1' && $d5b=='1'  && $d6a=='1' && $d6=='1'&& $d7a=='1' && $d7b=='1' && $d8a=='1' && $d8b=='1') $absok='حاضر';}

 //abs while
//} // done with abs
if($accepted==1 && $pre==1 && $post==1 && $overall==1 && $absok=='حاضر'){
	$pre= 'تم';
	$post= 'تم';
	$overall= 'تم';
$attEmail=$row['attEmail']; 
$qry3 = "SELECT attendant.aName FROM attendant WHERE attEmail='$attEmail'";
$result3=mysqli_query($con, $qry3);
while ($row=mysqli_fetch_array($result3)){ //////
$aName= $row['aName'];}

////


?>
            <tbody>

            <tr>
			<?php echo' <td  class="body-item mbr-fonts-style display-7" > <form  method="post" action="crt.php" >
			
			
			<input type="text" value="'.$eventID.'" name="eventID" hidden>
			<input type="text" value="'.$attEmail.'" name="attEmail" hidden>
			<button type="submit">إصدار شهادة</button> 
			</form> </td>'; ?>
              <td class="body-item mbr-fonts-style display-7"><?php echo $absok ?></td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $overall ?></td>
			  <td class="body-item mbr-fonts-style display-7"><?php echo $post ?></td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $pre ?></td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $aName?></td>
<!-- 			  <td class="body-item mbr-fonts-style display-7" id="test"></td>  -->
		   </tr>
</tbody>


			  <?php
} // print
} //main while 
} // leave 
}
}


 mysqli_close($con);
 ?>


          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
      <p id="demo" style= "color:#f9f9f9; font-size: 1px;"> email: </p>
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
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--
      <script>
      function foo1 (attEmail, eventID) {
            $.ajax({
              url:"regScript.php", //the page containing php script
              type: "POST", //request type
            data : { "emailname" : attEmail , "eventIDname" : eventID },
              success:function(result){
//                alert(result);
             }
           });
       }


       function foo(rc, butc, eventID) {
         var attEmail = document.getElementById(rc).innerHTML; // get email
         document.getElementById("demo").innerHTML = attEmail;
           document.getElementById(butc).innerHTML = "تم القبول";

               foo1(attEmail, eventID);
      }

      </script> -->

      <style>
      button {    background-color: white; /* Green */
          border: none;
          color: grey;
          /* font-weight: bold; */
          border-bottom: 0.5px dotted grey;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          cursor: pointer;
          background-color: #046c4d; /* #006699; */
          border: none;
          color: white;
          padding: 8px 8px;

      }
      </style>

</body>
</html>
