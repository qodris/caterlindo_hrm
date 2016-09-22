<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
//error_reporting(0);

if (isset($_SESSION['kd_admin']) or isset($_SESSION['session_id'])) {
	include_once 'config/koneksi.php';
	include_once 'config/fungsi_admin.php';
	include_once 'config/setting.php';
	include_once 'config/oop.fungsi.php';
	include_once 'objects/class.crud.php';
	include_once 'objects/tb_admin.php';
	
	/* include_once 'objects/fungsi_sewa.php';
	include_once 'objects/td_sewa.php'; */

	$database = new Database();
	$db = $database->getKoneksi();
	
	$crud = new Crud($db);
	$setting = new Setting($db);
	$admin = new Admin($db);
	
	$admin->kd_admin = $_SESSION['kd_admin'];
	$admin->session_id = $_SESSION['session_id'];
	
	$stmt_adm = $admin->cekSession();
	$num_adm = $stmt_adm->rowCount();
	
	if ($num_adm > 0) {
	
		$setting->delUnusedImg();
		
		include_once 'templates/head.php';
		include_once 'templates/top_nav.php';
		include_once 'templates/sidebar_menu.php';
		?>
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper site-min-height">
				<?php
				include_once 'templates/isi.php';
				?>
			</section>
		</section>
		<!-- /page content -->
		<?php
		include_once 'templates/footer.php';
		include_once 'templates/footer_js.php';
	} if ($num_adm < 1) {
		?>
		<script>
			alert('ID anda login dari komputer lain!');
			window.location.assign('index.php');
		</script>
		<?php
		
		unset($_SESSION['kd_admin']);
		unset($_SESSION['session_id']);
	}
} else {
	?>
	<script>
		alert('Maaf Anda harus login dahulu!');
		window.location.assign('index.php');
	</script>
	<?php
}