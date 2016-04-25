<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">    <link rel="stylesheet" type="text/css" href="./resource/base.css">
    <link rel="stylesheet" type="text/css" href="./resource/home.css">
    <script language="javascript" type="text/javascript" src="./resource/jquery-1.8.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="./resource/jquery.SuperSlide.js"></script>
    <script language="javascript" type="text/javascript" src="./resource/common.js"></script>
    <script language="javascript" type="text/javascript" src="./resource/adver.js"></script>
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
                <ul style="position: relative; width: 1903px; height: 213px;">
                    <li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: none; background: url(./resource/2015071735623237.jpg) 50% 0px no-repeat;"></li>
                    <li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: list-item; background: url(./resource/2015071735642173.jpg) 50% 0px no-repeat;"></li>
                    <li style="position: absolute; width: 1903px; left: 0px; top: 0px; display: none; background: url(./resource/2015072058745845.jpg) 50% 0px no-repeat;"></li>
                </ul>
            </div>
            <div class="hd">
                <ul class="wrap">
                    <li class=""></li>
                    <li class="on"></li>
                    <li class=""></li>
                </ul>
            </div>
            <div class="arrow">
                <div class="wrap">
                    <a href="javascript:;" class="next"></a>
                    <a href="javascript:;" class="prev"></a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        jQuery(".banner").slide({
            titCell: ".hd li",
            mainCell: ".bd ul",
            effect: "fold",
            autoPlay: true,
            delayTime: 700
        });
        </script>
    </div>
    <div class="container">
        <div class="wrap clearfix">
            <div class="main clearfix">
                <div class="about">
                    <div class="hd">
                        <span>关于我们</span>
                        <a href="http://www.postone.com.cn/info.asp?base_id=1&second_id=1001" class="more"></a>
                    </div>
                    <div class="bd">
                        <img src="./resource/2015071600377235.png">
                        <p> 
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c14df8cf28b9a034b342b862e27dd975&action=lists&catid=6&moreinfo=1&order=listorder+ASC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','moreinfo'=>'1','order'=>'listorder ASC','limit'=>'1',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <?php echo str_cut(strip_tags($r[content]),360,'...');?>
                                <?php $n++;}unset($n); ?> 
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </p>
                    </div>
                </div>
                <div class="contact fl">
                    <div class="hd">
                        <span>产品净值</span>
                        <a href="http://www.postone.com.cn/info.asp?base_id=2&second_id=2001" class="more"></a>
                    </div>
                    <div class="bd">
                        <dl>
                            <dt class="clearfix">
                                <span class="c1">产品名称</span>
                                <span class="c2">成立日期</span>
                                <span class="c3">累计单位净值</span>
                                <span class="c4">更新日期</span>
                            </dt>
                        </dl>
                        <div class="tempWrap" style="overflow:hidden; position:relative; height:148px">
                            <dl class="list" style="height: 888px; position: relative; padding: 0px; margin: 0px; top: -430px;">
                               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b94626a0623eed341acfc5c379e9daf7&action=lists&status=99&catid=15&num=10&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('status'=>'99','catid'=>'15','order'=>'listorder ASC','limit'=>'10',));}?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                          <dd class="clearfix" style="height: 37px;">
                                            <span class="c1"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></span>
                                            <span class="c2"><?php echo date('Y-m-d',$r[created_date]);?></span>
                                            <span class="c3"><?php echo $r['leijidanweijingzhi'];?></span>
                                            <span class="c4"><?php echo date('Y-m-d',$r[updatetime]);?></span>
                                        </dd>
                                    <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </dl>
                        </div>
                    </div>
                </div>
                <script>
                jQuery(".contact").slide({
                    mainCell: ".bd .list",
                    autoPlay: true,
                    effect: "topMarquee",
                    vis: 4,
                    interTime: 50,
                    trigger: "click"
                });
                </script>
                <div class="news fl">
                    <div class="hd">
                        <span>公司公告</span>
                        <a href="http://www.postone.com.cn/info.asp?base_id=3&second_id=3001" class="more"></a>
                    </div>
                    <div class="bd">
                        <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9f4353a189e9ba768cc1f70e3db7e857&action=lists&status=99&catid=12&num=6&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('status'=>'99','catid'=>'12','order'=>'listorder ASC','limit'=>'6',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li>
                                    <span class="date"><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                    <a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],50,'...');?></a>
                                </li>
                            <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                </div>
                <div class="news case fl">
                    <div class="hd">
                        <span>朴石策略</span>
                        <a href="http://www.postone.com.cn/info.asp?base_id=3&second_id=3002" class="more"></a>
                    </div>
                    <div class="bd">
                        <ul>
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1009576e34529967a67adef4a3af74a4&action=lists&status=99&catid=13&num=6&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('status'=>'99','catid'=>'13','order'=>'listorder ASC','limit'=>'6',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <li>
                                        <span class="date"><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                        <a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],50,'...');?></a>
                                    </li>
                                <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="side">
                <div class="bd">
                    <img src="./resource/contact.png">
                    <div style="padding: 5px; line-height: 24px; word-break: break-all">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a5fe5ffba8caa86a0df0ff26d5902413&sql=SELECT+%2A+FROM+v9_page+where+catid%3D3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=3 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                            <?php echo $val['content'];?>
                            <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
                <div class="link">
                    <p>
                        <a href="index.php?m=content&c=index&a=show&catid=6&id=4"><img src="./resource/2015071625147939.png"></a>
                    </p>
                    <p>
                        <a href="index.php?m=content&c=index&a=show&catid=9&id=20"><img src="./resource/2015071625154455.png"></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="ad"><img src="./resource/ad.jpg"></div>
    </div>
    <?php include template("content","footer"); ?>
</body>

</html>
