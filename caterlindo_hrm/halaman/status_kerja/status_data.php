<?php
if (isset($_GET['p'])) {
	if (isset($_GET['v'])) {
		
		$v = $_GET['v'];
		
		if ($v == 'input') {
			include_once 'status_input.php';
		} if ($v == 'detail') {
			include_once 'status_detail.php';
		} if ($v == 'edit') {
			include_once 'status_edit.php';
		} if ($v == 'delete') {
			include_once 'status_delete.php';
		}
	}
} if (!isset($_GET['v'])) {
	?>
	<div class="content-panel">
		<div class="panel-heading">
			<h3><i class="fa fa-angle-right"></i> Data status <small>Data status</small></h3>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="form-panel">
				<div class="pull-right">
					<!-- <a href="?p=buku_data&v=buku_import" class="btn btn-success" type="button"><i class="fa fa-file-excel-o"></i> Import File Excel</a> -->
					<a href="?p=<?php echo $_GET['p']; ?>&v=input" class="btn btn-primary" type="button"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="x_title">
					<h2>Tabel Status Karyawan</h2>
				</div>
				<div class="x_content">
					<table id="dataTable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th style="width:5%;">No.</th>
								<th style="width:10%;">Status karyawan</th>
								<th style="width:5%; text-align:center;">Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$hasil = $crud->read('tb_status_kerja', array('order_by' => 'nm_status_kerja ASC'));
							$no = 0;
							if (!empty($hasil)) {
								foreach($hasil as $row) {
									extract($row);
									$no++;
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo "{$nm_status_kerja}";?></td>
										 
										<td align="center">
											<div class="btn-group">
												<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
													Opsi <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li><a href="?p=status_data&v=detail&id=<?php echo "{$kd_status_kerja}"; ?>"><i class="fa fa-book"></i> Detail</a></li>
													<li class="divider"></li>
													<li><a href="?p=status_data&v=edit&id=<?php echo "{$kd_status_kerja}"; ?>"><i class="fa fa-pencil"></i> Edit</a></li>
													<li><a href="?p=status_data&v=delete&id=<?php echo "{$kd_status_kerja}"; ?>"><i class="fa fa-times"></i> Delete</a></li>
												</ul>
											</div>
										</td>
									</tr>
									<?php
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php
}