<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce_properties.js"></script>
<script src="http://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<!-- start content box -->

<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
        <h3>Edit News [<a href="<?php echo site_url('magneto/managenews'); ?>">Manage Records</a>]</h3>
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
        <form action="<?php echo site_url('magneto/news_update'); ?>" method="post" enctype="multipart/form-data" name="frm" class="form-horizontal row-fluid">
          <input type="hidden" name="id" value="<?php echo $r->id;?>" />
          <div class="control-group">
            <label class="control-label" for="basicinput">Title</label>
            <div class="controls">
              <input type="text" name="title" class="span8"  value="<?php echo $r->title;?>" required>
            </div>
          </div>
           
         <div class="control-group">
            <label class="control-label" for="basicinput">Website Link</label>
            <div class="controls">
              <input type="text" name="website_link" class="span8" value="<?php echo $r->website_link;?>" required>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Description</label>
            <div class="controls">
              <textarea class="span8" name="description"><?php echo $r->description; ?></textarea>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="basicinput">Status</label>
            <div class="controls">
              <select class="span8" name="status" required>
                <?php if($r->status==1){ ?>
                <option value="1" selected>Live</option>
                <option value="0">Not Live</option>
                <?php } else{ ?>
                <option value="1">Live</option>
                <option value="0" selected>Not Live</option>
                <?php }?>
              </select>
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