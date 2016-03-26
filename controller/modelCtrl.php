<?php
require_once('lib/model.php');
//参数说明
//func调用方法，para方法的参数

//方法说明
//name:para:return
//getOneDayLast:cata&date:LastTenDateArray
//sample:http://www.zhengzi.me/bbsSpider/controller.php?func=getOneDayLast&para={"cata":"topten","date":"20160225"}
//getDateRange:cata:dateRangeArray

//错误说明
//name:mark:msg
//操作错误:funcErr:0(没有此操作) 1(操作参数错误) 2(没有传输操作)
//未知错误:unknownErr:0(未知错误)

$params=$_POST;
@$func=$params['func'];
@$para=json_decode($params['para'],true);
foreach($para as $key=>$val){
	$para[$key]=addslashes($val);
}

if(!isset($func)){
	halt('funcErr',2);
}

//解析操作
$bbsObj=new bbsModel();
switch($func){
	case 'getOneDayLast':
		if(isset($para['cata'])&&isset($para['date'])){
			$reply=$bbsObj->getOneDayLast($para['cata'],$para['date']);
			if(!count($reply)){
				$reply="none";
			}
		}else{
			halt('funcErr',1);
		}
		break;
	case 'getDateRange':
		if(isset($para['cata'])){
			$minDate=$bbsObj->getMinDate($para['cata']);
			$maxDate=$bbsObj->getMaxDate($para['cata']);
			if(is_numeric($minDate)&&is_numeric($maxDate)){
				$reply=array('minDate'=>$minDate,'maxDate'=>$maxDate);
			}
		}
		break;
	default:
		halt('funcErr',0);
}

//返回json数据
if(isset($reply)){
	echo $replyJson=json_encode($reply,JSON_UNESCAPED_UNICODE);
}else{
	halt('unknownErr',0);
}

//错误处理函数
function halt($errName,$errMark){
	$reply=array('errMark'=>$errName,'errMsg'=>$errMark);
	echo $replyJson=json_encode($reply);
	exit();
}
