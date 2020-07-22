<html>
<head>
<div id="top-png"></div>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-title" content="七彩网络">
<meta http-equiv="Cache-Control" content="no-siteapp">
<title><?php echo $site_title; ?>-<?php echo $site_description; ?></title>
<link rel='stylesheet' id='_bootstrap-css'  href='<?php echo TEMPLATE_URL; ?>css/bootstrap.min.css?ver=1.9' type='text/css' media='all' />
<link rel='stylesheet' id='_fontawesome-css'  href='<?php echo TEMPLATE_URL; ?>css/font-awesome.min.css?ver=1.9' type='text/css' media='all' />
<link rel='stylesheet' id='_main-css'  href='<?php echo TEMPLATE_URL; ?>css/main.css?ver=1.9' type='text/css' media='all' />
<style type="text/css">
body { background-image: url(<?php echo $bg_url; ?>);
background-position: left top;  background-attachment:fixed; background-repeat:no-repeat}
</style><meta name="keywords" content="<?php echo $site_key; ?>">
<meta name="description" content="<?php echo $site_description; ?>">
<link rel="shortcut icon" href="<?php echo TEMPLATE_URL; ?>favicon.ico">
<link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>css/animate.css">
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<script src="http://libs.baidu.com/jquery/1.8.0/jquery.min.js"></script>
</head>
<?php if($logid){?>
<body class="post-template-default single single-post postid-3358 single-format-standard custom-background list-comments-r comment-open site-layout-2">
<?php }else{?>
<body class="home blog custom-background list-comments-r site-layout-2">
<?php }?>
<header class="header">
	<div class="container ">
		<h1 class="logo site-logo"><a href="<?php echo BLOG_URL; ?>" title="<?php echo $site_title; ?>"><img src="<?php echo $logo_url; ?>">七彩网络</a></h1>		
		<div class="brand"><?php echo $new_log_num; ?></div>		
		<ul class="site-nav site-navbar">
			<?php blog_navi();?>
							<li class="navto-search"><a href="javascript:;" class="search-show active"><i class="fa fa-search"></i></a></li>
					</ul>
		<div class="topbar">
			<?php echo $home_toptext;?>
			<?php if(!islogin()){ ?>
							  <a href="javascript:;" class="signin-loader">Hi, 请登录</a>
				&nbsp; &nbsp; <a href="javascript:;" class="signup-loader">我要注册</a>
<?php }else{ ?>
		<?php 
				global $userData;
			?>

								    &nbsp;Hi, <?php if(empty($userData["nickname"])){echo $userData["username"];}else{echo $userData["nickname"];}?>				
									&nbsp;&nbsp;<a href="admin/?action=logout">退出</a>
					&nbsp; &nbsp; <a href="?user&posts">进入会员中心</a>
					<?php }?>
			
				<div class="site-contact"><a  title="QQ <?php echo $nexqq; ?>" class="btn btn-primary"  target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $nexqq; ?>&site=qq&menu=yes"><i class="fa fa-qq"></i> QQ咨询</a></div>
		</div>
		<i class="fa fa-bars m-icon-nav"></i>
	</div>
</header>
<div class="site-search">
	<div class="container">
		<form method="get" class="site-search-form" action="<?php echo BLOG_URL; ?>index.php" >
		<input class="search-input" name="keyword" type="text" placeholder="输入关键字" value="">
		<button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
		</form>	
	</div>
</div>