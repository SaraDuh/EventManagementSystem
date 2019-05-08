<?php 
session_start();
if(!(isset($_SESSION['Email']) && isset($_SESSION['password']) && isset($_SESSION['user'])) ){
$inout="تسجيل الدخول";
}
else{
$inout="تسجيل  الخروج";
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-122x77.png" type="image/x-icon">
  <meta name="description" content="Website Generator Description">
  <title>الصفحة الرئيسية </title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional-home.css" type="text/css">



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
                       <img src="assets/images/logo-348x219.png" alt="" title="" style="height: 3.8rem;">
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
              <li class="nav-item"><li class="nav-item"><a class="nav-link link text-white display-4" href=<?php if($inout=="تسجيل الدخول"){echo "'Login.php'";} else {echo "'Logout.php'";}?><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>&nbsp;<?php echo $inout; ?> &nbsp;</a></li></ul>
              <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="events.php">عرض الدورات</a></div>
              <?php if(isset($_SESSION['user']) && $_SESSION['user']=='1'){ 
               echo'<div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="AdminHome.php">الرئيسية</a></div>';}?>
      </div>
  </nav>
</section>


<section class="engine"></section>

<section class="cid-qTkA127IK8 mbr-fullscreen mbr-parallax-background" id="header2-1">


    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
			  <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style mbr-iconfont display-3"> التسجيل في الدورات التدريبية</h1>

			  <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-7">برنامج الأمان الأسري الوطني</h1>
                <p class="mbr-text align-center pb-3 mbr-fonts-style display-5">
				تسعى إدارة التدريب والتطوير لتوفير أفضل الممارسات باستخدام أدوات حديثة لتقديم الدورات التدريبية لضمان جودة ومعايير الدورات المقدمة  وكذلك سد الفجوة في المجتمع المحلي في مجال التدريب مع قضايا إيذاء الأطفال والعنف الأسري
				</p>
				
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-primary display-4" href="events.php">عرض الدورات</a></div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="features4 cid-qY2lTxXRkr" id="features4-r">




    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">المصداقية</h4>
                        <p class="mbr-text mbr-fonts-style display-4"><br>	استخدام أفضل الأساليب التدريبية في الدورات المقدمة من البرنامج <br>
						<br> </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">الرؤية</h4>
                        <p class="mbr-text mbr-fonts-style display-5"><br><br>مركز تدريب معتمد في مجال العنف الأسري</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">الالتزام</h4>
                        <p class="mbr-text mbr-fonts-style display-5">	توفير فرص التدريب للطلاب الجامعيين والدراسات العليا في إدارات البرنامج لتطوير مهاراتهم وخبراتهم الوظيفية في المستقبل </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="timeline2 cid-qY2dMMC7lu" id="timeline2-b">





    <div class="container align-center">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">برامجنا</h2>
        <h3 class="mbr-section-subtitle pb-5 mbr-fonts-style display-5">&nbsp;</h3>

        <div class="container timelines-container" mbri-timelines="">
            <div class="row timeline-element reverse separline">
                <span class="iconsBackground">
                    <span class="mbri-pages mbr-iconfont"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5"><strong>
                            خط مساندة الطفل</strong></h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-5">
                            خط اتصال مجاني يستقبل كافة الشكاوى المتعلقة بالأطفال دون سن الثامنة عشرة ويقدم للمتصلين المشورة والإحالة للجهات المعنية والمتابعة حسب ما تقتضيه الحال</p>
                     </div>
                </div>
            </div>

            <div class="row timeline-element  separline">
                <span class="iconsBackground">
                    <span class="mbr-iconfont mbri-contact-form"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left ">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5"><strong>السجل الوطني</strong></h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-5">
                            السجل الوطني لحالات إساءة معاملة وإهمال الأطفال في المملكة العربية السعودية بالقطاع الصحي  هو سجل إلكتروني مركزي صمم وطور من قبل فريق تقنية المعلومات والإتصالات في برنامج الأمان الأسري الوطني
                        </p>
                    </div>
                </div>
            </div>

            <div class="row timeline-element reverse">
                <span class="iconsBackground">
                    <span class="mbr-iconfont mbri-edit"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5"><strong>شباب الأمان</strong></h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-5">إيماناً من برنامج الأمان الأسري الوطني في دور الشباب وقدرتهم على خلق وإحداث التغيير الإيجابي في القيم التي قد تؤثر على صحة ورفاهية المجتمع. ورفع حس المسؤولية الاجتماعية من خلال مشاركة الشباب في برامج توعوية بناءة</p>
                    </div>
                </div>
            </div>


















        </div>
    </div>
</section>

<section class="toggle1 cid-qY2kR3k92N" id="toggle1-l">




        <div class="container">
            <div class="media-container-row">
                <div class="col-12 col-md-8">
                    <div class="section-head text-center space30">
                       <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2">
                            الأسئلة الشائعة</h2>
                    </div>
                    <div class="clearfix"></div>
                    <div id="bootstrap-toggle" class="toggle-panel accordionStyles tab-content">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapse1_10" aria-expanded="false" aria-controls="collapse1">
                                    <h4 class="mbr-fonts-style display-5">&nbsp; ما هو برنامج الأمان الأسري الوطني ؟</h4>
                                </a>
                            </div>
                            <div id="collapse1_10" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-5">هو برنامج وطني يهدف لحماية الأسرة من العنف تم إنشاءه بناءً على الأمر السامي رقم 11471/م ب الصادر بتاريخ 16 شوال 1426هـ الموافق 18 نوفمبر 2005م</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapse2_10" aria-expanded="false" aria-controls="collapse2">
                                    <h4 class="mbr-fonts-style display-5">ماهي إدارات برنامج الأمان الأسري الوطني ؟</h4>
                                </a>

                            </div>
                            <div id="collapse2_10" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-5">يشمل البرنامج ككل 7 إدارات رئيسية وهي إدارة التشغيل، و إداراة خط مساندة الطفل، وإدارة التدريب والتطوير، إدارة الخدمات المجتمعية و التوعية ، إدارة المشاريع ، ومركز الأبحاث والتميز، إدارة العلاقات العامة والإعلام</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapse3_10" aria-expanded="false" aria-controls="collapse3">
                                    <h4 class="mbr-fonts-style display-5">ماهي فروع البرنامج ؟</h4>
                                </a>
                            </div>
                            <div id="collapse3_10" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body p-4">
                                    <p class="mbr-fonts-style panel-text display-5">قع المركز الرئيسي لبرنامج الأمان الأسري الوطني بالرياض وتوجد به الإدارة العليا للبرنامج كما يوجد فرعين آخرين للبرنامج في المنطقة الغربية والمنطقة الشرقية .</p>
                                </div>
                            </div>
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
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/theme/js/script-home.js"></script>


</body>
</html>
