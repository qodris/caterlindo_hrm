<?php
if(!empty($_POST['txtKodeGaji'])){
	$nm_tabel = 'tb_gaji';
	$data = array(
		'nm_gaji' => $_POST['txtNmGaji'],
		'min_gaji' => $_POST['txtGajiMin'],
		'max_gaji' => $_POST['txtGajiMax']
	);
	$where = array('kd_gaji' => $_POST['txtKodeGaji']);
	
	$update = $crud->update($nm_tabel, $data, $where);
	

	// Memulai edit data admin
	if ($update) {		
		// Jika berhasil mengubah data admin munculkan notifikasi sukses, dan kembali kehalaman data
		?>
		<script>
			alert('Berhasil mengubah data!');
			window.location.assign('?p=gaji_data');
		</script>
		<?php
	} else {
		
		// Jika gagal munculkan notifikasi gagal ubah data admin!!!
		?>
		<script>
			alert('Gagal Mengubah data, KESALAHAN SISTEM!');
		</script>
		<?php
	}
}