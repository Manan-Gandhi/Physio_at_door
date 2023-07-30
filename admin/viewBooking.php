 <?php


require '../common/dbconnect.php';
$qry="SELECT * FROM table_appointment where isactive!=2";
// $qry="SELECT * FROM table_appointment INNER JOIN table_patient_reg ON table_appointment.u_id=table_patient_reg.u_id where table_appointment.isactive=1";

$rs=mysqli_query($conn,$qry);
  include('header.php');
?>



        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title font-weight-bold">View Appointment</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Patient Name</th>
                                        <th class="text-center">Physio Name</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Email Id</th>
                                        <th class="text-center">Chief Complain</th>
                                        <th class="text-center">Time slot</th>
                                        <th class="text-center">Booking date</th>
                                        <th class="text-center">Diagnosis Image</th>
                                        <th class="text-center">isActive</th>
                                        <th class="text-center">ACTION</th>

                                        <th class="text-center">DELETE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                        if (mysqli_num_rows($rs)>0) {
                                          
                                            while ($row=mysqli_fetch_assoc($rs)) {

                                                $qrys="SELECT * FROM table_physio_reg where physio_id = '".$row['physio_id']."'";
                    $rss=mysqli_query($conn,$qrys);
                    $rows=mysqli_fetch_assoc($rss);
                                       
                                        $qrys1="SELECT * FROM table_patient_reg where u_id = '".$row['u_id']."'";
                    $rss1=mysqli_query($conn,$qrys1);
                    $rows1=mysqli_fetch_assoc($rss1);
                                       
                                    ?>
                                    <tr>
                                        <td><?php echo $row['booking_id']; ?></td>
                                        <td><?php echo $rows1['u_fname']; ?></td>
                                        <td><?php echo $rows['physio_name']; ?></td>
                                      
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['chief_complaint']; ?> </td>
                                        <td><?php echo $row['timeslot']; ?></td>
                                        <td><?php echo $row['booking_date']; ?></td>
                                        <td><img src="../physio/assets/images/report/<?php echo $row['image'];?>" alt="" height="100" width="100"></td>
                                         <td class="text-center">
                                        <?php 
                                        echo $row['isactive'];
                                        $i=$row['isactive'];
                                        ?>
                                        </td>
                                        <td class="text-center"><a class="text-center text-danger" href="manageappointment.php?actionid=<?php echo $row['booking_id'];?>&&isactive=<?php echo $row['isactive'];?>">
                                        <?php
                                        if($i == 1)
                                        {
                                            echo "ACTIVE";
                                        }
                                        if($i == 0)
                                        {
                                            echo "BLOCK";
                                        }
                                        ?>
                                        </a></td>
                                        <td class="text-center"><a class="text-center text-danger" href="manageappointment.php?deleteid=<?php echo $row['booking_id'];?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a></td>
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
    <?php include('footer.php');
    ?>