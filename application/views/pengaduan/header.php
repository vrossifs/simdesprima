<!DOCTYPE html>
<html>
<body>
	<!-- begin #header -->
	<div id="header" class="header navbar navbar-default navbar-fixed-top">
		<!-- begin container-fluid -->
		<div class="container-fluid">
			<!-- begin mobile sidebar expand / collapse button -->
			<div class="navbar-header">
				<a href="<?php echo base_url('index.php/c_lamas/index');?>" class="navbar-brand">SIMDESPRIMA</a>
			</div>
			<!-- end mobile sidebar expand / collapse button -->
			
			<!-- begin header navigation right -->
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<!-- <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell-o"></i>
						<?php if ($notif != 0) { ?>
							<span class="label"><?php echo $notif ;?></span>
						<?php } ?>
					</a>
					<ul class="dropdown-menu media-list pull-right animated fadeInDown">
						<li class="dropdown-header">Notifikasi</li>
						<li class="media">
								<a href="#">
									<div class="media-body">
										<h6 class="media-heading"><?php echo $notif_title ;?></h6>
										<p><?php echo $notif_message ;?></p>
										<div class="text-muted f-s-11"><?php echo $notif_date ;?></div>
									</div>
								</a>
							</li>
						<li class="dropdown-footer text-center">
                            <a href="#">View more</a>
                        </li>
					</ul> -->
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/img/user-13.jpg" alt="" /> 
						<span class="hidden-xs"></span><?php echo($this->session->userdata('nama'));?><b class="caret"></b>
					</a>
					<ul class="dropdown-menu animated fadeInLeft">
						<li><a href="<?php echo base_url('index.php/c_login/logout');?>">Log Out</a></li>
					</ul>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end container-fluid -->
	</div>
	<!-- end #header -->
</body>
</html>