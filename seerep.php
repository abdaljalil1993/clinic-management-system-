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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body  style="background-color:#fefefe">
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
                <a class="nav-link active" href="pharmahome.php"  style="color: blue;font-weight: bold;">Home</a>
              </li>
     
              <li class="nav-item">
                <a class="nav-link" href="seerep.php"  style="color: blue;font-weight: bold;">my report</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="login.php"  style="color: blue;font-weight: bold;">Sign Out</a>
              </li>
                   
          
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
<h2 class="text-center " style="color: lightblue;">Report Management </h2>
<hr>
      <table id="xx" class="table" border="6" style="margin-top: 10px; color: white;border:solid #fff;">

        <thead>
       
          <th class="bg-info" style="padding: 10px;border:solid #fff;">Patient Name</th>
         
            <th class="bg-info" style="padding: 10px;border:solid #fff;">Medical Report</th>

            <th class="bg-info" style="padding: 10px;border:solid #fff;"> Status</th>

            <th class="bg-info" style="padding: 10px;border:solid #fff;">Change Status</th>
             
             </thead>

             <tbody>
             
             

                <
              <?php include'conn.php';
              
             
              $run=mysqli_query($conn,"select * from repo where pharmaname='".$_SESSION['phn']."' ");
              while($row=mysqli_fetch_array($run))
              {
                ?>
                <tr style="padding: 10px;border:solid #fff; font-weight: bold;">
                  <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['pname'];  ?></td>
                   <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['report'];  ?></td>
         <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;"><?php echo $row['state'];  ?></td>


          <td class="bg-info" style="padding: 10px;border:solid #fff;font-weight: bold;">
            
            <a class="btn btn-primary" href="seerep.php?id=<?php echo $row['id'];?>">Recived</a>
          </td>
                       
                </tr>
<div class="container">
    <div class="modal fade" id="rep_<?php echo $row['pid']; ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <button class="close" data-dismis="modal"></button>
                <h3  style="text-align: center;">write your report pleas<?php echo $row['pid'];?> </h3>
            </div>
            <div class="modal-body">
                <form method="post" action="seepatient.php?pid=<?php echo $row['pid'];?>">
                <textarea name="report" style="width: 440px;height: 100px;"></textarea>
            </div>
            <div class="modal-footer">
                 <button class="close" data-dismis="modal">cancle</button>
                  <button type="submit" name="save" class="btn btn-primary">Save</button>
              </form>
            </div>
        </div>


             <?php }

             if(isset($_GET['id']))
              {$id=$_GET['id'];
           $run1= mysqli_query($conn,"update repo set state='recived' where id='$id'");
            if(isset($run1))
            {
              header("location:seerep.php");
              ob_end_flush();
            }


            }
              ?>
            </tbody>
      </table>
    </div>




        <?php ob_start();
        if(isset($_POST['save']))
        {
          $pid=$_GET['pid'];
          echo' <h1>'.$pid.'</h1>';
          $rep=isset($_POST['report'])?$_POST['report']:'';
          $ru=mysqli_query($conn,"update pat set docreport='".$rep."' where pid='".$pid."'");

              echo ' <meta http-equiv="refresh" content=0.1;URL=seepatient.php>';
            ob_end_flush();

        }

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
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  
  $(document).ready(function(){

    $('#xx').DataTable();

  });

</script>
  </body>