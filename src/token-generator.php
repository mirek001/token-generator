<?php

//namespace mirek001\token_generator;


class token{
	private $_secret_key = null;
	private $_token = null;
	public $_data = null;


	public function __construct(){
		$this->_data = md5('mirek001');
	}

	public function set_secret_key($data){
		
	}



}


?>