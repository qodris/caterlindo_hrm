<?php
class Setting {
	private $koneksi;
	private $nm_tabel = "tb_setting";
	
	public $id_setting;
	public $nm_setting;
	public $setting;
	
	public function __construct($db) {
		$this->koneksi = $db;
	}
	
	function ambilSetting() {
		$query = "SELECT
					*
				FROM
					" . $this->nm_tabel . "
				WHERE
					nm_setting = ?
				";
		
		$stmt = $this->koneksi->prepare($query);
		
		$stmt->bindParam(1, $this->nm_setting);
		
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->setting = $row['setting'];
		 
		return $stmt;
	}
	
	function ubahSetting() {
		$query = "UPDATE
					" . $this->nm_tabel . "
				SET
					setting = ?
				WHERE
					nm_setting = ?
				";
		
		$stmt = $this->koneksi->prepare($query);
		
		$stmt->bindParam(1, $this->setting);
		$stmt->bindParam(2, $this->nm_setting);
		
		$stmt->execute();
		
		return $stmt;
	}
	
	function delUnusedImg() {
		
		$admin_fotos = glob("assets/img/admin/*.*");
		$user_fotos = glob("assets/img/user/*.*");
		$hotel_fotos = glob("assets/img/hotel/*.*");
		$kamar_fotos = glob("assets/img/kamar/*.*");
		
		foreach ($admin_fotos as $admin_foto) {
			$foto_admin = substr($admin_foto, 17);
			
			$q_admin = "SELECT nm_img FROM tb_img WHERE nm_img = '$foto_admin'";
			
			$stmt_admin = $this->koneksi->prepare($q_admin);
			
			$stmt_admin->execute();
			
			$num_admin = $stmt_admin->rowCount();
			
			if ($num_admin == 0) {
				unlink($admin_foto);
			}
		}
		
		foreach ($user_fotos as $user_foto) {
			$foto_user = substr($user_foto, 16);
			
			$q_user = "SELECT nm_img FROM tb_img WHERE nm_img = '$foto_user'";
			
			$stmt_user = $this->koneksi->prepare($q_user);
			
			$stmt_user->execute();
			
			$num_user = $stmt_user->rowCount();
			
			if ($num_user == 0) {
				unlink($user_foto);
			}
		}
		
		foreach ($hotel_fotos as $hotel_foto) {
			$foto_hotel = substr($hotel_foto, 17);
			
			$q_hotel = "SELECT nm_img FROM tb_img WHERE nm_img = '$foto_hotel'";
			
			$stmt_hotel = $this->koneksi->prepare($q_hotel);
			
			$stmt_hotel->execute();
			
			$num_hotel = $stmt_hotel->rowCount();
			
			if ($num_hotel == 0) {
				unlink($hotel_foto);
			}
		}
		
		foreach ($kamar_fotos as $kamar_foto) {
			$foto_kamar = substr($kamar_foto, 17);
			
			$q_kamar = "SELECT nm_img FROM tb_img WHERE nm_img = '$foto_kamar'";
			
			$stmt_kamar = $this->koneksi->prepare($q_kamar);
			
			$stmt_kamar->execute();
			
			$num_kamar = $stmt_kamar->rowCount();
			
			if ($num_kamar == 0) {
				unlink($kamar_foto);
			}
		}
	}
}