<?php
abstract class SqlConnector {

	abstract protected $hostName;
	abstract protected $userName;
	abstract protected $password;
	abstract protected $databaseName;
	abstract protected $tableName;

	abstract protected function __construct($hostName, $userName, $password, $databaseName, $tableName) {
		$this->$hostName = $hostName;
		$this->$userName = $userName;
		$this->$password = $password;
		$this->$databaseName = $databaseName;
		$this->$tableName = $tableName;

		//Database Connection
		$sqlConn =  new mysqli($hostName, $userName, $password, $tableName);
	}

	// from http://stackoverflow.com/questions/10940332/how-to-fetch-all-the-row-of-the-result-in-php-mysql
	protected function connectToSqlTable() {
		//Database Connection
		//$sqlConn =  new mysqli($hostName, $userName, $password, $tableName);

		//Build SQL String
		$sqlString = "SELECT * FROM " . $databaseName . "." . $tableName;

		//Execute the query and put data into a result
		$result = $sqlConn->query($sqlString);

		//Copy result into a associative array
		$resultArray = $result->fetch_all(MYSQLI_ASSOC);
		printr($resultArray);

		//Copy result into a numeric array
		$resultArray = $result->fetch_all(MYSQLI_NUM);
		printr($resultArray);

		//Copy result into both a associative and numeric array
		$resultArray = $result->fetch_all(MYSQLI_BOTH);
	}

	protected function printr($s){echo "<pre>";print_r($s);echo "</pre>";};

}
?>