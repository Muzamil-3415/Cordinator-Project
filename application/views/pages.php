<?php
foreach ($resultdata as $introductionhome) {
    $meta_title = $introductionhome->meta_title;
    $meta_keyword = $introductionhome->meta_keyword;
    $meta_desc = $introductionhome->meta_desc;
    $formtitle = $introductionhome->formtitle;
    $footer_type = $introductionhome->footer_type;
    $pagetitle = $introductionhome->pagetitle;
    $title = $introductionhome->title;
    $small_description = $introductionhome->small_description;
    $description = $introductionhome->description;
    $about_image = $introductionhome->image;
    $about_image2 = $introductionhome->image2;
    $about_image3 = $introductionhome->image3;
    $about_image4 = $introductionhome->image4;
    $about_fdesc = $introductionhome->footer_desc;
    $about_google_map = $introductionhome->google_map;
}

$activePage = "services";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $pagetitle; ?> - Rock Salt Today</title>
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

        <div class="site-blocks-cover"
            style="background-image: url(<?php echo base_url(); ?>assets/images/header_car_bg.jpg);" data-aos="fade">
            <div class="container">
                <div class="row align-items-start align-items-md-center justify-content-start">
                    <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                        <form id="contact-form" action="<?php echo site_url('main/contactform'); ?>" method="post" class="request-form ftco-animate fadeInUp ftco-animated">
                            <h2 class="text-center">
                                <?php
                                if ($formtitle) {
                                    echo $formtitle;
                                } else { ?>
                                    GET A <?php echo strtoupper($pagetitle); ?> QUOTE!
                                <?php }
                                ?>

                            </h2>
                            <?php
                            if ($this->session->flashdata('message')) {
                            ?>
                                <div class="alert alert-danger"> <?php echo $this->session->flashdata('message'); ?> </div>
                            <?php

                            }
                            ?>
                            <?php $form_data = $this->session->flashdata('form_data'); ?>

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
                            <!--<div class="form-group mt-1">-->
                            <!--    <div class="g-recaptcha" data-sitekey="6LeFNJcoAAAAAIticy6omU6dMHFxs97NZB2P-PTW"></div>-->
                            <!--</div>                            -->
                            <div class="form-group">
                                <label class="label">Captcha</label>
                                <div style="display: flex; align-items: center; gap: 20px">
                                    <img src="<?= base_url('main/captcha') . '?t=' . time(); ?>" alt="Captcha" id="captchaImage">
                                    <span class="captcha-arrow">→</span>
                                    <div>
                                    <input type="text" name="captcha_input" placeholder="Enter Code" required class="form-control" style="width: 150px; height: 40px;">
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
        <?php if ($title) { ?>
            <section class="ftco-section background"
                style="background-image: url(<?php echo base_url(); ?>assets/images/bg_3.jpg);" data-aos="fade-up"
                data-aos-delay="">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="media-body py-md-4 text-center parag">
                                <div class="icons d-flex align-items-center justify-content-center"><i
                                        class="icon icon-add_location"></i></div>
                                <h3 class="mb-3"><?php echo $title; ?></h3>
                                <?php
                                $smalldescription = str_replace(array('\r\n', '\r', '\n'), " ", $small_description);
                                echo htmlspecialchars_decode($smalldescription, ENT_QUOTES);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <div class="col-md-6 text-center parag">

                            <a href="<?php echo site_url('contact-us'); ?>" class="th-btn style3">Contact Us <i
                                    class="fas fa-arrow-right ms-2"></i></a>
                            <p class="pt-20">E-MAIL US FOR A FAST QUOTE AND DELIVERY!</p>

                            <p>We can provide the lowest prices period – When you buy our bulk and bagged road salt NOW!</p>


                        </div>
                        <div class="col-md-6 text-center parag">
                            <a href="tel:<?php echo $phone; ?>" class="th-btn style2"><?php echo $phone; ?> <i
                                    class="fas fa-arrow-right ms-2"></i></a>
                            <p class="pt-20">TOLL FREE NATIONAL NUMBER</p>

                            <p>Immediate quote!</p>
                        </div>
                    </div>

                </div>
            </section>
        <?php } ?>
        <div class="site-section border-bottom" data-aos="fade-down" data-aos-delay="">
            <div class="container">
                <div class="row">
                    <?php if ($about_image) { ?>
                        <div class="col-md-6">
                            <div class="block-16 text-center">
                                <figure>
                                    <img src="<?php echo base_url(); ?>upload/<?php echo $about_image; ?>"
                                        alt="We stock bulk rock salt near you in the Midwest – East Coast – West Coast"
                                        class="img-fluid rounded" style="border: 10px solid #f7f7f7;">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-6 about_txt">

                            <?php
                            $homedescription = str_replace(array('\r\n', '\r', '\n'), " ", $description);
                            echo htmlspecialchars_decode($homedescription, ENT_QUOTES);
                            ?>
                        </div>
                    <?php } else { ?>

                        <div class="col-md-12 about_txt">

                            <?php
                            $homedescription = str_replace(array('\r\n', '\r', '\n'), " ", $description);
                            echo htmlspecialchars_decode($homedescription, ENT_QUOTES);
                            ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
        //print_r($inside_result);
        $i = 1;
        foreach ($inside_result as $inside_result) {
            if ($i % 2 == 1) {
        ?>
                <div class="site-section border-bottom light_bg" data-aos="fade-down" data-aos-delay="">
                    <div class="container">
                        <div class="row">
                            <?php if ($inside_result->image) { ?>

                                <div class="col-md-12 about_txt">
                                    <img src="<?php echo base_url(); ?>upload/<?php echo $inside_result->image; ?>"
                                        alt="We stock bulk rock salt near you in the Midwest – East Coast – West Coast"
                                        class="img-fluid rounded" align="right" style="max-width:600px; width:100%; padding:5px 0px 0 20px">
                                    <?php
                                    $otherdescription = str_replace(array('\r\n', '\r', '\n'), " ", $inside_result->description);
                                    echo htmlspecialchars_decode($otherdescription, ENT_QUOTES);
                                    ?>
                                </div>
                            <?php } else { ?>

                                <div class="col-md-12 about_txt">

                                    <?php
                                    $otherdescription = str_replace(array('\r\n', '\r', '\n'), " ", $inside_result->description);
                                    echo htmlspecialchars_decode($otherdescription, ENT_QUOTES);
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="site-section border-bottom" data-aos="fade-down" data-aos-delay="">
                    <div class="container">
                        <div class="row">
                            <?php if ($inside_result->image) { ?>
                                <div class="col-md-12 about_txt">
                                    <img src="<?php echo base_url(); ?>upload/<?php echo $inside_result->image; ?>"
                                        alt="We stock bulk rock salt near you in the Midwest – East Coast – West Coast"
                                        class="img-fluid rounded" align="left" style="max-width:600px; width:100%; padding:5px 20px 0 0px">
                                    <?php
                                    $otherdescription = str_replace(array('\r\n', '\r', '\n'), " ", $inside_result->description);
                                    echo htmlspecialchars_decode($otherdescription, ENT_QUOTES);
                                    ?>
                                </div>

                            <?php } else { ?>

                                <div class="col-md-12 about_txt">

                                    <?php
                                    $otherdescription = str_replace(array('\r\n', '\r', '\n'), " ", $inside_result->description);
                                    echo htmlspecialchars_decode($otherdescription, ENT_QUOTES);
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
        <?php
            }
            $i++;
        }

        ?>
        <section class="ftco-section background"
            style="background-image: url(<?php echo base_url(); ?>assets/images/sea-rock-salt.jpg);">
            <div class="overlay"></div>
            <div class="container">

                <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="">
                    <div class="col-md-4 text-center blockareaimg">
                        <?php if ($about_image3) { ?>
                            <img src="<?php echo base_url(); ?>upload/<?php echo $about_image3; ?>" class="three-img1">
                        <?php } else { ?>
                            <img src="<?php echo base_url(); ?>assets/images/OUR-ROCK-SALT-BAG-1.png" class="three-img1">
                        <?php } ?>
                    </div>
                    <div class="col-md-4 text-center blockareaimg">
                        <?php if ($about_image4) { ?>
                            <img src="<?php echo base_url(); ?>upload/<?php echo $about_image4; ?>" class="three-img1">
                        <?php } else { ?>
                            <img src="<?php echo base_url(); ?>assets/images/OUR-ROCK-SALT-BAG-2.png" class="three-img1">

                        <?php } ?>


                    </div>
                    <div class="col-md-4">
                        <?php if ($about_google_map) { ?>
                            <?php echo $about_google_map; ?>
                        <?php } else { ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d51791326.97111232!2d-95.665!3d37.6!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sus!4v1693302584322!5m2!1sen!2sus" width="100%" height="266" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php } ?>
                    </div>
                </div>
                <?php if ($about_image2) { ?>
                    <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="">
                        <div class="col-md-12">
                            <p class="text-center"> <a href="<?php echo base_url(); ?>upload/pdf/<?php echo $about_image2; ?>" target="_blank"
                                    class="th-btn style3">Click For <?php echo $pagetitle; ?> Specifications <i
                                        class="fas fa-download ms-2"></i></a> </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <?php if ($about_fdesc) { ?>
            <section class="ftco-section background"
                style="background-image: url(<?php echo base_url(); ?>assets/images/boatbg.png);" data-aos="fade-up"
                data-aos-delay="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="media-body py-4 text-center fdesc">
                                <?php
                                $about_fdesc1 = str_replace(array('\r\n', '\r', '\n'), " ", $about_fdesc);
                                echo htmlspecialchars_decode($about_fdesc1, ENT_QUOTES);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <?php include('footer2.php'); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
        <script>
            $(document).ready(function() {
                $("#contact-form").validate();
            });
        </script>
</body>

</html>