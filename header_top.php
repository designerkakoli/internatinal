<?php
require_once 'fcti/admin/admin_dbcon.php';
require_once 'fcti/admin/social_link.php';
require_once 'fcti/admin/logo_list.php';
require_once 'fcti/admin/institute_info.php';


?>

<section class="header-mainbar">
	
	<div class="top-row">
		<div class="col">
			<img id="head-icon" width="300" height="80" src="./images/<?=$logo_list_rows['brand_logo']?>" alt="">
		</div>
		<div class="col">
			<div class="col-in-row">
				<div class="col-social">
				<a target="_blank" href="<?=$social_link_rows['facebook'];?>"><i class="fa fa-facebook"></i></a>
				<a target="_blank" href="<?=$social_link_rows['youtube'];?>"><i class="fa fa-youtube"></i></a>
				<a target="_blank" href="<?=$social_link_rows['instagram'];?>"><i class="fa fa-instagram"></i></a>
				<a target="_blank" href="<?=$social_link_rows['linkdin'];?>"><i class="fa fa-linkedin"></i></a>
				<a target="_blank" href="<?=$social_link_rows['twitter'];?>"><i class="fa fa-twitter"></i></a>
				</div>
				<div class="col-login">
						<a href="fcti/index.php" target="blank">Login</a>
				</div>
			</div>
		</div>
	</div>
	</section>