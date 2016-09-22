<?php
		// Set variabel data admin
		$jabatan->kd_jabatan = $_POST['kode'];
		$jabatan->nm_jabatan = $_POST['nm_jabatan'];
		$jabatan->deskripsi = $_POST['deskripsi'];
		$jabatan->spesifikasi = $_POST['spesifikasi'];
		$jabatan->catatan = $_POST['catat'];
		
					if ($jabatan->insert()) {
				?>
				<script>
					alert("Berhasil menambahkan data!!!");
					window.location.assign('?p=jabatan_data');
				</script>
				<?php
			} else {
				?>
				<script>
					alert("Gagal menambahkan data!!!");
				</script>
				<?php
			}
		
	
 ?>