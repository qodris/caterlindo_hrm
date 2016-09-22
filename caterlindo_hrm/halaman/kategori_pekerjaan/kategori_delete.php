<?php
if(!empty($_GET['id'])){
	$nm_tabel = 'tb_kat_pekerjaan';
	$where = array('kd_kat_pekerjaan' => $_GET['id']);
	
	$delete = $crud->delete($nm_tabel,$where);

	if ($delete) {
		?>
		<script>
			alert('Berhasil Hapus Kode Kategori = <?php echo $_GET['id']; ?>!');
			window.location.assign('?p=<?php echo $_GET['p']; ?>');
		</script>
		<?php
	} else {
		?>
		<script>
			alert('Gagal Hapus Kode Kategori = <?php echo $_GET['id']; ?>!');
			window.location.assign('?p=<?php echo $_GET['p']; ?>');
		</script>
		<?php
	}
}