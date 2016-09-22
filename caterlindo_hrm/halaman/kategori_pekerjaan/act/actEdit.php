<?php
if(!empty($_POST['kode'])){
	$nm_tabel = 'tb_kat_pekerjaan';
	$data = array(
		'nm_kat_pekerjaan' => $_POST['kategori']
	);
	$where = array('kd_kat_pekerjaan' => $_POST['kode']);
	
	$update = $crud->update($nm_tabel, $data, $where);
	

	// Memulai edit data admin
	if ($update) {		
		// Jika berhasil mengubah data admin munculkan notifikasi sukses, dan kembali kehalaman data
		?>
		<script>
			alert('Berhasil mengubah data!');
			window.location.assign('?p=<?php echo $_GET['p']; ?>&v=<?php echo $_GET['v']; ?>&id=<?php echo $_GET['id']; ?>');
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