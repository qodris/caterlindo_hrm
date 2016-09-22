<?php
include_once 'objects/tb_admin.php';
include_once 'objects/tb_img.php';

$admin = new Admin($db);
$image = new Image($db);

$admin->kd_admin = $_SESSION['kd_admin'];
$image->id_parent = $_SESSION['kd_admin'];

$data_adm = $admin->detailAdmin();
$image->dataImage();
?>

<!-- **********************************************************************************************************************************************************
MAIN SIDEBAR MENU
*********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
	<div id="sidebar"  class="nav-collapse ">
		<!-- sidebar menu start-->
		<ul class="sidebar-menu" id="nav-accordion">

			<p class="centered">
				<a href="?p=profil_data">
					<?php
					$foto = $image->nm_img;
					$dir = 'assets/img/admin/'. $foto .'';
					
					if ((!empty($foto)) and (file_exists($dir))) {
						echo '<img src="assets/img/admin/'. $foto .'" class="img-circle" width="60">';
					} else {
						echo '<img src="assets/img/ui-sam.jpg" class="img-circle" width="60">';
					}
					?>
				</a>
			</p>
			<h5 class="centered"><?php echo $admin->username; ?></h5>
			
			<li class="mt">
				<a href="?p=dashboard" <?php if((!isset($_GET['p'])) or (isset($_GET['p']) and $_GET['p'] == 'dashboard')) {echo 'class="active"';} ?>>
					<i class="fa fa-dashboard"></i>
					<span>Dashboard</span>
				</a>
			</li>
			
			<li class="sub-menu">
				<a href="javascript:;" <?php if((isset($_GET['p'])) and ($_GET['p'] == 'admin_data' || $_GET['p'] == 'jabatan_data' || $_GET['p'] == 'gaji_data' || $_GET['p'] == 'status_data' || $_GET['p'] == 'kategori_data' || $_GET['p'] == 'shift_data')) {echo 'class="active"';} ?>>
					<i class="fa fa-users"></i>
					<span>Admin</span>
				</a>
				<ul class="sub">
					<li class="sub-menu">
						<a href="javascript:;" <?php if((isset($_GET['p'])) and ($_GET['p'] == 'admin_data')) {echo 'class="active"';} ?>>
							Manajemen User
						</a>
						<ul class="sub">
							<li <?php if((isset($_GET['p'])) and ($_GET['p'] == 'admin_data')) {echo 'class="active"';} ?>><a href="?p=admin_data">Data User</a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" <?php if((isset($_GET['p'])) and ($_GET['p'] == 'jabatan_data' || $_GET['p'] == 'gaji_data' || $_GET['p'] == 'status_data' || $_GET['p'] == 'kategori_data' || $_GET['p'] == 'shift_data')) {echo 'class="active"';} ?>>
							Jabatan
						</a>
						<ul class="sub">
							<li <?php if((isset($_GET['p'])) and ($_GET['p'] == 'jabatan_data')) {echo 'class="active"';} ?>><a href="?p=jabatan_data">Data Jabatan</a></li>
							<li <?php if((isset($_GET['p'])) and ($_GET['p'] == 'gaji_data')) {echo 'class="active"';} ?>><a href="?p=gaji_data">Data Gaji</a></li>
							<li <?php if((isset($_GET['p'])) and ($_GET['p'] == 'status_data')) {echo 'class="active"';} ?>><a href="?p=status_data">Status Karyawan</a></li>
							<li <?php if((isset($_GET['p'])) and ($_GET['p'] == 'kategori_data')) {echo 'class="active"';} ?>><a href="?p=kategori_data">Kategori Pekerjaan</a></li>
							<li <?php if((isset($_GET['p'])) and ($_GET['p'] == 'shift_data')) {echo 'class="active"';} ?>><a href="?p=shift_data">Shift Kerja</a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;">
							Perusahaan
						</a>
						<ul class="sub">
							<li><a href="?p=jabatan_data">Informasi Umum</a></li>
							<li><a href="?p=gaji_data">Lokasi</a></li>
							<li><a href="?p=status_data">Struktur Organisasi</a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;">
							Kualifikasi
						</a>
						<ul class="sub">
							<li><a href="?p=jabatan_data">Keahlian</a></li>
							<li><a href="?p=gaji_data">Pendidikan</a></li>
							<li><a href="?p=status_data">Sertifikat</a></li>
							<li><a href="?p=status_data">Bahasa</a></li>
							<li><a href="?p=status_data">Membership</a></li>
						</ul>
					</li>
					<li><a href="?p=user_data">Kewarganegaraan</a></li>
					<li class="sub-menu">
						<a href="javascript:;">
							Setting
						</a>
						<ul class="sub">
							<li><a href="?p=jabatan_data">Setting Email</a></li>
							<li><a href="?p=gaji_data">Berita Email</a></li>
							<li><a href="?p=status_data">Setting Bahasa dan Waktu</a></li>
							<li><a href="?p=status_data">Modul</a></li>
							<li><a href="?p=status_data">Setting Sosial Media</a></li>
						</ul>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="?p=profil_data">
					<i class="fa fa-user"></i>
					<span>Profil</span>
				</a>
			</li>
			
			<li>
				<a href="?p=setting">
					<i class="fa fa-cogs"></i>
					<span>Setting</span>
				</a>
			</li>
			
			<li>
				<a href="?p=logout">
					<i class="fa fa-sign-out"></i>
					<span>Logout</span>
				</a>
			</li>

		</ul>
		<!-- sidebar menu end-->
	</div>
</aside>
<!--sidebar end-->