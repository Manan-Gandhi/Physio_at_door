<?php
require '../common/dbconnect.php';

//session_start();
//$id = $_SESSION['uid'];
//$qry="SELECT * FROM table_appointment WHERE isactive!=2";
//$rs=mysqli_query($conn,$qry);


$did = $_GET['acceptid'];

$qry = "SELECT * FROM table_appointment WHERE booking_id=$did";
$rs = mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
$uid = $row['u_id'];

$update = "UPDATE table_appointment SET isactive=1 where booking_id='".$did."'";
$up = mysqli_query($conn,$update);

$qryu = "SELECT * FROM table_patient_reg where u_id='".$uid."'";
$rsu = mysqli_query($conn,$qryu);
$rowu = mysqli_fetch_assoc($rsu);
$email = $rowu['email'];

require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';

	// $name=$_GET['txt_name'];
	// $contact=$_GET['txt_contact'];
	// $msg=$_GET['txt_msg'];

	$body="Your Request has been accepted";

	$sub="Appointment Request";
	$mail = new PHPMailer;

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'physioatdoor1@gmail.com';          // SMTP username
	$mail->Password = '@physio123'; // SMTP password
	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                 // TCP port to connect to

	$mail->setFrom('physioatdoor1@gmail.com', 'physioatdoor');
	$mail->addReplyTo('physioatdoor1@gmail.com', 'physioatdoor');
	$mail->addAddress($email);   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	$mail->isHTML(true);  // Set email format to HTML

	$bodyContent = $body;
	
	$mail->Subject = $sub;
	$mail->Body    = $bodyContent;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
	if(!$mail->send()) {
	    echo '<script>alert("Message could not be sent.");</script>';
	   echo '<script>window.location="appointment.php";</script>';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else 
	{
	    echo '<script>alert("Message has been sent.");</script>';
	    echo '<script>window.location="appointment.php";</script>';
	}



?>
