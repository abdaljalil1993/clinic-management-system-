<?php 
session_start();
ob_start();



?>
<head>
    <title>Patients Management</title>
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
  <body  style="background-image:url(img/slider-2.jpg); background-size: cover;"">
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
                <a class="nav-link active" href="patient.php"  style="color: blue;font-weight: bold;">Home</a>
              </li>
     
              
           
                <li class="nav-item">
                <a class="nav-link" href="login.php"  style="color: blue;font-weight: bold;">Sign Out</a>
              </li>
                  <li class="nav-item">
                <a class="nav-link" href="vr.php"  style="color: blue;font-weight: bold;">View Report</a>
              </li>

               <li class="nav-item">
                <a class="nav-link" href="mymed.php"  style="color: blue;font-weight: bold;">My Medicen</a>
              </li>

               <li class="nav-item">
                <a class="nav-link" href="vm.php"  style="color: blue;font-weight: bold;">View Meetings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html"  style="color: blue;font-weight: bold;">Contact</a>
              </li>
                  <li class="nav-item active">
                 
                <a class="nav-link"  style="background-color: #6685ff;color: #fff; font-weight: bold; href="#"><?php echo $_COOKIE['name']  ?></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
<h2 class="text-center " style="color: lightblue;">Report Management </h2>
<hr>
      <table class="table" border="6" style="margin-top: 10px; color: white;border:solid #fff;">
       
          <th class="bg-info" style="padding: 10px;border:solid #fff;">Patient Name</th>
         
            <th class="bg-info" style="padding: 10px;border:solid #fff;">Medical Report</th>

            <th class="bg-info" style="padding: 10px;border:solid #fff;"> Status</th>

             
             
             
             

                <
              <?php include'conn.php';
              
             
              $run=mysqli_query($conn,"select * from repo where pname='".$_COOKIE['name']."' ");
              while($row=mysqli_fetch_array($run))
              {
                ?>
                <tr style="padding: 10px;border:solid #fff; font-weight: bold;">
                  <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['pname'];  ?></td>
                   <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['report'];  ?></td>
         <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['state'];  ?></td>


        
                       
                </tr>



             <?php }

             
              ?>
            
      </table>
    </div>




        <?php ob_start();
      

        ?>


    </div>
</div>
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