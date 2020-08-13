<?php

class Data {
	private $country;

	function koneksi(){
		if(!@fsockopen('covid19.mathdro.id',80)){
			return false;
		}else{
			return true;
		}
	}

	function listNegara() {
		return json_decode(file_get_contents('https://covid19.mathdro.id/api/countries'), true);
	}
	
	function getGlobalCase() {
		return json_decode(file_get_contents('https://covid19.mathdro.id/api/'),true);
	}

	function getTrackData($country='global'){
		if ($country === 'global') {
      $negara = 'https://seecorona.com/csv/world.json';
			$source = 'https://seecorona.com/';
    } else if ($country === 'id') {
      $negara = 'https://seecorona.com/csv/province.json';
			$source = 'https://seecorona.com/';
    } else {
      $negara = 'https://covid19.mathdro.id/api/countries/'.$country;
			$source = 'https://covid19.mathdro.id/';
		}
		
		return array(
			'data' => json_decode(file_get_contents($negara), true),
			'source' => $source
		);
	}
}

?>