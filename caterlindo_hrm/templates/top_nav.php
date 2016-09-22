<?php
include_once 'objects/tb_admin.php';

$admin = new Admin($db);

$admin->id_admin = $_SESSION['kd_admin'];

$data_adm = $admin->detailAdmin();
?>

<body>

	<section id="container" >
		<!-- **********************************************************************************************************************************************************
		TOP BAR CONTENT & NOTIFICATIONS
		*********************************************************************************************************************************************************** -->
		<!--header start-->
		<header class="header black-bg">
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
			</div>
			<!--logo start-->
			<?php
			$setting->nm_setting = 'main_title';
			$setting->ambilSetting();
			?>
			<a href="index.html" class="logo"><b><?php echo $setting->setting; ?></b></a>
			<!--logo end-->
			<div class="top-menu">
				<ul class="nav pull-right top-menu">
					<li><a class="logout" href="?p=logout">Logout</a></li>
				</ul>
			</div>
		</header>
		<!--header end-->