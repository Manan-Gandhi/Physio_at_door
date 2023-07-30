<?php include 'header.php';
?>

<section class="page-title text-center" style="background-image:url(assets/images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Edit Tips</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="home.php">home &nbsp;/</a>
                </li>
                <li>Edit Tips</li>
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
                    <form action="#" class="row" data-parsley-validate="">
                        <!-- name -->
                        <div class="col-md-12">
                            <label>Title:</label>
                            <input type="text" name="name" class="form-control main" placeholder="Title for tips..." required>
                        </div>
                       
                       
                        <!-- message -->
                        <div class="col-md-12">
                            <label>Description:</label>
                            <textarea name="message" rows="10" class="form-control main" placeholder="description" required></textarea>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" type="submit">Save tips</button>
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