<?php
$nm_tabel = 'tb_status_kerja';
$data = array(
	'kd_status_kerja' => $_POST['kode'],
	'nm_status_kerja' => $_POST['status']
);
$insert = $crud->create($nm_tabel,$data);
		
if ($insert) {
	?>
	<script>
		alert("Berhasil menambahkan data!!!");
		window.location.assign('?p=<?php echo $_GET['p']; ?>&v=<?php echo $_GET['v']; ?>');
	</script>
	<?php
} else {
	?>
	<script>
		alert("Gagal menambahkan data!!!");
	</script>
	<?php
}