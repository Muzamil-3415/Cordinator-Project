<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce_properties.js">
</script>
<!-- start content box -->
<?php $pageid = $this->uri->segment(3); ?>
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Add Pages Inside Content </h3>
            </div>
            <div class="module-body">
                <?php
			
			if($this->session->flashdata('message'))
			{
			?>
                <div class="alert alert-success " style="margin:5px;">
                    <?php echo $this->session->flashdata('message'); ?> </div>
                <?php
			
			}
			
			?>
                <form action="<?php echo site_url('magneto/pages_inside_content_insert'); ?>" method="post"
                    enctype="multipart/form-data" name="frm" class="form-horizontal row-fluid">
                    <input type="hidden" class="span8" name="user_id" value="<?php echo $pageid; ?>" />

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Choose Category</label>
                        <div class="controls">
                            <select name="user_id" required>
                                <option>Select</option>
                                <?php	foreach ($cat_result as $category) { ?>

                                <option value="<?php echo $category->id ; ?>">
                                    <?php echo ucwords($category->pagetitle); ?></option>

                                <?php } ?>
                            </select>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Title</label>
                        <div class="controls">
                            <input type="text" class="span8" name="name" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Description</label>
                        <div class="controls">
                            <textarea class="span8 richtextarea" rows="6" name="description"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Upload Image</label>
                        <div class="controls"> <?php echo form_upload('pic'); ?> </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" class="button1" value="Submit" />
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

</html>