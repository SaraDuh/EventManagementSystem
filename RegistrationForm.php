<?php
session_start();
if( (isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user'])) ){
header("Location:home.php");}

include("Conn.php"); // Connection.


//set user value to attribute to send them to the database
if (isset($_POST['aName']) && isset($_POST['eName']) && isset($_POST['attEmail']) && isset($_POST['mobile']) && isset($_POST['gender']) && isset($_POST['specialization']) && isset($_POST['city'])&& isset($_POST['nationality']) && isset($_POST['password'])&& isset($_POST['abuse'])&& isset($_POST['type']) ) 
{
$position = $employer = $department= $workTel = $workTrans = $fax = $faxTran = $cardID = $cardDate = NULL;	  
$aName =$_POST['aName'];
$eName =$_POST['eName'];
$attEmail =$_POST['attEmail'];
$mobile =$_POST['mobile'];
$gender =$_POST['gender'];
$specialization =$_POST['specialization'];
$city =$_POST['city'];
$nationality =$_POST['nationality'];
$password =$_POST['password'];
$abuse =$_POST['abuse'];
$type =$_POST['type'];
$cardID =$_POST['cardID'];
$cardDate =$_POST['cardDate'];


if($type==1){
$position =$_POST['position'];
$employer =$_POST['employer'];
$department =$_POST['department'];
$workTel =$_POST['workTel'];
$workTrans =$_POST['workTrans'];
$fax =$_POST['fax'];
$faxTran =$_POST['faxTran'];
}
else if($type==3){
$position =$_POST['position'];
$employer =$_POST['employer'];
	
}





if($specialization==="Other"){
	$specialization =$_POST['other'];
}
if($nationality==="NotSaudi"){
	$nationality =$_POST['otherN'];
}





$sql = "INSERT INTO attendant (aName, eName, attEmail, mobile, gender, specialization, position, employer, department, city, nationality, workTel, workTrans, fax, faxTran, cardID, cardDate, password, abuse, type) VALUES ('$aName', '$eName', '$attEmail', '$mobile', '$gender', '$specialization', '$position','$employer','$department','$city','$nationality','$workTel','$workTrans','$fax','$faxTran','$cardID','$cardDate','$password','$abuse','$type')";

if (mysqli_query($con,$sql)) {
	$user='2';
	$my_qry1='SELECT * from attendant WHERE attEmail="'.$attEmail.'" AND password="'.$password.'"';
	$result = mysqli_query($con,$my_qry1);
	
	
	
	
	if ($result) {
//-----------------Start the session---------------------
 session_start();  
  $_SESSION['Email']=$attEmail;
  $_SESSION['user']=$user;
  $_SESSION['password']=$password;
  // Fetch one and one row
  
 $flag= false;
 $reg=false;
  while ($row=mysqli_fetch_array($result))
  {  
  $attEmail=$row['attEmail'];
  $_SESSION['Email']=$attEmail;
  $_SESSION['user']=$user;
  $_SESSION['password']=$password;
  $flag= true;
  }

	  
  

  if($flag) 
header("Location: myprofile.php");
 
}

}

else {header("Location:Login.php?emailex=true");}


}

mysqli_close($con);
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-348x219.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  <title>التسجيل</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<!--  CSS for Reg -->
  <link rel="stylesheet" href="assets-reg/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets-reg/tether/tether.min.css">
  <link rel="stylesheet" href="assets-reg/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets-reg/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets-reg/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets-reg/dropdown/css/style.css">
  <link rel="stylesheet" href="assets-reg/socicon/css/styles.css">
  <link rel="stylesheet" href="assets-reg/theme/css/style.css">
  <link rel="stylesheet" href="assets-reg/mobirise/css/mbr-additional.css" type="text/css">
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



<section class="engine"></section> 
<section class="mbr-section form1 cid-qY9s4NNvpp" id="form1-3" style="background-color: #f2f2f2;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8"></div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center" style="background-color: white;">
            <div class="media-container-column col-lg-8" >
                    <form class="mbr-form" action="RegistrationForm.php" method="post" dir="rtl" style="text-align:right;" >
					 <center style="padding-bottom:20px; padding-top:40px;" ><h4>المعلومات الشخصية </h4>
					  <h6> لايمكنك تعديلة الرجاء التأكد من كتابة الاسم بشكل صحيح</h6></center>
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="Aname">
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">الاسم الثلاثي بالعربي<span style="color:red;">*</span></label>
                                   <input title="الرجاء ادخال احرف عربية فقط" type="text" id="aName" class="form-control" name="aName"   pattern="[أ-ي\s ء ئ]{1,}"  required />
                                </div>
                            </div>
                              <div class="col-md-4 multi-horizontal" data-for="Ename">
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">الاسم الثلاثي بالانجليزي<span style="color:red;">*</span></label>
                                   <input title="الرجاء ادخال احرف انجليزية فقط" type="text" id="eName" class="form-control" name="eName" pattern="[A-Za-z\s]{1,}" required />
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">الجنسية<span style="color:red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label><input type="radio" id="Saudi" name="nationality" value="سعودي" onclick="SaudiFun()" checked />سعودي/ة </label>							   
								</div>
                            </div>
							<div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label><input type="radio" id="NotSaudi" name="nationality" value="NotSaudi" onclick="NotSaudiFun()"  />غير سعودي/ة </label>								   
								</div>
                            </div> 
                        </div>
						 <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
								<div id="OtherNationality2"></div>
                                </div>      
								<div class="form-group">
								<div id="OtherNationality1"></div>
                                </div>
                            </div>
                         </div>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">الجنس<span style="color:red;">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                  <label><input type="radio"  name="gender" value="أنثى" checked />أنثى</label>							   
								</div>
                            </div>
							    <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label><input type="radio" name="gender" value="ذكر" />ذكر</label>							   
								</div>
                            </div>                    
                        </div>			
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">هل سبق لك التعامل مع ضحايا العنف الأسري؟<span style="color:red;">*</span></label>
                                </div>
                            </div>
                        </div>		
		                <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                <label><input type="radio" id="yesabs" name="abuse" value="1" />نعم</label>						   
								</div>
                            </div>
						   <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                  <label><input type="radio" id="noabs" name="abuse" value="0" checked />لا</label>						   
								</div>                   
							</div>
							<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                 <label class="form-control-label mbr-fonts-style ">المجال<span style="color:red;">*</span></label>
								 <select class="form-control"  name="specialization" id ="combo" onchange="showfield(this.options[this.selectedIndex].value)" >
                                   <option value="اجتماعي">اجتماعي</option>
                                   <option value="نفسي">نفسي</option>
                                   <option value="قانوني">قانوني</option>
                                   <option value="شرعي">شرعي</option>
                                   <option value="قضائي">قضائي</option>
                                   <option value="أمني وتحقيق">أمني وتحقيق</option>
                                   <option value="صحي">صحي</option>
                                   <option value="إعلامي">إعلامي</option>
                                   <option value="تربوي">تربوي</option>
                                   <option value="Other">أخرى</option>
                                </select>
                                   <div id="div1"></div> 
                                </div>
                            </div>
                            </div>
						<center style="padding-bottom:20px; padding-top:20px;"><h4>المعلومات الوظيفية </h4></center>
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
					    <label><input type="radio" id="emp" name="type"  value="1" onclick="NotstuFunction()" />موظف/ة</label>	                             
                            </div>
							<div class="col-md-4 multi-horizontal" >
					    <label><input type="radio" id="Notemp" name="type" value="2" checked onclick="Notemployee()"  />غير موظف/ة</label>	
                            </div>
						<div class="col-md-4 multi-horizontal" >
					    <label><input type="radio" id="student" name="type" value="3"  onclick="stuFunction()" />طالب/ة</label>	
                            </div>
                         </div>
		 		 <div id="jobinfo7"></div> 
				 <div id="jobinfo6"></div>
				<div id="jobinfo1"></div>
				 <div id="jobinfo"></div>  
				 <div id="jobinfo3"></div>
	             <div id="jobinfo2"></div>
				 						 <center style="padding-bottom:20px; padding-top:20px;"><h4>معلومات بطاقة التسجيل بالهيئة السعودية للتخصصات الصحية </h4></center>
						 <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group" style="padding-right:140px;" >
						  <label class="form-control-label mbr-fonts-style ">  هل لديك بطاقة تسجيل بالهيئة السعودية للتخصصات الصحية؟ <input type="checkbox" id="card"  onclick="cardFunction()" /></label>
                                </div>
                            </div>
                         </div>
                    <div id="cardinfo1"> </div>
				  	<div id="cardinfo"> </div>
					<div id="cardinfo3"> </div>
                    <div id="cardinfo2"> </div>
							<center style="padding-bottom:20px; padding-top:20px;"><h4>معلومات الاتصال </h4></center>
						<div class="row row-sm-offset">
                             <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">جوال<span style="color:red;">*</span></label>
                                 <input title="0500000000 :مثال" type="text" id="mobile" class="form-control" name="mobile" pattern="05+[0-9]{8}" required />
                                </div>
                            </div>
							 <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">البريد الألكتروني<span style="color:red;">*</span></label>
                                  <input title="user@mail.com :مثال" type="email" id="email" class="form-control" name="attEmail" required />
                                </div>
                            </div>
							<div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">المدينة<span style="color:red;">*</span></label>
                                  <input type="text" id="city" class="form-control" name="city" pattern="[أ-ي\s ء ئ]{1,}" required />
                                </div>
                            </div>
                         </div>
                         <div class="row row-sm-offset">
                             <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
								<div id="continfo2"></div>
                                  <div id="continfo1"></div>
                                </div>
                            </div>
							 <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
								<div id="continfo4"></div>
                               <div id="continfo3"></div>
                                </div>
                            </div>
                         </div>
                         <div class="row row-sm-offset">
                             <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
								<div id="continfo6"></div>
                                  <div id="continfo5"></div>
                                </div>
                            </div>
							 <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
								<div id="continfo8"></div>
                               <div id="continfo7"></div>
                                </div>
                            </div>
                         </div>
							<center style="padding-bottom:20px; padding-top:20px;"><hr> </hr></center>

						<div class="row row-sm-offset">
                             <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">الرقم السري<span style="color:red;">*</span></label>
								 <input  title="الرجاء ادخال ستة خانات على الأقل " pattern=".{6,}" type="password" id="password" class="form-control"  name="password" onchange="validatePassword()" required />
                                </div>
                            </div>
							 <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                   <label class="form-control-label mbr-fonts-style ">تأكيد الرقم السري<span style="color:red;">*</span></label>
                                 <input  title="الرجاء ادخال ستة خانات على الأقل " pattern=".{6,}" type="password" id="confirm_password" class="form-control"  name="confirm_password" onkeyup="validatePassword()" required />
                                </div>
                            </div>
                         </div>            
                        <span class="input-group-btn">
                            <button href="" type="submit" class="btn btn-primary btn-form display-4">ارسال</button>
                        </span>
                    </form>
					
			<center>	<label class="form-control-label mbr-fonts-style " style="margin-top:20px;" > لديك حساب سابق؟  <a href="Login.php"> تسجيل الدخول</a> </label> </center>
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

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>  
<!--  Scribt for Reg -->
  <script src="assets-reg/web/assets/jquery/jquery.min.js"></script>
  <script src="assets-reg/popper/popper.min.js"></script>
  <script src="assets-reg/tether/tether.min.js"></script>
  <script src="assets-reg/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets-reg/smoothscroll/smooth-scroll.js"></script>
  <script src="assets-reg/dropdown/js/script.min.js"></script>
  <script src="assets-reg/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets-reg/parallax/jarallax.min.js"></script>
  <script src="assets-reg/theme/js/script.js"></script>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})



	function NotstuFunction() {
    var checkBox = document.getElementById("emp");
    if (checkBox.checked == true){ 
	document.getElementById('jobinfo6').innerHTML='<input type="text" id="position" class="form-control" name="position" pattern="[أ-ي\s ء ئ]{1,}" title="الرجاء ادخال احرف عربية فقط" required />';
    document.getElementById('jobinfo7').innerHTML='<label class="form-control-label mbr-fonts-style ">المسمى الوظيفي<span style="color:red;">*</span></label>';
    document.getElementById('jobinfo').innerHTML='<input type="text" id="employer" class="form-control" name="employer" pattern="[أ-ي\s ء ئ]{1,}" title="الرجاء ادخال احرف عربية فقط" required />';
    document.getElementById('jobinfo1').innerHTML='<label class="form-control-label mbr-fonts-style ">جهة العمل<span style="color:red;">*</span></label>';
    document.getElementById('jobinfo2').innerHTML='<input type="text" id="department" class="form-control" name="department" pattern="[أ-ي\s ء ئ]{1,}" title="الرجاء ادخال احرف عربية فقط" required />';
    document.getElementById('jobinfo3').innerHTML='<label class="form-control-label mbr-fonts-style ">القسم<span style="color:red;">*</span></label>';
    document.getElementById('continfo1').innerHTML='<input type="text" id="workTel" class="form-control" name="workTel"   >';
    document.getElementById('continfo2').innerHTML='<label class="form-control-label mbr-fonts-style ">هاتف العمل</label>';
    document.getElementById('continfo3').innerHTML='<input type="text" id="workTrans" class="form-control" name="workTrans"    />';
    document.getElementById('continfo4').innerHTML='<label class="form-control-label mbr-fonts-style ">تحويلة</label>';
    document.getElementById('continfo5').innerHTML='<input type="text" id="fax" class="form-control" name="fax"  />';
    document.getElementById('continfo6').innerHTML='<label class="form-control-label mbr-fonts-style ">الفاكس</label>';
    document.getElementById('continfo7').innerHTML='<input type="text" id="faxTran" class="form-control" name="faxTran" />';
    document.getElementById('continfo8').innerHTML='<label class="form-control-label mbr-fonts-style ">تحويلة</label>';        
        }
  else {
  document.getElementById('jobinfo').innerHTML='';
    document.getElementById('jobinfo1').innerHTML='';
    document.getElementById('jobinfo2').innerHTML='';
    document.getElementById('jobinfo3').innerHTML='';   
	document.getElementById('jobinfo6').innerHTML='';    
	document.getElementById('jobinfo7').innerHTML='';
  document.getElementById('continfo1').innerHTML='';
  document.getElementById('continfo2').innerHTML='';
  document.getElementById('continfo3').innerHTML='';
  document.getElementById('continfo4').innerHTML='';
  document.getElementById('continfo5').innerHTML='';
  document.getElementById('continfo6').innerHTML='';
  document.getElementById('continfo7').innerHTML='';
  document.getElementById('continfo8').innerHTML='';
}}
function stuFunction(){
    var checkBox = document.getElementById("student");
    if (checkBox.checked == true){
    document.getElementById('jobinfo6').innerHTML='<input type="text" id="position" class="form-control" name="position" pattern="[أ-ي\s ء ئ]{1,}" title="الرجاء ادخال احرف عربية فقط" required />';
    document.getElementById('jobinfo7').innerHTML='<label class="form-control-label mbr-fonts-style ">التخصص<span style="color:red;">*</span></label>';
    document.getElementById('jobinfo').innerHTML='<input type="text" id="employer" class="form-control" name="employer" pattern="[أ-ي\s ء ئ]{1,}" title="الرجاء ادخال احرف عربية فقط" required />';
    document.getElementById('jobinfo1').innerHTML='<label class="form-control-label mbr-fonts-style ">جهة الدراسة<span style="color:red;">*</span></label>';
    document.getElementById('jobinfo2').innerHTML='';
    document.getElementById('jobinfo3').innerHTML='';   
  document.getElementById('continfo1').innerHTML='';
  document.getElementById('continfo2').innerHTML='';
  document.getElementById('continfo3').innerHTML='';
  document.getElementById('continfo4').innerHTML='';
  document.getElementById('continfo5').innerHTML='';
  document.getElementById('continfo6').innerHTML='';
  document.getElementById('continfo7').innerHTML='';
  document.getElementById('continfo8').innerHTML='';
}
  else {
  document.getElementById('jobinfo').innerHTML='';
    document.getElementById('jobinfo1').innerHTML='';  
	document.getElementById('jobinfo6').innerHTML='';    
	document.getElementById('jobinfo7').innerHTML='';
	}
	}
