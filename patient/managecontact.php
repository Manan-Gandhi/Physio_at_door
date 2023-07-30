<?php
require '../common/dbconnect.php';
if (isset($_POST['btn_contact'])) 
{

   
    $date=date('y-m-d');
  
    $qry="INSERT INTO table_contact(u_name,ph_no,email,message,doi,dou,isactive) values('".$_POST['u_name']."','".$_POST['ph_no']."','".$_POST['email']."','".$_POST['message']."','".$date."','".$date."',1)";
    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
        echo "success";
        header("location:index.php");
        exit();
    }
    else
    {
        echo "error";
    }
}




?>