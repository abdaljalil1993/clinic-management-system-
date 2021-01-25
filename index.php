<?php 
session_start();
ob_start();

$_SESSION['id']='';

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hospital Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" style="color: #00f;font-weight: bold;" href="index.php"><strong> Hospital management</strong> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
     
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('img/bg_1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>We Care For You</h1>
              <p>our center take care about your health ..we are here for you all the time</p>
            </div>
          </div>
        </div>

      </div>
      <div class="slider-item" style="background-image: url('img/img_thumb_3.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1 class="text-info">We Care For You</h1>
              <p class="text-primary">our center take care about your health ..we are here for you all the time</p>
            </div>
          </div>
        </div>

      </div>

      <div class="slider-item" style="background-image: url('img/img_thumb_4.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>We Provide Health Care Solutions</h1>
              <p>our center take care about your health ..we are here for you all the time</p>
            </div>
          </div>
        </div>
        
      </div>

         <div class="slider-item" style="background-image: url('img/img_thumb_1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>We Care For You</h1>
              <p>our center take care about your health ..we are here for you all the time</p>
            </div>
          </div>
        </div>

      </div>

         <div class="slider-item" style="background-image: url('img/img_thumb_2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>We Care For You</h1>
              <p>our center take care about your health ..we are here for you all the time</p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->

    
    <section class="container home-feature mb-5">
      <div class="row">
        <div class="col-md-4 p-0 one-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-hospital-bed"></span>
            <h2>Patient Services</h2>
            <p>our center take care about your health ..we are here for you all the time</p>
          </div>
         
        </div>
        <div class="col-md-4 p-0 two-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-first-aid-kit"></span>
            <h2>Medical Services</h2>
            <p>medical service from us to you health</p>
          </div>
         
        </div>
        <div class="col-md-4 p-0 three-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-hospital"></span>
            <h2>Amenities</h2>
            <p>Health & Good Service for you and your family</p>
          </div>
          
        </div>
      </div>
    </section>
    <!-- END section -->

    
    <!-- END section -->

    

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
<?php ob_end_flush(); ?>
  </body>
</html>