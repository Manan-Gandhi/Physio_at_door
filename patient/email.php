<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
 <link rel="shortcut icon" type="image/x-icon" href="assets/images/background/favicon.jpg">
    <title>Physio At Door-Login</title>

  
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
   <link href="assets/css/login.css" rel="stylesheet">
      <link href="assets/css/validation.css" rel="stylesheet">
  <script src="assets/plugins/jquery.js"></script>
<script src="assets/plugins/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="assets/plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="assets/plugins/google-map/gmap.js"></script>

<script src="assets/plugins/validate.js"></script>
<script src="assets/js/validation.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="assets/plugins/wow.js"></script>
<script src="assets/plugins/jquery-ui.js"></script>
<script src="assets/plugins/timePicker.js"></script>
<script src="assets/js/script.js"></script>
  
  <!--Favicon-->
  <link rel="shortcut icon" href="assets/images/favicon.html" type="image/x-icon">
  <link rel="icon" href="assets/images/favicon.html" type="image/x-icon">

  <style type="text/css" media="screen">
      .img
      {
        background-image: url('assets/images/background/physio-logo.jpg');
        width: auto;
        height: 380px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
       /*  box-shadow: 2px 2px 2px #038197; */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16),0 2px 10px rgba(0, 0, 0, 0.12);
        margin-top: 80px;
        /* border: 1px solid black; */
      }
      .change_link
      {
        color: white;
      }
      .to_register
      {
        color: white;
        font-weight: bold;
        text-decoration: underline;
      }
      
  /*   .vl 
    {
      border-right: 1px solid  #48bdc5;
      height: 500px;
      position: absolute;
      left: 100%;
   
      top: 0;
    } */
      
  </style>
</head>
<body>
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1 col-md-offset-3">
                  <form action="answer.php" data-parsley-validate="" method="post">
                    <h3>Enter Your Email</h3>
                    <div class="form-group">
                      <!-- <input type="email" class="form-control" name="email" placeholder="Your Email *" value=""  required="" /> -->
                      <select class="form-control" name="type">
                        <option value="1">Patient</option>
                        <option value="2">Physio</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Your Email *" value=""  required="" />
                    </div>
                  <center>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Check" name="email_btn" />
                    </div></center>
                    
                  </form>
                     
                </div>
                
        </div> 
</body>
</html>