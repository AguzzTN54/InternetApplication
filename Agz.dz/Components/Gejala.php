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

$gejala = array('batuk', 'sakit tenggorokan', 'sesak nafas', 'demam');
?>

<section class="bg-white mt-3" id="gejala">
  <div class="container pt-1 pb-2">
    <h2 class="heading heading-2">GEJALA</h2>
    <div class="d-flex gejala">
      <gejala-list class="txt-center">
        <?php
					foreach($gejala as $data){
						echo '<gejala-item class="p-1">
						<figure>
							<img src="assets/images/gejala/'.str_replace(' ', '-', $data).'.svg" alt="'.$data.'" />
						</figure>
						<figcaption class="d-block txt-primary strong">'.ucwords($data).'</figcaption>
					</gejala-item>
					';
					}
				?>

      </gejala-list>
      <aside style="flex-basis: 30%;">
        <div class="rounded bg-primary mb-2 p-1 txt-white txt-center d-flex items-center" style="height: 100%;">
          <div>
            <h3 class="heading strong">Merasa Kurang Sehat ?</h3>
            <p class="heading mt-2 mb-2 ml-1 mr-1">
              Segera Hubungi Tim Kesehatan Terdekat
            </p>
            <a class="btn btn-tertiary d-block"> Hubungi 119</a>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>