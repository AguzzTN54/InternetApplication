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

/* CONTOH IMPLEMENTASI DATA OBJEK */


class AppData {
	private $data;

	function __construct(){
		require_once 'datas.php';
		$this->data  = $data;
	}
	
	public function Router($params, $callBack){
		$url = rtrim(@$_GET['url']);
		$url = filter_var($url, FILTER_SANITIZE_URL);
		if(empty($url)){
			$url = '/';
		}
		
		if($url === $params){
			return $this->$callBack();

		} else {
			function notFound(){
				include './components/404.html';
			}
			return notFound();

		}
	}
	
	function getData(){
		include './components/welcome.html';

		$item = '<div style="background-color: #fafafa;" class="pt-2">
		<h3 class="sub sub-center">Produk Website</h3>
		<div class="container produk">
			<div class="row">';
			
		for($i=0; $i < count($this->data['products']); $i++){
			$product = $this->data['products'][$i];
			$productPic = $product['pic'];
			$productPrice = $product['productPrice'];
			$productName = $product['productName'];
			$productExt = $product['productExt'];
			$duration = $product['timeToWork'];

			$item .= '<div class="col-md-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
			<div class="card mb-3" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-sm-6">
						<div class="thumb">
							<img src="'.$productPic.'" class="card-img" alt="'.$productName.'" />
						</div>
					</div>
						<div class="col-sm-6">
							<div class="card-body">
								<h5 class="card-title sub1">'.$productName.'</h5>
								<p class="card-text">
									<i class="fa fa-tags"></i>
									<span style="font-size: 18px;">'.$productPrice.'</span> <br />
									<i class="far fa-clock"></i>
									<span style="font-size: 18px;">'.$duration.'</span>
								</p>
								<p class="card-text">
									<i class="far fa-file-archive"></i> '.$productExt.'
								</p>
								<center>
									<center>
										<button type="button" class="btn btn1 tmblpesan" data-toggle="modal" data-target="#modal" id="tombolpesan"
											data-id="prd2" data-src="'.$productPic.'" data-name="'.$productName.'" data-harga="'.$productPrice.'">
											Pesan Sekarang
										</button>
									</center>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>';
		}
		$item .= '		</div>
		</div>
	</div>';

	echo $item;
	return $this;
	}
}

?>