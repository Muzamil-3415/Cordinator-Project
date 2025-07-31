	  <!-- start content box -->
      <div class="span9">
        <div class="content">
          <div class="module">
            <div class="module-head">
             <h3>Manage News [<a href="<?php echo site_url('magneto/blog_add'); ?>">Add New News</a>]</h3>
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
                    <th>Publish Date</th>
                    <th>Update</th>
					          <th>Delete</th>
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
                  <td><?php echo ucwords($result->blog_title);?></td>
                  <?php
                  $orgDate = $result->created_on;  // (DD/MM/YYYY)
                  $date = str_replace('/', '-', $orgDate);
                  $newDate = date("Y-m-d", strtotime($date));
                  //echo "New date format is: ".$newDate. " (YYYY-MM-DD)";
                  //echo date("F d, Y", strtotime($date));
                  ?>
                  <td><?php echo date("F d, Y", strtotime($date)); ?></td>
                  <td><a href="<?php echo site_url('magneto/blog_edit/'.$result->id); ?>">Edit</a></td>
                  <td><a href="<?php echo site_url('magneto/blog_delete/'.$result->id); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                  </tr>
                  <?php
                  }
                  ?>
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
