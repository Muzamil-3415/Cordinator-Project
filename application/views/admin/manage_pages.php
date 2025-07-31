	  <!-- start content box -->
      <div class="span9">
        <div class="content">
          <div class="module">
            <div class="module-head">
             <h3>Manage Main Pages  [<a href="<?php echo site_url('magneto/pages_add'); ?>">Add Record</a>] </h3>
            </div>
		<?php
			
			if($this->session->flashdata('message'))
			{
			?>
        <div class="alert alert-success " style="margin:5px;"> <?php echo $this->session->flashdata('message'); ?> </div>
        <?php
			
			}
			?>
            <div class="module-body table">

              <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                <thead>
                  <tr>
                  	<th>S.no</th>
                    <th>Title</th>
                    <td>Contents</td>
                    <th>Update</th>
					       
                  </tr>
                </thead>
                <tbody>
				<?php 
				$i = 1;
						foreach($row as $result)
						{
						?>
                  <tr class="gradeA">
                  <td><?php echo $i++ ?></td>
                    <td><?php echo ucwords($result->pagetitle);?></td>
                    <td><a href="<?php echo site_url('magneto/manage_pages_inside_content/'.$result->id); ?>">Inside Content</a></td>
                    <td><a href="<?php echo site_url('magneto/pages_edit/'.$result->id); ?>">Edit</a></td>
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
