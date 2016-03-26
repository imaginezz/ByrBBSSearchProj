<?php
require_once('lib/template.class.php');
$smarty=new Template();
$smarty->assign('name','imagine');
$smarty->display('index.tpl');