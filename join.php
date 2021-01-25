<?php  
session_start();
ob_start();
if(empty($_SESSION['id']))
header("location:login.php");
 if(isset($_GET['rid']))
     $rid=$_GET['rid'];

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Patient Page</title>
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
      <script src="js/jquery-3.2.1.min.js"></script>

         <script type="text/javascript">
    $(document).ready(function(){
      
      $('#doc').change(function(){
       var doc1=$(this).val();
       if(doc1){

        $.ajax({
          url:"fillselect.php",
          type:"POST",
          data:{id:doc1},
          success:function(data){
            $('#day').html(data);
             $('#ti').html('<option>select day first </option>');

          }
        });//ajax
      }else{
        $('#day').html('<option>select doctor first </option>');
        $('#ti').html('<option>select day first </option>');
      }
    });//doc select

$('#day').change(function(){
  var day1=$(this).val();
  if(day1){

        $.ajax({
          url:"fillselect.php",
          type:"POST",
          data:{day:day1},
          success:function(data){
            $('#ti').html(data);
            

          }
        });//ajax
      }else{
       
        $('#ti').html('<option>select day first </option>');
      }

});





    });//document




  </script>

  </head>

  <body style="background-color: #9495ee;">
    
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
                <a class="nav-link" href="contact.html"  style="color: blue;font-weight: bold;">Contact</a>
              </li>
                    <li class="nav-item active">
                 
                <a class="nav-link"  style="background-color: #6685ff;color: #fff; font-weight: bold;" href="#"><?php echo $_COOKIE['name']  ?></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div id="login_form" class="well log12 animated bounce">
    <h2 class="text-info animated flash infinite"><center><span class="fa fa-lock"></span> Enter Information</center></h2>
    <hr>
    <form method="POST" action="join.php?rid=<?php echo $_GET['rid']; ?>">
    Medical Status:<br><textarea name="st" style="width: 550px;height: 170px" class="text-info"></textarea>
    <div style="height: 10px;"></div>   
   
   Doctor: <br><select name="doc" id="doc" style="width: 550px; height: 40px;" class="text-info">
    <option value="">select doctor</option>
       <?php  include'conn.php';
        $run=mysqli_query($conn,"select * from doctor where room='".$rid."'") ;
        while($row=mysqli_fetch_array($run))
        {?>
          <option value="<?php echo $row['duid'] ?>"><?php echo $row['docname'] ?></option>

      <?php  }


        ?>
   </select>
    <div style="height: 10px;"></div>  
      Day<br>    <select name="day" id="day" style="width: 550px;height: 40px">
        <option value="">select Day</option>


      </select>
   <div style="height: 10px;"></div>  
      Date & Time:<br> <select class="text-info" name="ti" id="ti" style="width: 550px; height: 40px;">
         <option value="">select Time</option>
       


   </select>
    <div style="height: 60px;"></div>
    <button type="submit" name="join" class="btn btn-primary btn-block d"><span class=""></span> approve</button>
   
    </form>
    <?php  
    if(isset($_GET['rid']))
     $rid=$_GET['rid'];
    $state= isset($_POST['st'])?$_POST['st']:'';
     $docid=isset($_POST['doc'])?$_POST['doc']:'';
      $time=isset($_POST['ti'])?$_POST['ti']:'';
       $day=isset($_POST['day'])?$_POST['day']:'';
       $name=$_COOKIE['name'];
       $pass=$_COOKIE['pass'];
    if(isset($_POST['join'])){
   
     $run= mysqli_query($conn,"insert into pat(pname,ppass,pstatus,docid,time,day,docreport,rid) values(
        '".$name."',
        '".$pass."',
        '".$state."',
        '".$docid."',
        
        '".$time."',
         '".$day."',
          ' ',
           '".$rid."'
       
          
       )");

 
     if(isset($run))
     {
      echo'<script>
alert("add done");
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