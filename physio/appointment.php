<?php 
require '../common/dbconnect.php';
$qryn="UPDATE table_appointment SET notify=0";
$rsn=mysqli_query($conn,$qryn);
// $qry="SELECT * FROM table_appointment WHERE physio_id=13";


include 'header.php';
?>

<section class="page-title text-center" style="background-image:url(assets/images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Appointment</li>
            </ul>
        </div>
    </div>
</section>


<section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">
            
            <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable table-bordered">
                                <thead>
                                    <tr>
                                        
                                        <th class="text-center">Patient Name</th>
                                        <th class="text-center">Chief Complaint</th>
                                        <th class="text-center">Time slot</th>
                                        <th class="text-center">Booking date</th>
                                        <th class="text-center">Diagnosis Photo</th>
                                        <th class="text-center">Approve</th>
                                        <th class="text-center">DisApprove</th>
                                          
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                     $qry="SELECT * FROM table_appointment WHERE isactive=0";
// $qry="SELECT * FROM table_appointment INNER JOIN table_patient_reg ON table_appointment.u_id=table_patient_reg.u_id where table_appointment.isactive=1";

                                        $rs=mysqli_query($conn,$qry);

                                        if (mysqli_num_rows($rs)>0) {
                                          
                                            while ($row=mysqli_fetch_assoc($rs)) {
                                       
                    //                     $qrys1="SELECT * FROM table_patient_reg where u_id = '".$row['u_id']."'";
                    // $rss1=mysqli_query($conn,$qrys1);
                    // $rows1=mysqli_fetch_assoc($rss1);
                                                //echo "physio_id".$row[0];

                                       
                                    ?>
                                    <tr>
                                        
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['chief_complaint']; ?></td>
                                        <td class="text-center"><?php echo $row['timeslot']; ?></td>
                                        <td class="text-center"><?php echo $row['booking_date']; ?></td>
                                        <td class="text-center" style="width: 119px;"><img src="../physio/assets/images/report/<?php echo $row['image'];?>" alt="" height="100" width="100"></td>
                                         <td class="text-center"><a class="text-center text-danger" href="accept.php?acceptid=<?php echo $row['booking_id'];?>"><i class="fa fa-check-square-o"></i>Approve</a></td>
                                        <td class="text-center"><a class="text-center text-primary" href="reject.php?rejectid=<?php echo $row['booking_id'];?>"><i class="fa fa-times-circle"></i>Disapprove</a></td>
                                       
                                    </tr>
                                     <?php


                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>


<?php include 'footer.php';
?>