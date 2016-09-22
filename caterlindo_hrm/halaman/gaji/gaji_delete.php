<?php
if(!empty($_GET['id'])){
	$nm_tabel = 'tb_gaji';
	$where = array('kd_gaji' => $_GET['id']);
	
	$delete = $crud->delete($nm_tabel,$where);

	if ($delete) {
		?>
		<script>
			alert('Berhasil Hapus Kode Gaji = <?php echo $_GET['id']; ?>!');
			window.location.assign('?p=gaji_data');
		</script>
		<?php
	} else {
		?>
		<script>
			alert('Gagal Hapus Kode Gaji = <?php echo $_GET['id']; ?>!');
			window.location.assign('?p=gaji_data');
		</script>
		<?php
	}
}