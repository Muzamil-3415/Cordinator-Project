<?php
	foreach($result as $introductionhome){ 
	$pagetitle = $introductionhome->pagetitle;
	$title = $introductionhome->title;
	$description = $introductionhome->description;
	$image = $introductionhome->image;
	}
	?>
<?php
	$activePage = "about";	
?>	
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us - Rock Salt Today</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

    <div class="site-wrap">
        <?php include('header.php'); ?>

        <div class="site-section border-bottom" data-aos="fade-down" data-aos-delay="">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 about_txt">
                    <h1><?php  echo $pagetitle; ?></h1>
                    <p><img src="<?php echo base_url(); ?>upload/<?php echo $image; ?>"
                                    alt="About us"
                                    class="img-fluid rounded" style="border: 10px solid #f7f7f7;"></p>
                    <?php 
                    $homedescription = str_replace(array('\r\n', '\r', '\n'), " ", $description); 
                    echo htmlspecialchars_decode($homedescription,ENT_QUOTES);
                    ?>
                    </div>
                    <div class="col-md-4">
                    <form id="contact-form" action="<?php echo site_url('main/contactform'); ?>" method="post" class="request-form ftco-animate fadeInUp ftco-animated">
                            <h2>
                                GET A ROCK SALT QUOTE!
                            </h2>
                            <?php $form_data = $this->session->flashdata('form_data'); ?>
                            <?php
                        if($this->session->flashdata('message'))
                        {
                        ?>
                            <div class="alert alert-danger"> <?php echo $this->session->flashdata('message'); ?> </div>
                        <?php
                        
                        }
                        ?>
                            <div class="form-group">
                                <label for="" class="label">Name</label>
                                <input type="text" class="form-control" name="form_name" placeholder="Enter Full Name" required
                                value="<?= isset($form_data['form_name']) ? htmlspecialchars($form_data['form_name']) : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Email</label>
                                <input type="email" class="form-control" name="form_email" placeholder="Enter Email" required
                                value="<?= isset($form_data['form_email']) ? htmlspecialchars($form_data['form_email']) : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Phone</label>
                                <input type="number" class="form-control" name="form_phone" placeholder="Enter Phone" minlength="10" required
                                value="<?= isset($form_data['form_phone']) ? htmlspecialchars($form_data['form_phone']) : '' ?>">
                            </div>


                            <div class="form-group">
                                <label for="" class="label">State</label>
                                <select name="form_state" class="form-control" required>
                                    <option value="" selected="selected">Select State </option>
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="Armed Forces Americas">Armed Forces Americas</option>
                                    <option value="Armed Forces Europe">Armed Forces Europe</option>
                                    <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                                    <option value="California">California</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="District of Columbia">District of Columbia</option>
                                    <option value="Federated States of Micronesia">Federated States of Micronesia
                                    </option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky">Kentucky</option>
                                    <option value="Louisiana">Louisiana</option>
                                    <option value="Maine">Maine</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Maryland">Maryland</option>
                                    <option value="Massachusetts">Massachusetts</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Minnesota">Minnesota</option>
                                    <option value="Mississippi">Mississippi</option>
                                    <option value="Missouri">Missouri</option>
                                    <option value="Montana">Montana</option>
                                    <option value="Nebraska">Nebraska</option>
                                    <option value="Nevada">Nevada</option>
                                    <option value="New Hampshire">New Hampshire</option>
                                    <option value="New Jersey">New Jersey</option>
                                    <option value="New Mexico">New Mexico</option>
                                    <option value="New York">New York</option>
                                    <option value="North Carolina">North Carolina</option>
                                    <option value="North Dakota">North Dakota</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Ohio">Ohio</option>
                                    <option value="Oklahoma">Oklahoma</option>
                                    <option value="Oregon">Oregon</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Pennsylvania">Pennsylvania</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Rhode Island">Rhode Island</option>
                                    <option value="South Carolina">South Carolina</option>
                                    <option value="South Dakota">South Dakota</option>
                                    <option value="Tennessee">Tennessee</option>
                                    <option value="Texas">Texas</option>
                                    <option value="Utah">Utah</option>
                                    <option value="Vermont">Vermont</option>
                                    <option value="Virginia">Virginia</option>
                                    <option value="Virgin Islands">Virgin Islands</option>
                                    <option value="Washington">Washington</option>
                                    <option value="West Virginia">West Virginia</option>
                                    <option value="Wisconsin">Wisconsin</option>
                                    <option value="Wyoming">Wyoming</option>
                                </select>
                            </div>
                            <div class="d-flex">
                                <div class="form-group mr-2">
                                    <label for="" class="label">Zip Code</label>
                                    <input type="text" class="form-control" name="form_zipcode" placeholder="Enter Zip Code" minlength="5" required
                                    value="<?= isset($form_data['form_zipcode']) ? htmlspecialchars($form_data['form_zipcode']) : '' ?>">
                                </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">Quantity Needed</label>
                                    <input type="text" class="form-control" name="form_quantity" placeholder="Enter Quantity" minlength="1" required
                                    value="<?= isset($form_data['form_quantity']) ? htmlspecialchars($form_data['form_quantity']) : '' ?>">
                                </div>
                            </div>
                            
                              <div class="form-group">
                                <label class="label">Captcha</label>
                                <div style="display: flex; align-items: center; gap: 10px">
                                    <img src="<?= base_url('main/captcha') ?>" alt="Captcha" style="margin-right: 10px;" id="captchaImage">
                                     <span class="captcha-arrow">→</span>
                                     <div>
                                    <input type="text" name="captcha_input" placeholder="Enter Code"  required class="form-control" style="width: 90px; height: 40px;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <input type="hidden" name="redirect_url" value="<?= current_url(); ?>">
                                <input type="submit" value="REQUEST QUOTE" class="btn btn-primary py-3 px-4">
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>            


        

        <?php include('footer2.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> 
<script>  
$(document).ready (function () {  
  $("#contact-form").validate ();  
});  
</script> 
</body>

</html>