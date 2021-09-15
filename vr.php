<?php  session_start(); ?>

<head>
	  <title>View Report</title>
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

	  <style type="text/css">
	  	.vr{
	  		width: 75%;
	  		height: 200px;
	  		background-color: rgba(30,30,230,0.5);
	  		font-family: tahoma;
	  		font-size: 15px;
	  		padding: 8px;
	  		margin: 10px auto;
	  		border:1px solid #fff;
	  		border-radius: 40px;
	  	}

	  </style>
</head>
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
<body style="background-color: #cfcfcf"><div class="container">
				<h2 style="text-align: center; color: rgb(255, 255, 255);">REPORT SECTION</h2>

<?php ob_start();
	include'conn.php';
	$run=mysqli_query($conn,"select * from pat where pname='".$_COOKIE['name']."'and ppass='".$_COOKIE['pass']."'");
  if(mysqli_num_rows($run)>0){
	while($row=mysqli_fetch_array($run))
	{ $rr=mysqli_query($conn,"select * from room where rid='".$row['rid']."'");
$row1=mysqli_fetch_array($rr);
		?>
		
			<div class="vr">
				<h2 style="text-align: center; color: white;" class="animated flash infinite">Clinc Name : <?php echo $row1['rname'];?></h2>

				<p style="color: white;font-size: 21px;font-weight: bold; text-align: center;font-family: tahoma;">Doctor Report : <br><?php if( !empty($row['docreport'])) echo $row['docreport'];
						if($row['docreport']==' '){
							echo'no report';
						}
				?></p>
			</div>
		

	<?php }
}
else{
  echo '<div class="container">
      <div class="adminpage">
         <h1 class="text-center"><i class="fa fa-star"></i> WELCOME Patient <i class="fa fa-star"></i></h1>
      <h2 class="text-white text-center">no report for you yet  </h2>
     
      </div>
     
    </div>';
}
ob_end_flush();
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