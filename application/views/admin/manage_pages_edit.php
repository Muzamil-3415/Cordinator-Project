<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce_properties.js"></script>
<script src="http://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

<div class="span9">
  <div class="content">
    <div class="module"> 
      <div class="module-head">
        <h3>Edit Main Pages Content [<a href="<?php echo site_url('magneto/managepages'); ?>">Manage Record</a>]</h3>
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
        <form action="<?php echo site_url('magneto/pages_update'); ?>" method="post" enctype="multipart/form-data" name="frm" class="form-horizontal row-fluid">
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
          <label class="control-label" for="basicinput">Select Footer Type</label>
            <div class="controls">           
                <select name="footer_type" required>
                  <?php if($r->footer_type  == "1"){ ?>
                    <option value="1" selected="selected">Footer 1</option>
                    <option value="2">Footer 2</option>
                    <option value="3">Footer 3</option>
                  <?php
                  } else 
                  if($r->footer_type  == "2"){ ?>
                    <option value="1">Footer 1</option>
                    <option value="2" selected="selected">Footer 2</option>
                    <option value="3">Footer 3</option>
                  <?php
                  } 
                  else{
                  ?>
                    <option value="1">Footer 1</option>
                    <option value="2">Footer 2</option>
                    <option value="3" selected="selected">Footer 3</option>
                  <?php } ?>
                </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Form Title</label>
            <div class="controls">
              <input type="text" name="formtitle" class="span8"  value="<?php echo $r->formtitle;?>">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Page Title</label>
            <div class="controls">
              <input type="text" name="pagetitle" class="span8"  value="<?php echo $r->pagetitle;?>" disabled>
            </div>
          </div>
        
          <div class="control-group">
            <label class="control-label" for="basicinput">Display Title</label>
            <div class="controls">
              <textarea class="span8" name="title" rows="4"><?php echo $r->title;?></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Small Description</label>
            <div class="controls">
            <textarea class="span8 richtextarea" name="small_description"><?php echo $r->small_description; ?></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Description</label>
            <div class="controls">
              <textarea class="span8 richtextarea" name="description"><?php echo $r->description; ?></textarea>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="basicinput">Footer Description</label>
            <div class="controls">
              <textarea class="span8 richtextarea" name="footer_desc"><?php echo $r->footer_desc; ?></textarea>
            </div>
          </div>
          
          <div class="control-group">
            <label class="control-label" for="basicinput">Upload Main Image</label>
            <div class="controls">
              <?php				
					  if($r->image) { ?>
              <input type="hidden" name="userfile" value="<?php echo $r->image;?>" />
              <img alt="Your uploaded image" src="<?php echo base_url(). 'upload/' . $r->image; ?>" width="100" /> <a href="<?php echo site_url('magneto/pages_img_delete/'.$r->id.'/'."image"); ?>" class="btn btn-primary">Delete Image</a>
              <?php }	else { ?>
              <input type="hidden" name="userfile" value="<?php echo $r->image;?>" />
              <?php echo form_upload('userfile'); ?>
              <?php } ?>
            </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="basicinput">Upload Left Image</label>
              <div class="controls">
                <?php				
				        if($r->image3) { ?>
                <input type="hidden" name="userfile3" value="<?php echo $r->image3;?>" />
                <img alt="Your uploaded image" src="<?php echo base_url(). 'upload/' . $r->image3; ?>" width="100" /> 
                <a href="<?php echo site_url('magneto/pages_img_delete/'.$r->id.'/'."image3"); ?>" class="btn btn-primary">Delete Image</a>
                <?php }	else { ?>
                <input type="hidden" name="userfile3" value="<?php echo $r->image3;?>" />
                <?php echo form_upload('userfile3'); ?>
                <?php } ?>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="basicinput">Upload Center Image</label>
              <div class="controls">
                <?php				
				        if($r->image4) { ?>
                <input type="hidden" name="userfile4" value="<?php echo $r->image4;?>" />
                <img alt="Your uploaded image" src="<?php echo base_url(). 'upload/' . $r->image4; ?>" width="100" /> 
                <a href="<?php echo site_url('magneto/pages_img_delete/'.$r->id.'/'."image4"); ?>" class="btn btn-primary">Delete Image</a>
                <?php }	else { ?>
                <input type="hidden" name="userfile4" value="<?php echo $r->image4;?>" />
                <?php echo form_upload('userfile4'); ?>
                <?php } ?>
              </div>
            </div>
            <div class="control-group">
            <label class="control-label" for="basicinput">Google Map</label>
            <div class="controls">
              <textarea class="span12" name="google_map" rows="4"><?php echo $r->google_map; ?></textarea>
            </div>
          </div>  
          <div class="control-group">
            <label class="control-label" for="basicinput">Update PDF</label>
            <div class="controls">
              <?php
              if ($r->image2) { ?>
                <input type="hidden" name="userfile2" value="<?php echo $r->image2; ?>" />
                <a href="<?php echo base_url() . 'upload/pdf/' . $r->image2; ?>" class="btn btn-danger">Download</a>
                <a href="<?php echo site_url('magneto/pages_img2_delete/' . $r->id); ?>"
                  class="btn btn-primary">Delete File</a>
              <?php } else { ?>
                <input type="hidden" name="userfile2" value="<?php echo $r->image2; ?>" />
                <?php echo form_upload('userfile2'); ?>
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