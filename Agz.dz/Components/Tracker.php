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

echo' <!-- Country List -->
	<case-list class="d-flex">';
	
if ($GLOBALS['dataScope'] === 'global' || $GLOBALS['dataScope'] === 'id') {
	$track = $trackData['data']['data'];
} else {
	$track = array($trackData['data']);
}

foreach($track as $data){
	if ($GLOBALS['dataScope'] === 'global') {
		$negara = $data['World'];
		$konfirmasi = $data['Positive'];
		$sembuh = $data['Cure'];
		$meninggal = $data['Death'];
	} else if ($GLOBALS['dataScope'] === 'id') {
		$official = $data['link'];
		$negara = $data['Province'];
		$konfirmasi = $data['Positive'];
		$sembuh = $data['Cure'];
		$meninggal = $data['Death'];
		$moreInfo = '<span class="d-block txt-right pt-1 bg-white">
			More: <a href="http://'.$official.'">'.substr($official, 0, 20).'</a>
		</span>';
		$images = '<img src="./assets/images/provinsi/'.str_replace( ' ', '-',strtolower($negara)).'.svg"/>';
	}else{
			$negara = $GLOBALS['dataScope'];
			$flag = '<i class="flag flag-'.strtolower($negara).'"></i>';
      $konfirmasi = $data['confirmed']['value'];
      $sembuh = $data['recovered']['value'];
			$meninggal = $data['deaths']['value'];
	}
?>
<case-item class="shadow rounded">
  <?=@$images;?>
  <h3 class="heading heading-1 strong"><?=@$flag?> <?=ucwords($negara)?></h3>
  <div class="cases txt-center txt-white mt-1">
    <div class="confirm bg-warning rounded p-1">
      <h2 class="mb-1 format"><?=$konfirmasi?></h2>
      <span>Konfirmasi</span>
    </div>
    <div class="death bg-danger rounded p-1">
      <h2 class="mb-1 format"><?=$meninggal?></h2>
      <span>Meninggal</span>
    </div>
    <div class="recover bg-success rounded p-1">
      <h2 class="mb-1 format"><?=$sembuh?></h2>
      <span>Sembuh</span>
    </div>
  </div>
  <?=@$moreInfo?>
</case-item>

<?php
}
echo '</case-list>
<!-- Akhir Country List -->';
?>