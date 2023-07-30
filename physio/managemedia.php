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
if(isset($_POST['btn_media']))
{
	
	$target_dir = "assets/media/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

	$date=date('y-m-d');
	$qry="INSERT INTO table_post_photo_video(physio_id,photo_video,title,description,treat_id,doi,isactive,dou) values('".$_SESSION['physioid']."','".$_FILES["image"]["name"]."','".$_POST['title']."','".$_POST['description']."','".$_POST['treat_id']."','".$date."',1,'".$date."')";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "success";
		header("location:viewmedia.php");
		exit();
	}
	else{
		echo "error";
	}
}
if(isset($_GET['deleteid']))
{
	$date=date('y-m-d');
	$qry="UPDATE table_post_photo_video SET isactive=2 where post_id='".$_GET['deleteid']."'";
	// echo $qry;
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "successs";
		header("location:viewmedia.php");
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
	// $qry="SELECT * FROM table_state where state_id='".$_GET['actionid']."'";
	// $rs=mysqli_query($conn,$qry);
	// $row=mysqli_fetch_assoc($rs);

	$isactive=$_GET['isactive'];

	if($isactive == 1){

		$qry="UPDATE table_post_photo_video SET isactive=0,dou='".$date."' where post_id='".$_GET['actionid']."'";
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewmedia.php");
			exit();
		}
	}
	if($isactive == 0)
	{
		$qry="UPDATE table_post_photo_video SET isactive=1,dou='".$date."' where post_id='".$_GET['actionid']."'";
	// echo $qry;
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewmedia.php");
			exit();
		}
	}

}
?>