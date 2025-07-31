<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce_properties.js"></script>
<script src="http://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

<div class="span9">
  <div class="content">
    <div class="module"> 
      <div class="module-head">
        <h3>Edit About Us Pages [<a href="<?php echo site_url('magneto/manageaboutus'); ?>">Manage Record</a>]</h3>
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
        <form action="<?php echo site_url('magneto/aboutus_update'); ?>" method="post" enctype="multipart/form-data" name="frm" class="form-horizontal row-fluid">
          <input type="hidden" name="id" value="<?php echo $r->id;?>" />
          <div class="control-group">
            <label class="control-label" for="basicinput">Meta Title</label>
            <div class="controls">
              <input type="text" class="span8" value="<?php echo $r->meta_title;?>" name="meta_title"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Meta Description</label>
            <div class="controls">
              <textarea class="span8" name="meta_desc"><?php echo $r->meta_desc; ?></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Meta Keywords</label>
            <div class="controls">
              <textarea class="span8" name="meta_keyword"><?php echo $r->meta_keyword; ?></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Page Title</label>
            <div class="controls">
              <input type="text" name="pagetitle" class="span8"  value="<?php echo $r->pagetitle;?>" required>
            </div>
          </div>
        
          <div class="control-group">
            <label class="control-label" for="basicinput">Display Title</label>
            <div class="controls">
              <textarea class="span8" name="title" rows="4"><?php echo $r->title;?></textarea>
            </div>
          </div>
    
          <div class="control-group">
            <label class="control-label" for="basicinput">Description</label>
            <div class="controls">
              <textarea class="span8 richtextarea" name="description"><?php echo $r->description; ?></textarea>
            </div>
          </div>
       
          <div class="control-group">
            <label class="control-label" for="basicinput">Image</label>
            <div class="controls">
              <?php				
					if($r->image) { ?>
              <input type="hidden" name="pic" value="<?php echo $r->image;?>" />
              <img alt="Your uploaded image" src="<?php echo base_url(). 'upload/' . $r->image; ?>" width="100" /> <a href="<?php echo site_url('magneto/aboutus_img_delete/'.$r->id); ?>" class="btn btn-primary">Delete Image</a>
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