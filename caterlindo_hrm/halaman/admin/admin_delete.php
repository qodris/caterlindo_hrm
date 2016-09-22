<?php
$admin->kd_admin = $_GET['id'];

if ($admin->actDeleteAdmin()) {
	?>
	<script>
		alert('Berhasil Hapus Admin id = <?php echo $_GET['id']; ?>!');
		window.location.assign('?p=admin_data');
	</script>
	<?php
} else {
	?>
	<script>
		alert('Gagal Hapus Admin id = <?php echo $_GET['id']; ?>!');
		window.location.assign('?p=admin_data');
	</script>
	<?php
}