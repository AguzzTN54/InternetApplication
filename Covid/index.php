<?php
/* -----------------------------------------------------------------------

 Web Development Services
 more projects => http://github.com/AguzzTN54

   * Author 	:  Agustinus Yohannes
	 * NIM			:  418041
   * Jurusan	:  Teknik Informatika
   * Semester	:  4
   * Dalam rangka mememnuhi tugas Internet Application Development

----------------------------------------------------------------------- */

/* CONTOH IMPLEMENTASI FUNGSI REQUIRE DAN INCLUDE */

require_once '.\App.class.php';

$title = 'Web Design Services';
include_once 'components/header.php';

$data = new AppData();

$data->router('/', 'getData');

include_once 'components/footer.php';


?>