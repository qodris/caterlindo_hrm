<?php
function formatRupiah($angka) {
	$rp = 'Rp '.number_format($angka, 0, 0, '.').',-';
	
	return $rp;
}