<?php
$jabatan->kd_jabatan = $_GET['id'];
$jabatan->Detail();
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
					<a href="?p=jabatan_data" class="btn btn-info" type="button">Kembali</a>
				</div>
				<h2>
					Detail jabatan<br />
					<u style="color:blue;"><?php echo $jabatan->nm_jabatan; ?></u>
				</h2>
			</div>
			<div class="panel-body">	
				<div class="form-group col-md-9">
					<label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">
						<b>Nama jabatan</b>
					</label>
					<div class="control-label col-md-10 col-sm-6 col-xs-12">
						<?php echo $jabatan->nm_jabatan; ?>
					</div>
				</div>
				<div class="form-group col-md-9">
					<label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">
						<b>Deskripsi</b>
					</label>
					<div class="control-label col-md-10 col-sm-6 col-xs-12">
						<?php echo $jabatan->deskripsi; ?>
					</div>
				</div>
				 
				<div class="form-group col-md-9">
					<label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">
						<b>Spesifikasi</b>
					</label>
					<div class="control-label col-md-10 col-sm-6 col-xs-12">
						<?php echo $jabatan->spesifikasi; ?>
					</div>
				</div>
				<div class="form-group col-md-9">
					<label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">
						<b>Catatan</b>
					</label>
					<div class="control-label col-md-10 col-sm-6 col-xs-12">
						<?php echo $jabatan->catatan; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>