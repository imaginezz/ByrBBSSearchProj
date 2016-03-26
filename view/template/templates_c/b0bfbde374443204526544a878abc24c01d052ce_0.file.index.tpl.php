<?php
/* Smarty version 3.1.29, created on 2016-03-03 18:03:30
  from "/var/www/html/bbsSpider/view/template/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d80bf2a81be2_21291557',
  'file_dependency' => 
  array (
    'b0bfbde374443204526544a878abc24c01d052ce' => 
    array (
      0 => '/var/www/html/bbsSpider/view/template/templates/index.tpl',
      1 => 1456999406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d80bf2a81be2_21291557 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>北邮人论坛每日十大检索</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="view/css/main.css">
	<link rel="stylesheet" type="text/css" href="view/css/jquery.datetimepicker.css">
	<?php echo '<script'; ?>
 src="view/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="view/js/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="view/js/jquery.datetimepicker.js"><?php echo '</script'; ?>
>
</head>
<body>
<header id="header">
	<div id="title">
		<a href="http://bbss.zhengzi.me">北邮人论坛每日十大检索</a>
		<p>昨天，是用来回忆，而非，去忘记</p>
	</div>
</header>
<div id="content">
	<form id="search">
		<p id="title">北邮人论坛每日十大检索</p>
		<input id="datePicker" type="text" class="inputBar" readonly="readonly" />
		<input type="button" id="datePickerBtn" value="给我查" class="submitBar"/>
	</form>
	<p class="label">十大热门话题</p>	
	<p id="none"></p>
	<table class="result" id="topten">
			<tr>
				<th>时间</th>
				<th>标题</th>
			</tr>
	</table>
	<p class="label">近期热点活动</p>
	<table class="result" id="recommend">
			<tr>
				<th>时间</th>
				<th>标题</th>
			</tr>
	</table>
</div>
<footer id="footer">
	数据来自 <a href="http://bbs.byr.cn">北邮人论坛</a><br/>
	<a href="http://www.zhengzi.me">&copy;2016 zhengzi.me</a>&nbsp;&nbsp;&nbsp;
	<a href="http://blog.zhengzi.me/274.html">点击这里意见或留言</a><br />
	<?php echo '<script'; ?>
 type="text/javascript">
		var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1257729464'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1257729464%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
	<?php echo '</script'; ?>
>
</footer>
</body>
</html><?php }
}
