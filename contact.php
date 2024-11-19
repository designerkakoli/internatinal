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
                <h1>Our Contact</h1>
                <ul>
                <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'active-page';}?>" href="index">Home</a></li>
                <span> / </span>
                <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='contact.php'){echo 'active-page';}?>" href="contact">Contact</a></li>
                </ul>
            </div>
            <div class="wellcome_row">
                
            </div>
            </div>
        <!-- wellcome section end -->
     
    <div class="content">
	<div class="contact-content-form">
		    <div class="title-row">
                <div class="title col">
                    <h2>contact</h2>
                </div>
                <div class="title-text col">
                  <p>You can directly visit our office to contact for any need. Moreover, you can call the mobile number to know any information regarding the training. You can also knock on the e-mail or messenger provided on the website.</p>
                </div>

         	</div>
					<div class="contact-content-form-container">
							<div class="contact-content-form-row">
									<div class="main-card-contact-part">
										<div class="sub-card-content">
											<div class="sub-content">
												<div class="sub-content-head">
													<h2>Fill out the form here to send an e-mail</h2>
													<p>You can send a message here. We are ready for any IT support you need. Thank you for contacting us. I wish you well</p>
												</div>
												<div class="sub-contact-details">
													<h2>Contact Details</h2>
													<ol>
														<li><a href="https://goo.gl/maps/vZfV4t8PvAoXD3Fc9" target="blank"><i class="fa fa-map-marker"></i>Muniri Trade Center,213(4th Floor) Purana Paltan,Dhaka-1000.</a></li>
														<li><a href="tel:+8801928248173" target="blank"><i class="fa fa-phone"></i>+60 11-1162 7582</a></li>
														<li><a href="mailto:fctizahid2020@gmail.com" target="blank"><i class="fa fa-envelope"></i>njinternatinal.com</a></li>
														<li><a href="#"><i class="fa fa-clock-o"></i>Sat-Thu(9:00 AM-8:00 PM)</a></li>
													</ol>
												</div>
											</div>

										</div>
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
																	<input type="email" class="" id="" placeholder="Enter your email" name="email" value="">
																	<i class="fa fa-envelope"></i>
																</div>
																<div class="input-field-01">
																	<input type="text" class="" id="" placeholder="Enter your topic" name="subject" value="">
																	<i class="fa fa-envelope-open-o"></i>
																</div>
															</div>

														</div>

														<div class="input-textarea-part">
														<textarea cols="80" rows="6" class="textarea-field " placeholder="write something......." name="message" value=""></textarea>
														</div>
														<div class="send-message-btn">
															<input class="submit-btn" type="submit" value="send message" name="send_btn">
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
	<div class="contact-page-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.0880460929743!2d90.19591891533767!3d23.16698641672793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37556f4ec1367f0f%3A0xe79822d4540848c3!2sFuture%20Computer%20Training%20Institute!5e0!3m2!1sen!2sbd!4v1676713112690!5m2!1sen!2sbd"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				</div>

	
		

			<!-- contact content end -->

		


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