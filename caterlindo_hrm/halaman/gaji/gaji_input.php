<?php
// Cara buat kode otomatis!!!
$kode = $crud->buatID('tb_gaji', array('select' => 'MAX(id), MAX(kd_gaji) as IDMax'), 'GAJ');

if (isset($_POST['btnInput'])) {
	include_once 'act/gaji_actInput.php';
}
?>
<div class="content-panel">
	<div class="panel-heading">
		<h3><i class="fa fa-angle-right"></i> Input Data <small>Form Input Data Gaji</small></h3>
	</div>
</div>

<div class="clearfix"></div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-panel">
			<div class="pull-right">
				<a href="?p=gaji_data" class="btn btn-info" type="button">Kembali</a>
			</div>
			<div class="x_title">
				<h2>Form Input <small>Data Gaji</small></h2>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="" enctype="multipart/form-data">

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="idKodeGaji">
							Kode Gaji <span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<input type="text" name="txtKodeGaji" id="idKodeGaji" class="form-control" value="<?php echo $kode; ?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="idNamaGaji">
							Nama Gaji <span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<input type="text" id="idNamaGaji" placeholder="Nama Gaji" name="txtNmGaji" class="form-control col-md-7 col-xs-12" required="required">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="idGajiMin">
							Gaji Minimum <span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<input type="text" id="idGajiMin" placeholder="Gaji Minimum" name="txtGajiMin" class="form-control col-md-7 col-xs-12" required="required">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="idGajiMin">
							Gaji Maximum <span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<input type="text" id="idGajiMax" placeholder="Gaji Maximum" name="txtGajiMax" class="form-control col-md-7 col-xs-12" required="required">
						</div>
					</div>
					   
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
							<button type="submit" class="btn btn-primary" name="btnInput">Simpan</button>
							<button type="reset" class="btn btn-warning">Batal</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>