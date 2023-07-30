<?php
require '../common/dbconnect.php';
// exit();

// echo $_GET['state_name'];

if(isset($_POST['u_id']))
{
	$date=date('y-m-d');
	$qry="UPDATE table_patient_reg SET u_fname='".$_POST['u_fname']."',u_lname='".$_POST['u_lname']."',dob='".$_POST['dob']."',age='".$_POST['age']."',gender='".$_POST['gender']."',email='".$_POST['email']."',cont_no='".$_POST['cont_no']."',address='".$_POST['address']."',state_id='".$_POST['state_id']."',city_id='".$_POST['city_id']."',area_id='".$_POST['area_id']."',password='".$_POST['password']."',user_type='".$user_type."',doi='".$date."',dou='".$date."',isactive=1 where u_id='".$_GET['selectid']."'";
	var_dump($_POST);

	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "successs";
		header("location:index.php");
		exit();
	}
	else
	{
		echo "error";
	}
}

?>