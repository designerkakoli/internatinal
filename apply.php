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
                <h1>Job Apply</h1>
                <ul>
                <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'active-page';}?>" href="index">Home</a></li>
                <span> / </span>
                <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='jobs.php'){echo 'active-page';}?>" href="jobs">jobs</a></li>
                </ul>
            </div>
            <div class="wellcome_row">
                
            </div>
            </div>
        <!-- wellcome section end -->
     
        <div class="content">
		<div class="apply-form">
		    <div class="apply_head">
                    <h1>Apply Now</h1>
					<p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit </p>
               

         	</div>
						<div class="contact-content-form-container">
								<div class="contact-content-form-row">
									<div class="main-card-contact-part">
										<div class="sub-card-form">
											<div class="contact-form-box">
											   <label style="color:#e91e63;padding:0px 15px;"></label>
                                                <label style="color:#000000;padding:0px 15px;"></label>

												<form action="contact.php" method="post">
													<div class="form-in-main">
														<div class="input-form-group">
															<div class="input-in-form">
																<div class="input-field-01">
																	<input type="text" class=""  id="" placeholder="Enter your name" name="sender_name" value="">
																	<i class="fa fa-user"></i>
																</div>
																<div class="input-field-01">
																	<input type="tel" class="" id="" placeholder="Enter your mobile" name="mobile" value="">
																	<i class="fa fa-phone"></i>
																</div>
															</div>
														</div>
														<div class="input-form-group">
															<div class="input-in-form">
																<div class="input-field-01">
																	<input type="email" class=""  id="" placeholder="Enter your email" name="email" value="">
																	<i class="fa fa-user"></i>
																</div>
																<div class="input-field-01">
																	<input type="tel" class="" id="" placeholder="Enter your mobile" name="mobile" value="">
																	<i class="fa fa-phone"></i>
																</div>
															</div>
														</div>

														<div class="input-form-group">
															<div class="input-in-form">
																<div class="input-field-01">
																	<input type="email" class="" id="" placeholder="Enter your email" name="email" value="">
																	<i class="fa fa-envelope"></i>
																</div>
																<div class="input-field-01">
																	<input type="text" class="" id="" placeholder="Enter your topic" name="subject" value="">
																	<i class="fa fa-envelope-open-o"></i>
																</div>
															</div>

														</div>
														<div class="input-form-group">
															<div class="input-in-form">
																<div class="input-field-01">
																	<input type="email" class="" id="" placeholder="Enter your email" name="email" value="">
																	<i class="fa fa-envelope"></i>
																</div>
																<div class="input-field-01">
																	<input type="text" class="" id="" placeholder="Enter your topic" name="subject" value="">
																	<i class="fa fa-envelope-open-o"></i>
																</div>
															</div>

														</div>
														<div class="input-form-group">
															<div class="input-in-form">
																<div class="input-field-01">
																	<input type="email" class="" id="" placeholder="Enter your email" name="email" value="">
																	<i class="fa fa-envelope"></i>
																</div>
																<div class="input-field-01">
																	<input type="text" class="" id="" placeholder="Enter your topic" name="subject" value="">
																	<i class="fa fa-envelope-open-o"></i>
																</div>
															</div>

														</div>
														<div class="input-form-group">
															<div class="input-in-form">
																<div class="input-field-01">
																	<input type="email" class="" id="" placeholder="Enter your email" name="email" value="">
																	<i class="fa fa-envelope"></i>
																</div>
																<div class="input-field-01">
																	<input type="text" class="" id="" placeholder="Enter your topic" name="subject" value="">
																	<i class="fa fa-envelope-open-o"></i>
																</div>
															</div>

														</div>

														
														<div class="message-btn">
															<input class="submit-btn" type="submit" value="Apply" name="send_btn">
														</div>
													</div>

														
												</form>
											</div>
										</div>
										
									</div>
							</div>
					</div>

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