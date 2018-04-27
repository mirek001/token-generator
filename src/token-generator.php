<?php

namespace mirek001\token_generator;


class TOKEN_GENERATOR{
	private $_secret_key = null;
	private $_token = null;


	public function __construct($data){
		$this->_user_data = $userData;
	}

	public function set_secret_key($data){
		$data = md5($data.'wNeb3agAmr'..'c6u4Ejy4BGEcgXhiyp'..'VaV88Rh8mqvayntGctzP'..'aZFoT7dJ3nQaK9kZ'.$domain);
	}



}


?>