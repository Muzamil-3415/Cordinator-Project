
	                    <div class="span9">
                        <div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Edit Social Media and Contact Info</h3>
							</div>
							<div class="module-body">
							<?php
			
							if($this->session->flashdata('message'))
							{
							?>
						<div class="alert alert-success " style="margin:5px;"> <?php echo $this->session->flashdata('message'); ?> </div>
						<?php
							
							}
							?>
							 <?php
							echo "<div class='error_msg' style='text-align:center'>";
							if (isset($error_message)) {
							echo $error_message;
							}
							echo validation_errors();
							echo "</div>";
							?>
									 <form action="<?php echo site_url('magneto/media_update'); ?>" method="post" name="frm" class="form-horizontal row-fluid">
									  <input type="hidden" name="id" value="<?php echo $r->id;?>" />
			    
										<div class="control-group">
											<label class="control-label" for="basicinput">Phone No.</label>
											<div class="controls">
												<input type="text" class="span8" name="phone" value="<?php echo $r->phone;?>"/>
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Other Phone No.</label>
											<div class="controls">
												<input type="text" class="span8" name="phone2" value="<?php echo $r->phone2;?>"/>
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<input type="text" class="span8" name="email" value="<?php echo $r->email;?>"/>
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Facebook</label>
											<div class="controls">
												<input type="text" class="span8" name="facebook" value="<?php echo $r->facebook;?>"/>
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Twitter</label>
											<div class="controls">
												<input type="text" class="span8" name="twitter" value="<?php echo $r->twitter;?>"/>
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Instagram</label>
											<div class="controls">
												<input type="text" class="span8" name="instagram" value="<?php echo $r->instagram;?>"/>
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Linkedin</label>
											<div class="controls">
												<input type="text" class="span8" name="linkedin" value="<?php echo $r->linkedin;?>"/>
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Youtube</label>
											<div class="controls">
												<input type="text" class="span8" name="youtube" value="<?php echo $r->youtube;?>"/>
												
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Google Map Link</label>
											<div class="controls">
											  <textarea class="span8" rows="5" name="google_map"><?php echo $r->google_map; ?></textarea>
											</div>
										  </div>
										  <div class="control-group">
											<label class="control-label" for="basicinput">Home Video Link</label>
											<div class="controls">
												<input type="text" class="span8" name="home_video" value="<?php echo $r->home_video;?>"/>
												
											</div>
										</div>
										 <div class="control-group">
											<label class="control-label" for="basicinput">Address</label>
											<div class="controls">
											  <textarea class="span8" rows="5" name="address"><?php echo $r->address; ?></textarea>
											</div>
										  </div>
										  <div class="control-group">
											<label class="control-label" for="basicinput">Home About us</label>
											<div class="controls">
											  <textarea class="span8" rows="5" name="home_about"><?php echo $r->home_about; ?></textarea>
											</div>
										  </div>
										<div class="control-group">
											<div class="controls">
												<input type="submit" class="button1" value="Submit"/>&nbsp;<input type="reset" name="reset" class="button1" value="Reset" />
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
       <?php include("footer.php"); ?>
      
    </body>
