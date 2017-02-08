
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Rain_Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css">
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>

<!-- CuFon ends -->
</head>
<body>

<div class="main"><?php include '/menu/head.php';?> <br>
<br>
<br>
<br>
<div class="content">
<div class="content_resize">
<div class="mainbar">
<?php
require_once 'config/diary_db.php';
$diary_db = new  DIARY_DB();
$result = $diary_db->mysql_db();
?>
<?php while($row = mysql_fetch_array($result)){ ?>
<ul class="tmtimeline">

	<li class="line"><time class="tmtime" datetime="2017-1-17 20:52"><span>
	<br>
	<h4><?php echo $row['d_date']?></h4>
	</span> <span>
	<h3>00:00</h3>
	</span></time>
	<div class="tmicon fa-pencil"></div>
	<div class="tmlabel"><a
		href="http://www.jclsblog.org/index.php/archives/6/">
	<h2><?php echo $row['d_title'];?></h2>
	</a>
	<div class="index-text post-content">
	<p><?php echo $row['d_text'];?></p>
	</div>
	</div>
	</li>
<?php 
  } 
?>
</ul>
</div>
<div class="sidebar">
<div class="searchform">
<form id="formsearch" name="formsearch" method="post" action=""><span><input
	name="editbox_search" class="editbox_search" id="editbox_search"
	maxlength="80" value="Search our ste:" type="text" /></span> <input
	name="button_search" src="images/search_btn.gif" class="button_search"
	type="image" /></form>
</div>
<br>
<p>


<p>


<div class="gadget">
<h2 class="star"><span>Blog_</span> Menu</h2>
<div class="clr"></div>
<ul class="sb_menu">
<?php include '/menu/head2.php'?>
</ul>
</div>
<div class="gadget">
<h2 class="star"><span>Introduce</span></h2>
<div class="clr"></div>
<ul class="ex_menu">
<?php include '/menu/professional_menu.php'?>
</ul>
</div>
</div>
<div class="clr"></div>
</div>
</div>
<?php include '/menu/foot.php';?></div>
</body>
</html>
