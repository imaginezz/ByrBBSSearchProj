$(document).ready(function(){
	dateRange=new Object();
	resultObj=null;
	rangeObj=null;
	clickTime=0;

	//设置搜索框高度
	$("#search").show();
	var searchHeight=$(window).height()/5;
	$("#search").css("margin-top",searchHeight+"px");

	//设置关闭ajax异步	
	$.ajaxSetup({
		async:false
	});

	//获取日期范围
	(function getRange(){
		$.post("ctrl.php",
		{
			func:"getDateRange",
			para:'{"cata":"topten"}'
		},
		function(data,statusatus){
			rangeObj=$.parseJSON(data);
			dateRange.minDate=rangeObj['minDate'].substr(0,4)+'-'+rangeObj['minDate'].substr(4,2)+'-'+rangeObj['minDate'].substr(6,2);
			dateRange.maxDate=rangeObj['maxDate'].substr(0,4)+'-'+rangeObj['maxDate'].substr(4,2)+'-'+rangeObj['maxDate'].substr(6,2);
		});
	}());

	//获取当前日期的数据
	function getCurrentData(cata,date){
		var para={cata:cata,date:date};
		$.post("ctrl.php",{
			func:"getOneDayLast",
			para:JSON.stringify(para)
		},
		function(data,status){
			resultObj=$.parseJSON(data);
		});
	}

	//获取查询日期
	function getCurrentDate(){
		var date=$("#datePicker").val();
		date=date.replace("-","");
		date=date.replace("-","");
		return date;
	}

	//在表格中删除之前数据并且添加相关数据
	function addData(cata){
		$("#"+cata+" tr td").remove();
		var $node=null;
		if(resultObj=="none"){
			var content="<tr><td>还没有数据</td></tr>";
			$("#"+cata).append(content);
		}else{
			for(var i=9;i>=0;i--){
				var content="<tr><td>"+resultObj[i].pubDate+'</td><td><a href="'+resultObj[i].link+'">'+resultObj[i].title+"</a></td></tr>"
				$("#"+cata).append(content);
			}
		}
	}

	//设置datePicker
	$("#datePicker").datetimepicker({
		lang:'ch',
		timepicker:false,
		format:"Y-m-d",
		formatDate:"Y-m-d",
		minDate:dateRange.minDate,
		maxDate:dateRange.maxDate
	});

	//设置点击按钮时候的时间
	$("#datePickerBtn").click(function(){
		if(clickTime==0){
			$("header").fadeIn();
			$("#search").css("margin-top","10px");
			$("#search p").fadeOut();
			$(".label").fadeIn();
			clickTime++;
		}
		getCurrentData('topten',getCurrentDate());
		addData('topten');
		$(".result").fadeIn();
		getCurrentData('recommend',getCurrentDate());
		addData('recommend');
	});
});