<?php
	class DATABASE{
		public function conn_mysql(){
			$con = mysql_connect("localhost","root","root");
			mysql_query("set names utf8;");
			if (!$con){
				die('Could not connect: ' . mysql_error());
			}
			mysql_select_db("db_blog", $con);
			return $con;
		}
		public function close_mysql($con){
			mysql_close($con);
		}
	}
?>