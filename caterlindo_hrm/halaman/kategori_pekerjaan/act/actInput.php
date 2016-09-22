<?php
$nm_tabel = 'tb_kat_pekerjaan';
$data = array(
	'kd_kat_pekerjaan' => $_POST['kode'],
	'nm_kat_pekerjaan' => $_POST['kategori']
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