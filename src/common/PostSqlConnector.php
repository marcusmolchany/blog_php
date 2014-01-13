<?php

include $_SERVER['DOC_ROOT'] . "../src/common/SqlConnector.php";

class PostSqlConnector extends SqlConnector{

	public function __construct($hostName, $userName, $password) {
		//parent::__construct($hostName, $userName, $password, 'marcusdb', 'post');
		$config = parse_ini_file($_SERVER['DOC_ROOT'] . "../config.ini");
		
		parent::__construct($hostName, $userName, $password, $config['db_name'], $config['table_name']);
	}

	public function getAssociativityArray() {
		return array_reverse($this->resultArray);
	}
}
?>