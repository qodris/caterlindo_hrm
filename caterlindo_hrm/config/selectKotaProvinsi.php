<?php
@session_start();
//error_reporting(0);

include('koneksi.php');
include('../objects/tb_provinsi.php');
include('../objects/tb_kota.php');

$database = new Database();
$db = $database->getKoneksi();

$kota = new Kota($db);
$provinsi = new Provinsi($db);

if(isset($_POST['id_provinsi'])) {
	$kota->id_provinsi = $_POST['id_provinsi'];
	$query = $kota->dataKotaProvinsi();

	echo '<option value="">-- Pilih Kota --</option>';

	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		extract($row);

		echo '<option value="' .$id_kota. '">' .$nm_kota. '</option><br>';
	}
}