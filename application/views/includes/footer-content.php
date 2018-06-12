	<footer class="app-footer">
      <div>
        <a href="#">CI Admin</a>
        <span>&copy; 2018 CI Admin.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="#">CI Admin</a>
      </div>
    </footer>

    <!-- Bootstrap and necessary plugins-->
    <script src="<?php echo base_url(); ?>assets/js/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/icons/pace-progress/js/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/icons/coreui/js/coreui.min.js"></script>
	
	<!-- AngularJS-->
	<script src="<?php echo base_url(); ?>assets/js/angularjs/1.6.10/angular.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/angularjs/js/angular-custom-1.6.10.js"></script>
	
	<!-- Plugins and scripts required by this view--
    <script src="<?php echo base_url(); ?>assets/js/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/icons/coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<!--
	<script src="<?php echo base_url(); ?>assets/js/dropdown.js"></script>
	-->
	<script>
	$('#ui-view').ajaxLoad();
	$(document).ajaxComplete(function() {
	  Pace.restart()
	});
	</script>