<?php
 session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) )){
header("Location:Login.php");}
else if($_SESSION['user']!='1'){header("Location:Login.php");}
else{
include("Conn.php"); // Connection.

if(isset($_GET['updated'])){
$updated=$_GET['updated'];
if($updated=="true"){
echo '<script> alert("تم تعديل المعلومات بنجاح");</script>';}
else{ echo '<script> alert("لم يتم تعديل المعلومات !");</script>'; }
}

?>



<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-348x219.png" type="image/x-icon">
  <meta name="description" content="Website Generator Description">
  <title>البحث عن مستخدم</title>
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
      <style>
      .button {    background-color: white; /* Green */
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


</head>
<body onload="counter()">
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
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">قائمة جميع المستخدمين</h2>

      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">البحث</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

	
        <div class="container scroll">
		 <form method="post" action="exportAll.php">
     <input type="submit" name="export" class="button" value="Excel استخراج المعلومات الى ملف " />
    </form>
          <table class="table isSearch" cellspacing="0" id="table">
            <thead>
           <tr class="table-heads ">
                      <th class="head-item mbr-fonts-style display-7"> التعديل</th>                      
					  <th class="head-item mbr-fonts-style display-7"> الحاله الوظيفية</th>
					  <th class="head-item mbr-fonts-style display-7"> التعامل مع العنف</th>					  
					  <th class="head-item mbr-fonts-style display-7">المدينة</th>
					  <th class="head-item mbr-fonts-style display-7">الجنسية</th>					  
					  <th class="head-item mbr-fonts-style display-7">المجال</th>
					  <th class="head-item mbr-fonts-style display-7">الجوال</th>
					  <th class="head-item mbr-fonts-style display-7">الايميل</th>
					  <th class="head-item mbr-fonts-style display-7">الاسم بالانجليزي</th>						  
					  <th class="head-item mbr-fonts-style display-7">الاسم بالعربي</th>					  
		    </tr>
            </thead>
			<?php
	$qry = "SELECT * FROM `attendant` ORDER BY `aName` ASC";
$result=mysqli_query($con, $qry);
while ($row=mysqli_fetch_array($result)){
$aName =$row['aName'];
$eName =$row['eName'];
$attEmail= $row['attEmail'];
$mobile =$row['mobile'];
$gender=$row['gender'];
$specialization =$row['specialization'];
$city =$row['city'];
$nationality =$row['nationality'];
$abuse =$row['abuse'];
$type=$row['type'];
?>
    

                     <tr>
			 
			
			

			 <?php echo' <td  class="body-item mbr-fonts-style display-7" > <form  method="post" action="EditAttProfile.php?attEmail='.$attEmail.'" ><button class="button" type="submit"> تعديل</button> </form> </td>'; ?>
			 

			  <td class="body-item mbr-fonts-style display-7"><?php if($type=='1'){echo "موظف";} else if($type=='2') {echo "غير موظف";} else {echo "طالب";}?></td> 
              <td class="body-item mbr-fonts-style display-7"><?php if($abuse=='0'){echo "لا";} else {echo "نعم";} ?></td>  
              <td class="body-item mbr-fonts-style display-7"><?php echo $city ?></td>              
			  <td class="body-item mbr-fonts-style display-7"><?php echo $nationality ?></td>
			  <td class="body-item mbr-fonts-style display-7"><?php echo $specialization ?></td>			  

              <td class="body-item mbr-fonts-style display-7"><?php echo "0".$mobile ?></td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $attEmail ?></td>              
              <td class="body-item mbr-fonts-style display-7"><?php echo $eName?></td>               
			  <td class="body-item mbr-fonts-style display-7"><a href="AttProfile.php?attEmail=<?php echo $attEmail?>"><?php echo $aName?> </td>			                 
		   </tr> 


  		     <?php
}
}
 mysqli_close($con);
 ?>


          </table>
        </div>

      </div>
    </div>

<div class="container table-info-container"  >

<div class="row info"> <div class="col-md-6"> <div class="dataTables_info mbr-fonts-style display-7">  <span class="infoBefore">المجموع:</span>  <span class="inactive infoRows"></span>     <span class="infoAfter">مستخدمين</span> <span class="infoFilteredBefore">(تصفية من</span>  <span class="inactive infoRows"></span><span class="infoFilteredAfter"> من المستخدمين )</span>    </div>  </div><div class="col-md-6"></div> </div>

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
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>




</body>
</html>
