<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce_properties.js"></script>
<!-- start content box -->

<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
        <h3>Add News</h3>
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
        <form action="<?php echo site_url('magneto/news_insert'); ?>" method="post" enctype="multipart/form-data" name="frm" class="form-horizontal row-fluid">
          <input type="hidden" name="status" value="1" />
          <div class="control-group">
            <label class="control-label" for="basicinput">Title</label>
            <div class="controls">
              <input type="text" name="title" class="span8" required>
            </div>
          </div>
           <div class="control-group">
            <label class="control-label" for="basicinput">News Brand</label>
            <div class="controls">
              <select name="cat_id" required>
                <option value="">Select</option>
                <?php 
				foreach($category as $result)
				{
				?>
                <option value="<?php echo $result->id; ?>" class="span8" ><?php echo $result->brand_name; ?></option>
                <?php
				}				
				?>
              </select>
            </div>
          </div>
		
		  <div class="control-group">
            <label class="control-label" for="basicinput">Website Link</label>
            <div class="controls">
              <input type="text" name="website_link" class="span8">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Description</label>
            <div class="controls">
              <textarea class="span8" name="description"></textarea>
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