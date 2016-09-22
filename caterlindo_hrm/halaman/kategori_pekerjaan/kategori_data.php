<?php
if (isset($_GET['p'])) {
	if (isset($_GET['v'])) {
		
		$v = $_GET['v'];
		
		if ($v == 'input') {
			include_once 'kategori_input.php';
		} if ($v == 'detail') {
			include_once 'kategori_detail.php';
		} if ($v == 'edit') {
			include_once 'kategori_edit.php';
		} if ($v == 'delete') {
			include_once 'kategori_delete.php';
		}
	}
} if (!isset($_GET['v'])) {
	$judul = 'Kategori Pekerjaan';
	?>
	<div class="content-panel">
		<div class="panel-heading">
			<h3><i class="fa fa-angle-right"></i> Data <small><?php echo $judul; ?></small></h3>
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
					<h2>Tabel <?php echo $judul; ?></h2>
				</div>
				<div class="x_content">
					<table id="dataTable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th style="width:5%;">No.</th>
								<th style="width:10%;">Kategori Pekerjaan</th>
								<th style="width:5%; text-align:center;">Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$hasil = $crud->read('tb_kat_pekerjaan', array('order_by' => 'nm_kat_pekerjaan ASC'));
							$no = 0;
							if (!empty($hasil)) {
								foreach($hasil as $row) {
									extract($row);
									$no++;
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo "{$nm_kat_pekerjaan}";?></td>
										 
										<td align="center">
											<div class="btn-group">
												<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
													Opsi <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li><a href="?p=kategori_data&v=detail&id=<?php echo "{$kd_kat_pekerjaan}"; ?>"><i class="fa fa-book"></i> Detail</a></li>
													<li class="divider"></li>
													<li><a href="?p=kategori_data&v=edit&id=<?php echo "{$kd_kat_pekerjaan}"; ?>"><i class="fa fa-pencil"></i> Edit</a></li>
													<li><a href="?p=kategori_data&v=delete&id=<?php echo "{$kd_kat_pekerjaan}"; ?>"><i class="fa fa-times"></i> Delete</a></li>
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