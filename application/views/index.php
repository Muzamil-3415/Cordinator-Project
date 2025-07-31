<?php
$activePage = "home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rock Salt Today</title>
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
                            <h2>
                                GET A ROCK SALT QUOTE!
                            </h2>
                            <?php $form_data = $this->session->flashdata('form_data'); ?>
                            <?php
                            if ($this->session->flashdata('message')) {
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
                            <!-- <div class="form-group mt-1">
                               <div class="g-recaptcha" data-sitekey="6LeFNJcoAAAAAIticy6omU6dMHFxs97NZB2P-PTW"></div>
                            </div> -->
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
                                <input type="submit" value="REQUEST QUOTE" class="btn btn-primary request-btn py-3 px-4">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="ftco-section background"
            style="background-image: url(<?php echo base_url(); ?>assets/images/bg_3.jpg);" data-aos="fade-up"
            data-aos-delay="">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="media-body py-md-4 text-center">
                            <div class="icons d-flex align-items-center justify-content-center"><i
                                    class="icon icon-add_location"></i></div>
                            <h3 class="mb-3">We stock bulk rock salt near you in the Midwest – East Coast – West Coast
                            </h3>
                            <p class="text-center parag">Bulk Rock Salt Supplier and wholesaler in Chicago, Kentucky,
                                New Jersey, Indiana, Iowa, Detroit, Pennsylvania, North Carolina, Newark, St.Louis,
                                Tennessee, Pittsburgh, Massachusetts, New York, Cleveland, Wisconsin, Illinois, and
                                Ohio!</p>
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
        <?php
        foreach ($why_result as $about_result_view) {
            $why_pagetitle = $about_result_view->pagetitle;
            $why_title = $about_result_view->title;
            $why_description = $about_result_view->description;
        }
        ?>
        <div class="offer-section" data-aos="fade-up" data-aos-delay="">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-5 site-section-heading text-center pt-4">
                        <h2><?php echo $why_pagetitle; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12  mb-3">
                                <div class="offer-items-box">
                                    <div class="offer-content">
                                        <h4><?php echo $why_title; ?></h4>
                                        <?php
                                        $about_description1 = str_replace(array('\r\n', '\r', '\n'), " ", $why_description);
                                        echo htmlspecialchars_decode($about_description1, ENT_QUOTES);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php foreach ($why_inside_result as $about_inside_result) { ?>
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <div class="offer-items-box mb-1">

                                        <div class="offer-content">
                                            <h4><?php echo $about_inside_result->name; ?></h4>
                                            <?php
                                            $about_inside_desc = str_replace(array('\r\n', '\r', '\n'), " ", $about_inside_result->description);
                                            echo htmlspecialchars_decode($about_inside_desc, ENT_QUOTES);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <?php
        foreach ($sevendaysData as $sevendaysData_view) {
            $sevendays_pagetitle = $sevendaysData_view->pagetitle;
            $sevendays_title = $sevendaysData_view->title;
            $sevendays_description = $sevendaysData_view->description;
        }
        ?>
        <section class="ftco-section background"
            style="background-image: url(<?php echo base_url(); ?>assets/images/sea-rock-salt.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="">
                    <div class="col-md-8 text-center">

                        <?php
                        $sevendays_descr = str_replace(array('\r\n', '\r', '\n'), " ", $sevendays_description);
                        echo htmlspecialchars_decode($sevendays_descr, ENT_QUOTES);
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="">
                    <div class="col-md-4 text-center blockareaimg  mb-3">
                        <img src="<?php echo base_url(); ?>assets/images/OUR-ROCK-SALT-BAG-1.png" class="three-img1">
                    </div>
                    <div class="col-md-4 text-center blockareaimg  mb-3">
                        <img src="<?php echo base_url(); ?>assets/images/OUR-ROCK-SALT-BAG-2.png" class="three-img1">
                    </div>
                    <div class="col-md-4 mb-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d51791326.97111232!2d-95.665!3d37.6!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sus!4v1693302584322!5m2!1sen!2sus" width="100%" height="266" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="">
                    <div class="col-md-12">
                        <p class="text-center"> <a href="pdf/Chilean-Salt-Specifications.pdf" target="_blank"
                                class="th-btn style3">Click For Rock Salt Specifications <i
                                    class="fas fa-download ms-2"></i></a> </p>
                    </div>
                </div>
            </div>
        </section>
        <?php
        foreach ($about_result as $about_data) {
            $about_pagetitle = $about_data->pagetitle;
            $about_title = $about_data->title;
            $about_image = $about_data->image;
            $about_description = $about_data->description;
        }
        ?>
        <div class="site-section border-bottom" data-aos="fade-down" data-aos-delay="">
            <div class="container">
                <div class="row mb-5">
                    <?php /* if($about_image){ ?>
                    <div class="col-md-6">
                        <div class="block-16">
                            <figure>
                                <img src="<?php echo base_url(); ?>upload/<?php echo $about_image; ?>"
                                    alt="We stock bulk rock salt near you in the Midwest – East Coast – West Coast"
                                    class="img-fluid rounded" style="border: 10px solid #f7f7f7;">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 about_txt">
                        <div class="site-section-heading pt-3 mb-4">
                            <h2 class="text-black"><?php echo $about_pagetitle; ?></h2>
                            <?php if($about_title){ ?>
                            <h3><?php echo $about_title; ?></h3>
                            <?php } ?>
                        </div>
                        <?php                                                
            $about_descr = str_replace(array('\r\n', '\r', '\n'), " ", $about_description);
            echo word_limiter(htmlspecialchars_decode($about_descr,ENT_QUOTES), 180);
            ?>
                        <p> <a href="<?php echo site_url('about-us'); ?>" class="th-btn style3">Read more <i class="fas fa-arrow-right ms-2"></i></a> </p>
                    </div>
                    <?php } else { */ ?>

                    <div class="col-md-12 about_txt">
                        <div class="site-section-heading pt-3 mb-4">
                            <h2 class="text-black"><?php echo $about_pagetitle; ?></h2>
                            <?php if ($about_title) { ?>
                                <h3><?php echo $about_title; ?></h3>
                            <?php } ?>
                        </div>
                        <?php
                        $about_descr = str_replace(array('\r\n', '\r', '\n'), " ", $about_description);
                        echo word_limiter(htmlspecialchars_decode($about_descr, ENT_QUOTES), 180);
                        ?>
                        <p> <a href="<?php echo site_url('about-us'); ?>" class="th-btn style3">Read more <i class="fas fa-arrow-right ms-2"></i></a> </p>
                    </div>
                    <?php /* } */ ?>
                </div>
            </div>
        </div>


        <section class="ftco-section background"
            style="background-image: url(<?php echo base_url(); ?>assets/images/boatbg.png);" data-aos="fade-up"
            data-aos-delay="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="media-body py-4 text-center">
                            <h3 class="mb-3">WE ARE CURRENTLY ACCEPTING ORDERS FOR FULL SHIP LOADS</h3>
                            <h2 class="text-black"> DON’T RUN OUT THIS SEASON!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('footer2.php'); ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
        <script>
            $(document).ready(function() {
                $("#contact-form").validate();
            });
        </script>
</body>

</html>