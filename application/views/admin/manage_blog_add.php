<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce_properties.js"></script>

<!-- start content box -->

<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
        <h3>Add New News</h3>
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
        <form action="<?php echo site_url('magneto/blog_insert'); ?>" method="post" enctype="multipart/form-data" name="frm" class="form-horizontal row-fluid">
          <div class="control-group">
            <label class="control-label" for="basicinput">Meta Title</label>
            <div class="controls">
              <input type="text" class="span8" name="meta_title"/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Meta Description</label>
            <div class="controls">
              <textarea class="span8" name="meta_desc"></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Meta Keywords</label>
            <div class="controls">
              <textarea class="span8" name="meta_keyword"></textarea>
            </div>
          </div>
         
          <div class="control-group">
            <label class="control-label" for="basicinput">News Title</label>
            <div class="controls">
              <input type="text" name="blog_title" class="span8" required>
            </div>
          </div>
         <div class="control-group">
            <label class="control-label" for="basicinput">Description</label>
            <div class="controls">
              <input type="text" name="description" class="span8 richtextarea">
            </div>
          </div>
          <?php /*?><div class="control-group">
            <label class="control-label" for="editor1">Description</label>
            <div class="controls">
          <textarea name="editor1"></textarea>
                <script>
                        CKEDITOR.replace( 'editor1',{
                          height: 400,
                        } );
                </script>
            </div>
          </div><?php */?>
         
          <div class="control-group">
            <label class="control-label"  for="exampleInputFile">Upload Image</label>
            <div class="controls">
              <input type="file" name="userfile" id="exampleInputFile" >
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
<html>