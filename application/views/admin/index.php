<?php
if (isset($this->session->userdata['logged_in'])) {

header("magneto/checkuser");

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Admin Panel - Login Area</title>


<link href="<?php echo base_url(); ?>assest-admin/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<section class="container">
<div class="login">


		<h1><?php echo WEB_APPLICATION_NAME; ?> Admin</h1>
		<?php echo form_open('magneto/checkuser'); ?>
		<?php
		echo "<div class='error_msg' style='text-align:center'>";
		if (isset($error_message)) {
		echo $error_message;
		}
		echo validation_errors();
		echo "</div>";
		?>
	 	<label>UserName :</label>
        <p><input type="text" name="username" id="name"  value="" placeholder="Username" autocomplete="off"></p>
		<label>Password :</label>
        <p><input type="password" name="password" id="password" value="" placeholder="************" autocomplete="off"></p>
       
        <p class="submit"><input type="submit" name="submit" value=" Login "></p>
      </form>
    </div>

     
  </section>

</body>
</html>

