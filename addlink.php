<?php 
 session_start();
 ob_start();
if(empty($_SESSION['id']))
header("location:login.php");
$x='';
 if(isset($_GET['f']))
    $x=$_GET['f'];
?>
  <head>
    <title>Doctor Dates</title>
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
  <body style="background-image:url(img/slider-2.jpg); background-size: cover;">
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
    <h2 style="color: white;"><center><span class="glyphicon glyphicon-lock"></span> Add Meeting with Patient</center></h2>
    <hr>
    <form method="POST" action="addlink.php?f=<?php echo $x; ?>">
     
     <input class="form-control" type="text" placeholder="day and time for meeting" name="des"><br><br>

     <input class="form-control" type="text" placeholder="Meeting Link" name="li"><br><br>
    <button type="submit" name="addlink" class="btn btn-primary btn-block"><span class=""></span> Add Meeting Link</button>
  
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


$des=(isset($_POST['des']))?$_POST['des']:'';
  $li=(isset($_POST['li']))?$_POST['li']:'';
 
if(isset($_POST['addlink']))
{
  
  $run=mysqli_query($conn,"insert into links (pid,des,link)values('".$x."','".$des."','".$li."')");
      if(isset($run))
      {
        echo'<script>
alert("add link successfully");
  </script>';
      }
      else{
             echo'<script>
alert("add link  failed");
  </script>';
      }


}//btn

ob_end_flush();
?>