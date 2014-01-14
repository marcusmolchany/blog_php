<?php

include $_SERVER['DOC_ROOT'] . "../src/common/AbstractSqlConnector.php";

abstract class SqlConnector extends AbstractSqlConnector {

	protected $hostName;
	protected $userName;
	protected $password;
	protected $databaseName;
	protected $tableName;

	protected $sqlConn;
	protected $sqlString;
	protected $result;
	protected $resultArray;

	public function __construct($hostName, $userName, $password, $databaseName, $tableName) {
		$this->hostName = $hostName;
		$this->userName = $userName;
		$this->password = $password;
		$this->databaseName = $databaseName;
		$this->tableName = $tableName;
		$this->resultArray = array();

		//Database Connection
		$this->sqlConn =  new mysqli($hostName, $userName, $password, $databaseName);
		if ($this->sqlConn->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $sqlConn->connect_errno . ") " . $sqlConn->connect_error;
		}
	}

	public function buildSqlString() {
		//Build SQL String
		$this->sqlString = "SELECT * FROM " . $this->databaseName . "." . $this->tableName;
	}

	public function executeSqlQuery() {
		//Execute the query and put data into a result
		$this->result = $this->sqlConn->query($this->sqlString);
	}

	public function copyToAssociativeArray() {
		//Copy result into a associative array
		//$this->resultArray = $this->result->fetch_all(MYSQLI_ASSOC);
		while ($row = $this->result->fetch_assoc()) {
		   array_push($this->resultArray, $row); 
		}
	}

	public function copyToNumericArray() {
		//Copy result into a associative array
		//$this->resultArray = $this->result->fetch_all(MYSQLI_NUM);
		while ($row = $this->result->fetch_assoc()) {
		   array_push($this->resultArray, $row); 
		}
	}

	public function copyToAssociativeAndNumericArray() {
		//Copy result into both a associative and numeric array
		//$this->resultArray = $this->result->fetch_all(MYSQLI_BOTH);
		while ($row = $this->result->fetch_assoc()) {
		   array_push($this->resultArray, $row); 
		}
	}

	public function printArray() {
		//printr($this->resultArray);
		echo "<pre>";
		print_r($this->resultArray);
		echo "</pre>";
	}

	// TODO: figure out why this doesn't work
	protected function printr($s){
		echo "<pre>";
		print_r($s);
		echo "</pre>";
	}

	// from http://stackoverflow.com/questions/10940332/how-to-fetch-all-the-row-of-the-result-in-php-mysql
	//protected function connectToSqlTable() {
		//Database Connection
		//$sqlConn =  new mysqli($hostName, $userName, $password, $tableName);

		//Build SQL String
		//$sqlString = "SELECT * FROM " . $databaseName . "." . $tableName;

		//Execute the query and put data into a result
		//$result = $sqlConn->query($sqlString);

		//Copy result into a associative array
		//$resultArray = $result->fetch_all(MYSQLI_ASSOC);
		//printr($resultArray);

		//Copy result into a numeric array
		//$resultArray = $result->fetch_all(MYSQLI_NUM);
		//printr($resultArray);

		//Copy result into both a associative and numeric array
		//$resultArray = $result->fetch_all(MYSQLI_BOTH);
	//}
}
?>