<?php

include $_SERVER['DOC_ROOT'] . "SqlConnector.php";

class PostSqlConnector extends SqlConnector{

	public function __construct($hostName, $userName, $password) {
		//parent::__construct($hostName, $userName, $password, 'marcusdb', 'post');
		parent::__construct($hostName, $userName, $password, $_SERVER['DB_NAME'], $_SERVER['TABLE_NAME']);
	}

	public function getAssociativityArray() {
		return $this->resultArray;
	}
}
?>