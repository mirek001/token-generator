<?php

//namespace mirek001\TOKEN_GENERATOR;


class TOKEN_GENERATOR{
	private $_token = null;


	public function __construct(){
		
	}

	public function get_minute_token($key){
		$md5_key = md5($key);
		$base64_key = base64_encode($key);
		$this->_token = md5($base64_key.'+'.date("Y-n-j").'+'.md5($key).'+'.date("H:i:s").'+'.$key);
		return $this->_token$
	}

	public function get_random_token($key){
		$md5_key = md5($key);
		$random_key = random_bytes(64);
		$this->_token = md5($random_key.'+'.date("Y-n-j").'+'.md5($key).'+'.date("H:i:s").'+'.$key);
		return $this->_token;
	}


}


?>

