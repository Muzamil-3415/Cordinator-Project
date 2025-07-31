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
<?php 
foreach($footersData as $footersData)
{   
  $footerarea1 = $footersData->footer1;
  $footerarea2 = $footersData->footer2;
  $footerarea3 = $footersData->footer3;

}
?>
<?php
    $meta_keyword = "";
	foreach($resultdata as $introductionhome){ 

    $footer_type = $introductionhome->footer_type;
    $meta_keyword = $introductionhome->meta_keyword;
	}
	?>
<footer class="site-footer border-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 mb-2 mb-lg-0">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="<?php echo base_url(); ?>assets/images/footer-logo.png" width="150">
                                <h3 class="footer-heading mb-4">Rock Salt Today</h3>
                                <p class="address" style="text-align: center;"><span style="color: #bfbfbf;"><?php echo nl2br($address); ?></p>
                                <p class="phone" style="text-align: center;"><span style="color: #bfbfbf;"><a
                                            style="color: #bfbfbf;" href="Tel:<?php echo $phone; ?>">Tel:
                                            <?php echo $phone; ?></a><br></span></p>
                                <p class="email" style="text-align: center;"><span style="color: #bfbfbf;"><a
                                            style="color: #bfbfbf;"
                                            href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span></p>
                                <p class="footer_social">
                                <?php if($facebook){?><a href="<?php echo $facebook; ?>" class="fab fa-facebook"></a><?php } ?>
                                <?php if($twitter){?><a href="<?php echo $twitter; ?>" class="fab fa-twitter"></a><?php } ?>
                                <?php if($linkedin){?><a href="<?php echo $linkedin; ?>" class="fab fa-linkedin"></a><?php } ?>
                                <?php if($youtube){?><a href="<?php echo $youtube; ?>" class="fab fa-youtube"></a><?php } ?>
                                <?php if($instagram){?><a href="<?php echo $instagram; ?>" class="fab fa-instagram"></a><?php } ?>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if($meta_keyword){ ?>
                                    <h3 class="footer-heading mb-4 text-center">Available <?php echo $meta_keyword; ?> Locations
                                </h3>
                                <?php } else {?>
                                <h3 class="footer-heading mb-4 text-center">Available Bulk Road Salt National Locations
                                </h3>
                                <?php } ?>
                            </div>
                            <div class="col-md-12 col-lg-12 mb-3 footerlist">
                                    <?php 
                                    if($footer_type=='2')
                                    {
                                       echo $footerarea2;
                                    }
                                    else if($footer_type=='3')
                                    {
                                       echo $footerarea3;
                                    }
                                    else
                                    {
                                       echo $footerarea1;
                                    }
                                    ?>
                                    
                            </div>
                            

                        </div>
                        <div class="row pt-20" style="border-top:1px solid #bfbfbf;">
                            <div class="col-md-12 text-center">
                                <span style="color: #999999;">
                                    <a style="color: #bfbfbf;" href="<?php echo site_url('de-icing-salts'); ?>">DE-Icing Salt </a> – 
                                    <a style="color: #bfbfbf;" href="<?php echo site_url('industrial-salts'); ?>">Industrial Salt</a> – 
                                    <a style="color: #bfbfbf;" href="<?php echo site_url('bulk-road-salt-supplier'); ?>">Road Salt Supplier</a> – 
                                    <a style="color: #bfbfbf;" href="javascript:void(0)">Food Grade Salt Bulk</a> – 
                                    <a style="color: #bfbfbf;" href="<?php echo site_url('pool-salt'); ?>"> Pool Salt</a> – 
                                    <a style="color: #bfbfbf;" href="javascript:void(0)">Pharmaceutical Salt</a> – 
                                    <a style="color: #bfbfbf;" href="javascript:void(0)">Animal Feed Salt</a> – 
                                    <a style="color: #bfbfbf;" href="javascript:void(0)"> Water Softener Salt</a> –
                                    <a style="color: #bfbfbf;" href="<?php echo site_url(); ?>">Home</a> – 
                                    <a style="color: #bfbfbf;" href="<?php echo site_url('contact-us'); ?>">Contact Us </a> – 
                                    <a style="color: #bfbfbf;" href="<?php echo site_url('privacy-policy'); ?>">Privacy</a>
                                </span>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-3 col-lg-3">
                        <div class="block-5 mb-5">
                            <h3 class="footer-heading mb-4">National Salt Suppliers</h3>
                            <img src="<?php echo base_url(); ?>assets/images/SomeFinal-768x512.png" class="img-fluid">
                        </div>


                    </div>
                </div>
                <div class="row footer-credit pt-2 mt-2 text-center">
                    <div class="col-md-6">
                        <p>
                            Copyright &copy; <script>
                            document.write(new Date().getFullYear());
                            </script> Rock Salt Today. All rights reserved
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <a href="https://wamexs.com/" target="_blank">Designed &amp; Developed By WEB &amp;
                                MARKETING EXPERTS LLC</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/aos.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>