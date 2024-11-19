<?php
require_once 'fcti/admin/admin_dbcon.php';
require_once 'fcti/admin/logo_list.php';



?>
<!-- Section: Header -->
<header class="header" >
      <section class="container-menu-top">
         <div class="wrapper">
               <div class="logo-part">
                  <div class="logo-img" id="main-logo"><img width="300" height="80" src="./images/<?=$logo_list_rows['brand_logo']?>" alt=""></div>
                 
                
               </div>
           
            <button type="button" class="burger" id="burger">
               <span class="burger-line"></span>
               <span class="burger-line"></span>
               <span class="burger-line"></span>
               <span class="burger-line"></span>
            </button>
            <span class="overlay" id="overlay"></span>
            <nav class="navbar" id="navbar">
               <button type="button" class="closed-menu" >
                  <i id="closed-menu"  class="fa fa-times" ></i>
               </button>
               <ul class="menu">
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'active-page';}?>" href="index">Home</a></li>
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='about.php'){echo 'active-page';}?>" href="about">About</a></li>
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='team.php'){echo 'active-page';}?>" href="team">Team</a></li>
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='services.php'){echo 'active-page';}?>" href="services">Services</a></li>
               
              

                  <li class="menu-item menu-item-child">
                     <a href="#" data-toggle="sub-menu">Gallery<i class="expand"></i></a>
                     <ul class="sub-menu">
                        <li class="menu-item"><a href="index.php?page=active_mem"></a></li>
                        <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='photo.php'){echo 'active-page';}?>" href="photo" >Photo Gallery</a></li>
                        <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='video.php'){echo 'active-page';}?>" href="video">Vedio Gallery</a></li>
                      
                     </ul>
                  </li>
                 
                  
                  
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='blog.php'){echo 'active-page';}?>" href="blog">Blog</a></li>
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='jobs.php'){echo 'active-page';}?>" href="jobs">Jobs</a></li>
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='contact.php'){echo 'active-page';}?>" href="contact">Contact</a></li>
                  <li class="menu-item"><a class="<?php if(basename($_SERVER['PHP_SELF'])=='booking.php'){echo 'active-page';}?>" href="booking">Booking</a></li>
                  
                 
                
                 
               </ul>
            </nav>
         </div>
      </section>
   </header>
   <!-- header section end -->

