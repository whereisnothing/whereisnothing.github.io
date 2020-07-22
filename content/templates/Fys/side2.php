<?php 
/**
 * 侧边栏
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 

?>
<div class="sidebar">	
<?php if($userhide==1):?>
<?php endif;?>
<?php 
$widgets = !empty($options_cache['widgets2']) ? unserialize($options_cache['widgets2']) : array(); //网站原内容
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