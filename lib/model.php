<?php
require_once('database.class.php');
class bbsModel extends Mysql{

	public function __construct(){
		parent::__construct();
	}

	//获取每天最后的数据
	public function getOneDayLast($cata,$date){
		$year=intval(substr($date,0,4));
		$month=intval(substr($date,4,2));
		$day=intval(substr($date,6,2));
		$stamp=mktime(0,0,0,$month,$day,$year);
		$tomorrow=date("Ymd",$stamp+24*60*60);
		if(!$res=$this->get_all('*',$cata,"date='$tomorrow' ORDER BY number LIMIT 10")){
			$res=$this->get_all('*',$cata,"date='$tomorrow' ORDER BY number DESC LIMIT 10");
		}
		return $res;
	}
	
	public function getMinDate($cata){
		return $this->get_one('date',$cata,'1=1 ORDER BY number')['date'];
	}

	public function getMaxDate($cata){
		$res=$this->get_one('*',$cata,'1=1 ORDER BY number DESC');
		$date=$res['date'];
		$count=$this->get_all('count(*)',$cata,"date='$date' ORDER BY number DESC")[0]["count(*)"];
		if($count>10){
			return strval($date);
		}else{
			$date=date("Ymd",$res['time']-24*60*60);
			return strval($date);

		}
	}

	public function __destruct(){
		parent::__destruct();
	}
}