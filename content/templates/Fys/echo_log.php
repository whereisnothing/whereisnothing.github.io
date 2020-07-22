<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<section class="container">
<div class="mbx" style="
    margin: -7px 0 0 0;
    margin-bottom: 10px;
    padding: 10px;
    background: white;
    font-size: 12px;
    color: #999;
    border-left: 5px solid #27BCF6;">
	<a href="/">首页</a>>><?php blog_sort($logid); ?>>><?php echo $site_title; ?></div>
	<div class="content-wrap">
	<article class="card">
  <header class="card__thumb">
    <img data-thumb="default" src="<?php srand((double)microtime()*1000000);$randval = rand(1,7);echo TEMPLATE_URL.'images/tupian/'.$randval.'.jpg';?>" class="thumb">  </header>
  <date class="card__date">
    <span class="card__date__day"><?php echo gmdate('Y-n-j', $date); ?></span> 
  </date>
  <div class="card__body">
    <div class="card__category"> 分类：<?php blog_sort($logid); ?></a></div>
    <h2 class="card__title"><a href="<?php echo $log_url; ?>"><?php topflg($top); ?> <?php echo $log_title; ?></a></h2>
    <div class="card__subtitle">文章作者：<?php echo blog_author($author); ?></div>
	<span>
	<img src="http://qr.liantu.com/api.php?text=<?php echo Url::log($logid);?>"><small>手机扫码查看</small></span>
    <!--模板介绍-->
	<p class="card__description"><?php echo subString(strip_tags($log_content),0,100); ?>...</p>
	</div>
	<!--模板介绍结束-->
	<footer class="card__footer">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fa fa-eye"></i> 阅读<?php echo $views; ?></span>
				&nbsp&nbsp<span><i class="fa fa-comments-o"></i> 评论<?php echo $comnum; ?></span>
					<span>&nbsp&nbsp<?php echo checkbaidu($logid); ?></footer>
</article>
	<div class="content">
            <?php echo $dingbugg; ?>
			<div class="article-meta">
				<span class="item"></span>
			</div>
		</header>
		<article class="article-content wow zoomIn">
			<?php echo  reply_view($log_content,$logid);//文章回复可见?>
