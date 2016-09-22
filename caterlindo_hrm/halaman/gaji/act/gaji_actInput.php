<?php
$nm_tabel = 'tb_gaji';
$data = array(
	'kd_gaji' => $_POST['txtKodeGaji'],
	'nm_gaji' => $_POST['txtNmGaji'],
	'min_gaji' => $_POST['txtGajiMin'],
	'max_gaji' => $_POST['txtGajiMax']
);
$insert = $crud->create($nm_tabel,$data);
		
if ($insert) {
	?>
	<script>
		alert("Berhasil menambahkan data!!!");
		window.location.assign('?p=gaji_data');
	</script>
	<?php
} else {
	?>
	<script>
		alert("Gagal menambahkan data!!!");
	</script>
	<?php
}