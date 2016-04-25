<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="nav">
    <div class="wrap">
        <ul class="clearfix">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4ed6501f822a2c03611afc04ba403f56&action=category&catid=10&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <li><a <?php if(empty($catid)) { ?>class="current"<?php } ?> href="<?php echo siteurl($siteid);?>">首页</a></li>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><!--  一级栏目循环开始  -->
                <li><a <?php if($r['catid'] == $catid || $CATEGORYS[$CAT[parentid]][catid]==$r['catid']) { ?>class="current" <?php } ?> href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                    <?php if($r[catid]==6||$r[catid]==9) { ?> <!--是否有子栏目-->
                        <dl class="subNav" style="display:none">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4034e69f1722d4c71f2fdfa151622445&action=lists&catid=%24r%5Bcatid%5D&order=listorder+ASC&num=25&return=subnav\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$subnav = $content_tag->lists(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'25',));}?>
                                <?php $n=1;if(is_array($subnav)) foreach($subnav AS $v) { ?><!--子栏目循环开始-->
                                <dt><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></dt>
                                <?php $n++;}unset($n); ?><!--子栏目循环结束-->
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </dl>
                    <?php } ?>
                    <?php if($r[catid]==7) { ?> <!--是否有子栏目-->
                        <dl class="subNav" style="display:none">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c70f9a2e604b09c30733441436bafffb&action=category&catid=%24r%5Bcatid%5D&order=listorder+ASC&num=25&return=subnav\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$subnav = $content_tag->category(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'25',));}?>
                                <?php $n=1;if(is_array($subnav)) foreach($subnav AS $v) { ?><!--子栏目循环开始-->
                                <dt><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></dt>
                                <?php $n++;}unset($n); ?><!--子栏目循环结束-->
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </dl>
                    <?php } ?>
                </li>
                <?php $n++;}unset($n); ?><!--  一级栏目循环结束-->
                <li><a href="index.php?m=content&c=index&a=show&catid=6&id=6">联系我们</a></li>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>