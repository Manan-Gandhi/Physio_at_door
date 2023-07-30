<?php
// var_dump($_POST);
session_start();
if(!isset($_SESSION['physioid']))
{
    header("location:../patient/login.php");
    exit();
}
require '../common/dbconnect.php';
// exit();
// var_dump($_GET);
// echo $_GET['state_name'];
if(isset($_POST['btn_tips']))
{
	$date=date('y-m-d');
	$qry="INSERT INTO table_tips_post(physio_id,title,description,treat_id,doi,isactive,dou) values('".$_SESSION['physioid']."','".$_POST['title']."','".$_POST['description']."','".$_POST['treat_id']."','".$date."',1,'".$date."')";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "success";
		header("location:viewtips.php");
		exit();
	}
	else{
		echo "error";
	}
}
if(isset($_GET['deleteid']))
{
	$date=date('y-m-d');
	$qry="UPDATE table_tips_post SET isactive=2 where tips_id='".$_GET['deleteid']."'";
	// echo $qry;
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "successs";
		header("location:viewtips.php");
		exit();
	}
	else
	{
		echo "error";
	}
}
if(isset($_GET['actionid']))
{
	$date=date('y-m-d');
	

	$isactive=$_GET['isactive'];

	if($isactive == 1){

		$qry="UPDATE table_tips_post SET isactive=0,dou='".$date."' where tips_id='".$_GET['actionid']."'";
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewtips.php");
			exit();
		}
	}
	if($isactive == 0)
	{
		$qry="UPDATE table_tips_post SET isactive=1,dou='".$date."' where tips_id='".$_GET['actionid']."'";
	// echo $qry;
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewtips.php");
			exit();
		}
	}

}
?>