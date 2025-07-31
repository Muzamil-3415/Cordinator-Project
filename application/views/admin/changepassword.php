<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        return true;
    }
</script>
                    <div class="span9">
                        <div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Change Password</h3>
							</div>
                           <?php
			
			if($this->session->flashdata('message'))
			{
			?>
        <div class="alert alert-success " style="margin:5px;"> <?php echo $this->session->flashdata('message'); ?> </div>
        <?php
			
			}
			?>
							<div class="module-body">
									 <form action="<?php echo site_url('magneto/updatepassword'); ?>" method="post" name="frm" class="form-horizontal row-fluid">
									  <input type="hidden" name="id" value="<?php echo $this->session->userdata['logged_in']['userid']; ?>" />
			    
										<div class="control-group">
											<label class="control-label" for="basicinput">New Password</label>
											<div class="controls">
												<input type="password" class="span8" name="password" id="password" required/>
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Confirm Password</label>
											<div class="controls">
												<input type="password" class="span8" name="confirmpassword" id="confirmpassword" required/>
												
											</div>
										</div>
									

										<div class="control-group">
											<div class="controls">
												<input type="submit" class="button1" value="Submit" onclick="return Validate()"/>&nbsp;<input type="reset" name="reset" class="button1" value="Reset" />
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
