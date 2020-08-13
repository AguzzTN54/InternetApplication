<?php
/* -----------------------------------------------------------------------

 more projects => http://github.com/AguzzTN54

   * Author 	:  Agustinus Yohannes
   * NIM      :  418041
   * Jurusan	:  Teknik Informatika
   * Semester	:  4
   * Dalam rangka mememnuhi tugas Internet Application

----------------------------------------------------------------------- */

/* BAR-TEN FOURTY  */

// Contoh Variabel Global
$GLOBALS['title'] = 'Data Sebaran Virus Corona';
// Ambil nilai variable secara dinamis
$country = @$_GET['negara'];
if(!$country){
	$GLOBALS['dataScope'] = 'global';
}else{
	$GLOBALS['dataScope'] = $country;
}

require_once './Component.class.php';
require_once './Data.class.php';
$component = new Component();
$data = new Data();

try {
	if(!$data->koneksi()){
		throw new Exception("Gagal Menghubungkan, pastikan terhubung dengan koneksi Internet", 1);
	}else{

		$component
			->header()
			->banner(
				$data->getGlobalcase()
			)
			->main(
				$data->listNegara(),
				$data->getTrackData(
					$GLOBALS['dataScope']
				)
			)
			->gejala()
			->pencegahan()
			->footer();
	}
} catch (Exception $e) {
	echo $e->getMessage();
}


?>