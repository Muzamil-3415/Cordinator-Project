<?php
	$activePage = "contact";	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thanks - Rock Salt Today</title>
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
</head>

<body>

    <div class="site-wrap">
        <?php include('header.php'); ?>

        <div class="site-section border-bottom" data-aos="fade-down" data-aos-delay="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 about_txt text-center">
                    <div class="pb20 text-center"><?php
			if($this->session->flashdata('message'))
			{
			?>
			<h3 class="text-center"><?php echo $this->session->flashdata('message'); ?></h3>
			<?php
			
			}
			?> </div>
                   <h3>You will get update from us very soon</h3>
                    </div>
                   
                </div>  
            </div>
        </div>            


        

        <?php include('footer2.php'); ?>

</body>

</html>