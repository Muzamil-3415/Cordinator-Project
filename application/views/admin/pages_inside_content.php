	  <!-- start content box -->
      <div class="span9">
        <div class="content">
          <div class="module">
            <div class="module-head">
			<?php $pageid = $this->uri->segment(3); ?>
              <h3>Manage Pages Inside Content [<a href="<?php echo site_url('magneto/pages_inside_content_add/'); ?>">Add Record</a>]</h3>
            </div>
		
            <div class="module-body table">
 <?php
			
			if($this->session->flashdata('message'))
			{
			?>
        <div class="alert alert-success " style="margin:5px;"> <?php echo $this->session->flashdata('message'); ?> </div>
        <?php
			
			}
			
			?>
              <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                <thead>
                  <tr>
					<th>S.no</th>
                    <th>Image</th>
					<th>Title</th>
					<th>Under</th>
                    <th>Edit</th>
					<th>Delete</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
				$i = 1;
						foreach($result as $result)
						{						
						?>
                  <tr class="gradeA">
                   <td><?php echo $i++ ?></td>
					<td><?php if($result->image){?><img src="<?php echo base_url(). 'upload/' . $result->image; ?>" width="100" /><?php } ?></td>
                    <td><?php echo $result->name; ?></td>
					<td><?php 
						foreach($cat_result as $catrecord)
						{
						if($result->user_id == $catrecord->id)
						{ 
						echo $catrecord->pagetitle;
						}
						} 
						?></td>
						
					
                    <td><a href="<?php echo site_url('magneto/pages_inside_content_edit/'.$result->id); ?>">Edit</a></td>
					<td><a href="<?php echo site_url('magneto/pages_inside_content_delete/'.$result->id); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                  </tr>
				  <?php				   
				  	}					
					?>
                  <!--
                  <tr class="gradeA">
                    <td colspan="2">Sorry, Currently There are no record to display</td>
                  </tr>
                  -->
                </tbody>
              </table>
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
