 <?php 
require '../common/dbconnect.php';
$qry="SELECT * FROM table_tips_post where isactive!=2";


$rs=mysqli_query($conn,$qry);

 include('header.php');
?>



        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12 ">
                        <h4 class="page-title font-weight-bold">View Tips</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable table-bordered">
                                <thead>

                                    <tr>
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Treatment Name</th>
                                        <th class="text-center">isActive</th>
                                        <th class="text-center">ACTION</th>
                                        <th class="text-center">DELETE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    if(mysqli_num_rows($rs)>0)
                                    {
                                        while($row=mysqli_fetch_assoc($rs))
                                        {

                                               $qrys1="SELECT * FROM table_treatment where treat_id = '".$row['treat_id']."'";
                    $rss1=mysqli_query($conn,$qrys1);
                    $rows1=mysqli_fetch_assoc($rss1);
                                    ?>
                                    <tr>
                                        <td><?php echo $row['tips_id'];?></td>
                                        <td> <?php echo $row['title'];?> </td>

                                        <td><?php echo $row['description'];?></td>
                                        <td><?php echo $rows1['treat_name'];?></td>
                                         <td class="text-center">
                                        <?php 
                                        echo $row['isactive'];
                                        $i=$row['isactive'];
                                        ?>
                                            
                                        </td>
                                        <td class="text-center"><a class="text-center text-success" href="managetips.php?actionid=<?php echo $row['tips_id'];?>&&isactive=<?php echo $row['isactive']?>">
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
                                        <td><a class="dropdown-item text-center text-danger" href="managetips.php?deleteid=<?php echo $row['tips_id'];?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a></td>
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