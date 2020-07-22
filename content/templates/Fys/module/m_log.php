<?php 
/**
 * 日志模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<section class="container">
<div class="content-wrap">
	<div class="content">
	<?php if(blog_tool_ishome()&& $ppt_zhiding==2){?>
	<div id="focusslide" class="carousel slide wow zoomIn" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#focusslide" data-slide-to="0" class="active"></li>
				<li data-target="#focusslide" data-slide-to="1"></li>
				<li data-target="#focusslide" data-slide-to="2"></li>
				<li data-target="#focusslide" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<a href="<?php echo $ppt_titleurl;?>"><img src="<?php echo $ppt_picurl;?>"></a>
				</div>
				<div class="item">
					<a href="<?php echo $ppt_titleur2;?>"><img src="<?php echo $ppt_picur2;?>"></a>
				</div>
				<div class="item">
					<a target="_blank" href="<?php echo $ppt_titleur3;?>"><img src="<?php echo $ppt_picur3;?>"></a>
				</div>
			</div>
			<a class="left carousel-control" href="#focusslide" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a><a class="right carousel-control" href="#focusslide" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
		</div>
		<?php }?>
		<?php if(blog_tool_ishome()&& $radio_zhiding==2){?>
		<div class="cms_1_content wow fadeInUp">

			<article class="excerpt-gg excerpt-minic-index">
			<h2><a class="red" href="#"><?php echo $heightkey;?></a><a href="<?php echo $top_titleurl;?>" title="<?php echo $top_title;?>"><?php echo $top_title;?></a></h2>
			<p class="note">
				<?php echo $top_content;?>
			</p>
			</article>
		</div>
		<?php }?>
		<?php if(blog_tool_ishome()&& $suijiwenzhangqiyong==2){?>
		<div class="wow fadeInUp">
			<?php CommonPageFromGFS(); ?>
		</div>
		<?php }?>
		<?php if(blog_tool_ishome()&& $Sorts==1){?>
		<div class="wow fadeInUp">
			<div class="asb asb-index asb-index-01">
				<div class="asb asb-index asb-index-01">
					<ul class="indexebox">
						<li class="indexebox-i indexebox-01">
						<h4><?php echo $Sorth1;?></h4>
						<p>
			<?php echo $Sortp1;?>
						</p>
						<a class="btn btn-sm btn-danger1" href="<?php echo $Sorta1;?>"><?php echo $jinru1_text;?></a>
						</li>
						<li class="indexebox-i indexebox-02">
						<h4><?php echo $Sorth2;?></h4>
						<p>
			<?php echo $Sortp2;?>
						</p>
						<a class="btn btn-sm btn-danger2" href="<?php echo $Sorta2;?>" target="_black"><?php echo $jinru2_text;?></a>
						</li>
						<li class="indexebox-i indexebox-03">
						<h4><?php echo $Sorth3;?></h4>
						<p>
			<?php echo $Sortp3;?>
						</p>
						<a class="btn btn-sm btn-danger3" href="<?php echo $Sorta3;?>"><?php echo $jinru3_text;?></a>
						</li>
						<li class="indexebox-i indexebox-04">
						<h4><?php echo $Sorth4;?></h4>
						<p>
			<?php echo $Sortp4;?>
						</p>
						<a class="btn btn-sm btn-danger4" href="<?php echo $Sorta4;?>"><?php echo $jinru4_text;?></a>
						</li>
						<li class="indexebox-i indexebox-100">
						<h4><?php echo $Sorth5;?></h4>
						<p>
    		<?php echo $Sortp5;?>
						</p>
						<a class="btn btn-sm btn-danger" href="<?php echo $Sorta5;?>" target="_black"><?php echo $jinru5_text;?></a>
						</li>
					</ul>
				</div>
			</div>
			</div>
		<?php }?>
		<?php if (blog_tool_ishome()) {?>
		<div class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
	<div class="title">
		<h3>
				最新发布
		</h3>
		<div class="more">
		热门标签：
			<?php getTags(6);?>
			</a>
		</div>
	</div>
</div>
		<?php }?>
<?php doAction('index_loglist_top'); 
if (!empty($logs)){
		if(blog_tool_ishome() && empty($keyword)) {
			//echo '<div class="title"><h3>最新更新</h3></div>';
		}
		if(!empty($sort)) {
			//栏目页显示
			$des = $sort['description']?$sort['description']:'这家伙很懒，还没填写该栏目的介绍呢~';
			echo '<div class="content_catag_container"><h2 class="content_catag_title isKeywords font_title">'.$sortName.'</h2><p>'.$des.'</p></div>';
		}
		if(!empty($record)) {
			//日期记录
			$year    = substr($record,0,4);
			$month   = ltrim(substr($record,4,2),'0');
			$day     = substr($record,6,2);
			$archive = $day?$year.'年'.$month.'月'.ltrim($day,'0').'日':$year.'年'.$month.'月';
			echo '<div class="content_catag_container"><h2 class="content_catag_title isKeywords font_title">日志归档</h2><p>'.$archive.'发布的文章</p></div>';
		}
		if(!empty($author_name)) {
			//作者日志显示
			
			echo '<div class="content_catag_container"><h2 class="content_catag_title isKeywords font_title">作者</h2><p>本站作者<strong>'.$author_name.'</strong> 共计发布文章'.$lognum.'篇</p></div>';
		}
		if(!empty($keyword)) {
			//搜索
			echo '<div class="content_catag_container"><h2 class="content_catag_title isKeywords font_title">站内搜索</h2><p>本次搜索帮您找到有关 <strong>'.$keyword.'</strong> 的结果'.$lognum.'条</p></div>';
		}
		if(!empty($tag)) {
			//关键词
			echo '<div class="content_catag_container"><h2 class="content_catag_title isKeywords font_title">标签关键词</h2><p>关于 <strong>'.$tag.'</strong> 的文章共有'.$lognum.'条</p></div>';
		}
}

foreach($logs as $key=>$value): 
	$picnum = pic($value['content']);
		if($module_thum=="0"){
			$imgsrc = GetThumFromContent($value['content']);
		}else{
			$imgsrc = get_thum($value['logid']);
		}
	$keys = $key+1;
    $ishowimg = $picnum!=0;
	
?>
		<article class="excerpt <?php echo "excerpt-{$keys}";?> wow fadeInUp">
		<?php
echo '<a class="focus" href="'.$value['log_url'].'">';
echo "<img data-src='$imgsrc' src='$imgsrc' class=\"thumb\" ></a>";
?>
		<header>
		<?php blog_sort($value['logid']); ?>
<h2><a href="<?php echo $value['log_url']; ?>" title="<?php echo $value['log_title']; ?>"><?php echo $value['log_title']; ?></a></h2>
</header>
<p class="note">
	<?php echo $logdes = tool_purecontent($value['content'], 180); ?>...
</p>
<p class="meta">
	<time><i class="fa fa-clock-o"></i><?php echo gmdate('Y-n-j', $value['date']); ?></time><span class="pv"><i class="fa fa-eye"></i>阅读（<?php echo $value['views']; ?>）</span><a class="pc" href="<?php echo $value['log_url']; ?>#comments"><i class="fa fa-comments-o"></i>评论(<?php echo $value['comnum']; ?>)</a>
</p>
</article>
		<?php 
endforeach;
?>
		<div class="pagination">
			<ul>
				<?php echo sheli_fy($lognum,$index_lognum,$page,$pageurl);?>
			</ul>
		</div>
	</div>
</div>
<?php
 include View::getView('side');
 include View::getView('footer');
?>