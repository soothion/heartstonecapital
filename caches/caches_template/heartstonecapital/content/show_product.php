<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
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
                    <li style="background:url(./resource/2015091750883173.jpg) center 0 no-repeat;"></li>
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
                <div class="list2">
                    <ul>
                        <li class="clearfix">
                            <span class="title">产品名称</span>
                            <span class="title2">成立日期</span>
                            <span class="title3">单位净值</span>
                            <span class="title4">累计单位净值</span>
                            <span class="title5">更新日期</span>
                        </li>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8b23acc6574a8c561b84271fd1e4ed50&action=lists&status=99&catid=%24catid&num=10&order=listorder+ASC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('status'=>'99','catid'=>$catid,'order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('status'=>'99','catid'=>$catid,'order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li class="clearfix">
                                    <span class="title"><?php echo $r['title'];?></span>
                                    <span class="title2"><?php echo $r['created_date'];?></span>
                                    <span class="title3"><?php echo $r['danweijingzhi'];?></span>
                                    <span class="title4"><?php echo $r['leijidanweijingzhi'];?></span>
                                    <span class="title5"><?php echo date('Y-m-d',$r[updatetime]);?></span>
                                </li>
                            <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
                <div class="page"><?php echo $pages;?></div>
            </div>
        </div>
    </div>
    <?php include template("content","footer"); ?>
</body>

</html>
