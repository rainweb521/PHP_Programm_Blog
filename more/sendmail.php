<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>提示</title>
</head>
<body>
<?php
	require_once "email.class.php";
	//******************** 配置信息 ********************************
	$smtpserver = "smtp.163.com";//SMTP服务器
	$smtpserverport =25;//SMTP服务器端口
	$smtpusermail = "@163.com";//SMTP服务器的用户邮箱
	$smtpemailto = $_POST['toemail'];//发送给谁
	$smtpuser = "";//SMTP服务器的用户帐号
	$smtppass = "";//SMTP服务器的用户密码
	$mailtitle = $_POST['title'];//邮件主题
	$mailcontent = $_POST['content'];//邮件内容
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false;//是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
	
	
	echo "<div style='width:300px; margin:36px auto;'>";
	if($state==""){
		echo "<script type='text/javascript'>alert('对不起，邮件发送失败！请检查邮箱填写是否有误。');</script>";
		$url="../email.php";
		echo "<script language=\"javascript\">";
		echo "location.href=\"$url\"";
		echo "</script>";
		exit();
	}
	echo "<script type='text/javascript'>alert('恭喜！邮件发送成功！！');</script>";
	$url="../index.php";
	echo "<script language=\"javascript\">";
	echo "location.href=\"$url\"";
	echo "</script>";
	echo "</div>";
	
?>
</body>
</html>
