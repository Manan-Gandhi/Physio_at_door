<?php
session_start();
require '../common/dbconnect.php';
if(!isset($_POST['a_login']))
{
	//header("location:login.php");
	echo "error";
	//exit();
}
$email=$_POST['email'];
$password=$_POST['password'];

$qry="SELECT * FROM table_admin where email='".$email."' and password='".$password."' and isactive=1";
// echo $qry;
$rs=mysqli_query($conn,$qry);
if(mysqli_num_rows($rs)>0)
{
	$row=mysqli_fetch_assoc($rs);
	$id=$row['id'];
	$_SESSION['id']=$id;
	if($row['user_type'] == 3)
	{
		header("location:dashboard.php");
		exit();	
	}
}
else
{
	echo "no record found";
}



?>