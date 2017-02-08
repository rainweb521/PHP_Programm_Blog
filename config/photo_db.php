<?php

//defined ( 'SYSPATH' ) or die ( 'No direct access allowed.' );
require_once 'database.php';
class PHOTO_DB{
	 public function mysql_db(){
		$database = new DATABASE();
		$con = $database->conn_mysql();
		$result = mysql_query("SELECT * FROM photo");
		$database->close_mysql($con);
		return $result;
	 }
}
?>