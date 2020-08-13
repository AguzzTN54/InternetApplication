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

class Component {
	
	public function header() {
		include './Components/Header.php';
		return $this;
	}

	public function footer() {
		include './Components/Footer.php';
		return $this;
	}

	public function banner($data){
		include './Components/Banner.php';
		return $this;
	}

	public function main($countryList, $trackData){
		echo '<main class="container">';
		include './Components/SelectBox.php';
		include './Components/Tracker.php';
		echo '</main>';
		return $this;
	}

	public function gejala(){
		include './Components/Gejala.php';
		return $this;
	}

	public function pencegahan(){
		include './Components/Pencegahan.php';
		return $this;
	}
}

?>