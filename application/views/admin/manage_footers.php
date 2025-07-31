<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assest-admin/tinymce/js/tinymce/tinymce_properties.js"></script>
<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Manage Footers</h3>
            </div>
            <div class="module-body">
                <?php
                //print_r($r);
                if($this->session->flashdata('message'))
                {
                ?>
                <div class="alert alert-success " style="margin:5px;">
                <?php echo $this->session->flashdata('message'); ?> </div>
                <?php

                }
                ?>
                <?php
                echo "<div class='error_msg' style='text-align:center'>";
                if (isset($error_message)) {
                echo $error_message;
                }
                echo validation_errors();
                echo "</div>";
                ?>
                <form action="<?php echo site_url('magneto/manage_footers_update'); ?>" method="post" name="frm"
                    class="form-horizontal row-fluid">
                    <input type="hidden" name="id" value="<?php echo $r->id;?>" />

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Footer Area #1</label>
                        <div class="controls">
                            <textarea class="span8 richtextarea"
                                name="footer1"><?php echo $r->footer1; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Footer Area #2</label>
                        <div class="controls">
                            <textarea class="span8 richtextarea"
                                name="footer2"><?php echo $r->footer2; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Footer Area #3</label>
                        <div class="controls">
                            <textarea class="span8 richtextarea"
                                name="footer3"><?php echo $r->footer3; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" class="button1" value="Submit" />&nbsp;<input type="reset" name="reset"
                                class="button1" value="Reset" />
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