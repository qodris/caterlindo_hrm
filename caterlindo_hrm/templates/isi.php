<?php
if (isset($_GET['p'])) {
	$p = $_GET['p'];
	
	// Menu Modul Admin
	if ($p == 'admin_data') {
		include 'halaman/admin/' . $p . '.php';
	} if ($p == 'jabatan_data') {
		include 'halaman/jabatan/' . $p . '.php';
	} if ($p == 'gaji_data') {
		include 'halaman/gaji/' . $p . '.php';
	} if ($p == 'status_data'){
		include 'halaman/status_kerja/' . $p . '.php';
	} if ($p == 'kategori_data'){
		include 'halaman/kategori_pekerjaan/'. $p .'.php';
	}
	
	// Profil
	if ($p == 'profil_data') {
		include 'halaman/profil/' . $p . '.php';
	}
	
	// Dashboard, Setting, Logout
	if ($p == 'dashboard' or $p == 'logout' or $p == 'setting') {
		include 'halaman/' . $p . '.php';
	}
} else {
	include 'halaman/dashboard.php';	
}