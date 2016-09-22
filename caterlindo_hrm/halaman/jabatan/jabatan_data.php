<?php
include_once 'objects/tb_jabatan.php';

$jabatan = new Jabatan($db);

if (isset($_GET['p'])) {
	if (isset($_GET['v'])) {
		
		$v = $_GET['v'];
		
		if ($v == 'input') {
			include_once 'jabatan_input.php';
		} if ($v == 'detail') {
			include_once 'jabatan_detail.php';
		} if ($v == 'edit') {
			include_once 'jabatan_edit.php';
		} if ($v == 'delete') {
			include_once 'jabatan_delete.php';
		}
	}
} if (!isset($_GET['v'])) {
	?>
	<div class="content-panel">
		<div class="panel-heading">
			<h3><i class="fa fa-angle-right"></i> Data jabatan <small>Data jabatan</small></h3>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="form-panel">
				<div class="pull-right">
					<!-- <a href="?p=buku_data&v=buku_import" class="btn btn-success" type="button"><i class="fa fa-file-excel-o"></i> Import File Excel</a> -->
					<a href="?p=jabatan_data&v=input" class="btn btn-primary" type="button"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="x_title">
					<h2>Tabel jabatan</h2>
				</div>
				<div class="x_content">
					<table id="dataTable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th style="width:5%;">No.</th>
								<th style="width:10%;">Jabatan</th>
								<th style="width:10%;">Deskripsi</th>
								<th style="width:10%;">Spesifikasi</th>
								<th style="width:10%;">Catatan</th>
								<th style="width:5%; text-align:center;">Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$hasil = $jabatan->data_jabatan();
							$no = 0;
								while ($row = $hasil->fetch(PDO::FETCH_ASSOC)){
								extract($row);
								$no++;
								?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo "{$nm_jabatan}";?></td>
									<td><?php echo "{$deskripsi}"; ?></td>
									<td><?php echo "{$spesifikasi}"; ?></td>
									<td><?php echo "{$catatan}"; ?></td>
									<td align="center">
										<div class="btn-group">
											<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
												Opsi <span class="caret"></span>
											</button>
											<ul class="dropdown-menu" role="menu">
												<li><a href="?p=jabatan_data&v=detail&id=<?php echo "{$kd_jabatan}"; ?>"><i class="fa fa-book"></i> Detail</a></li>
												<li class="divider"></li>
												<li><a href="?p=jabatan_data&v=edit&id=<?php echo "{$kd_jabatan}"; ?>"><i class="fa fa-pencil"></i> Edit</a></li>
												<li><a href="?p=jabatan_data&v=delete&id=<?php echo "{$kd_jabatan}"; ?>"><i class="fa fa-times"></i> Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								<?php
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