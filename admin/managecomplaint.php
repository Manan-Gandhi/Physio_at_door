<?php
// var_dump($_POST);
require '../common/dbconnect.php';
// exit();
// var_dump($_GET);
// echo $_GET['state_name'];

if(isset($_GET['deleteid']))
{
	$date=date('y-m-d');
	$qry="UPDATE table_complaint SET isactive=2 where comp_id='".$_GET['deleteid']."'";
	// echo $qry;
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "successs";
		header("location:viewComplaint.php");
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

		$qry="UPDATE table_complaint SET isactive=0,dou='".$date."' where comp_id='".$_GET['actionid']."'";
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewComplaint.php");
			exit();
		}
	}
	if($isactive == 0)
	{
		$qry="UPDATE table_complaint SET isactive=1,dou='".$date."' where comp_id='".$_GET['actionid']."'";
	// echo $qry;
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewComplaint.php");
			exit();
		}
	}

}
?>