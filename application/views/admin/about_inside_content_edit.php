<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce_properties.js"></script>
<script src="http://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<div class="span9">
  <div class="content">
    <div class="module">
      <div class="module-head">
        <h3>Edit Inside Content</h3>
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
        <form action="<?php echo site_url('magneto/inside_content_update'); ?>" method="post" enctype="multipart/form-data" name="frm" class="form-horizontal row-fluid">
          
		  <input type="hidden" name="id" value="<?php echo $r->id;?>" />
		  <input type="hidden" name="user_id" value="<?php echo $r->user_id;?>" />
      <?php //print_r($cat_result); ?>
        <div class="control-group">
            <label class="control-label" for="basicinput">Category</label>
            <div class="controls">
                <select name="cat_id" id="select1" class="span8"  required>
                    <?php	foreach ($cat_result as $category) { 				
                      $match_catid = $category->id;
                      ?>
                    <option value="<?php echo $category->id ; ?>"
                        <?php if($r->user_id == $match_catid){ ?>selected<?php }?>>
                        <?php echo ucwords($category->pagetitle) ; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

         <div class="control-group">
            <label class="control-label" for="basicinput">Title</label>
            <div class="controls">
              <input type="text" class="span8"  name="name" value="<?php echo $r->name;?>"/>
            </div>
          </div>
		
          <div class="control-group">
            <label class="control-label" for="basicinput">Description</label>
            <div class="controls">
              <textarea class="span8 richtextarea" rows="6" name="description"><?php echo $r->description;?></textarea>
            </div>
          </div>
	
		  <div class="control-group">
            <label class="control-label" for="basicinput">Image</label>
            <div class="controls">
              <?php				
					if($r->image) { ?>
              <input type="hidden" name="pic" value="<?php echo $r->image;?>" />
              <img alt="Your uploaded image" src="<?php echo base_url(). 'upload/' . $r->image; ?>" width="100" /> <a href="<?php echo site_url('magneto/user_gallery_img_delete/'.$r->id); ?>" class="btn btn-primary">Delete Image</a>
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
<script src="http://code.jquery.com/jquery-1.7.2.min.js" type="text/javascript"></script>
<script>
		$(document).ready(function(){
		
			var $cat = $('select[name=category]'),
				$items = $('select[name=items]');
			$items.removeClass("itembox"); 	
			$cat.change(function(){
				var $this = $(this).find(':selected'),
					rel = $this.attr('rel'),
					$set = $items.find('option.' + rel);
					$items.removeClass("itembox"); 
				
				if ($set.size() < 0) {
					$items.hide();
					return;
				}
				
				$items.show().find('option').hide();
				
				$set.show().first().prop('selected', true);
			});
			/*this is about edit page*/
			
			
		});
		</script>
<!--/.wrapper-->
<?php include("footer.php"); ?>
</body>