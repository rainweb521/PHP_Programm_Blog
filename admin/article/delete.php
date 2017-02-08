<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
if(empty($_GET["a_id"])){
	$url="article_list.php";
	echo "<script language=\"javascript\">";
	echo "location.href=\"$url\"";
	echo "</script>";
	exit();
}
	$a_id = $_GET['a_id'];
	$url="article_list.php";
	echo "<script language=\"javascript\">";
	echo "con=confirm('是否确认删除！！！');";
	echo "if(con!=true){location.href=\"$url\";}";
	echo "else{";
	require_once '../models/article_manage.php';
	$manage = new ARTICLE_MANAGE_DB();
	$manage->mysql_db_delete($a_id);
	echo "location.href=\"$url\"";
	echo "}";
	echo "</script>";


?>
</body>
</html>
