<!DOCTYPE html>
<html>


<!-- Mirrored from demo.themefisher.com/themefisher/medic/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 22:32:37 GMT -->
<head>
  <meta charset="utf-8">
   <link rel="shortcut icon" type="image/x-icon" href="assets/images/background/favicon1.png">
    <title>Physio At Door-Patient</title>
 
  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="assets/plugins/slick/slick.css">
  <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="assets/css/style.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="assets/css/validation.css">
    <script src="assets/js/validation.js" type="text/javascript" charset="utf-8" async defer></script>
  
  <!--Favicon-->
  <link rel="shortcut icon" href="assets/images/favicon.html" type="image/x-icon">
  <link rel="icon" href="assets/images/favicon.html" type="image/x-icon">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
           
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="home.php">
                              <img src="assets/images/logo1.png" alt="" width="130">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        
<!--                         <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span>+ (88017) - 123 - 4567</span>
                        </li> -->
                          <li class="item">
                            <div>
                              <div class="icon-box">
                                    <i class="fa fa-user"></i>
                              </div>
                              <strong><a href="editProfilepatient.php">
                                    Manage Profile
                              </a></strong>
                              <br>
                            </div>
                              
                        </li>
                  </ul>
                  
                 <!--  <div class="link-btn">
                        <a href="appointment.php" class="btn-style-one">Appointment</a>
                  </div> -->
            </div>
      </div>
</section>
<!--Header Upper-->





  <nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="index.php">Home</a>
                        </li>
                        <li>
                              <a href="about.php">About</a>
                        </li>
                        <li>
                              <a href="treatment.php">Treatment</a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu "  style="background-color: #48bdc5;">
                                    <li >
                                          <a href="tips.php" style="color:black;">Tips</a>
                                    </li>
                                    <li>
                                          <a href="photo_video.php" style="color:black;">Photos/Videos</a>
                                    </li>
                              </ul>
                        </li>
                         <li>
                              <a href="physiolist.php">Physiotherapists</a>
                        </li>
                        
                       
                         <li>
                              <a href="contact.php">Contact</a>
                        </li>
                        <?php
                        if(isset($_SESSION['uid']))
                        {
                         ?> 
                          <li>
                              <a href="logout.php">Logout</a>
                        </li>
                       <?php
                        }
                        else
                        {
                         ?> 
                          <li>
                              <a href="login.php">Login</a>
                        </li>
                       <?php
                        }
                        ?>
                         
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
