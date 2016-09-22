<?php
$Detail = $crud->read('tb_status_kerja', array('where' => array('kd_status_kerja' => $_GET['id']), 'return_type'=>'single'));
if(!empty($Detail)){
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
						<a href="?p=<?php echo  $_GET['p']; ?>" class="btn btn-info" type="button">Kembali</a>
					</div>
					<h2>
						Detail Status Kerja<br />
						<u style="color:blue;"><?php echo $Detail['nm_status_kerja']; ?></u>
					</h2>
				</div>
				<div class="panel-body">	
					<div class="form-group col-md-9">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
							<b>Status Kerja</b>
						</label>
						<div class="control-label col-md-9 col-sm-6 col-xs-12">
							<?php echo $Detail['nm_status_kerja']; ?>
						</div>
					</div>
					 
				</div>
			</div>
		</div>
	</div>
	<?php
}