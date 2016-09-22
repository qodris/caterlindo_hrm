<?php
if(!empty($_GET['id'])){
	$nm_tabel = 'tb_status_kerja';
	$where = array('kd_status_kerja' => $_GET['id']);
	
	$delete = $crud->delete($nm_tabel,$where);

	if ($delete) {
		?>
		<script>
			alert('Berhasil Hapus Kode Gaji = <?php echo $_GET['id']; ?>!');
			window.location.assign('?p=<?php echo $_GET['p']; ?>');
		</script>
		<?php
	} else {
		?>
		<script>
			alert('Gagal Hapus Kode Gaji = <?php echo $_GET['id']; ?>!');
			window.location.assign('?p=<?php echo $_GET['p']; ?>');
		</script>
		<?php
	}
}