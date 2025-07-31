	  <!-- start content box -->
      <div class="span9">
        <div class="content">
          <div class="module">
            <div class="module-head">
              <h3>Manage Images [<a href="<?php echo site_url('magneto/image_add'); ?>">Add Record</a>]</h3>
            </div>
		
            <div class="module-body table">

              <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                <thead>
                  <tr>
                    <th>Image</th>
					<th>Title</th>
					<th>Image URL</th>
					<th>Edit</th>
					<th>Delete</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
						foreach($result as $result)
						{
						?>
                  <tr class="gradeA">
                    <td><img src="<?php echo base_url(); ?>upload/<?php echo $result->image;?>" width="100" class="img-rounded" /></td>
					<td><?php echo ucwords($result->title);?></td>
					<td><?php echo base_url(); ?>upload/<?php echo $result->image;?></td>
					
                    <td><a href="<?php echo site_url('magneto/image_edit/'.$result->id); ?>">Edit</a></td>
					<td><a href="<?php echo site_url('magneto/image_delete/'.$result->id); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
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
