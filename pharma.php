<?php 
 session_start();
 ob_start();
if(empty($_SESSION['id']))
header("location:login.php");

if(isset($_GET['f']))
  $x=$_GET['f'];
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
    <h3 style="color: white;"><center><span class="glyphicon glyphicon-envelope"></span> sending medical report pharmacy</center></h3>
    <hr>
    <form method="POST" action="pharma.php?f=<?php echo $x; ?>">
      <select name="ph" style="width: 100%;height: 40px;">
        <?php 
        include 'conn.php';
        $r=mysqli_query($conn,"select * from pharma");
        while($row=mysqli_fetch_array($r))
        {
          echo '
          <option value="'.$row['name'].'">'.$row['name'].'</option>
          ';
        }



        ?>
      </select><br>
      <label>write the report : </label>
     <textarea class="form-control" name="rep"></textarea><br><br>
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
      <?php    


$rep=(isset($_POST['rep']))?$_POST['rep']:'';
$ph=(isset($_POST['ph']))?$_POST['ph']:'';
  
if(isset($_POST['adddate']))
{
  
  $run=mysqli_query($conn,"insert into repo (report,pharmaname,pname)
    values('".$rep."','".$ph."','".$x."')");
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