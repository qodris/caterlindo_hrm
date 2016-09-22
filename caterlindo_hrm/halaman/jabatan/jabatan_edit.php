<?php
$jabatan->kd_jabatan = $_GET['id'];
$jabatan->Detail();

if (isset($_POST['btnEdit'])) {
	include_once 'act/jabatan_actEdit.php';
}
?>

<div class="content-panel">
	<div class="panel-heading">
		<h3><i class="fa fa-angle-right"></i> Edit Data Jabatan <small>Form Edit Jabatan</small></h3>
	</div>
</div>

<div class="clearfix"></div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-panel">
			<div class="pull-right">
				<a href="?p=jabatan_data" class="btn btn-info" type="button">Kembali</a>
			</div>
			<div class="x_title">
				<h2>Form Edit <small>Data Jabatan</small></h2>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="" enctype="multipart/form-data">

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
							Kode Jabatan <span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<input type="text" name="kode" class="form-control" value="<?php echo $_GET['id']; ?>" readonly>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
							Nama Jabatan <span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<input type="text" id="first-name" placeholder="jabatan" name="nm_jabatan" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $jabatan->nm_jabatan; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
							Deskripsi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" name="deskripsi" placeholder="Deskripsi" rows="5"><?php echo $jabatan->deskripsi; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
							Spesifikasi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" name="spesifikasi" placeholder="spesifikasi" rows="5"><?php echo $jabatan->spesifikasi; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
							Catatan <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" name="catatan" placeholder="catatan" rows="5"><?php echo $jabatan->catatan; ?></textarea>
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
							<button type="submit" class="btn btn-primary" name="btnEdit">Edit</button>
							<button type="reset" class="btn btn-warning">Batal</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>