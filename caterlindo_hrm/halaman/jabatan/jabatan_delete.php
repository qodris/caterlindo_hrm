<?php
$jabatan->kd_jabatan = $_GET['id'];

if ($jabatan->Delete()) {
	?>
	<script>
		alert('Berhasil Hapus Kode jabatan = <?php echo $_GET['id']; ?>!');
		window.location.assign('?p=jabatan_data');
	</script>
	<?php
} else {
	?>
	<script>
		alert('Gagal Hapus Kode jabatan = <?php echo $_GET['id']; ?>!');
		window.location.assign('?p=jabatan_data');
	</script>
	<?php
}