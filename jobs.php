<?php
require_once 'fcti/admin/admin_dbcon.php';
require_once 'fcti/admin/social_link.php';
require_once 'fcti/admin/logo_list.php';
require_once 'fcti/admin/institute_info.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



<!-- this link for tittle favicon-->
	<link rel="shortcut icon" href="./images/<?=$logo_list_rows['site_icon']?>" type="image/x-icon">
    <link rel="stylesheet" href="./css/jquery.dataTables.min.css">
	<!--This link is stylesheet-->
	<link rel="stylesheet" type="text/css" href="./css/style.css" media="all" />
   <link rel="stylesheet" href="./css/slider.css">
   <link rel="stylesheet" href="./css/corner-slider.css">
	<!-- gallery_lightbox_cdn -->
	<link rel="stylesheet" type="text/css" href="./css/lightbox.css" media="all" />
	<!--Font Awesome CDN here-->
	<script src="https://use.fontawesome.com/1f84390ee1.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/1f84390ee1.css">

    <!-- jquery datatable style cdn -->
  <link rel="stylesheet" href="./css/jquery.dataTables.css">
    
    <title>Blog-NJinternatinal Travel</title>

</head>

<body>

   <!-- header top section Start-->
	<?php
	 require('header_top.php');
	?>
	<!-- header top section End-->

<?php 
require('navbar.php');
?>
<!-- content part start -->
 <div class="container">
      <div class="main-content-box">
              <!-- wellcome section start -->
              <div class="wellcome_section">
            <div class="wellcome_head">
                <h1>OUR JOBS</h1>
                <ul>
                <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'active-page';}?>" href="index">Home</a></li>
                <span> / </span>
                <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='service.php'){echo 'active-page';}?>" href="services">Services</a></li>
                </ul>
            </div>
            <div class="wellcome_row">
                
            </div>
        </div>
        <!-- wellcome section end -->
     
    <div class="content">
        <!-- jobs section start -->
        <div class="jobs_main">
            <div class="jobs_head">
                <h1>All Jobs </h1>
                <p>Looking for a new job? Or perhaps your first job ever, and you wonder how to get a job </p>
            </div>
                <div class="jobs_row">
                    <div class="col">
                        <div class="imges">
                            <img src="images/images/student.jpg" alt="">
                        </div>
                        <div class="jobs_datals">
                            <h1>Student Visa</h1>
                            <p class="jobs_salary">Salary-$13</p>
                            <p class="job_category">Available Jobs-20</p>
                            <a href="apply.php" class="btn">Apply Now</a>
                        </div>
                       

                    </div>
                    <div class="col">
                        <div class="imges">
                            <img src="images/images/Tourist.jpg" alt="">
                        </div>
                        <div class="jobs_datals">
                            <h1>Tourist Visa</h1>
                            <p class="jobs_salary">Salary-$20</p>
                            <p class="job_category">Available Jobs-30</p>
                            <a href="apply.php" class="btn">Apply Now</a>
                        </div>
                       

                    </div>
                    <div class="col">
                        <div class="imges">
                            <img src="images/images/premium_photo-1681691912442-68c4179c530c.jpeg" alt="">
                        </div>
                        <div class="jobs_datals">
                            <h1>Working Visa</h1>
                            <p class="jobs_salary">Salary-$18</p>
                            <p class="job_category">Available Jobs-25</p>
                            <a href="apply.php" class="btn">Apply Now</a>
                        </div>
                       

                    </div>
                    <div class="col">
                        <div class="imges">
                            <img src="images/images/hotel.jpg" alt="">
                        </div>
                        <div class="jobs_datals">
                            <h1>Hotel Reservation</h1>
                            <p class="jobs_salary">Salary-$19</p>
                            <p class="job_category">Available Jobs-40</p>
                            <a href="apply.php" class="btn">Apply Now</a>
                        </div>
                       

                    </div>
                    <div class="col">
                        <div class="imges">
                            <img src="images/images/helth.jpg" alt="">
                        </div>
                        <div class="jobs_datals">
                            <h1>Health Insurance</h1>
                            <p class="jobs_salary">Salary-$20</p>
                            <p class="job_category">Available Jobs-9</p>
                            <a href="apply.php" class="btn">Apply Now</a>
                        </div>
                       

                    </div>
                    <div class="col">
                        <div class="imges">
                            <img src="images/images/car driver.png" alt="">
                        </div>
                        <div class="jobs_datals">
                            <h1>Pick Up/Drop off</h1>
                            <p class="jobs_salary">Salary-$35</p>
                            <p class="job_category">Available Jobs-23</p>
                            <a href="apply.php" class="btn">Apply Now</a>
                        </div>
                       

                    </div>

                </div>
        </div>
        <!-- jobs section ends -->
      
  

        
           
    </div>
    
</div>
</div>
<!-- content part end -->

	<?php require_once 'footer.php';?>
    <script src="js/lightbox-plus-jquery.js"></script>
  <script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );

  </script>

   <script src="./js/script.js"></script>
</body>

</html>