<span style="display:block;padding-top:40px;"></span>
<?php doAction('down_log',$logid); ?>
		</article>	

		 <br><script type='text/javascript' src='<?php echo TEMPLATE_URL; ?>js/jquery-1.9.1.min.js'></script>
        <div class="hide_box outbox">
                            </div>
                            <div class="shang_box animated flipInY">
				<i class="shang_close outbox animated fadeInUpBig" title="关闭">&times;</i>
						<img class="shang_logo animated fadeInUpBig" src="<?php echo TEMPLATE_URL; ?>img/fys.png" height="40" alt="mrhee">
                                <div class="shang_tit">
                                    <p>
                                        感谢您的支持，我们会一直保持!</p>
                                </div>
                                <div class="shang_payimg">
                                    <img src="<?php echo TEMPLATE_URL; ?>img/alipayimg.png" class="animated zoomIn" alt="扫码支持" title="扫一扫" />
                                </div>
                                <div class="pay_explain">请土豪扫码随意打赏</div>
                                <div class="shang_payselect">
                                    <div class="pay_item checked" data-id="alipay">
                                        <span class="radiobox"></span><span class="pay_logo">
					<img src="data:image/png;base64,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" alt="支付宝" /></span>
                                    </div>
                                    <div class="pay_item" data-id="weipay">
                                        <span class="radiobox"></span><span class="pay_logo">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAAAcCAYAAADst9g0AAAFV0lEQVRoQ+1aS3LbRhTsx886yi47wycIUqHWgU4Q8gRiThD6BKJPIOYEok4A5gSC1lIq8jIryScIvSbo5+rBDD0E8RlZtEp2kVUuyeB8e/r16zeQ4PB5VgTkWWc7TIYvAjxJBwk6+gqQqMBQliK40zU+ZKObuwOu9QgEA56kx2OIngokaQJUgQeILvBRLg/g7yLVCniS/jqEdM4FsGwO568Cc+jqbTa6ewjv9X23rAU8SeMjSO9CIMOnQKDQJVTeZKOb+VPG+V76VgJegN2/EiDe10ZV8ccBdFQnzSQdLETk932BDdVrhc6y0T+LvY35dQeifH4VGdxhODVbpJPuYz+quAQwc8kzSQeTbHQ7Cxg77gPJCjBte8AsByauXw9Y5ECl1PWB+QoYe3Mc9YFZ6VnjEnrANAemAeuMusB0vT2f6dYDshzYMRg7gJ+kgweIvAqYrLqJ6gc1QOVzlyz9xKuqb9pAt4CO7cYnbvFdYLwG5nWb6QLDDhApQGuq3gJ5WFsHnQPXdXsMBdy2Y9TuWOEgwOmvReRqZyGKdxD83HgIqu8VMgVWi2x0t2TbJD2OIXruW0naxmx487phszMC5gPrFs8NAsgAnNmfHOY6L56RVWQ+D6o199g+MaOnvBYFIqmQFBtlDtyoB0z8yPPHCQV8KiLczNZH9eOIDwQyh8gPpS939Nkk3U7vTFQ2MuD3UV29rrGKR3YTBCHqAwsFLgQYG4sJCO3pqgD+wQLMOai3BGBuw5jj1BIkB94BMKSo+oQwvAss5PNh7UiHAmMB5iQYyePm2ZKUumSpqn9no9shgRT0FhD5razPbkDqNARnAjmq25CqnmSjW8PKug2TwY65XpuoL3K/UmWEEPCN1hJ8AEcWcILv6/jWNHkBQG1SbAOc0gZgSiJUrNHMFcTwk3SQEcwqEBpYaZqbcl+EbGwtkFoAJzspDQk3JsAmnyjwXwf4yWo0RTqy0kOGMYnGVYmq7mDdczsPZciwvkJSeJAuWuMuMLGS40hBaWKbDYmCAE/S47kITqsBB0v1HdYkaRzZAqmx5N+WlHqGc6Fs2wCccTBssyra3jFZroHMHZSVl8cwvMltTG1O2bK0Lp84kCkx1q2YQwsEfFCp4Q4s1dWPnxNis043sepqeFNZcPWAxLKLoZrw/wBMxCnw3mkhgRVgWbZ6dZtsYzi/71gGf/SSqF0PndHO4ZUBZ3RRxlwkBAIeRyL9+wbtfZuNbqchOt0whskHTSD4rsT5YV9X6bUVWJYdgr9JGym+NdxMmQMnVfN3C23PfJlqcCHGMfkywv7r4uCWQYBbLW6sMnk30pQQ29gUUuK7xfpFjA+y/f2hXJyUAa+SpbYosMxlpNFd1MpSBcO3tv4IwI9jgTJ5btu/NiRDvle9vhrdtmq9XezQ2jwTDfbZxOk3pce6jU3R8UTA6WxOFfgFheMZCnCfA39VOZq9AW5ZPhGR8xAMg9uYCjSPQ65qCRx997qo4DaA2kpyaLXbuRmy0Fg8H/A+cKfAn+X10TuvClD5oe4SZNrM5brQb/8Ajfvh4QL4X4BLr8jakRQ7pqsBeB3h5tkso+F69ngsgotgQJsaGrAlecQLCVq0qjdH5Uslev1NAeNKfwt+bSR5uussbMhFFefiP9eWfTl3uYByNUBVHdH8io1veZ4MurkpzMchzN7L4b7wQVrf+Jykg+UX6bm9WzncgW8zoBFwXj6J4F/TpZCFhUCjumoUBcgsRrID0NWh1gL4wCTP4t5kNXFFT5FY4wjobcr4pruRFx7lz7q8NsAT/gnEI5Ldsy7+W5ysVcO/xU295DUfAH/m0/kEqY9rO0Y495AAAAAASUVORK5CYII=" alt="微信" /></span>
                                    </div>
                                </div>
                                <div class="shang_info">
                                    <p>
                                        打开<span id="shang_pay_txt">支付宝</span>扫一扫，即可进行扫码打赏哦
                                    </p>
                                    <p>
                                        分享从这里开始，精彩与您同在
                                    </p>
                                </div>
                            </div>
