<?php
session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user']) ) ){
header("Location:Login.php");}
else if($_SESSION['user']!='1'){header("Location:Login.php");}
else if(!isset($_GET['eventID'])){ header("Location:AdminHome.php");}
else{ // $adminEmail=$_SESSION['Email'];
$eventID=$_GET['eventID'];

include("Conn.php"); // Connection.



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-348x219.png" type="image/x-icon">
  <meta name="description" content="Website Generator Description">
  <title> قائمة المسجلين</title>
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
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">قائمة التحضير</h2>
      <?php 
         $sqlT = sprintf("SELECT title FROM event WHERE eventID='$eventID'"); // GET EVENT Title
           if ( $rowT=mysqli_fetch_array(mysqli_query($con,$sqlT)) ) { // style="color: #006699;"
           echo'<center><h2 class="mbr-section-title pb-2 mbr-fonts-style display-5"><a  href="focusedEvent.php?eventID='.$eventID.'">'.$rowT[0].'</a></h2></center>';} ?>

      <div class="table-wrapper" dir='rtl'>
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">

                  <input class="form-control input-sm" disabled="">
				    <label class="searchInfo mbr-fonts-style display-7">:البحث</label>
                </div>
            </div>
          </div>
        </div>

        <?php
              $sql = sprintf("SELECT eDays FROM event
                  WHERE eventID='$eventID'"); // GET EVENT NAME

                  if ($result=mysqli_query($con,$sql)){
                    while ($row=mysqli_fetch_row($result)){
                    $eDays= $row[0];}
//                     echo $eDays;
                  }else echo "ops1";

                  ?>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads " >

                <th class="head-item mbr-fonts-style display-7">الاسم</th>
                <th class="head-item mbr-fonts-style display-7">الايميل</th>
					  <th class="head-item mbr-fonts-style display-7"> الدخول</th>
					  <th class="head-item mbr-fonts-style display-7">الخروج</th>
            <?php if($eDays>=2) echo "<th class='head-item mbr-fonts-style display-7'> الدخول</th>
            					  <th class='head-item mbr-fonts-style display-7'>الخروج</th>"; ?>
            <?php if($eDays>=3) echo "<th class='head-item mbr-fonts-style display-7'> الدخول</th>
                        <th class='head-item mbr-fonts-style display-7'>الخروج</th>"; ?>
            <?php if($eDays>=4) echo "<th class='head-item mbr-fonts-style display-7'> الدخول</th>
                        <th class='head-item mbr-fonts-style display-7'>الخروج</th>"; ?>
             <?php if($eDays>=5) echo "<th class='head-item mbr-fonts-style display-7'> الدخول</th>
                        <th class='head-item mbr-fonts-style display-7'>الخروج</th>"; ?>            
             <?php if($eDays>=6) echo "<th class='head-item mbr-fonts-style display-7'> الدخول</th>
                        <th class='head-item mbr-fonts-style display-7'>الخروج</th>"; ?>            
             <?php if($eDays>=7) echo "<th class='head-item mbr-fonts-style display-7'> الدخول</th>
                        <th class='head-item mbr-fonts-style display-7'>الخروج</th>"; ?>            
             <?php if($eDays>=8) echo "<th class='head-item mbr-fonts-style display-7'> الدخول</th>
                        <th class='head-item mbr-fonts-style display-7'>الخروج</th>"; ?>            
					  </tr>

            </thead>
            <tbody>

			<?php



      $dc=1;
      $rc=0; // email
      $butc=100;
      $enter= 'a';
      $sql= sprintf("SELECT * FROM abs WHERE eventID='$eventID'"); // eventID
      if ($result=mysqli_query($con,$sql)){
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
          $rc++; //sttEmail ID
          $butc++; // increment button ID
          $attEmail= $row['attEmail'];
          $d1a= $row['d1a']; $d1b= $row['d1b'];
          $d2a= $row['d2a']; $d2b= $row['d2b'];
          $d3a= $row['d3a']; $d3b= $row['d3b'];
          $d4a= $row['d4a']; $d4b= $row['d4b'];
          $d5a= $row['d5a']; $d5b= $row['d5b'];
          $d6a= $row['d6a']; $d6b= $row['d6b'];
          $d7a= $row['d7a']; $d7b= $row['d7b'];
          $d8a= $row['d8a']; $d8b= $row['d8b'];

if($d1a=='0') $d1a= 'غير حاضر'; else $d1a= 'حاضر';    if($d1b=='0') $d1b= 'غير حاضر'; else $d1b= 'حاضر';
if($d2a=='0') $d2a= 'غير حاضر'; else $d2a= 'حاضر';     if($d2b=='0') $d2b= 'غير حاضر'; else $d2b= 'حاضر';
if($d3a=='0') $d3a= 'غير حاضر'; else $d3a= 'حاضر';     if($d3b=='0') $d3b= 'غير حاضر'; else $d3b= 'حاضر';
if($d4a=='0') $d4a= 'غير حاضر'; else $d4a= 'حاضر';     if($d4b=='0') $d4b= 'غير حاضر'; else $d4b= 'حاضر';
if($d5a=='0') $d5a= 'غير حاضر'; else $d5a= 'حاضر';     if($d5b=='0') $d5b= 'غير حاضر'; else $d5b= 'حاضر';
if($d6a=='0') $d6a= 'غير حاضر'; else $d6a= 'حاضر';     if($d6b=='0') $d6b= 'غير حاضر'; else $d6b= 'حاضر';
if($d7a=='0') $d7a= 'غير حاضر'; else $d7a= 'حاضر';     if($d7b=='0') $d7b= 'غير حاضر'; else $d7b= 'حاضر';
if($d8a=='0') $d8a= 'غير حاضر'; else $d8a= 'حاضر';     if($d8b=='0') $d8b= 'غير حاضر'; else $d8b= 'حاضر';

          echo "<td class='body-item mbr-fonts-style display-7'>name</td>"; // ATT EMAIL
          echo "<td class='body-item mbr-fonts-style display-7' id='$rc'>$attEmail</td>"; // ATT EMAIL
          
          //<input id='$butc' type='button' value='' onclick=foo('d1a','$rc','$butc')> 
          // <button id='$butc' onclick=foo('d1a','$rc','$butc');> $d1a  </button>
          
          $infun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d1a' onclick=foo('d1a','$rc','$butc')></td>";
      echo $infun; 

$butc++;
      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d1b' onclick=foo('d1b','$rc','$butc')></td>";
      echo $outfun;
$butc++;

      if($eDays>=2){
      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d2a' onclick=foo('d2a','$rc','$butc')></td>";
      echo $outfun;
$butc++;

      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d2b' onclick=foo('d2b','$rc','$butc')></td>";
      echo $outfun;}
      $butc++;

      if($eDays>=3){
      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d3a' onclick=foo('d3a','$rc','$butc')></td>";
      echo $outfun;
      $butc++;

      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d3b' onclick=foo('d3b','$rc','$butc')></td>";
      echo $outfun;}
      $butc++;

      if($eDays>=4){
      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d4a' onclick=foo('d4a','$rc','$butc')></td>";
      echo $outfun;
      $butc++;

      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d4b' onclick=foo('d4b','$rc','$butc')></td>";
      echo $outfun;}
      $butc++;

      if($eDays>=5){
      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d5a' onclick=foo('d5a','$rc','$butc')></td>";
      echo $outfun;
      $butc++;

      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d5b' onclick=foo('d5b','$rc','$butc')></td>";
      echo $outfun;}
      $butc++;

      if($eDays>=6){
      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d6a' onclick=foo('d6a','$rc','$butc')></td>";
      echo $outfun;
      $butc++;

      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d6b' onclick=foo('d6b','$rc','$butc')></td>";
      echo $outfun;}
      $butc++;

      if($eDays>=7){
      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d7a' onclick=foo('d7a','$rc','$butc')></td>";
      echo $outfun;
      $butc++;

      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d7b' onclick=foo('d7b','$rc','$butc')></td>";
      echo $outfun;}
      $butc++;

      if($eDays>=8){
      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d8a' onclick=foo('d8a','$rc','$butc')></td>";
      echo $outfun;
      $butc++;

      $outfun= "<td class='body-item mbr-fonts-style display-7' ><input id='$butc' type='button' value='$d8b' onclick=foo('d8b','$rc','$butc')></td>";
      echo $outfun;}
      $butc++;

                echo "</tr>";
         }
      }else echo "ops";
      echo "</table>";
}
?>
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
        </div> <!-- enteries -->
    </div>

      </div>
    </div>


    <p id="demo" style= "color:#f9f9f9; font-size: 1px;"> </p>
    <p id="demo2" style= "color:#f9f9f9; font-size: 1px;"> </p>
