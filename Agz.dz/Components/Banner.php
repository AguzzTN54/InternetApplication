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


$particle = '';
for($i=0; $i<30; $i++){
  $particle .= '<div class="particle"></div>';
}

$konfirmasi = $data['confirmed']['value'];
$meninggal = $data['deaths']['value'];
$sembuh = $data['recovered']['value'];

?>

<!-- header -->
<header id="header">
  <nav>
    <div class="brand">
      <h1>COVID</h1>
    </div>
    <button class="navbar-toggle"><span></span></button>
    <div class="navbar-content">
      <a href="#header" class="navbar-item active">Home</a>
      <a href="#persebaran" class="navbar-item">Persebaran</a>
      <a href="#gejala" class="navbar-item">Gejala</a>
      <a href="#pencegahan" class="navbar-item">Pencegahan</a>
    </div>
  </nav>

  <div class="jumbotron">
    <?=$particle;?>
    <div class="main-pic">
      <img src="assets/images/flu-girl.svg" alt="Flu Girl" class="flip-x" />
    </div>
    <div class="jumbotron-text pt-3">
      <h1 class="nama">Corona Virus Disease</h1>
      <span class="display ml-1 mr-1">Heal The World, Jaga Dirimu dan Orang Tersayang</span>

      <h4 class="greet txt-primary txt-white mt-2">GLOBALS</h4>
      <div class="d-flex content-center items-center wrap">
        <div class="bg-warning text-white m-1 p-1 pl-2 pr-2 rounded">
          <h2 class="greet mb-1 format"><?=$konfirmasi?></h2>
          <span>Konfirmasi</span>
        </div>
        <div class="bg-danger text-white m-1 p-1 pl-2 pr-2 rounded">
          <h2 class="greet mb-1 format"><?=$meninggal?></h2>
          <span>Meninggal</span>
        </div>
        <div class="bg-success text-white m-1 p-1 pl-2 pr-2 rounded">
          <h2 class="greet mb-1 format"><?=$sembuh?></h2>
          <span>Sembuh</span>
        </div>
      </div>
      <div class="d-block mt-2">
        <a href="#persebaran" class="btn btn-info p-1 pl-5 pr-5" style="width: min-content;">Persebaran</a>
      </div>
    </div>
  </div>
</header>
<!-- Akhir Header -->