<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>上海朴石投资管理合伙企业（有限合伙） - 关于我们 - 公司简介</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="./resource/base.css">
    <link rel="stylesheet" type="text/css" href="./resource/inside.css">
    <script language="javascript" type="text/javascript" src="./resource/jquery-1.8.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="./resource/jquery.SuperSlide.js"></script>
    <script language="javascript" type="text/javascript" src="./resource/common.js"></script>
    <script language="javascript" type="text/javascript" src="./resource/adver.js"></script>
    <script type="text/javascript" src="./resource/jwplayer.js"></script>
</head>

<body>
    <div class="header">
        <div class="topArea">
            <div class="wrap">
                <a href="javascript:;">中文</a> |
                <a href="http://www.postone.com.cn/en">ENGLISH</a>
            </div>
        </div>
        <div class="wrap clearfix">
            <h1 class="logo">
            
                    <img src="./resource/2015072057585753.jpg" width="500" height="106">
            
        </h1>
            <div class="wechat"><img src="./resource/wechat.jpg"></div>
        </div>
        <?php include template("content","nav"); ?>
        <div class="banner">
            <div class="bd">
                <ul>
                    <li style="background:url(./resource/2015091741563409.jpg) center 0 no-repeat;"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="wrap clearfix">
            <div class="sidebar fl">
                <div class="colTxtTitle">
                    <?php $parentid = $CATEGORYS[$catid]['parentid']?>
                    <h3><?php echo $CATEGORYS[$parentid]['catname'];?></h3>
                </div>
                <div class="menu">
                    <dl>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20610d1974a931dac9e75b2263171842&action=category&catid=%24parentid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <dt>
                                    <a <?php if($catid==$r[catid]) { ?>class="active"<?php } ?> href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                                </dt>
                            <?php $n++;}unset($n); ?> 
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </dl>
                </div>
            </div>
            <div class="main fr">
                <div class="article">
                    <div class="hd">
                        <h1 class="title"><?php echo $title;?></h1>
                        <div class="info">发布日期：<?php echo date('Y-m-d',strtotime($inputtime));?> &nbsp; 浏览：<span id="hits"></span></div>
                    </div>
                    <div class="bd" id="article">
                        <?php echo $content;?>
                    </div>
                </div>

                <script language="javascript">
                $("#article").find("img").each(function(index, element) {
                    if ($(element).width() > 712) {
                        $(element).attr("style", "width: " + 712 + "px");
                    }

                    if ($(element).attr("align") == "left") {
                        $(element).attr("style", "float:left; margin:6px 15px 0 0;");
                    } else if ($(element).attr("align") == "right") {
                        $(element).attr("style", "float:right; margin:6px 0 0 15px;");
                    }
                });
                </script>
            </div>
        </div>
    </div>
    <script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
    <?php include template("content","footer"); ?>
</body>

</html>
