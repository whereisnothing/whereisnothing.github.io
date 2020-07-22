<?php
/*
Template Name:COke主题
Description:<span style="color:red">一个爱二开的编程爱好者,喜欢多多关注我哦！</span><a href=""></a></br>模板设置：>><a href="../?setting">设置</a>
Version:1.9.1
Author:七彩网络
Author Url:http://wpa.qq.com/msgrd?v=3&uin=972622982&site=qq&menu=yes
Sidebar Amount:2
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}

define("THEME_VER","1.4");

ini_set('date.timezone','Asia/Shanghai');

require_once View::getView('config');

global $arr_navico1;
$arr_navico1 = unserialize($arr_navico);
global $arr_sortico1;
$arr_sortico1 = unserialize($arr_sortico);

require_once View::getView('module');

require_once View::getView('function');

require_once View::getView('module/m-header');
?>
