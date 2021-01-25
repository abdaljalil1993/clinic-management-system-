<?php 
 session_start();
ob_start();
if(empty($_SESSION['id']))
header("location:login.php");

include 'conn.php';
if(isset($_GET['docid']))
      $did=$_GET['docid'];

   $rrr= mysqli_query($conn,"select * from doctor where docid='$did' ");

  $row= mysqli_fetch_array($rrr);

?>
<head>
    <title>update Doctor</title>
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
  <body  style="background-image:url(img/slider-2.jpg); background-size: cover;">
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
          <a class="navbar-brand" style="color: #00f;font-weight: bold;" href="index.php"><strong> Hospital management</strong> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="admin.php">Home</a>
              </li>
     
              <li class="nav-item">
                <a class="nav-link" href="dm.php"> Doctors</a>
              </li>
                   <li class="nav-item">
                <a class="nav-link" href="adddoc.php"> Add Doctor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rm.php"> Clinc</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addclinc.php">Add Clinc</a>
              </li>
             <li class="nav-item">
                <a class="nav-link" href="pm.php"> Patients</a>
              </li>

               <li class="nav-item">
                <a class="nav-link" href="login.php">Sign Out</a>
              </li>
                  <li class="nav-item active">
                 
                <a class="nav-link"  style="background-color: #6685ff;color: #fff; font-weight: bold; href="#"><?php echo $_COOKIE['name']  ?></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div id="login_form" class="well log1">
    <h2  style="color: white;font-family: verdana"><center><span class="glyphicon glyphicon-lock"></span> Doctor Information</center></h2>
    <hr>
    <form method="POST" action="updatedoc.php?docid=<?php echo $did;?>" enctype="multipart/form-data">
    Doctor name: <input type="text" value="<?php echo $row['docname']; ?>" name="n" class="form-control" required>

    <div style="height: 20px;"></div>   
    Doctor Password: <input type="password"value="<?php echo $row['docpass']; ?>" name="p" class="form-control" required>
    <div style="height: 20px;"></div> 
     Doctor section: <input type="text" value="<?php echo $row['docsection']; ?>" name="s" class="form-control" required> <br>
      Doctor clinc:<br> <select name="room" style="width: 540px;height: 40px;">
        <?php 
        $run=mysqli_query($conn,"select * from room") ;
        while($row=mysqli_fetch_array($run))
        {?>
          <option value="<?php echo $row['rid'] ?>"><?php echo $row['rname'] ?></option>

      <?php  }


        ?>


      </select>
      <br>
      <div style="height: 60px;"></div>
      Add Picture : 
    <div class="row">
     
    <input type="file" style="width: 300px;" name="img" > 
   </div>
    <div style="height: 60px;"></div>
    <div class="row">
      <div class="col-md-3"></div>
    <button type="submit" style="width: 300px;" name="adddoc" class="btn btn-primary"><span class=""></span> Edit doctor</button>
   </div>
    </form>
    <?php
    

    $name=(isset($_POST['n']))?$_POST['n']:'';
    $pass=(isset($_POST['p']))?$_POST['p']:'';
    $section=(isset($_POST['s']))?$_POST['s']:'';
    $room=(isset($_POST['room']))?$_POST['room']:'';
    $img=isset($_FILES['img']['name'])?$_FILES['img']['name']:'';
    $img_tmp=isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:'';
    move_uploaded_file($img_tmp, "img/$img");
    if(isset($_POST['adddoc']))
    {    

    

     $run1=mysqli_query($conn,"update doctor set docname='$name',docsection='$section',docpass='$pass',room='$room',img='$img' where docid='$did'");

 
     if(isset($run1))
     {
      echo'<script>
alert("edite done");
      </script>';
     }

    }

    ?>
  </div>
  <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
<?php ob_end_flush(); ?>