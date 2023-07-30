<?php 




include 'header.php';
?>

<section class="page-title text-center" style="background-image:url(assets/images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Tips</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Tips</li>
            </ul>
        </div>
    </div>
</section>


<section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form action="managetips.php" class="row" data-parsley-validate="" method="post">
                        <!-- name -->

                        <div class="col-md-12">
                            <label>Select Treatment:</label>
                             <select name="treat_id" class="form-control">
                                            <?php
                                            require '../common/dbconnect.php';
                                            $qry="SELECT * FROM table_treatment";
                                            $rs=mysqli_query($conn,$qry);
                                            while($row=mysqli_fetch_assoc($rs))
                                            {
                                             ?>
                                             <option value="<?php echo $row['treat_id'];?>"><?php echo $row['treat_name'];?></option>    
                                            <?php
                                            }
                                            ?>
                                            
                                            
                                        </select>
                        </div>
                        <div class="col-md-12">
                            <label>Title:</label>
                            <input type="text" name="title" class="form-control main" placeholder="Title for tips..." required>
                        </div>
                       
                       
                        <!-- message -->
                        <div class="col-md-12">
                            <label>Description:</label>
                            <textarea name="description" rows="10" class="form-control main" placeholder="description" required></textarea>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" type="submit" name="btn_tips">Upload tips</button>
                        </div>
                    </form>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>


<?php include 'footer.php';
?>