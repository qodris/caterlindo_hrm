<?php
$gajiDetail = $crud->read('tb_gaji', array('where' => array('kd_gaji' => $_GET['id']), 'return_type'=>'single'));
if(!empty($gajiDetail)){
	?>
	<div class="content-panel">
		<div class="panel-heading">
			<h3><i class="fa fa-angle-right"></i> Data jabatan <small>Detail Jabatan</small></h3>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12">
			<div class="form-panel">
				<div class="panel-heading">
					<div class="pull-right">
						<a href="?p=gaji_data" class="btn btn-info" type="button">Kembali</a>
					</div>
					<h2>
						Detail Gaji<br />
						<u style="color:blue;"><?php echo $gajiDetail['nm_gaji']; ?></u>
					</h2>
				</div>
				<div class="panel-body">	
					<div class="form-group col-md-9">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
							<b>Nama Gaji</b>
						</label>
						<div class="control-label col-md-9 col-sm-6 col-xs-12">
							<?php echo $gajiDetail['nm_gaji']; ?>
						</div>
					</div>
					<div class="form-group col-md-9">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
							<b>Gaji Minimum (Rp)</b>
						</label>
						<div class="control-label col-md-9 col-sm-6 col-xs-12">
							<?php echo $crud->formatRupiah($gajiDetail['min_gaji']); ?>
						</div>
					</div>
					 
					<div class="form-group col-md-9">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
							<b>Gaji Maximum (Rp)</b>
						</label>
						<div class="control-label col-md-9 col-sm-6 col-xs-12">
							<?php echo $crud->formatRupiah($gajiDetail['max_gaji']); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}