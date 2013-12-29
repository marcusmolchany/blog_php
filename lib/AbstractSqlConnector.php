<?php
abstract class AbstractSqlConnector {

	abstract public function __construct($hostName, $userName, $password, $databaseName, $tableName);

	abstract public function buildSqlString();

	abstract public function executeSqlQuery();

	abstract public function copyToAssociativeArray();

	abstract public function copyToNumericArray();

	abstract public function copyToAssociativeAndNumericArray();

	abstract public function printArray();

	// TODO: figure out why this doesn't work
	//abstract protected function printr($s){
	//	echo "<pre>";
	//	print_r($s);
	//	echo "</pre>";
	//}
}
?>