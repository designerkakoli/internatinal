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
    
    <title>Contact-NJinternatinal Travel</title>

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
                <h1>Our Booking</h1>
                <ul>
                <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'active-page';}?>" href="index">Home</a></li>
                <span> / </span>
                <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='booking.php'){echo 'active-page';}?>" href="contact">Booking</a></li>
                </ul>
            </div>
            <div class="wellcome_row">
                
            </div>
            </div>
        <!-- wellcome section end -->
     
        <div class="content">
			<div class="main_form">
				<div class="form_head">
					<h1>Book Now</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, fugit.</p>
				</div>
					<form action="" class="form">
						<div class="input_box">
							<label for="">Full Name</label>
							<input type="text" placeholder="Enter your name">
						</div>
						<div class="input_box">
							<label for="">Phone Number</label>
							<input type="text" placeholder="Enter your mobile">
						</div>
						<div class="input_box">
							<label for="">Email (Address)</label>
							<input type="text" placeholder="Enter your email">
						</div>
						
						<div class="input_box">
							<label for="">Address</label>
							<input type="text" placeholder="Enter your address">
						</div>
						
						<div class="input_box">
							
						<input class="submit-btn" type="submit" value="submit" name="submit">
						</div>

					</form>

			</div>

		</div>


</div>
<!-- contact form end -->
 <!-- map section start -->

        
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