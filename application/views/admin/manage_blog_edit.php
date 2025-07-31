<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce_properties.js"></script>
<script src="http://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<!-- start content box -->

<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
        <h3>Edit News [<a href="<?php echo site_url('magneto/manage_blogs'); ?>">Manage News</a>]</h3>
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
      <form action="<?php echo site_url('magneto/blog_update'); ?>" method="post" enctype="multipart/form-data" name="frm" class="form-horizontal row-fluid">
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
          <label class="control-label" for="basicinput">News Title</label>
          <div class="controls">
            <input type="text" name="blog_title" class="span8" value="<?php echo $r->blog_title;?>" required>
          </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="basicinput">Description</label>
            <div class="controls">
              <textarea class="span8 richtextarea" name="description"><?php echo $r->description; ?></textarea>
            </div>
          </div>
     <?php /*?>  <div class="control-group">
            <label class="control-label" for="editor1">Description</label>
            <div class="controls">
          <textarea name="editor1"><?php echo $r->description; ?></textarea>
                <script>
                        CKEDITOR.replace( 'editor1',{
                          height: 400,
                        } );
                        
                </script>
            </div>
          </div><?php */?>
          <?php
    $orgDate = $r->created_on;  // (DD/MM/YYYY)
    $date = str_replace('/', '-', $orgDate);
    $newDate = date("Y-m-d", strtotime($date));
    //echo "New date format is: ".$newDate. " (YYYY-MM-DD)";
	//echo date("F d, Y", strtotime($date));
?>
       <div class="control-group">
          <label class="control-label" for="basicinput">Post Date</label>
          <div class="controls">
            <input type="text" name="created_on" class="span8" value="<?php echo $newDate ;?>" required>
          </div>
        </div>
        
        <?php /*?><div class="control-group">
          <label class="control-label" for="basicinput">Blog Description</label>
          <div class="controls">
            <textarea class="span8 richtextarea" rows="5" name="description"> <?php echo $r->description;?></textarea>
          </div>
        </div><?php */?>
        
        <div class="control-group">
            <label class="control-label" for="basicinput">Image</label>
            <div class="controls">
              <?php				
					if($r->image) { ?>
              <input type="hidden" name="userfile" value="<?php echo $r->image;?>" />
              <img alt="Your uploaded image" src="<?php echo base_url(). 'upload/' . $r->image; ?>" width="100" /> <a href="<?php echo site_url('magneto/blog_img_delete/'.$r->id); ?>" class="btn btn-primary">Delete Image</a>
              <?php }	else { ?>
              <input type="hidden" name="userfile" value="<?php echo $r->image;?>" />
              <?php echo form_upload('userfile'); ?>
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