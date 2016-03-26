<?php
/*change the file name to config.php to make it.*/

$_config=array();
//数据库配置
$_config['db']['hostname']='';
$_config['db']['username']='';
$_config['db']['password']='';
$_config['db']['database']='';
$_config['db']['charset']='';
$_config['db']['pconnect']=0;
$_config['db']['tablepre']='';
$_config['db']['log']=1;
$_config['db']['logpath']='';

//时区设置
date_default_timezone_set('Asia/Shanghai');

//设置引用目录
ini_set('include_path',".");

//设置smarty
$_config['template']['dir']='lib/smraty/';
$_config['template']['template_dir']='view/template/templates/';
$_config['template']['compile_dir']='view/template/templates_c/';
$_config['template']['config_dir']='view/template/configs/';
$_config['template']['cache_dir']='view/template/cache/';
