<?php
// Variabel data admin yang akan diedit
$jabatan->kd_jabatan = $_POST['kode'];
$jabatan->nm_jabatan = $_POST['nm_jabatan'];
$jabatan->deskripsi = $_POST['deskripsi'];
$jabatan->spesifikasi = $_POST['spesifikasi'];
$jabatan->catatan = $_POST['catatan'];
 

 

	// Memulai edit data admin
	if ($jabatan->Edit()) {		
		// Jika berhasil mengubah data admin munculkan notifikasi sukses, dan kembali kehalaman data
		?>
		<script>
			alert('Berhasil mengubah data!');
			window.location.assign('?p=jabatan_data');
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
