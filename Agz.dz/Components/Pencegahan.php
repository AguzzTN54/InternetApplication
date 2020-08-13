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

$pencegahan = array(
		array(
		'title' => 'Cuci Tangan Sesuai Anjuran WHO',
		'pic' =>  'cuci-tangan.svg'
		),
		array(
			'title' => 'Menggunakan Masker Saat Bepergian',
			'pic' =>  'masker.svg'
		),
		array(
			'title' => 'Di Rumah Saja apabila tidak ada Keperluan Mendesak',
			'pic' =>  'stay-at-home.svg'
		),
		array(
			'title' => 'Konsumsi makanan Sehat',
			'pic' =>  'makanan-seimbang.svg'
		),
		array(
			'title' => 'Hindari Konsumsi Daging Mentah',
			'pic' =>  'no-hewan.svg'
		),
		array(
			'title' => 'Segera Hubungi Tim Kesehatan ketika merasa kurang Sehat',
			'pic' =>  'berobat.svg'
		),
		array(
			'title' => 'Tetap Berolahraga dengan Teratur',
			'pic' =>  'olahraga.svg'
		),
		array(
			'title' => 'Waspada Terhadap Hewan',
			'pic' =>  'waspada-hewan.svg'
		)
	);
?>

<section class="container mt-4" id="pencegahan">
  <h2 class="heading heading-2 strong">Pencegahan</h2>
  <cegah-list class="txt-center">
    <?php
			foreach($pencegahan as $data){
			echo '<cegah-item>
				<figure>
					<img src="assets/images/pencegahan/'.$data['pic'].'" alt="'.$data['title'].'" />
				</figure>
				<figcaption class="d-block txt-primary strong">
					'.$data['title'].'
				</figcaption>
			</cegah-item>';
			}
		?>
  </cegah-list>
</section>