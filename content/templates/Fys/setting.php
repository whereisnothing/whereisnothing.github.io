<?php 
/*
 * @FYS
 * @authors 七彩网络 (QQ972622982)
 * @date    2017年11月2日09:28:35
 * @version 1.1
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
if (ROLE == ROLE_ADMIN):
require_once(EMLOG_ROOT.'/content/templates/Fys/config.php');
//echo TEMPLATE_URL.'config.php';
require_once('setting_fun.php');
plugin_setting();
?>


<link rel='stylesheet' id='set-css'  href='<?php echo TEMPLATE_URL; ?>option/set.css' type='text/css' media='all' />
<section class="container"><div class="content-wrap">
<div id="content" class="site-content group">	
<div class="kuandu">
<div id="primary" class="left-column">
<div id="setting" >
<main id="main" class="site-main" role="main">
 <form action="?setting&do=save" method="post" id="input" class="da-form">
  <div class="set_nav">
	<ul>
		<li class="active"><a href="#sethome">基本配置</a></li>
		<li><a href="#m_blog">博客模式 </a></li>
		<li><a href="#m_cms">杂志模式 </a></li>
		<li><a href="#setaside">广告设置</a></li>
		<li><a href="#addiy">单页设置</a></li>
        <li><a href="#plus">附加设置</a></li>
		<li><a href="#cssdiy">分类信息</a></li>
        <li><a href="#read">关于模板</a></li>
		<li class="last"><input type="submit" value="保 存" class="svae" /></li>
	</ul>
</div>
<div class="set_cnt">
<div class="set_box" id="sethome" style="display:block">
<div class="da-form-row">
<td class="right_td">建站时间:</td>
<td class="left_td"><input size="10" name="timedate" type="text" value="<?php echo $timedate; ?>" id="datepicker" style="width: 250px;"/></td>
<span class="right_td"><input type="checkbox" value="1" name="timehide" <?php if($timehide == 1):?> checked<?php endif;?> /> 显示</span>
</div> 
<div class="da-form-row">
<td class="right_td">博客LOGO地址</td>
<td class="left_td"><input size="10" name="logo_url" type="text" value="<?php echo $logo_url; ?>" id="" style="width: 250px;"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧边栏微信公众号图片</td>
<td class="left_td"><input size="10" name="weixinerweima" type="text" value="<?php echo $weixinerweima; ?>" id="" style="width: 250px;"/></td>
</div>
<div class="da-form-row">
<td class="right_td">博客背景地址</td>
<td class="left_td"><input size="10" name="bg_url" type="text" value="<?php echo $bg_url; ?>" id="" style="width: 250px;"/></td>
</div>
<div class="da-form-row">
<td class="right_td">站长QQ</td>
<td class="left_td"><input size="10" name="nexqq" type="text" value="<?php echo $nexqq; ?>" id="" style="width: 250px;"/></td>
</div>
<div class="da-form-row">
<td class="right_td">首页副标题：</td>
<td class="left_td"><input size="20" name="new_log_num" type="text" value="<?php echo $new_log_num; ?>" style="width: 250px;"/></td>
<td class="right_td">首页的副标题，支持<span style="font-size:10px; color:red">HTML</span>代码的</td>
</div>
<div class="da-form-row">
站长推荐文字自定义：
<input size="30" name="zhanzhangwz" type="text" value="<?php echo $zhanzhangwz; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
站长推荐链接自定义：
<input size="30" name="zhanzhanglj" type="text" value="<?php echo $zhanzhanglj; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
           <td class="right_td">网站模式：<span style="font-size:10px; color:red">两种模式选择适合你的</span></td>
           <span class="left_td">
<td class="right_td"><input name="web_method" type="radio"  value="4" <?php if ($web_method == "4") echo 'checked'?>></input></td>
<td class="right_td">图片模式</td>
<td class="right_td"><input name="web_method" type="radio"  value="2" <?php if ($web_method == "2") echo 'checked'?>></input></td>
<td class="right_td">博客模式</td>
<td class="right_td"><input name="web_method" type="radio"  value="3" <?php if ($web_method == "3") echo 'checked'?>></input></td>
<td class="right_td">高富帅模式</td>
</span>
</div>
<div class="da-form-row">
<td class="right_td">导航栏浮动效果</td>
<span class="right_td">
<td class="left_td"><input name="navhide" type="radio" value="1" <?php if ($navhide == "1") echo 'checked'?> ></input></td>
<td class="right_td">禁用</td>
<td class="right_td"><input name="navhide" type="radio"  value="2" <?php if ($navhide == "2") echo 'checked'?>></input></td>
<td class="right_td">启用</td>
</span>
</div>
<div class="da-form-row">
<td class="right_td">会员中心开关</td>
<span class="right_td">
<td class="left_td"><input name="userhide" type="radio" value="1" <?php if ($userhide == "1") echo 'checked'?> ></input></td>
<td class="right_td">启用</td>
<td class="right_td"><input name="userhide" type="radio"  value="0" <?php if ($userhide == "0") echo 'checked'?>></input></td>
<td class="right_td">禁用</td>
</span>
</div>
<div class="da-form-row">
<td class="right_td">CSS/JS CDN加载</td>
<span class="right_td">
<td class="left_td"><input name="cdn_css" type="radio" value="1" <?php if ($cdn_css == "1") echo 'checked'?> ></input></td>
<td class="right_td">启用</td>
<td class="right_td"><input name="cdn_css" type="radio"  value="0" <?php if ($cdn_css == "0") echo 'checked'?>></input></td>
<td class="right_td">禁用</td>
</span>
</div>
<div class="da-form-row">
<td class="right_td">随机文章启用和禁用：</td>
<span class="left_td">
<td class="left_td"><input name="suijiwenzhangqiyong" type="radio" value="1" <?php if ($suijiwenzhangqiyong == "1") echo 'checked'?> ></input></td>
<td class="right_td">禁用</td>
<td class="right_td"><input name="suijiwenzhangqiyong" type="radio"  value="2" <?php if ($suijiwenzhangqiyong == "2") echo 'checked'?>></input></td>
<td class="right_td">启用</td>
</span>
</div>
<div class="da-form-row">
<td class="right_td">下拉刷新页数（0为关闭）</td>
<td class="left_td"><input size="10" name="down_next" type="text" value="<?php echo $down_next; ?>" id="" style="width: 250px;"/></td>
</div>
<div class="da-form-row">
<td class="right_td">首页配图获取方式</td>
<span class="right_td">
<td class="left_td"><input name="module_thum" type="radio" value="0" <?php if ($module_thum == "0") echo 'checked'?> ></input></td>
<td class="right_td">获取内容第一张图片</td>
<td class="right_td"><input name="module_thum" type="radio"  value="1" <?php if ($module_thum == "1") echo 'checked'?>></input></td>
<td class="right_td">获取附件中第一张图片</td>
</span>
</div>
<div class="da-form-row">
<td class="right_td">网站首页公告 (<span style="color:red; font-weight:bold">支持html代码</span>)</td><br/>
<p><textarea name="home_text" cols="125" rows="8" id="home_text" ><?php echo $home_text; ?></textarea></p>
</div>
<div class="da-form-row">
<td class="right_td">网站顶置推荐 (<span style="color:red; font-weight:bold">支持html代码</span>)</td><br/>
<p><textarea name="dingzhi_text" cols="125" rows="8" id="dingzhi_text" ><?php echo $dingzhi_text; ?></textarea></p>
</div>
<div class="da-form-row">
<td class="right_td">文章顶部广告自定义 (<span style="color:red; font-weight:bold">支持html代码</span>)</td><br/>
<p><textarea name="dingbugg" cols="125" rows="8" id="rmwenzhang_text" ><?php echo $dingbugg; ?></textarea></p>
</div>
<div class="da-form-row">
<td class="right_td">网站首页顶部代码 (<span style="color:red; font-weight:bold">支持html代码</span>)</td><br/>
<p><textarea name="home_toptext" cols="125" rows="8" id="home_toptext" ><?php echo $home_toptext; ?></textarea></p>
</div>
</div>
<div class="set_box" id="m_blog">
 </br>
<div class="panel panel-default">
   <div class="panel-heading">
      <h3 class="panel-title">
         置顶设置
      </h3>
   </div>
   <div class="panel-body">
   
<div class="da-form-row">
<td class="right_td">置顶栏目：</td>
<span class="left_td">
<td class="left_td"><input name="radio_zhiding" type="radio" value="1" <?php if ($radio_zhiding == "1") echo 'checked'?> ></input></td>
<td class="right_td">禁用</td>
<td class="right_td"><input name="radio_zhiding" type="radio"  value="2" <?php if ($radio_zhiding == "2") echo 'checked'?>></input></td>
<td class="right_td">启用</td>
</span>
</div>
<div class="da-form-row">
<td class="right_td">高亮关键字</td>
<span style="padding-left:43px;"><input type="text" name="heightkey" size="10" value="<?php echo $heightkey; ?>" style="width: 250px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">置顶标题</td>
<span style="padding-left:43px;"><input type="text" name="top_title" size="10" value="<?php echo $top_title; ?>" style="width: 250px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">置顶标题地址</td>
<span style="padding-left:43px;"><input type="text" name="top_titleurl" size="10" value="<?php echo $top_titleurl; ?>" style="width: 250px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">置顶内容(<span style="color:red; font-weight:bold">支持html代码</span>)</td></br>
<textarea name="top_content" cols="125" rows="8"><?php echo $top_content;?></textarea></span>
</div>
   </div>
</div>
</br>
<div class="panel panel-default">
   <div class="panel-heading">
      <h3 class="panel-title">
         幻灯片设置
      </h3>
   </div>
   <div class="panel-body">
   
<div class="da-form-row">
<td class="right_td">是否开启：</td>
<span class="left_td">
<td class="left_td"><input name="ppt_zhiding" type="radio" value="1" <?php if ($ppt_zhiding == "1") echo 'checked'?> ></input></td>
<td class="right_td">禁用</td>
<td class="right_td"><input name="ppt_zhiding" type="radio"  value="2" <?php if ($ppt_zhiding == "2") echo 'checked'?>></input></td>
<td class="right_td">启用</td>
</span>
</div>
<div class="da-form-row">
<td class="right_td">图片地址1</td>
<span style="padding-left:43px;"><input type="text" name="ppt_picurl" size="10" value="<?php echo $ppt_picurl; ?>" style="width: 250px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">url地址1</td>
<span style="padding-left:43px;"><input type="text" name="ppt_titleurl" size="10" value="<?php echo $ppt_titleurl; ?>" style="width: 250px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">图片地址2</td>
<span style="padding-left:43px;"><input type="text" name="ppt_picur2" size="10" value="<?php echo $ppt_picur2; ?>" style="width: 250px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">url地址2</td>
<span style="padding-left:43px;"><input type="text" name="ppt_titleur2" size="10" value="<?php echo $ppt_titleur2; ?>" style="width: 250px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">图片地址2</td>
<span style="padding-left:43px;"><input type="text" name="ppt_picur3" size="10" value="<?php echo $ppt_picur3; ?>" style="width: 250px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">url地址2</td>
<span style="padding-left:43px;"><input type="text" name="ppt_titleur3" size="10" value="<?php echo $ppt_titleur3; ?>" style="width: 250px;"/></span>
</div>
   </div>
</div>
</div>
<div class="set_box" id="m_cms">
<div class="da-form-row">
<td class="right_td">首页展示图</td>
<td class="left_td"><input name="m_cms_pci" type="radio" value="1" <?php if ($m_cms_pci == "1") echo 'checked'?> ></input></td>
<td class="right_td">自定义</td>
<td class="left_td"><input name="m_cms_pci" type="radio"  value="2" <?php if ($m_cms_pci == "2") echo 'checked'?>></input></td>
<td class="right_td">默认（随机文章）</td>
</div>
<div class="da-form-row">
<td class="right_td">首页展示图自定义-文章ID（英文逗号隔开 5个）</td>
<span style="padding-left:43px;"><input type="text" name="m_cms_page" size="10" value="<?php echo $m_cms_page; ?>" style="width: 250px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">【大家推荐】自定义(请输入9个)</td>
<span style="padding-left:43px;"><input type="text" name="m_gfs_div" size="10" value="<?php echo $m_gfs_div; ?>" style="width: 350px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">杂志分类栏目1：(填写分类的ID)</td>
<span style="padding-left:43px;"><input type="text" name="m_zazhi_config1" size="10" value="<?php echo $m_zazhi_config1; ?>" style="width: 100px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">杂志模式分类（英文逗号隔开 5个）(填写分类的ID)</td>
<span style="padding-left:43px;"><input type="text" name="m_zazhi_config" size="10" value="<?php echo $m_zazhi_config; ?>" style="width: 250px;"/></span>
</div>
<div class="da-form-row">
<td class="right_td">杂志分类栏目2：(填写分类的ID)</td>
<span style="padding-left:43px;"><input type="text" name="m_zazhi_config2" size="10" value="<?php echo $m_zazhi_config2; ?>" style="width: 100px;"/></span>
</div>
</div>
<div class="set_box" id="setaside">
<div class="da-form-row">
<td class="right_td">侧边栏广告位：</td>
<td class="left_td"><input name="cbads" type="radio" value="1" class="mgr mgr-info" <?php if ($cbads == "1") echo 'checked'?> ></input></td>
<td class="right_td"> 开启</td> 
<td class="left_td"><input name="cbads" type="radio" value="2" class="mgr mgr-info" <?php if ($cbads == "2") echo 'checked'?> ></input></td>
<td class="right_td"> 关闭</td> 
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告标题1：</td>
<td class="left_td"><input size="30" name="cbbt1" type="text" value="<?php echo $cbbt1; ?>" class="input-text text-width"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告提示1：</td>
<td class="left_td"><input size="30" name="cbts1" type="text" value="<?php echo $cbts1; ?>" class="input-text text-width"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告链接1：</td>
<td class="left_td"><input size="30" name="cdurl1" type="text" value="<?php echo $cdurl1; ?>" class="input-text text-width"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告标题2：</td>
<td class="left_td"><input size="30" name="cbbt2" type="text" value="<?php echo $cbbt2; ?>" class="input-text text-width"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告提示2：</td>
<td class="left_td"><input size="30" name="cbts2" type="text" value="<?php echo $cbts2; ?>" class="input-text text-width"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告链接2：</td>
<td class="left_td"><input size="30" name="cdurl2" type="text" value="<?php echo $cdurl2; ?>" class="input-text text-width"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告标题3：</td>
<td class="left_td"><input size="30" name="cbbt3" type="text" value="<?php echo $cbbt3; ?>" class="input-text text-width"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告提示3：</td>
<td class="left_td"><input size="30" name="cbts3" type="text" value="<?php echo $cbts3; ?>" class="input-text text-width"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告链接3：</td>
<td class="left_td"><input size="30" name="cdurl3" type="text" value="<?php echo $cdurl3; ?>" class="input-text text-width"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告标题4：</td>
<td class="left_td"><input size="30" name="cbbt4" type="text" value="<?php echo $cbbt4; ?>" class="input-text text-width"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告提示4：</td>
<td class="left_td"><input size="30" name="cbts4" type="text" value="<?php echo $cbts4; ?>" class="input-text text-width"/></td>
</div>
<div class="da-form-row">
<td class="right_td">侧栏广告链接4：</td>
<td class="left_td"><input size="30" name="cdurl4" type="text" value="<?php echo $cdurl4; ?>" class="input-text text-width"/></td>
</div> 
</div> 
<div class="set_box" id="addiy">
</br>
<div class="panel panel-default">
   <div class="panel-heading">
      单页链接设置
   </div>
   <div class="panel-body">
<?php
//global $side_title;
$side_title = unserialize($side_title);
//global $side_url;
$side_url = unserialize($side_url);
for($i=1;$i<=20;$i++){
?>
<div class="da-form-row">
<td class="right_td">单页标题<?php echo $i;?>: &nbsp;</td>
<td class="left_td"><input  style="width:550px;" class="input"  value="<?php echo $side_title[$i]; ?>" name="side_title[<?php echo $i;?>]" style="width: 250px;"></td><br />
<td class="right_td">标题<?php echo $i;?>地址: &nbsp;</td>
<td class="left_td"><input  style="width:550px;" class="input"  value="<?php echo $side_url[$i]; ?>" name="side_url[<?php echo $i;?>]" style="width: 250px;"></td><br />
</div>

<?php }?>
  </div>
</div>
<div class="panel panel-default">
   <div class="panel-heading">
      读者墙设置
   </div>
   <div class="panel-body">
   <div class="da-form-row">
<td class="right_td">显示头像数:</td>
<td class="left_td"><input class="input"  value="<?php echo $imgnum_all; ?>" name="imgnum_all"></td><br />
<td class="right_td">如果统计区间内数据为空，则显示如下： &nbsp;</td>
<td class="left_td"><input class="input"  value="<?php echo $tip; ?>" name="tip" style="width: 250px;"></td><br />
<td class="right_td">统计区间： &nbsp;</td>
<td class="left_td"><input name="type_wall" type="radio" value="week" <?php if ($type_wall == "week") echo 'checked'?> ></input></td>
<td class="right_td">一周</td>
<td class="left_td"><input name="type_wall" type="radio" value="month" <?php if ($type_wall == "month") echo 'checked'?> ></input></td>
<td class="right_td">一月</td>
<td class="left_td"><input name="type_wall" type="radio" value="all" <?php if ($type_wall == "all") echo 'checked'?> ></input></td>
<td class="right_td">全部</td>
</div>
   </div>
</div>
</div>
<div class="set_box" id="plus">
<div class="da-form-row">
<td class="right_td">导航图标设置(<span style="color:red; font-weight:bold">注意更改导航后需重新设置</span>)</td></br>
<td class="right_td">Awesome图标:(<span style="color:red; font-weight:bold"><a href="http://www.fontawesome.com.cn/faicons/" target="_black" title="[点此浏览图标库]">[点此浏览图标库]</a></span>)</td></br>
<?php
global $CACHE; 
global $arr_navico1; 
$navi_cache = $CACHE->readCache('navi');
foreach($navi_cache as $num=>$value):

        if ($value['pid'] != 0) {
            continue;
        }
		$id=$value["id"];
		
		echo '<td class="right_td">'.$value['naviname'].' &nbsp; =></td>
<td class="left_td"><input class="input"  value="'.$arr_navico1[$id].'" name="arr_navico['.$id.']"></td></br>';
endforeach;
?>
</div>
<div class="da-form-row">
<td class="right_td">分类图标设置(<span style="color:red; font-weight:bold">注意更改分类后需重新设置</span>)</td></br>
<td class="right_td">设置教程(<span style="color:red; font-weight:bold">与导航图标一样</span>)</td></br>
<?php
global $CACHE;
$sort_cache = $CACHE->readCache('sort'); 
global $arr_navico1; 
foreach($sort_cache as $num=>$value):
		$sid=$value["sid"];
		
		echo '<td class="right_td">'.$value['sortname'].' &nbsp; =></td>
<td class="left_td"><input class="input"  value="'.$arr_sortico1[$sid].'" name="arr_sortico['.$sid.']"></td></br>';
endforeach;
?>
</div>
</div>
<div class="set_box" id="cssdiy">
<div class="da-form-row">
开启分类信息：
<input name="Sorts" type="radio" value="1" class="mgr mgr-info" <?php if ($Sorts == "1") echo 'checked'?> >
 开启 
<input name="Sorts" type="radio" value="2" class="mgr mgr-info" <?php if ($Sorts == "2") echo 'checked'?> >
 关闭 
</div>
<div class="da-form-row">
分类一标题：
<input size="30" name="Sorth1" type="text" value="<?php echo $Sorth1; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类一文字：
<input size="30" name="Sortp1" type="text" value="<?php echo $Sortp1; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类一链接：
<input size="30" name="Sorta1" type="text" value="<?php echo $Sorta1; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类一进入自定义：
<input size="30" name="jinru1_text" type="text" value="<?php echo $jinru1_text; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类二标题：
<input size="30" name="Sorth2" type="text" value="<?php echo $Sorth2; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类二文字：
<input size="30" name="Sortp2" type="text" value="<?php echo $Sortp2; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类二链接：
<input size="30" name="Sorta2" type="text" value="<?php echo $Sorta2; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类二进入自定义：
<input size="30" name="jinru2_text" type="text" value="<?php echo $jinru2_text; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类三标题：
<input size="30" name="Sorth3" type="text" value="<?php echo $Sorth3; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类三文字：
<input size="30" name="Sortp3" type="text" value="<?php echo $Sortp3; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类三链接：
<input size="30" name="Sorta3" type="text" value="<?php echo $Sorta3; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类三进入自定义：
<input size="30" name="jinru3_text" type="text" value="<?php echo $jinru3_text; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类四标题：
<input size="30" name="Sorth4" type="text" value="<?php echo $Sorth4; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类四文字：
<input size="30" name="Sortp4" type="text" value="<?php echo $Sortp4; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类四链接：
<input size="30" name="Sorta4" type="text" value="<?php echo $Sorta4; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类四进入自定义：
<input size="30" name="jinru4_text" type="text" value="<?php echo $jinru4_text; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类五标题：
<input size="30" name="Sorth5" type="text" value="<?php echo $Sorth5; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类五文字：
<input size="30" name="Sortp5" type="text" value="<?php echo $Sortp5; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类五链接：
<input size="30" name="Sorta5" type="text" value="<?php echo $Sorta5; ?>" class="input-text text-width">
</div>
<div class="da-form-row">
分类五进入自定义：
<input size="30" name="jinru5_text" type="text" value="<?php echo $jinru5_text; ?>" class="input-text text-width">
</div>
</div>
<div class="set_box" id="read">
<div class="da-form-row">
<p>对本主题有任何意见或建议，请到 <a href="http://www.qicai0.com">我的博客</a> 留言，或者直接 QQ 联系开发者。</p>
<p>开发者承诺本主题不含任何挂马、广告等恶意代码，使用本主题所造成的任何问题，请及时与开发者联系。</p>
<p>如果您在使用主题的过程中发现有BUG请与我们联系QQ：972622982</p>
<p>开发者：七彩网络</p>
<p>email：972622982@qq.com</p>
<p>有问题请在博客留言,我会一一回复！</p>
<p>请及时修改QQ以及配置网站避免您的客户与我联系！
</div>
</div>  
</div>
</form>
</main>
</div>
</div>
</div>
<script>
function run(input_file, get_data) {  
            if (typeof (FileReader) === 'undefined') {  
                alert("抱歉，你的浏览器不支持 FileReader，不能将图片转换为Base64，请使用现代浏览器操作！");  
            } else {  
                try {  
                    var file = input_file.files[0];  
                    if (!/image\/\w+/.test(file.type)) {  
                        alert("请确保文件为图像类型");  
                        return false;  
                    }  
                    var reader = new FileReader();  
                    reader.onload = function () {  
                        get_data(this.result);  
                    }  
                    reader.readAsDataURL(file);  
                } catch (e) {  
                    alert('图片转Base64出错啦！' + e.toString())  
                }  
            }  
        } 
</script>
<script>
$(function(){
	$(".set_nav li").not(".set_nav .last").click(function(e) {
		e.preventDefault();
		$(this).addClass("active").siblings().removeClass("active");
		$($(this).children("a").attr("href")).show().siblings().hide();
	});
	
  })
</script>	
<div id="secondary" class="right-column">
	<div class="secondary-toggle"><i class="icon-angle-left"></i></div>
	<div class="sidebar1" role="complementary">
		<aside id="everbox_popular-2" class="widget widget_stream-list">	
        	<div class="widget-content">
			<div class="note" style="z-index: 1000;">
					<div class="note-container">
						
					<p>COke<a>主题</a></p>
					<p><a href="http://www.emlog.net/template/839" target="_blank">访问我获取最新版本</a></p>
          
					
			</div>
					<div class="note-bottom"></div>
				</div>
</div>
		</div>
	<div class="sidebar0" role="complementary">
		<aside id="everbox_popular-2" class="widget widget_stream-list">	
        	<div class="widget-content">
			<div class="note" style="z-index: 1000;">
					<div class="note-container">
						人生如同一面镜子，假如你对它微笑，它也回报你微笑，我的人生信条还是不断的改变现状，求真务实，明天更美好，人生重要的问题，不在于人拥有什么，而在于怎样使用它，人与人关系上最宝贵的是真诚，善于理解便是快乐人生。					</div>
					<div class="note-bottom"></div>
				</div>
</div>
		</div>
		
		
</aside>

<?php else:?>
<?php 
header("Location:".BLOG_URL.""); 
exit;
?> 
<?php endif; ?>

</div>
</div>

</div>
</section>
<?php
 include View::getView('footer');
?>