<!--     <p id="demo3"> fffff</p> -->

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

    <script>
    function foo1 (cell, attEmail,eventID,acc) {
          $.ajax({
            url:"absScript.php", //the page containing php script
            type: "POST", //request type
          data : { "emailname" : attEmail , "cellname" : cell, "eventIDname": eventID, "accVal": acc},
            success:function(result){
//              alert(result);
           }
         });
     }


     function foo(cell, rc, butc) {
       var eventID= '<?php echo $eventID; ?>';
       var attEmail = document.getElementById(rc).innerHTML; // get email
    //   document.getElementById("demo").innerHTML = attEmail;
       //  document.getElementById("demo2").innerHTML = cell;
         var btnval=  document.getElementById(butc).value;
//           document.getElementById("demo3").innerHTML = btnval;
        if (btnval=="حاضر"){
          document.getElementById(butc).value="غير حاضر";
          foo1(cell, attEmail,eventID,"0");}
          
          if (btnval=="غير حاضر"){
          document.getElementById(butc).value="حاضر";
          foo1(cell, attEmail,eventID,"1");}

    }

    </script>
<style>
input {    
   /* background-color: white;  Green */
    border: none;
    color: grey;
    /* font-weight: bold; */
    border-bottom: 0.5px dotted grey;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    background-color: #046c4d; //#006699;
    border: none;
    color: white;
    padding: 8px 8px;
    


}
</style>

</body>

</html>


