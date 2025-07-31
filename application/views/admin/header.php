<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
} else {
header("location: magneto");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo WEB_APPLICATION_NAME; ?>-  Admin Panel</title>
<link type="text/css" href="<?php echo base_url(); ?>assest-admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="<?php echo base_url(); ?>assest-admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link type="text/css" href="<?php echo base_url(); ?>assest-admin/css/theme.css" rel="stylesheet">
<link type="text/css" href="<?php echo base_url(); ?>assest-admin/images/icons/css/font-awesome.css" rel="stylesheet">
<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse"> <i class="icon-reorder shaded"></i> </a> <a class="brand" href="<?php echo site_url('magneto/managecontent'); ?>"><?php echo WEB_APPLICATION_NAME; ?></a>
      <div class="nav-collapse collapse navbar-inverse-collapse">
        <ul class="nav pull-right">
          <li class="dropdown">&nbsp;
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Support <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Contact Details</a></li>
								<li><a href="#">Send Problem</a></li>
								<li class="divider"></li>
								<li class="nav-header">NWeb Process</li>
							</ul>-->
          </li>
          <li class="nav-user dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url(); ?>assest-admin/images/user.png" class="nav-avatar" /> <b class="caret"></b> </a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('magneto/changepassword'); ?>">Change Password</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo site_url('magneto/logout'); ?>">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.nav-collapse -->
    </div>
  </div>
  <!-- /navbar-inner -->
</div>
<!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="wrapper">
<div class="container">
<div class="row">
<div class="span3">
  <div class="sidebar">
    <ul class="widget widget-menu unstyled">
      
        <li><a href="<?php echo site_url('magneto/media_edit/1'); ?>"><i class="menu-icon icon-tasks"></i>Manage Social &amp; Phone </a></li>
        <li><a href="<?php echo site_url('magneto/manageaboutus'); ?>"><i class="menu-icon icon-tasks"></i>Manage Main Content </a></li>
        <li><a href="<?php echo site_url('magneto/managecontactform'); ?>"><i class="menu-icon icon-tasks"></i>Manage Contact Form </a></li>


        <li><a href="<?php echo site_url('magneto/manage_footers'); ?>"><i class="menu-icon icon-tasks"></i>Manage Footers </a></li>
        <li><a href="<?php echo site_url('magneto/managepages'); ?>"><i class="menu-icon icon-tasks"></i>Manage Main Pages </a></li>
        <li><a href="<?php echo site_url('magneto/manageservices'); ?>"><i class="menu-icon icon-tasks"></i>Manage Keywords Pages </a></li>
      </ul>
      <ul class="widget widget-menu unstyled">
        <li><a href="<?php echo site_url('magneto/manage_blog'); ?>"><i class="menu-icon icon-tasks"></i>Manage News</a></li>
        <li><a href="<?php echo site_url('magneto/blog_add'); ?>"><i class="menu-icon icon-tasks"></i>Add New News </a></li>
      </ul>
    </div>
  <!--/.sidebar-->
</div>
<!-- end sidebar-->
