<?php 

class DB {

	protected $_db;

	public function __construct(){
		$this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$this->_db->query(" SET NAMES 'utf8'");
	}

}

?>