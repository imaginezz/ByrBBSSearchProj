<?php
/* Smarty version 3.1.29, created on 2016-03-01 13:51:50
  from "C:\www\aliyun\bbsSpider\view\template\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d52df69805d6_03029625',
  'file_dependency' => 
  array (
    '07a82429f523a95c7102133a29a2dd6f9a3e4108' => 
    array (
      0 => 'C:\\www\\aliyun\\bbsSpider\\view\\template\\templates\\index.tpl',
      1 => 1456811509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d52df69805d6_03029625 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>北邮人论坛每日十大检索</title>
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
	</div>	
</header>
<div id="content">
	<form id="search">
		<input id="datePicker" type="text" class="inputBar"/>
		<input type="button" id="datePickerBtn" value="给我查" class="submitBar"/>
	</form>
	<table id="result">
		<thead>
			<tr>
				<th>时间</th>
				<th>标题</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>data</td>
				<td>data</td>
			</tr>
		</tbody>
	</table>
</div>
<footer id="footer">
	<a href="http://www.zhengzi.me">&copy;2016 zhengzi.me</a>	
</footer>
</body>
</html><?php }
}
