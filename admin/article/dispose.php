<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
$a_id = $_POST['a_id'];
$a_title = $_POST['a_title'];
$a_adduser = $_POST['a_adduser'];
$a_p_type = $_POST['a_p_type'];
//a_photo = $a_photo['a_photo'];
$a_begin_text = $_POST['a_begin_text'];
$a_adddate = $_POST['a_adddate'];
$a_type = $_POST['a_type'];
if(empty($_POST["a_state"])){
	$a_state = 0;
}else{
	$a_state = $_POST['a_state'];
}
$a_text = $_POST['a_text'];
if(empty($_POST['a_visit'])){
	$a_visit = 0;
}else{
	$a_visit = $_POST['a_visit'];
}
if(empty($_POST['a_comment'])){
	$a_comment = 0;
}else{
	$a_comment = $_POST['a_comment'];
}
$arr['a_title'] = $a_title;
$arr['a_adduser'] = $a_adduser;
$arr['a_p_type'] = $a_p_type;
$arr['a_photo'] = "1";
$arr['a_begin_text'] = $a_begin_text;
$arr['a_adddate'] = $a_adddate;
$arr['a_type'] = $a_type;
$arr['a_state'] = $a_state;
$arr['a_text'] = $a_text;
$arr['a_comment'] = $a_comment;
$arr['a_visit'] = $a_visit;
//echo $a_visit; 
////var_dump($arr);
//exit();
require_once '../models/article_manage.php';
$manage = new ARTICLE_MANAGE_DB();
if($a_id==0){
	$manage->mysql_db_insert($arr);
}else{
	$manage->mysql_db_update($a_id,$arr);
}
?>
</body>
</html>
