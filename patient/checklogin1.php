<?php

session_start();
require '../common/dbconnect.php';
if(!isset($_POST['phy_login']))
{
	header("location:login.php");
	exit();
}
$email=$_POST['email'];
$password=$_POST['password'];

$qry="SELECT * FROM table_physio_reg where email='".$email."' and password='".$password."' and isactive=1";
$rs=mysqli_query($conn,$qry);
if(mysqli_num_rows($rs)>0)
{
	$row=mysqli_fetch_assoc($rs);
	$physioid=$row['physio_id'];
	$_SESSION['physioid']=$physioid;
	if($row['user_type'] == 2)
	{
		header("location:../physio/index.php");
		exit();	
	}
	
	
	
}
else
{
	echo "no record found";
}


?>