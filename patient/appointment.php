<?php 
session_start();
require '../common/dbconnect.php';
if (!isset($_SESSION['uid'])) {
  header("location:login.php");
}

$qry1="SELECT * FROM table_physio_reg where isactive!=2 limit 3";
$rs1=mysqli_query($conn,$qry1);

include("header.php") ?>


<section class="page-title text-center" style="background-image:url(assets/images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>appointment</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="blog-section section style-three pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area style-two">
                    <div class="section-title">
                        <h3>Request <span>Appointment</span></h3>
                    </div>
                    <form name="contact_form" class="default-form contact-form" action="bookappointment.php" method="post" data-parsley-validate="" enctype="multipart/form-data">


                      <input type="hidden" name="phy_id" value="<?php echo $_GET['id'];?>">
                      <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <label>Diagnosis Image : </label>
                                <input type="file" name="image"  required="">
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="booking_date" placeholder="Date" required="" id="datepicker">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                                 <div class="form-group">
                                <label>Select Booking time : </label>
                                <select name="timeslot" class="form-control" id="time">
                                    <option value="8:00 to 9:00">8:00 to 9:00</option>    
                                    <option value="9:00 to 10:00">9:00 to 10:00</option>  
                                    <option value="10:00 to 11:00">10:00 to 11:00</option>
                                    <option value="11:00 to 12:00">11:00 to 12:00</option>    
                                    <option value="12:00 to 1:00">12:00 to 1:00</option>  
                                    <option value="3:00 to 4:00">3:00 to 4:00</option>
                                    <option value="4:00 to 5:00">4:00 to 5:00</option>    
                                    <option value="5:00 to 6:00">5:00 to 6:00</option>  
                                    <option value="6:00 to 7:00">6:00 to 7:00</option>    
                                </select>
                            </div>
                      


                        </div>

                        
                     <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="form-group">
                            <textarea placeholder="Chief Complain" required="" name="chief_complaint"></textarea>
                        </div>
                        <input type="hidden" name="" value="<?php echo $_GET['id'];?>" id="pid">
                        <div class="form-group text-center">
                            <button type="submit" class="btn-style-one" type="submit" name="btn_submit">submit now</button>
                        </div>                            
                    </div>
                </div>
            </form>
        </div>                      
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="appointment-image-holder">
            <figure>
                <img src="assets/images/background/appoinment.jpg" alt="Appointment">
            </figure>
        </div>                       
    </div>
</div>                    
</div>
</section>
<!-- End Contact Section -->

 <section class="team-section section">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our 
                    <span>Physiotherapists</span>
                </h3>
                
            </div>
            <div class="row">

                <?php
                if(mysqli_num_rows($rs1)>0)
                {
                    while($row1=mysqli_fetch_assoc($rs1))
                    {
                        $qrys="SELECT * FROM table_specialization where spec_id = '".$row1['spec_id']."'";
                        $rss=mysqli_query($conn,$qrys);
                        $rows=mysqli_fetch_assoc($rss);

                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <img src="../physio/<?php echo $row1['photo'];?>" alt="doctor" class="img-responsive profileimage" >
                                <div class="contents text-center">
                                    <h4><?php echo $row1['physio_name'];?></h4>
                                    <p><?php echo $rows['spec_name']; ?></p>
                                    <a href="physiodetails.php?selectid=<?php echo $row1['physio_id'];?>" class="btn btn-main">read more</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </section>





    <?php include("footer.php") ?>
    <script type="text/javascript">
        $(document).ready(function()
        {
            
            $("#time").change(function(e)
            {
                var date=$("#datepicker").val();
                // alert(date);
                var time=$("#time").val();
                // alert(time);
                var pid=$('#pid').val();
                // alert(pid);
                var data = {d:date,t:time,id:pid};
                // alert(date);
               e.preventDefault();
                $.ajax({

                    type:"POST",
                    url:"checkavaibility.php",
                    data:data,

                    datatype:"html",
                    success:function(responce){
                        // console.log(responce);
                        // $('#result').html(responce);
                        alert(responce);
                    },
                    error:function(a,b,c){
                        console.log(c);
                        alert();
                    }
                });
            });
           
        });
    </script>