<script>
$(function() {
	 $(".outbox").bind("click",function(){
    		$(".hide_box").fadeToggle();
    		$(".shang_box").fadeToggle();
	  });
	$(".pay_item").bind("click",function(){
		$(this).addClass('checked').siblings('.pay_item').removeClass('checked');
        	var dataid = $(this).attr('data-id');
        	$(".shang_payimg img").attr("src", "<?php echo TEMPLATE_URL; ?>img/" + dataid + "img.png");
        	$("#shang_pay_txt").text(dataid == "alipay" ? "支付宝" : "微信");
	  });
});
</script>
      <span class="pay">
	<a rel="nofollow" style="color: #fff" class="outbox action-rewards btn-danger" title="打赏，支持一下"><i class="fa fa-heart"></i> 打赏作者</a>
  </span>
		<div class="asb-post-footer wow zoomIn"><b>AD：</b><strong>【站长推荐】</strong><a target="_blank" href="<?php echo $zhanzhanglj; ?>"><?php echo $zhanzhangwz; ?></a></div>	<br>		  
							
 
		
		
				<div class="post-copyright wow fadeInUp">版权所有，转载注意明处：<a href="/"><?php echo $blogname; ?></a> &raquo; <a href="<?php echo $log_url; ?>"><?php echo $log_title; ?></a></div>									  	<div class="ViBox wow fadeInUp">
						<p>
							 <?php doAction('ja_related', $logData); ?>
			
						<a target="_blank" rel="external nofollow" class="vibtn vi_info" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $nexqq; ?>&amp;site=qq&amp;menu=yes"><i class="fa fa-qq"></i> QQ</a>						</p>
					</div>
  
					<div class="action-share wow fadeInUp"></div>
				<div class="article-categories wow fadeInUp" style="text-align: center;"><?php blog_tag($logid); ?></div>
 
	<div class="article-author wow fadeInUp">
			<dt><img alt="" src="<?php $imgavatar = empty($userData['photo']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . substr($userData['photo'],3);echo myGravatar($userData["email"],$imgavatar);?>" onerror="javascript:this.src=&quot;<?php $imgavatar = empty($userData['photo']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . substr($userData['photo'],3);echo myGravatar($userData["email"],$imgavatar);?>&quot;;this.onerror=null;" class="avatar avatar-50 photo" height="50" width="50"></dt>	<h4> <i class="fa fa-user" aria-hidden="true"></i>
		<?php echo blog_author($author); ?>
	</h4>
	用心去打造出中国最独具特色的资源网站，用每一滴汗水换回所有付出所得的喜悦！</div>

		
		
			
		        <!-- 上一篇、下一篇功能 -->
                <nav class="pager wow fadeInUp" role="navigation">

					 <?php neighbor_log($neighborLog, 'nextLog');?>
				</nav>
                <!-- 上一篇、下一篇功能 -->

		<div class="relates wow zoomIn">
	<?php related_logs($logData);?>
</div>	
	<?php if(!empty($ad_page_down)):echo $ad_page_down;endif;?>
	<div class="article_related"><?php doAction('log_related', $logData); ?></div>
	
			<div class="article_post_comment" id="comment-place">
				<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
			</div>
			<a name="comments"></a>
			<?php 
				echo '<h3 class="comment-header">网友评论<b>（'.$comnum.'）</b></h3>';
				echo '<div class="article_comment_list">';
			?>
			<?php blog_comments($comments,$comnum); ?>
			<?php
				echo '</div>';
			?>
			


</div> </div>
<?php include View::getView('side2'); ?>
</div>
<?php
 include View::getView('footer');
?>

