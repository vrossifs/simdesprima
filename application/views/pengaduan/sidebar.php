<!DOCTYPE html>
<html>
<body>
	<!-- begin #sidebar -->
	<div id="sidebar" class="sidebar">
		<!-- begin sidebar scrollbar -->
		<div data-scrollbar="true" data-height="100%">
			<!-- begin sidebar user -->
			<ul class="nav">
				<li class="nav-profile">
					<div class="info">
						<?php echo($this->session->userdata('nama'));?>
						<small>Operator Desa</small>
					</div>
				</li>
			</ul>
			<!-- end sidebar user -->
			<!-- begin sidebar nav -->
			<ul class="nav">
				<li><a href="<?php echo base_url('index.php/c_lamas/index');?>"><i class="fa fa-laptop"></i> <span>Dashboard</span></a></li>
				<li class="has-sub">
					<a href="javascript:;">
						<b class="caret pull-right"></b>
						<i class="fa fa-pencil"></i>
						<span>Dummy</span>
					</a>
					<ul class="sub-menu">
						<li><a href="#">Dummy</a></li>
						<li><a href="#">Dummy</a></li>
						<li><a href="#">Dummy</a></li>
					</ul>
				</li>
			</ul>
			<!-- end sidebar nav -->
		</div>
		<!-- end sidebar scrollbar -->
	</div>
	<div class="sidebar-bg"></div>
	<!-- end #sidebar -->
</body>
</html>