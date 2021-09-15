<?php include 'conn.php';
ob_start();
session_start();
$_SESSION['id']='';

$name=(isset($_POST['n']))?$_POST['n']:'';
	$pass=(isset($_POST['p']))?$_POST['p']:'';
if(isset($_POST['logbtn']))
{
	
	$run=mysqli_query($conn,"select * from pharma where name='".$name."' and password='$pass'");
			if(mysqli_num_rows($run) > 0)
				{
				$_SESSION['phn']=$name;
				
			header("location:pharmahome.php");
					


				}

else{
	echo'<script>
alert("you are not a member in our web site..");
	</script>';
}



}//btn

ob_end_flush();


?>

  <head>
    <title>Log In</title>
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
  <body style="">
<header role="banner">
  <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="https://www.facebook.com/fadi.debow"><span class="fa fa-facebook"></span></a></li>
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
                <a class="nav-link active" href="index.php"  style="color: blue;font-weight: bold;">Home</a>
              </li>
     
              <li class="nav-item">
                <a class="nav-link" href="#"  style="color: blue;font-weight: bold;">Log In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php"  style="color: blue;font-weight: bold;">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html"  style="color: blue;font-weight: bold;">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>




  	<div id="login_form" class="well log2 animated jackInTheBox">
		<h2 style="color: white;" class=" animated pulse infinite"><center><span class="fa fa-user"></span> Pharmacy Login</center></h2>
		<hr style="background-color: white">
		<form method="POST" action="pharmalogin.php">
		Username <span class="fa fa-user"></span>: <input type="text" style="color: rgb(10,100,200);padding: 9px;border-color: white;" placeholder="enter your username" name="n" class="form-control" required>



      Password <span class="fa fa-user"></span>: <input type="password" style="color: rgb(10,100,200);padding: 9px;border-color: white;" placeholder="enter your Password" name="p" class="form-control" required>
    <br><br>
		

		<button type="submit" name="logbtn" class="btn btn-primary"><span class=""></span> Join Us <span class="fa fa-lock"></span></button>
	
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