function Notemployee(){
    var checkBox = document.getElementById("Notemp");
    if (checkBox.checked == true){
	  document.getElementById('jobinfo').innerHTML='';
    document.getElementById('jobinfo1').innerHTML='';
    document.getElementById('jobinfo2').innerHTML='';
    document.getElementById('jobinfo3').innerHTML='';   
	document.getElementById('jobinfo6').innerHTML='';    
	document.getElementById('jobinfo7').innerHTML='';
  document.getElementById('continfo1').innerHTML='';
  document.getElementById('continfo2').innerHTML='';
  document.getElementById('continfo3').innerHTML='';
  document.getElementById('continfo4').innerHTML='';
  document.getElementById('continfo5').innerHTML='';
  document.getElementById('continfo6').innerHTML='';
  document.getElementById('continfo7').innerHTML='';
  document.getElementById('continfo8').innerHTML='';
}}

function cardFunction() {
    var checkBox = document.getElementById("card");
    if (checkBox.checked == true){
    document.getElementById('cardinfo').innerHTML='<input class="form-control" type="text" id="cardID"  name="cardID" required>';
    document.getElementById('cardinfo1').innerHTML='<label class="form-control-label mbr-fonts-style ">رقم التسجيل للبطاقة<span style="color:red;">*</span></label>';
    document.getElementById('cardinfo2').innerHTML='<input class="form-control" type="date"   id="cardDate"  name="cardDate" required>';
    document.getElementById('cardinfo3').innerHTML='<label class="form-control-label mbr-fonts-style ">تاريخ انتهاء البطاقة<span style="color:red;">*</span></label>';
       }
  else {
  document.getElementById('cardinfo').innerHTML='';
  document.getElementById('cardinfo1').innerHTML='';
  document.getElementById('cardinfo2').innerHTML='';
  document.getElementById('cardinfo3').innerHTML='';
}}
function showfield(name){
  if(name=='Other')document.getElementById('div1').innerHTML=' <label class="form-control-label mbr-fonts-style ">اخرى<span style="color:red;">*</span></label>  <input type="text" name="other" class="form-control" pattern="[أ-ي\s ء ئ]{1,}" title="الرجاء ادخال احرف عربية فقط" required /> ';
  else document.getElementById('div1').innerHTML='';
}
function NotSaudiFun(){
    var radiono = document.getElementById("NotSaudi");
    if (radiono.checked == true){
    document.getElementById('OtherNationality1').innerHTML='<input class="form-control" type="text" id="otherN"  name="otherN" pattern="[أ-ي\s ء ئ]{1,}" title="الرجاء ادخال احرف عربية فقط" required>';
    document.getElementById('OtherNationality2').innerHTML='<label class="form-control-label mbr-fonts-style ">الجنسية:<span style="color:red;">*</span></label>';
	}
}
function SaudiFun(){
    var radioyes = document.getElementById("Saudi");
    if (radioyes.checked == true){
    document.getElementById('OtherNationality1').innerHTML='';
    document.getElementById('OtherNationality2').innerHTML='';
	}
}
function validatePassword(){
var password = document.getElementById("password") , confirm_password = document.getElementById("confirm_password");
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("لايطابق الرقم السري المدخل");
  } else {
    confirm_password.setCustomValidity('');
  }
}
</script>


</body>
</html>
