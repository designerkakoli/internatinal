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
    
    <title>About-NjInternatinal Travel</title>

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
                <h1>OUR ABOUT</h1>
                <ul>
                <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'active-page';}?>" href="index">Home</a></li>
                <span> / </span>
                <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='about.php'){echo 'active-page';}?>" href="about">About</a></li>
                </ul>
            </div>
            <div class="wellcome_row">
                
            </div>
        </div>
        <!-- wellcome section end -->
  
    <div class="content">
    
    </div>
    <div class="about-section">
            <div class="about-row">
                <div class="col">
                    <img src="images/images/travel angcy.jpg" alt="">

                </div>
                <div class="col">
                    <h2>WELCOME TO NJINTERNATIONAL</h2>
                     <p>Assalamualikum, –Ladies and gentlemen, esteemed guests, colleagues, and friends, It is both an honor and a privilege to address you today as the founder of NJ International Ltd, a company built on the core values of integrity, collaboration, and opportunity.When I first envisioned this organization, my primary goal was simple yet powerful, to connect talented individuals with the opportunities they deserve while helping businesses thrive by finding the right people to drive their success. NJ International Ltd was founded on the belief that recruitment is more than just filling positions—it is about creating a bridge between dreams and realities.</p>
                </div>
            </div>
        </div>
        <div class="about-section">
                  <div class="about-row">
                  
                    <div class="col">
                   
                      <h2>The Foundation of NJ International Ltd</h2>
                     
                      <p>Our journey began with a desire to reimagine what recruitment could be. In a world where talent knows no borders, we saw the need to create a platform that transcends boundaries and connects individuals with companies on a global scale. With this vision, NJ International Ltd has become more than just a recruitment agency; it has become a community that nurtures growth, celebrates diversity, and fosters innovation.
                      As a recruiting agency, we operate at the intersection of ambition and opportunity. Whether it’s a young graduate seeking their first job, a skilled professional looking for a new challenge, or a company searching for the perfect addition to their team, we are committed to making those connections seamless, effective, and meaningful.
                      </p>
                   

                    </div>
                    <div class="col">
                      <img src="images/images/mission.png" alt="">
                    </div>
                    
                  </div>
                  <div class="about-section">
            <div class="about-row">
                <div class="col">
                    <img src="images/images/1.jpeg" alt="">

                </div>
                <div class="col">
                    <h2>Our AchievementsL</h2>
                     <p>Since our inception, we have worked with companies across industries and regions, enabling them to build strong, capable teams. Simultaneously, we’ve empowered individuals to advance their careers, achieve their aspirations, and create better lives for themselves and their families.This success is not mine alone. It is the result of the dedication of our team, the trust of our clients, and the courage of candidates who dared to dream big. It is also a testament to the relationships we’ve built and the networks we’ve nurtured over the years.</p>
                </div>
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