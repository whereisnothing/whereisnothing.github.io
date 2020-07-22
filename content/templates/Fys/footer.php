<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<footer class="footer">
	<div class="container wow fadeInUp">
	<?php if (blog_tool_ishome()) {?>
					<div class="flinks">
	<ul class="xoxo blogroll wow zoomIn">		<a href="links"><strong>友情链接：</strong></a>
<li>
 <?php 
			global $CACHE;
			$link_cache = $CACHE->readCache('link');
			foreach($link_cache as $value): ?>
<li><a href="<?php echo $value['url']; ?>" target="_blank"><?php echo $value['link']; ?></a></li>
				<?php endforeach; ?>
</li>
	</ul>

			</div>
			<?php }?>
					<div class="fcode">	Copyright © 2017 <a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a>
        <a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a>	</div>
			<p>Powered by <a href="http://www.emlog.net" target="_blank">Emlog</a> · Theme by <a href="http://www.521mz.cn" target="_blank">FYS1.9.1美化版</a></span></p>
			</div>

</footer>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/wow.min.js"></script>
<script>
window.jsui={
	www: '<?php echo BLOG_URL; ?>',
	uri: '<?php echo TEMPLATE_URL; ?>',
	ver: '4.5.2',
	logocode: '<?php echo Option::get('login_code');?>',
	is_fix:'<?php echo $navhide;?>',
	is_pjax:'<?php echo $pjax;?>',
	iasnum:'<?php echo $down_next; ?>',
	lazyload:'<?php echo $webcompress; ?>',
};
</script>
<script type="text/javascript" src="/content/plugins/ja_praise/ja_praise.js"></script>
<script type='text/javascript' src='<?php echo TEMPLATE_URL; ?>js/jquery.min.js?ver=1.9'></script>
<script type='text/javascript' src='<?php echo TEMPLATE_URL; ?>js/bootstrap.min.js?ver=1.9'></script>
<script type='text/javascript' src='<?php echo TEMPLATE_URL; ?>js/loader.js?ver=1.9'></script>
<script type='text/javascript' src='<?php echo TEMPLATE_URL; ?>js/wp-embed.min.js?ver=4.8.3'></script>
</body>
</html>