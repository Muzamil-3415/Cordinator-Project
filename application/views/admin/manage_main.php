
	  <!-- start content box -->
      <div class="span9">
        <div class="content">
          <div class="module">
            <div class="module-head">
              <h3>Manage Content</h3>
            </div>
		
            <div class="module-body table">

              <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
						foreach($row as $result)
						{
						?>
                  <tr class="gradeA">
                    <td><?php echo ucwords($result->title);?></td>
                    <td><a href="<?php echo site_url('magneto/content_edit/'.$result->id); ?>">Edit</a></td>
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
