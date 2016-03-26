<?php

$_config=array();
//数据库配置
$_config['db']['hostname']='127.0.0.1';
$_config['db']['username']='byrbbs';
$_config['db']['password']='woaiwojia';
//$_config['db']['password']='root';
$_config['db']['database']='byrbbs';
$_config['db']['charset']='utf8';
$_config['db']['pconnect']=0;
$_config['db']['tablepre']='bbs_';
$_config['db']['log']=1;
$_config['db']['logpath']='log/';

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
