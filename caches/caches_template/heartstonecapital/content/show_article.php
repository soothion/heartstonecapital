<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
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
                    <h3>关于我们</h3>
                </div>
                <div class="menu">
                    <dl>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c0e6490c157d6165083bd540361d0d3f&action=lists&catid=%24catid&order=listorder+ASC&num=25&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>'25',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?><!--子栏目循环开始-->
                                <dt><a <?php if($id==$v[id]) { ?>class="active"<?php } ?> href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></dt>
                                <?php $n++;}unset($n); ?><!--子栏目循环结束-->
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </dl>
                </div>
            </div>
            <div class="main fr">
                <div class="article">
                    <div class="bd" id="article">
                        <p style="text-align:left;">
                            <span style="font-size:16px;color:#E53333;">
                                <strong><?php echo $title;?></strong>
                                <span style="font-size:12px;color:#333333;float:right">您的当前位置：<a href="<?php echo $siturl;?>">首页</a> > <a href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $CATEGORYS[$catid]['catname'];?></a> > <?php echo $title;?></span>
                            </span>
                        </p>
                        <p style="text-align:left;">
                            <span style="font-size:16px;color:#E53333;"><span style="font-size:12px;color:#333333;"> </span></span>
                        </p>
                        <hr>
                        <p>
                            <br>
                        </p>
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
    <?php include template("content","footer"); ?>
</body>

</html>
