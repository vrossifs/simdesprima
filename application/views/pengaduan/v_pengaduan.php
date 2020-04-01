<!DOCTYPE html>
<html lang="en">
<head>
	<title>Laporan Masuk</title>
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="<?php echo base_url('index.php/c_lamas/index');?>">Home</a></li>
				<li class="active">Laporan Masuk</li>
			</ol>
			<!-- end breadcrumb -->
			<h1 class="page-header m-b-10">Laporan Masuk</h1><hr />
			<!-- begin row -->
			<div class="row">
				<!-- begin col-12 -->
				<div class="col-md-12">
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							</div>
							<h4 class="panel-title">Data Laporan Masuk</h4>
						</div>
						<div class="panel-body">
							<form action="<?php echo base_url('index.php/c_lamas/index') ;?>" method="post">
								<table id="data-table" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th><input type="checkbox" class="checkAll" name="checkAll" /></th>
											<th>No</th>
											<th>Pengirim</th>
											<th>NIK</th>
											<th>Isi Pesan</th>
											<th>Status</th>
											<th>Dilaporkan Pada</th>
											<th>Aksi</th>
										</tr>	
									</thead>
									<tbody>
										<?php 
										$no = 1;
										foreach ($datalist as $key) {
											$data = $key['ticket'].'|'.str_replace(" ","-", $key['Nama']).'||'.str_replace(" ","-", $key['komentar']);
											?>
											<tr>
												<td><input type="checkbox" name="check|<?php echo $key['ticket'];?>" value="checked"/></td>
												<td><?php echo $no++;?></td>
												<td><?php echo $key['Nama'] ;?></td>
												<td><?php echo $key['NIK'] ;?></td>
												<td><?php echo $key['komentar'] ;?></td>
												<td><?php echo $key['Description'] ;?></td>
												<td><?php echo date("H:i - d/m/Y", strtotime($key['tgl_ticket']));?></td>
												<?php if ($key['Description'] == 'Append') { ?>
													<td>
														<a href="<?php echo base_url('index.php/c_dialog/dialog_tanggap/'.$key['ticket']);?>" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-icon btn-sm" title="Berikan Tanggapan"><i class="fa fa-paper-plane"></i></a> | <a href="<?php echo base_url('index.php/c_lamas/close_tanggapan/'.$key['ticket']);?>" onclick="return confirm('Apakah anda yakin menutup aduan ini?')" class="btn btn-inverse btn-icon btn-sm" title="Close"><i class="fa fa-times"></i></a> | <a href="<?php echo base_url('index.php/c_dialog/dialog_percakapan/'.$data);?>" data-toggle="modal" data-target="#myModal" class="btn btn-default btn-icon btn-sm" title="Lihat Percakapan"><i class="fa fa-comments"></i></a>
													</td>
												<?php } else { ?>
													<td>
														<a href="<?php echo base_url('index.php/c_dialog/dialog_tanggap/'.$key['ticket']);?>" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-icon btn-sm" title="Berikan Tanggapan"><i class="fa fa-paper-plane"></i></a> | <a href="<?php echo base_url('index.php/c_dialog/dialog_percakapan/'.$key['ticket']);?>" data-toggle="modal" data-target="#myModal" class="btn btn-default btn-icon btn-sm" title="Lihat Percakapan"><i class="fa fa-comments"></i></a>
													</td>
												<?php } ?>
											</tr>
										<?php } ?>
									</tbody>
								</table>
								<button type="submit" class="btn btn-sm btn-danger" name="del_all" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus data terpilih</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end #content -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<script type="text/javascript">
		$(document).ready(function () {
			$('.checkAll').on('click', function () {
				$(this).closest('table').find('tbody :checkbox')
				.prop('checked', this.checked)
				.closest('tr').toggleClass('selected', this.checked);
			});

			$('tbody :checkbox').on('click', function () {
		    	$(this).closest('tr').toggleClass('selected', this.checked);
		    	$(this).closest('table').find('.checkAll').prop('checked', ($(this).closest('table').find('tbody :checkbox:checked').length == $(this).closest('table').find('tbody :checkbox').length));
		    });
		});
	</script>

	<!-- modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body"></div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <script language="javascript">
        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });
    </script>
    <!-- end modal -->
</body>
</html>
