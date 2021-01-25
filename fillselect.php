<?php include'conn.php';

if(isset($_POST['id']) && !empty($_POST['id']))
{$run=mysqli_query($conn,"select * from dates where did='".$_POST['id']."'");

$co=mysqli_num_rows($run);
if($co > 0)
{ 
	echo'<option value="">select day</option>';
	while($row=mysqli_fetch_array($run))
	{
		echo'<option value="'.$row['day'].'">'.$row['day'].'</option>';
	}
}
else{
	echo'<option value="">doctor didnt has a time table</option>';
}

}

if(isset($_POST['day']) && !empty($_POST['day']))
{

$run=mysqli_query($conn,"select * from dates where day='".$_POST['day']."'");

$co=mysqli_num_rows($run);
if($co > 0)
{
	echo'<option value="">Select Time</option>';
	while($row=mysqli_fetch_array($run))
	{
		echo'<option value="'.$row['time'].'">'.$row['time'].'</option>';
	}
}
else{
	echo'<option value="">doctor did not have a time today</option>';
}


}




?>