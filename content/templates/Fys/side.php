<?php 
/**
 * 侧边栏
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 

?>
<div class="sidebar">	
<?php if($userhide==1):?>
<div class="widget widget-tops wow zoomIn affix-top" style="visibility: visible;animation-name: zoomIn;top: 0px;width: 360px;margin-left: 10px;left: -10px;">
	<ul class="widget-nav">
		<li class="active">会员中心</li>
		<li class="">网站公告</li>
		<li class="">顶置推荐</li>
		<li class="">联系我们</li>
	</ul>
	<ul class="widget-navcontent">
		<li class="item item-02 active">
			<?php if(!islogin()){ ?>
		<h4>需要登录才能进入会员中心</h4>
						<p>
							<a href="javascript:;" class="btn btn-primary signin-loader">立即登录</a>
							<a href="javascript:;" class="btn btn-default signup-loader">现在注册</a>
						</p>
						</li>
						<?php }else{ ?>
						<?php 
				global $userData;
			?>
		<dl>
			<dt><img alt="" src="<?php $imgavatar = empty($userData['photo']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . substr($userData['photo'],3);echo myGravatar($userData["email"],$imgavatar);?>" onerror="javascript:this.src=&quot;<?php $imgavatar = empty($userData['photo']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . substr($userData['photo'],3);echo myGravatar($userData["email"],$imgavatar);?>&quot;;this.onerror=null;" class="avatar avatar-50 photo" height="50" width="50"></dt>
			<dd><?php if(empty($userData["nickname"])){echo $userData["username"];}else{echo $userData["nickname"];}?> <span class="text-muted"><?php echo $userData["email"];?> </span></dd>
		</dl>
		<ul>
			<li><a href="<?php echo BLOG_URL;?>?user&posts">我的文章</a></li>
			<li><a href="<?php echo BLOG_URL;?>?user&comments">我的评论</a></li>
			<li><a href="<?php echo BLOG_URL;?>?user&info">修改资料</a></li>
			<li><a href="<?php echo BLOG_URL;?>?user&password">修改密码</a></li>
		</ul>
		<?php }?>
		</li>
		<li class="item item-01">
		<ul>
			<?php echo $home_text;?>
		</ul>
			<li class="item item-01">
		<ul>
				<?php echo $dingzhi_text;?>
		</ul>
		</li>
		<li class="item item-04">
		<h2>遇到疑问,可以联系我或给我留言</h2>
		<a class="btn btn-success sns-wechat" href="javascript:;" title="关注”我的微信“" data-src="<?php echo $weixinerweima; ?>"><i class="fa fa-weixin"></i> 公众号</a><a target="_blank" class="btn btn-info" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $nexqq; ?>&amp;site=qq&amp;menu=yes"><i class="fa fa-qq"></i> QQ联系</a></li>
	</ul>
</div>
<?php endif;?>
<?php 
$widgets = !empty($options_cache['widgets1']) ? unserialize($options_cache['widgets1']) : array(); //网站原内容
doAction('diff_side');
foreach ($widgets as $val)
{
	$widget_title = @unserialize($options_cache['widget_title']);
	$custom_widget = @unserialize($options_cache['custom_widget']);
	if(strpos($val, 'custom_wg_') === 0)
	{
		$callback = 'widget_custom_text';
		if(function_exists($callback))
		{
			call_user_func($callback, htmlspecialchars($custom_widget[$val]['title']), $custom_widget[$val]['content']);
		}
	}else{
		$callback = 'widget_'.$val;
		if(function_exists($callback))
		{
			preg_match("/^.*\s\((.*)\)/", $widget_title[$val], $matchs);
			$wgTitle = isset($matchs[1]) ? $matchs[1] : $widget_title[$val];
			call_user_func($callback, htmlspecialchars($wgTitle));
		}
	}
}
?>

<?php if(!empty($ad_side)):?>
<div class="widget widget_ui_adsf widget_fix"></span><h3> AD</h3>	
<?php echo $ad_side;?>
</div>
<?php endif;?>
<?php if($cbads==1):?>
<div class="widget widget_ui_ad aos-init aos-animate" style="visibility: visible; animation-name: fadeInUp;">
	<ul>
	    <li><div class="aditem">
			<a class="list-group-item list-group-item-success adli" href="<?php echo $cdurl1;?>" target="_blank"><?php echo $cbbt1;?></a><div class="adtooltip"><p>
			<?php echo $cbts1;?></p><div class="adarrow"></div></div></div>
		</li>
	    <li><div class="aditem">
	        <a class="list-group-item list-group-item-info adli" rel="nofollow" href="<?php echo $cdurl2;?>"><?php echo $cbbt2;?></a><div class="adtooltip"><p>
			<?php echo $cbts2;?></p><div class="adarrow"></div></div></div>
		</li>
	    <li><div class="aditem">
	        <a class="list-group-item list-group-item-warning adli" rel="nofollow" href="<?php echo $cdurl3;?>"><?php echo $cbbt3;?></a><div class="adtooltip"><p><?php echo $cbts3;?></p><div class="adarrow"></div></div></div>
		</li>
	    <li><div class="aditem">
	        <a class="list-group-item list-group-item-danger adli" rel="nofollow" href="<?php echo $cdurl4;?>"><?php echo $cbbt4;?></a><div class="adtooltip"><p><?php echo $cbts4;?></p><div class="adarrow"></div></div></div>
		</li>
	</ul>
</div>
<?php endif;?>
<?php if($timehide==1):?>
<div class="widget widget_ui_statistics wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
	<h3>站点统计</h3>
    <ul>
    <?php $sta_cache = Cache::getInstance()->readCache('sta');?>
    <li><a>文章总数：<?php echo $sta_cache['lognum']; ?>篇</a></li>
    <li><a>微语总数：<?php echo $sta_cache['twnum']; ?>条</a></li>
    <li><a>评论总数：<?php echo $sta_cache['comnum']; ?>条</a></li>	
	<li><a>运行天数: <?php echo floor((time()-strtotime($timedate))/86400); ?>天</a></li>
    </ul>
</div>
<?php endif;?>
</div>
</section>