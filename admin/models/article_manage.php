<?php

//defined ( 'SYSPATH' ) or die ( 'No direct access allowed.' );
require_once '../../config/database.php';
class ARTICLE_MANAGE_DB{
	 public function mysql_db(){
		$database = new DATABASE();
		$con = $database->conn_mysql();
		$result = mysql_query("SELECT * FROM article");
		$database->close_mysql($con);
		return $result;
	 }
	 public function mysql_db_id($a_id){
	 	$database = new DATABASE();
		$con = $database->conn_mysql();
		$result = mysql_query("SELECT * FROM article where a_id=".$a_id);
		$database->close_mysql($con);
		return $result;
	 }
	 public function mysql_db_insert($arr){
	 	$a_title = $arr['a_title']  ;
		$a_adduser = $arr['a_adduser']  ;
		$a_p_type = $arr['a_p_type']  ;
		$a_photo = $arr['a_photo'];
		$a_begin_text = $arr['a_begin_text'] ;
		$a_adddate = $arr['a_adddate']  ;
		$a_type = $arr['a_type']  ;
		$a_state = $arr['a_state']  ;
		$a_text = $arr['a_text']  ;
		$a_comment = 0;
		$a_visit = 0;
	 	$database = new DATABASE();
		$con = $database->conn_mysql();
		mysql_query("insert into article(a_title,a_begin_text,a_text,a_adddate,a_adduser,a_p_type,a_type,a_comment,a_photo,a_state,a_visit) value('$a_title','$a_begin_text','$a_text','$a_adddate','$a_adduser','$a_p_type','$a_type','$a_comment','$a_photo','$a_state','$a_visit')");
		$database->close_mysql($con);
	 }
	 public function mysql_db_update($a_id,$arr){
	 	echo $a_id;
	 	$a_title = $arr['a_title']  ;
		$a_adduser = $arr['a_adduser']  ;
		$a_p_type = $arr['a_p_type']  ;
		$a_photo = $arr['a_photo'];
		$a_begin_text = $arr['a_begin_text'] ;
		$a_adddate = $arr['a_adddate']  ;
		$a_type = $arr['a_type']  ;
		$a_state = $arr['a_state']  ;
		$a_text = $arr['a_text']  ;
		$a_comment = $arr['a_comment'];
		$a_visit = $arr['a_visit'];
		
	 	$database = new DATABASE();
		$con = $database->conn_mysql();
//		mysql_query("DELETE FROM article WHERE a_id='$a_id'");
//		mysql_query("insert into article(a_id,a_title,a_begin_text,a_text,a_adddate,a_adduser,a_p_type,a_type,a_comment,a_photo,a_state,a_visit) value('$a_id','$a_title','$a_begin_text','$a_text','$a_adddate','$a_adduser','$a_p_type','$a_type','$a_comment','$a_photo','$a_state','$a_visit')");
		mysql_query("update article set a_title='$a_title',a_begin_text='$a_begin_text',a_text='$a_text',a_adddate='$a_adddate',a_adduser='$a_adduser',a_p_type='$a_p_type',a_type='$a_type',a_comment='$a_comment',a_photo='$a_photo',a_state='$a_state',a_visit='$a_visit' where a_id='$a_id'");
		$database->close_mysql($con);
	 }
	 public function mysql_db_delete($a_id){
	 	$database = new DATABASE();
		$con = $database->conn_mysql();
	 	mysql_query("DELETE FROM article WHERE a_id='$a_id'");
	 	$database->close_mysql($con);
	 }
}
?>