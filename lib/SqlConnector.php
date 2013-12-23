<?php
abstract class SqlConnector {

	abstract protected $databaseName;
	abstract protected $tableName;

	abstract protected function SqlConnector($databaseName, $tableName);

	protected connectToSqlTable() {
		//Database Connection
		$sqlConn =  new mysqli('localhost', 'root', '', 'marcusdb');

		//Build SQL String
		$sqlString = "SELECT * FROM marcusdb.post";

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