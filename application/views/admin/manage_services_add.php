<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce_properties.js"></script>
<script src="http://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<!-- start content box -->

<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
        <h3>Add Keywords Pages</h3>
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
        <form action="<?php echo site_url('magneto/services_insert'); ?>" method="post" enctype="multipart/form-data" name="frm" class="form-horizontal row-fluid">
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
            <label class="control-label" for="basicinput">Select Footer Type</label>
            <div class="controls">
             <select name="footer_type" required>
                <option value="">Select Footer</option>
                <option value="1">Footer 1</option>
                <option value="2">Footer 2</option>
                <option value="3">Footer 3</option>
              </select>
             
            
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Form Title</label>
            <div class="controls">
              <input type="text" name="formtitle" class="span8">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Page Title</label>
            <div class="controls">
              <input type="text" name="pagetitle" class="span8" required>
            </div>
          </div>
         <div class="control-group">
            <label class="control-label" for="basicinput">Display Title </label>
            <div class="controls">
              <textarea class="span8" name="title" rows="4"></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Small Description</label>
            <div class="controls">
              <textarea class="span8 richtextarea" name="small_description"></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Description</label>
            <div class="controls">
              <textarea class="span8 richtextarea" name="description"></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Footer Description</label>
            <div class="controls">
              <textarea class="span8 richtextarea" name="footer_desc"></textarea>
            </div>
          </div>
          <div class="control-group ">
            <label class="control-label" for="basicinput">Upload Main Image</label>
            <div class="controls">
            <input type="file" name="userfile" />
            </div>
          </div>
          <p>&nbsp;</p>
          <div class="control-group ">
            <label class="control-label" for="basicinput">Upload Left Image</label>
            <div class="controls">
            <input type="file" name="userfile3" />
            </div>
          </div>
          <p>&nbsp;</p>
          <div class="control-group ">
            <label class="control-label" for="basicinput">Upload Center Image</label>
            <div class="controls"> <?php echo form_upload('userfile4'); ?> </div>
          </div>
           <p>&nbsp;</p>
           <div class="control-group">
            <label class="control-label" for="basicinput">Google Map</label>
            <div class="controls">
              <textarea class="span12" name="google_map" rows="4"></textarea>
            </div>
          </div>
          <div class="control-group ">
            <label class="control-label" for="basicinput">Upload PDF</label>
            <div class="controls">
            <input type="file" name="userfile2"  accept="application/pdf" />
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