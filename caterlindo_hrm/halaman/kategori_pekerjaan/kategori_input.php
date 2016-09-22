<?php
// Cara buat kode otomatis!!!
$kode = $crud->buatID('tb_kat_pekerjaan', array('select' => 'MAX(id), MAX(kd_kat_pekerjaan) as IDMax'), 'KTG');
$judul = 'Kategori Pekerjaan';
if (isset($_POST['btnInput'])) {
	include_once 'act/actInput.php';
}
?>
<div class="content-panel">
	<div class="panel-heading">
		<h3><i class="fa fa-angle-right"></i> Input Data <small>Form Input Data <?php echo $judul; ?></small></h3>
	</div>
</div>

<div class="clearfix"></div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="form-panel">
			<div class="pull-right">
				<a href="?p=<?php echo $_GET['p']; ?>" class="btn btn-info" type="button">Kembali</a>
			</div>
			<div class="x_title">
				<h2>Form Input <small>Data <?php echo $judul; ?></small></h2>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="" enctype="multipart/form-data">

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode">
							Kode Kategori Pekerjaan<span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<input type="text" name="kode" id="kode" class="form-control" value="<?php echo $kode; ?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori">
							Kategori Pekerjaan <span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<input type="text" id="kategori" placeholder="Kategori Pekerjaan" name="kategori" class="form-control col-md-7 col-xs-12" required="required">
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