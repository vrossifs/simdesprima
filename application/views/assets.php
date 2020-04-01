<!DOCTYPE html>
<html>
<head>
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url('assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/animate.min.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/style.min.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/style-responsive.min.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/theme/default.css')?>" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url('assets/plugins/parsley/src/parsley.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/switchery/switchery.min.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/bootstrap-sweetalert/sweetalert.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/ionRangeSlider/css/ion.rangeSlider.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/password-indicator/css/password-indicator.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/bootstrap-select/bootstrap-select.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/jquery-tag-it/css/jquery.tagit.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/select2/dist/css/select2.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css');?>" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assets/plugins/pace/pace.min.js')?>"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- <style>
		img { width: 50%; }
	</style> -->
</head>
<body>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assets/plugins/jquery/jquery-1.9.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery/jquery-migrate-1.1.0.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url('assets/crossbrowserjs/html5shiv.js');?>"></script>
		<script src="<?php echo base_url('assets/crossbrowserjs/respond.min.js');?>"></script>
		<script src="<?php echo base_url('assets/crossbrowserjs/excanvas.min.js');?>"></script>
	<![endif]-->
	<script src="<?php echo base_url('assets/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-cookie/jquery.cookie.js')?>"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url('assets/plugins/parsley/dist/parsley.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-sweetalert/sweetalert.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/ui-modal-notification.demo.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/masked-input/masked-input.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/password-indicator/js/password-indicator.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-select/bootstrap-select.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-tag-it/js/tag-it.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/moment.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/select2/dist/js/select2.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap-show-password/bootstrap-show-password.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/clipboard/clipboard.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/form-plugins.demo.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/DataTables/media/js/jquery.dataTables.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js');?>"></script>
	<!-- <script src="<?php echo base_url('assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js');?>"></script>
	<script src="<?php echo base_url('assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js');?>"></script> -->
	<script src="<?php echo base_url('assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/table-manage-buttons.demo.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/table-manage-default.demo.min.js')?>"></script>
	<script src="<?php echo base_url('assets/plugins/switchery/switchery.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/form-slider-switcher.demo.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/apps.min.js');?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			TableManageDefault.init();
			FormSliderSwitcher.init();
			// TableManageButtons.init();
			FormPlugins.init();
		});
	</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>
</body>
</html>