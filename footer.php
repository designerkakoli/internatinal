<?php
require_once 'fcti/admin/admin_dbcon.php';
require_once 'fcti/admin/social_link.php';
require_once 'fcti/admin/logo_list.php';
require_once 'fcti/admin/institute_info.php';


?>

<!--footer section start-->
<section class="footer-main">
		<div class="footer-top">
				<div class="address-logo">
				<!-- <h1><?=$inst_info_rows['institute_name_bn']?><span>.</span></h1> -->
				 <h1>NJinternational Travel</h1>
				<!-- <p><?=$inst_info_rows['post']?></p> -->
				 <p>Muniri Trade Center,</p>
				 <p>213 (4th Flooa) Purana Paltan</p>
				<!-- <p><?=$inst_info_rows['thana']?></p> -->
				<p><?=$inst_info_rows['district']?></p>
				<p><?=$inst_info_rows['division']?></p>
				<br>
				<!-- <a href="tel:<?=$inst_info_rows['mobile1']?>"><label for="">Mobile:</label><?=$inst_info_rows['mobile1']?></a><br> -->
				<a href="tel:"><label for="">Mobile:</label>+60 11-1162 7582</a><br>
				<!-- <a href="mailto:<?=$inst_info_rows['email']?>"><label for="">Email:</label><?=$inst_info_rows['email']?></a> -->
				<a href="mailto:"><label for="">Email:</label>njinternational@gmail.com</a>
			</div>
			<div class="useful-links">
				<h3>Useful Links</h3>
				<ul>
					<li><i class="fa fa-angle-right"></i><a href="index.php">Home</a></li>
					<li><i class="fa fa-angle-right"></i><a href="about_institute.php">About Bar</a></li>
					<li><i class="fa fa-angle-right"></i><a href="contact.php">Contact</a></li>
					<li><i class="fa fa-angle-right"></i><a target="blank" href="fcti_software/student_dashboard/student_index.php">Customer Login</a></li>
					
				</ul>
			</div>
			<div class="our-menu">
				<h3>Menu</h3>
			<ul>
					<li><i class="fa fa-angle-right"></i><a href="office_application.php">Home</a></li>
					<li><i class="fa fa-angle-right"></i><a href="graphics_design.php">About</a></li>
					<li><i class="fa fa-angle-right"></i><a href="web_development.php">Team</a></li>
					<li><i class="fa fa-angle-right"></i><a href="database_programming.php">Services</a></li>
					<li><i class="fa fa-angle-right"></i><a href="digital_marketing.php">Gallery</a></li>
					<li><i class="fa fa-angle-right"></i><a href="video_editing.php">Blog</a></li>
				</ul>
			</div>
			<div class="our-social">
				<h3>Our Social Networks</h3>
				<p>The official social links <br/> of our organization are given below.<br/> You can follow your needs.<br/> Your skills will improve.</p>
				<a target="blank" href="#"><i class="fa fa-facebook"></i></a>
				<a target="blank" href="#"><i class="fa fa-youtube"></i></a>
				<a target="blank" href="#"><i class="fa fa-instagram"></i></a>
				<a target="blank" href="#"><i class="fa fa-linkedin"></i></a>
				<a target="blank" href="#"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="copyright"><p>&copy; </h1>NJinternational Travel</h1> Copyright ©  ( 2020-<?= date("Y") ?>) | FCTI Inc all rights reserved | Powered by <a target="_blank" href="https://fctisoftware.com">fctisoftware</a></p></div>
		</div>

		<button id="scrollTopBtn"><i class="fa fa-arrow-up"></i></button>
		

   
</section>


	<!--footer section end-->