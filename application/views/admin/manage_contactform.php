	  <!-- start content box -->
      <div class="span9">
        <div class="content">
          <div class="module">
            <div class="module-head">
              <h3>Manage Contact Form Records <a class="pull-right btn btn-primary btn-xl" href="<?php echo site_url('magneto/export_contactform_csv'); ?>"><i class="fa fa-file-excel-o"></i> Export Data</a></h3>
            </div>
		
            <div class="module-body table">

              <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                <thead>
                  <tr>
                    <th>S.no</th>
					<th>Details</th>
				
					<th>Quantity</th>
					<th>Date</th>
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
                    <td><?php echo $i++; ?></td>
					<td><?php echo $result->name;?>
					<br/>
					<?php echo $result->email;?><br/>
					<?php echo $result->state;?>-<?php echo $result->zipcode;?>
					
				
                    <td><?php echo $result->quantity;?></td>
					<td><?php echo $result->created_on;?></td>
					
                   
					<td><a href="<?php echo site_url('magneto/manage_contactform_delete/'.$result->id); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
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
