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
    
    <title>Home-NJinternatinal Travel</title>

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
     <!-- slider section start -->
     <div class="slider-container">
    <div class="slider"> 
    <div class="arrow l" onclick="prev()">
            <img src="images/l.png" alt="l">
        </div>
        <div class="slide slide-1" >
            <div class="caption">
                 <!-- <h3><?=$inst_info_rows['institute_name_bn']?></h3> -->
                  <h3>NJinternational travel</h3>
                 <p>Best travel agency in the world.</p>
             </div>
        </div>
        <div class="slide slide-2">
            <div class="caption">
            <!-- <h3><?=$inst_info_rows['institute_name_bn']?></h3> -->
                <h3>NJinternational travel</h3>
                 <p>Best travel agency in the world.</p>
             </div>
       </div>
       <div class="slide slide-3">
            <div class="caption">
            <!-- <h3><?=$inst_info_rows['institute_name_bn']?></h3> -->
            <h3>NJinternational travel</h3>
            <p>Best travel agency in the world.</p>
             </div>
       </div>

        <div class="slide slide-4" >
            <div class="caption">
            <!-- <h3><?=$inst_info_rows['institute_name_bn']?></h3> -->
            <h3>NJinternational travel</h3>
                 <p>Best travel agency in the world.</p>
             </div>
        </div>
       <div class="arrow r" onclick="next()">
            <img src="images/r.png" alt="r">
        </div>
    </div>
</div>
     <!-- slider section end -->
      <!-- services-section-start -->
    <div class="content">

    <?php
	         require('services_section.php');
	    ?>
        
      <!-- services-section-end -->

       <!-- team-section-start -->
       <?php
	         require('team_section.php');
	    ?>
       <!-- team-section-end -->

        <!-- video section start-->
        <?php
	         require('video_section.php');
	    ?>
        <!-- video section end-->
         <!-- photo section start -->
          
         <?php
	         require('photo_section.php');
	    ?>
         <!-- photo section end -->
          
          <!-- review section start -->
          <?php
	         require('review_section.php');
	    ?>
         

          <!-- review section end -->
           <!-- bloge section start -->
           <?php
	         require('blog_section.php');
	    ?>

           <!-- bloge section end -->
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