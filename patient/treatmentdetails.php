
<?php 
require '../common/dbconnect.php';
$qry="SELECT * FROM table_treatment where treat_id='".$_GET['selectid']."'";
$rs=mysqli_query($conn,$qry);
include 'header.php';
?>


<section class="page-title text-center" style="background-image:url(assets/images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Treatment Details</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Treatment Details</li>
            </ul>
        </div>
    </div>
</section>



<section class="team-section section">
    <div class="container">

     <?php
     if(mysqli_num_rows($rs)>0)
     {
        while($row=mysqli_fetch_assoc($rs))
        {
               $qrys="SELECT * FROM table_tips_post where tips_id = '".$row['tips_id']."'";
                    $rss=mysqli_query($conn,$qrys);
                    $rows=mysqli_fetch_assoc($rss);

            ?>
            <div class="section-title text-center">
                <h1><?php echo $row['treat_name'];?></h1>
                <br>
                
             </div>
         </div>


         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" border-right: 2px solid #f4f4f4;">
                    <div class="team-member" style="margin-left: 262px;width: 385px;">
                     <img src="../admin/<?php echo $row['image'];?>" alt="doctor" class="img-responsive profileimage">
                    </div>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                    <p style="margin-top:10px;margin-right: 100px;"><strong>About <?php echo $row['treat_name']; ?> : </strong><?php echo $row['description']; ?></a></p>
            <p><strong>Tips : </strong> <?php echo $rows['tips_id'];?></p>
            </div>
        </div>
        </div>
         
        <?php
    }
}
?>
</div>
</section>

<?php include 'footer.php';
?>