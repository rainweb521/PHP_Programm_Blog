<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>文章管理</title>
<meta name="description" content="这是一个 index 页面">
<meta name="keywords" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="/admin/assets/i/favicon.png">
<link rel="apple-touch-icon-precomposed"
	href="/admin/assets/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/admin/assets/css/amazeui.min.css" />
<link rel="stylesheet"
	href="/admin/assets/css/amazeui.datatables.min.css" />
<link rel="stylesheet" href="/admin/assets/css/app.css">
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>

</head>
<style type="text/css">
.color {
	color: #FFFFFF;
	text-decoration: none;
	font-weight: bold;
}  /*链接设置*/
.color:visited {
	color: #FFFFFF;
	text-decoration: none;
	font-weight: bold;
}  /*访问过的链接设置*/
.color:hover {
	color: #FFFFFF;
	text-decoration: none;
	font-weight: bold;
} /*鼠标放上的链接设置*/
</style>
<body data-type="widgets">
<script src="/admin/assets/js/theme.js"></script>
<div class="am-g tpl-g"><!-- 头部 --> <?php include '../top_bar.php'?> <!-- 风格切换 -->
<div class="tpl-skiner">
<div class="tpl-skiner-toggle am-icon-cog"></div>
<div class="tpl-skiner-content">
<div class="tpl-skiner-content-title">选择主题</div>
<div class="tpl-skiner-content-bar"><span
	class="skiner-color skiner-white" data-color="theme-white"></span> <span
	class="skiner-color skiner-black" data-color="theme-black"></span></div>
</div>
</div>
<!-- 侧边导航栏 --> <?php include '../left_bar.php'?> <!-- 内容区域 -->
<div class="tpl-content-wrapper">
<div class="row-content am-cf">
<div class="row">
<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
<div class="widget am-cf">
<div class="widget-head am-cf">
<div class="widget-title  am-cf">文章列表</div>


</div>
<div class="widget-body  am-fr">

<div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
<div class="am-form-group">
<div class="am-btn-toolbar">
<div class="am-btn-group am-btn-group-xs">
<script type="text/javascript">
function release(){
	location.href = "article_release.php?a_id=0";
}
function delete_php(a_id){
	confirm("是否确认删除！！！");
	if(con==true){
		location.href = "delete.php?a_id="+a_id;
	}else{
		break;
	}

}
</script>
<button type="button" class="am-btn am-btn-default am-btn-success"
	onclick="location.href='article_release.php?a_id=0';"><span class="am-icon-plus"></span> <a
	href="article_release.php" class="color">新增</a></button>
<button type="button" class="am-btn am-btn-default am-btn-secondary"><span
	class="am-icon-save"></span> 保存</button>
<button type="button" class="am-btn am-btn-default am-btn-warning"><span
	class="am-icon-archive"></span> 审核</button>
<button type="button" class="am-btn am-btn-default am-btn-danger"><span
	class="am-icon-trash-o"></span> 删除</button>
</div>
</div>
</div>
</div>
<div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
<div class="am-form-group tpl-table-list-select"><select
	data-am-selected="{btnSize: 'sm'}">
	<option value="option1">所有类别</option>
	<option value="option2">IT业界</option>
	<option value="option3">数码产品</option>
	<option value="option3">笔记本电脑</option>
	<option value="option3">平板电脑</option>
	<option value="option3">只能手机</option>
	<option value="option3">超极本</option>
</select></div>
</div>
<div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
<div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
<input type="text" class="am-form-field "> <span
	class="am-input-group-btn">
<button
	class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search"
	type="button"></button>
</span></div>
</div>

<div class="am-u-sm-12">
<table width="100%"
	class="am-table am-table-compact am-table-striped tpl-table-black ">
	<thead>
		<tr>
			<th>文章缩略图</th>
			<th>文章标题</th>
			<th>作者</th>
			<th>时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
	
<?php
require_once '../models/article_manage.php';
$article_db = new  ARTICLE_MANAGE_DB();
$result = $article_db->mysql_db();
?>
<?php while($row = mysql_fetch_array($result)){ ?>
		<tr class="gradeX">
			<td><img src="<?php echo $row['a_photo'];?>" class="tpl-table-line-img"
				alt=""></td>
			<td class="am-text-middle"><?php echo $row['a_title'];?></td>
			<td class="am-text-middle"><?php echo $row['a_adduser'];?></td>
			<td class="am-text-middle"><?php echo $row['a_adddate']?></td>
			<td class="am-text-middle">
			<div class="tpl-table-black-operation"><a href="article_release.php?a_id=<?php echo $row['a_id'];?>"> <i
				class="am-icon-pencil"></i> 编辑 </a> 
				<a href="" onclick="delete_php()"
				class="tpl-table-black-operation-del"> <i class="am-icon-trash"></i>
			删除 </a></div>
			</td>
		</tr>
<?php 
  } 
?>
		
		<!-- more data -->
	</tbody>
</table>
</div>
<div class="am-u-lg-12 am-cf">

<div class="am-fr">
<ul class="am-pagination tpl-pagination">
	<li class="am-disabled"><a href="#">«</a></li>
	<li class="am-active"><a href="#">1</a></li>
	<li><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li><a href="#">4</a></li>
	<li><a href="#">5</a></li>
	<li><a href="#">»</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="http://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>
<script src="/admin/assets/js/app.js"></script>

</body>

</html>
