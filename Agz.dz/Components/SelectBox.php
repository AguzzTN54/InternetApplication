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

$countryItem = '';
$selected = '';

foreach($countryList['countries'] as $country){
  if(@$country['iso2']){
    $iso = strtolower($country['iso2']);
    $negara = $country['name'];
    $countryItem .= '<country-item country-id="'.$iso.'"><i class="flag flag-'.$iso.'"></i> '.$negara.'</country-item>';

    if($GLOBALS['dataScope']==$iso){
      $selected .= '<i class="flag flag-'.$iso.'"></i> '.$negara;
    }else{
      $selected .= '';
    }
  }
}

?>

<!-- Select Box -->
<div class="select-country mt-3" id="persebaran">
  <h3 class="heading heading-2 txt-center strong">Pilih Negara</h3>
  <div class="selected shadow">
    <?php
    if($selected){
      echo $selected;
    }
    ?>
  </div>
  <span class="d-block txt-center" style="font-size: 0.9em; position: relative; z-index: -1;">Sumber :
    <a href="#" target="_blank" rel="noopener noreferrer"><?=$trackData['source']?></a></span>

  <country-list class="hide">
    <div>
      <div class="input">
        <input type="text" class="search-country" placeholder="Cari Negara" />
      </div>
      <country-item country-id="global">GLOBAL</country-item>
      <?=$countryItem?>
    </div>
  </country-list>
</div>
<!-- Akhir Select Box -->