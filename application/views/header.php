<?php 
foreach($mediadata as $media_result)
{   
  $facebook = $media_result->facebook;
  $twitter = $media_result->twitter;
  $linkedin = $media_result->linkedin;
  $instagram = $media_result->instagram;
  $youtube= $media_result->youtube;
  $home_about = $media_result->home_about;
  $google_map = $media_result->google_map;
  $address = $media_result->address;
  $phone = $media_result->phone;
  $phone2 = $media_result->phone2;
  $email = $media_result->email;
  $home_video = $media_result->home_video;
}
?>
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-lg-4 col-md-4 order-2 order-md-1 site-search-icon top_email">
              <a href="mailto:<?php echo $email; ?>"><i class="fa fa-envelope"></i> <?php echo $email; ?></a>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="<?php echo site_url(); ?>" class="js-logo-clone">
                  <img src="<?php echo base_url(); ?>assets/images/logo.png">
                </a>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12 order-3 order-md-3 top_phone">
              <div class="site-top-icons">
                <ul>
                  <li><a href="tel:<?php echo $phone; ?>"><i class="fa fa-phone"></i> <?php echo $phone; ?></a></li>
                  
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation" style="/*! background-color:#fff */">
      <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li>
              <a href="<?php echo site_url(); ?>" class="<?php if ($activePage =="home") {?> active <?php } ?>">Home</a></li>
            <li class="has-children">
              <a href="#" class="<?php if ($activePage =="services") {?> active <?php } ?>">Our Salt Products</a>
                <ul class="dropdown">                    
                    <li><a href="<?php echo site_url('water-treatment-florida'); ?>">Water Treatment Florida</a></li>
                    <li><a href="<?php echo site_url('de-icing-salts'); ?>">De-Icing Salts</a></li>
                    <li><a href="<?php echo site_url('food-salt-tx-near-me'); ?>">Food Salt TX Near Me</a></li>
                    <li><a href="<?php echo site_url('water-softener-tampa-fl'); ?>">Water Softener Tampa FL</a></li>
                    <li><a href="<?php echo site_url('rock-salt-near-me'); ?>">Rock Salt</a></li>
                    <li><a href="<?php echo site_url('pool-salt'); ?>">Pool Salt</a></li>
                    <li><a href="<?php echo site_url('water-softener-salt-tx-near-me'); ?>">Water Softener Salt TX Near Me</a></li>
                    <li><a href="<?php echo site_url('bulk-road-salt-supplier'); ?>">Bulk Road Salt Supplier</a></li>
                    <li><a href="<?php echo site_url('industrial-salts'); ?>">Industrial Salts</a></li>
                    <li><a href="<?php echo site_url('brine-salt-near-me'); ?>">Brine Salt Near Me</a></li>
                </ul>
            </li>
            <li><a href="<?php echo site_url('about-us'); ?>" class="<?php if ($activePage =="about") {?> active <?php } ?>">About Us</a></li>
            <li><a href="<?php echo site_url('news'); ?>" class="<?php if ($activePage =="news") {?> active <?php } ?>">News</a></li>
            <li><a href="<?php echo site_url('privacy-policy'); ?>" class="<?php if ($activePage =="policy") {?> active <?php } ?>">Privacy Policy</a></li>
            <li><a href="<?php echo site_url('contact-us'); ?>" class="<?php if ($activePage =="contact") {?> active <?php } ?>">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>