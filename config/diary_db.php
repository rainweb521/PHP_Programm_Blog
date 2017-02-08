<?php

//defined ( 'SYSPATH' ) or die ( 'No direct access allowed.' );
require_once 'database.php';
class DIARY_DB{
	 public function mysql_db(){
		$database = new DATABASE();
		$con = $database->conn_mysql();
		$result = mysql_query("SELECT * FROM diary");
		$database->close_mysql($con);
		return $result;
	 }
}
?>