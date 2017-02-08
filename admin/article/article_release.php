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
    <link rel="apple-touch-icon-precomposed" href="/admin/assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/admin/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/admin/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/admin/assets/css/app.css">
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>

</head>

<body data-type="widgets">
    <script src="/admin/assets/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        
        <?php include '../top_bar.php'?>
        
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <!-- 侧边导航栏 -->
     <?php include '../left_bar.php'?>
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">发布文章</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <?php
								$a_id = $_GET['a_id'];
									require_once '../models/article_manage.php';
									$article_db = new  ARTICLE_MANAGE_DB();
									$result = $article_db->mysql_db_id($a_id);
									$row = mysql_fetch_array($result);
							
							?>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="dispose.php" method="post">
                                <input type="hidden" value="<?php echo $a_id;?>" name="a_id">
                                <input type="hidden" vlaue="<?php echo $row['a_comment'];?>" name="a_comment">
                                <input type="hidden" value="<?php echo $row['a_visit'];?>" name="a_visit">
                                
                                
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" value="<?php echo $row['a_title'];?>" name="a_title" placeholder="请输入标题文字">
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>

                                    
									<div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">作者 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                             <input type="text" class="tpl-form-input" id="user-name" value="<?php echo $row['a_adduser'];?>" name="a_adduser" placeholder="作者" >
                                            <small>作者为必填</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">分类<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" name="a_p_type" style="display: none;">
  											<option value="1" <?php if($row['a_p_type']==1){?>selected="selected"<?php }?>>-The.CC</option>
  											<option value="2" <?php if($row['a_p_type']==2){?>selected="selected"<?php }?>>夕风色</option>
  											<option value="3" <?php if($row['a_p_type']==3){?>selected="selected"<?php }?>>Orange</option>
											</select>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="<?php echo $row['a_photo'];?>" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
    <i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                                                <input id="doc-form-file" type="file" name="a_photo" multiple>
                                            </div>

                                        </div>
                                    </div>
                                    
                                    
									<div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">文章简介 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                             <input type="text" class="tpl-form-input" id="user-name" value="<?php echo $row['a_begin_text'];?>" name="a_begin_text" placeholder="文章简介" >
                                            <small>文章简介为必填</small>
                                        </div>
                                    </div>
                                   <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">发布时间 <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" value="<?php echo $row['a_adddate'];?>" name="a_adddate" placeholder="发布时间" data-am-datepicker="" readonly>
                                            <small>发布时间为必填</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">添加类型 <span class="tpl-form-line-small-title">Type</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" placeholder="请添加类型用点号隔开" value="<?php echo $row['a_type'];?>" name="a_type">
                                            <div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">是否显示文章</label>
                                        <div class="am-u-sm-9">
                                            <div class="tpl-switch">
                                                <input type="checkbox" class="ios-switch bigswitch tpl-switch-btn" <?php if($row['a_state']==1){?>checked="checked"<?php }?> value="1" name="a_state">
                                                <div class="tpl-switch-btn-view">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">文章内容</label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" id="user-intro" placeholder="请输入文章内容"  name="a_text"><?php echo $row['a_text'];?></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <input type="submit" value="提交" class="am-btn am-btn-primary tpl-btn-bg-color-success ">
                                        </div>
                                    </div>
                                </form>
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