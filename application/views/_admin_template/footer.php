 <div id="footer">
        <p>Administrator</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo base_url();?>assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script>
	$(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
		
	</script>
	
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    
    
	
	
	<script src="<?php echo base_url();?>assets/admin/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/validationInit.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/admin/plugins/dataTables/dataTables.bootstrap.js"></script> 
    	
	  <script>
        $(function () { formValidation(); });
		
        </script>
   <?php unset($_SESSION['admin']['hm_msg']);?>
</body>

    <!-- END BODY -->
</html>
