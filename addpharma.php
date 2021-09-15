<?php 
 session_start();
 ob_start();
if(empty($_SESSION['id']))
header("location:login.php");


?>
  <head>
    <title>Add Pharmacy</title>
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
  <body style="background-image:url(img/slider-1.jpg); background-size: cover;">
<header role="banner">
  <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
       
          </div>
        </div>
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" style="color: #00f;font-weight: bold;" href="index.php"><strong>  Hospital management</strong> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                <a class="nav-link active" href="doctor.php" style="color: blue;font-weight: bold;">Home</a>
              </li>
     
              <li class="nav-item">
                <a class="nav-link" href="ddate.php" style="color: blue;font-weight: bold;">add dates</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="seepatient.php" style="color: blue;font-weight: bold;">see patient</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="addpharma.php" style="color: blue;font-weight: bold;">add pharmacy</a>
              </li>
           <li class="nav-item">
                <a class="nav-link" href="login.php" style="color: blue;font-weight: bold;">Sign Out</a>
              </li>
                   <li class="nav-item active">
                 
                <a class="nav-link"  style="background-color: #6685ff;color: #fff; font-weight: bold; href="#"><?php echo $_COOKIE['name']  ?></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div id="login_form" class="well log11">
    <h2 style="color: white;"><center><span class="glyphicon glyphicon-lock"></span> Add new pharmacy</center></h2>
    <hr>
    <form method="POST" action="addpharma.php">
     <input type="text" style="width: 540px;height: 40px" placeholder="pharmacy name " name="n"><br><br>
   <input type="text" style="width: 540px;height: 40px" placeholder="pharmacy address " name="ad"><br><br>

   <input type="text" style="width: 540px;height: 40px" placeholder="pharmacy password " name="pass"><br><br>
    <button type="submit" name="adddate" class="btn btn-primary btn-block"><span class=""></span> Save </button>
  
    </form>
    <div style="height: 15px;"></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
      </body>
      <?php    include 'conn.php';


$name=(isset($_POST['n']))?$_POST['n']:'';
  $address=(isset($_POST['ad']))?$_POST['ad']:'';
  $pass=(isset($_POST['pass']))?$_POST['pass']:'';
if(isset($_POST['adddate']))
{
  
  $run=mysqli_query($conn,"insert into pharma (name,address,password)
    values('".$name."','".$address."','$pass')");
      if(isset($run))
      {
        echo'<script>
alert("added successfully");
  </script>';
      }
      else{
             echo'<script>
alert("added failed");
  </script>';
      }


}//btn

ob_end_flush();
?>