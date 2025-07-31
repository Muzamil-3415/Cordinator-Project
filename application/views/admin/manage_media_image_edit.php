<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce_properties.js"></script>

<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
        <h3>Edit Image [<a href="<?php echo site_url('magneto/manageimage'); ?>">Manage Record</a>]</h3>
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
        <form action="<?php echo site_url('magneto/image_update'); ?>" method="post" enctype="multipart/form-data" name="frm" class="form-horizontal row-fluid">
          <input type="hidden" name="id" value="<?php echo $r->id;?>" />
          
          <div class="control-group">
            <label class="control-label" for="basicinput">Title</label>
            <div class="controls">
              <input type="text" name="title" class="span8"  value="<?php echo $r->title;?>" required>
            </div>
          </div>
		  

          <div class="control-group">
            <label class="control-label" for="basicinput">Image</label>
            <div class="controls">
              <?php				
					if($r->image) { ?>
              <input type="hidden" name="pic" value="<?php echo $r->image;?>" />
              <img alt="Your uploaded image" src="<?php echo base_url(). 'upload/' . $r->image; ?>" width="100" /> <a href="<?php echo site_url('magneto/image_img_delete/'.$r->id); ?>" class="btn btn-primary">Delete Image</a>
              <?php }	else { ?>
              <input type="hidden" name="pic" value="<?php echo $r->image;?>" />
              <?php echo form_upload('pic'); ?>
              <?php } ?>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <input type="submit" class="button1" value="Submit"/>
              &nbsp;
              <input type="reset" name="reset" class="button1" value="Reset" />
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