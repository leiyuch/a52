<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>普通版K线</title>
<script src="/Public/Home/js/movesay.js"></script>
<script src="/Public/Home/js/highstock.js"></script>
<style type="text/css">
.k-line-select {
 position: absolute; right: 10px; top: 9px; z-index: 1
}

.k-line-select .out {
 border-right: 1px solid #CCC
}

.k-line-select .item {
 float: left; width: 58px; line-height: 20px; text-align: center; border: 1px solid #CCC; background-color: #f9f9f9; text-decoration: none
}

.k-line-select .item.on {
 background-color: #FFF; border-bottom-color: #FFF
}

.k-line-wrap {
 height: 400px; margin: 0 -15px
}

.k-line-select a {
 color: #323232; text-decoration: none; cursor: pointer; font-size: 12px; border-radius: 5px;
}

.k-line-select a:hover,.k-line-select .cur {
 text-decoration: none; background-color: #e7f0f9;
}

.bcur {
 background-color: #000003;
}
</style>
</head>
<body style="margin: 0px auto;">
	<div class="k-line-select">
		<div class="fr out">
			<div id="chart_time" style="float: left;">
				<a class="item" id="time_d" data-time="1440"><?php echo L('trade_line_day');?></a>
				<a class="item" id="time_6h" data-time="360"><?php echo L('trade_line_6_hours');?></a>
				<a class="item" id="time_1h" data-time="60"><?php echo L('trade_line_1_hours');?></a>
				<a class="item" id="time_30m" data-time="30"><?php echo L('trade_line_30_minute');?></a>
				<a class="item" id="chart_15m" data-time="15"><?php echo L('trade_line_15_minute');?></a>
				<a class="item" id="chart_5m" data-time="5"><?php echo L('trade_line_5_minute');?></a>
			</div>
		</div>
	</div>
	<div id="paint_chart" style="margin: 0px auto;"></div>
	<script>
			var market="<?php echo ($market); ?>";
			var window_height=$(window).height();
			var data_time=$.cookies.get('chart_time_name');
			var goa=null;
			
			document.getElementById('paint_chart').style.height=$(window).height()+"px";
			$(window).resize(function(){
				document.location.reload();
			});
			$('#chart_screen').click(function(){
				if($.cookies.get('chart_screen')){
					$.cookies.set('chart_screen',null);
					window.history.go(-1);
				}else{
					$.cookies.set('chart_screen',1);
					document.location.reload();
					if(window!=top)
						top.location.href=window.location.href;
				}
			});
			if($.cookies.get('chart_time')){
				$('#chart_time > a').removeClass('cur');
			}else{
				$('#chart_15m').addClass("cur").siblings().removeClass("cur");
				$('#chart_time > a').removeClass('cur');
				$('#chart_15m').addClass('cur');
			}
			if($.cookies.get('chart_time_name')){
				$('#'+$.cookies.get('chart_time_name')).addClass('cur');
				
			}else{
				$.cookies.set('chart_time',5);
				$('#chart_5m').addClass('cur');
			}
			$("#chart_time > a").click(function(){
				$(this).addClass("cur").siblings().removeClass("cur");
				//data_time=$(this).attr('data-time');
				
				$.cookies.set('chart_time',$(this).attr('data-time'));
				$.cookies.set('chart_time_name',$(this).attr('id'));
				getTrendData();
			});
			if($.cookies.get('chart_screen')){
				//$('#chart_screen').html('返回');
			}else{
				//$('#chart_screen').html('全屏');
			}
			if($.cookies.get('chart_theme')!='black'){
				$.cookies.set('chart_theme','white');
				$('#chart_black').removeClass('cur');
				$('#chart_white').addClass('cur');
			}else{
				$('#chart_white').removeClass('cur');
				$('#chart_black').addClass('cur');
			}
			$('#chart_white').click(function(){
				$.cookies.set('chart_theme','white');
				document.location.reload();
			});
			$('#chart_black').click(function(){
				$.cookies.set('chart_theme','black');
				document.location.reload();
			});
			function paintChart(){
				var chartData=arguments;
				Highcharts.theme={colors:["#7cb5ec","#f7a35c","#90ee7e","#7798BF","#aaeeee","#ff0066","#eeaaee","#55BF3B","#DF5353","#7798BF","#aaeeee"],chart:{backgroundColor:{linearGradient:{x1:0,y1:0,x2:1,y2:1},stops:[[0,'#2a2a2b'],[1,'#3e3e40']]},style:{fontFamily:"'Unica One', sans-serif"},plotBorderColor:'#606063'},title:{style:{color:'#E0E0E3',textTransform:'uppercase',fontSize:'20px'}},subtitle:{style:{color:'#E0E0E3',textTransform:'uppercase'}},xAxis:{gridLineColor:'#707073',labels:{style:{color:'#E0E0E3'}},lineColor:'#707073',minorGridLineColor:'#505053',tickColor:'#707073',title:{style:{color:'#A0A0A3'}}},
					yAxis:{gridLineColor:'#707073',labels:{style:{color:'#E0E0E3'}},lineColor:'#707073',minorGridLineColor:'#505053',tickColor:'#707073',tickWidth:1,title:{style:{color:'#A0A0A3'}}},tooltip:{backgroundColor:'rgba(0, 0, 0, 0.85)',style:{color:'#F0F0F0'}},plotOptions:{series:{dataLabels:{color:'#B0B0B3'},marker:{lineColor:'#333'}},boxplot:{fillColor:'#505053'},candlestick:{lineColor:'white'},errorbar:{color:'white'}},legend:{itemStyle:{color:'#E0E0E3'},itemHoverStyle:{color:'#FFF'},itemHiddenStyle:{color:'#606063'}},credits:{style:{color:'#666'}},labels:{style:{color:'#707073'}},drilldown:{activeAxisLabelStyle:{color:'#F0F0F3'},activeDataLabelStyle:{color:'#F0F0F3'}},navigation:{buttonOptions:{symbolStroke:'#DDDDDD',theme:{fill:'#505053'}}},
					rangeSelector:{buttonTheme:{fill:'#505053',stroke:'#000000',style:{color:'#CCC'},states:{hover:{fill:'#707073',stroke:'#000000',style:{color:'white'}},select:{fill:'#000003',stroke:'#000000',style:{color:'white'}}}},inputBoxBorderColor:'#505053',inputStyle:{backgroundColor:'#333',color:'silver'},labelStyle:{color:'silver'}},navigator:{handles:{backgroundColor:'#666',borderColor:'#AAA'},outlineColor:'#CCC',maskFill:'rgba(255,255,255,0.1)',series:{color:'#7798BF',lineColor:'#A6C7ED'},xAxis:{gridLineColor:'#505053'}},scrollbar:{barBackgroundColor:'#808083',barBorderColor:'#808083',buttonArrowColor:'#CCC',buttonBackgroundColor:'#606063',buttonBorderColor:'#606063',rifleColor:'#FFF',trackBackgroundColor:'#404043',trackBorderColor:'#404043'},
					legendBackgroundColor:'rgba(0, 0, 0, 0.5)',background2:'#505053',dataLabelsColor:'#B0B0B3',textColor:'#C0C0C0',contrastTextColor:'#F0F0F3',maskColor:'rgba(255,255,255,0.3)'};
				if($.cookies.get('chart_theme')=='black'){
					Highcharts.setOptions(Highcharts.theme);
				}
				Highcharts.setOptions({global:{useUTC:false},lang:{months:['<?php echo L('trade_line_month1');?>','<?php echo L('trade_line_month2');?>','<?php echo L('trade_line_month3');?>','<?php echo L('trade_line_month4');?>','<?php echo L('trade_line_month5');?>','<?php echo L('trade_line_month6');?>','<?php echo L('trade_line_month7');?>','<?php echo L('trade_line_month8');?>','<?php echo L('trade_line_month9');?>','<?php echo L('trade_line_month10');?>','<?php echo L('trade_line_month11');?>','<?php echo L('trade_line_month12');?>'],shortMonths:['<?php echo L('trade_line_month1');?>','<?php echo L('trade_line_month2');?>','<?php echo L('trade_line_month3');?>','<?php echo L('trade_line_month4');?>','<?php echo L('trade_line_month5');?>','<?php echo L('trade_line_month6');?>','<?php echo L('trade_line_month7');?>','<?php echo L('trade_line_month8');?>','<?php echo L('trade_line_month9');?>','<?php echo L('trade_line_month10');?>','<?php echo L('trade_line_month11');?>','<?php echo L('trade_line_month12');?>'],weekdays:['<?php echo L('trade_line_week7');?>','<?php echo L('trade_line_week1');?>','<?php echo L('trade_line_week2');?>','<?php echo L('trade_line_week3');?>','<?php echo L('trade_line_week4');?>','<?php echo L('trade_line_week5');?>','<?php echo L('trade_line_week6');?>'],thousandsSep:'',rangeSelectorZoom:"<?php echo L('trade_line_range');?>"},rangeSelector:{buttons:[{type:'minute',count:60,text:'1h'},{type:'minute',count:120,text:'2h'},{type:'minute',count:360,text:'6h'},{type:'minute',count:720,text:'12h'},{type:'day',count:1,text:'1d'},{type:'week',count:1,text:'1w'},{type:'all',text:'<?php echo L('all');?>'}],selected:6,inputEnabled:false},credits:{enabled:false},});
				chartData.callee.chart=new Highcharts.StockChart({chart:{renderTo:'paint_chart',animation:Highcharts.svg},title:{text:""},yAxis:[{labels:{style:{color:'#e55600'},x:15,align:'left'},title:{text:'<?php echo L('trade_price');?> ',style:{color:'#e55600'},margin:-10},offset:0,height:window_height/100*60,opposite:false,lineWidth:2,gridLineDashStyle:'Dash',showLastLabel:true},{labels:{style:{color:'#4572A7'},x:15,align:'left'},title:{text:'<?php echo L('trade_traded_amount');?> ',style:{color:'#4572A7'},margin:-10},offset:0,top:window_height/100*70,height:window_height/100*20,opposite:false,lineWidth:2,gridLineDashStyle:'Dash',showLastLabel:true}],xAxis:{type:'datetime'},plotOptions:{candlestick:{color:'#f01717',upColor:'#0ab92b'}},
					tooltip:{crosshairs:[true,true],shared:true,xDateFormat:'%Y-%m-%d %H:%M %A',color:'#f0f',borderColor:'#058dc7'},series:[{animation:false,name:'<?php echo L('trade_price');?>',type:'candlestick',data:[]},{animation:false,name:'<?php echo L('trade_traded_amount');?>',type:'column',color:'#4572A7',yAxis:1,data:[],tooltip:{valueDecimals:4}},{animation:false,name:'<?php echo L('trade_5_average');?>',type:'spline',color:'#FF00FF',data:[],threshold:null,lineWidth:1,tooltip:{valueDecimals:6}},{animation:false,name:'<?php echo L('trade_20_average');?>',type:'spline',color:'#450fff',data:[],threshold:null,lineWidth:1,tooltip:{valueDecimals:6}}]});
			}
			
			
			function getTrendData(){
				var time=$.cookies.get('chart_time');
				$.get("/Chart/getMarketOrdinaryJson?market="+market+"&time="+time+"&t="+(new Date().getTime()),function(data){
					if(data){
						var rates=[],vols=[],temp5=[],temp20=[],num;
						var a5;
						var a20;
						
						for(i=0;i<data.length;i++){
							rates.push([Math.round(data[i][0]*1000),parseFloat(data[i][2]),parseFloat(data[i][3]),parseFloat(data[i][4]),parseFloat(data[i][5])]);
							vols.push([Math.round(data[i][0]*1000),parseFloat(data[i][1])]);
							if(i>4){
								a5=parseFloat(((parseFloat(data[i][4])+parseFloat(data[i-1][4])+parseFloat(data[i-2][4])+parseFloat(data[i-3][4])+parseFloat(data[i-4][4])+parseFloat(data[i][3])+parseFloat(data[i-1][3])+parseFloat(data[i-2][3])+parseFloat(data[i-3][3])+parseFloat(data[i-4][3]))/10).toFixed(6));
								
								
								temp5.push([Math.round(data[i][0]*1000),a5]);
							
							}
							if(i>19){
								a20=parseFloat(((parseFloat(data[i][4])+parseFloat(data[i-1][4])+parseFloat(data[i-2][4])+parseFloat(data[i-3][4])+parseFloat(data[i-4][4])+parseFloat(data[i-5][4])+parseFloat(data[i-6][4])+parseFloat(data[i-7][4])+parseFloat(data[i-8][4])+parseFloat(data[i-9][4])+parseFloat(data[i-10][4])+parseFloat(data[i-11][4])+parseFloat(data[i-12][4])+parseFloat(data[i-13][4])+parseFloat(data[i-14][4])+parseFloat(data[i-15][4])+parseFloat(data[i-16][4])+parseFloat(data[i-17][4])+parseFloat(data[i-18][4])+parseFloat(data[i-19][4])+parseFloat(data[i][3])+parseFloat(data[i-1][3])+parseFloat(data[i-2][3])+parseFloat(data[i-3][3])+parseFloat(data[i-4][3])+parseFloat(data[i-5][3])+parseFloat(data[i-6][3])+parseFloat(data[i-7][3])+parseFloat(data[i-8][3])+parseFloat(data[i-9][3])
										+parseFloat(data[i-10][3])+parseFloat(data[i-11][3])+parseFloat(data[i-12][3])+parseFloat(data[i-13][3])+parseFloat(data[i-14][3])+parseFloat(data[i-15][3])+parseFloat(data[i-16][3])+parseFloat(data[i-17][3])+parseFloat(data[i-18][3])+parseFloat(data[i-19][3]))/40).toFixed(6))
								
								
								temp20.push([Math.round(data[i][0]*1000),a20]);
							}
						}
						
						
						
						paintChart.chart.series[0].setData(rates);
						paintChart.chart.series[1].setData(vols);
						paintChart.chart.series[2].setData(temp5);
						paintChart.chart.series[3].setData(temp20);
						paintChart.chart.redraw();
					}
				},"json");
				clearInterval(goa);
				
				var wait=second=5;
				goa=setInterval(function(){
					wait--;
					if(wait<0){
						clearInterval(goa);
						getTrendData();
						wait=second;
					}
				},1000);
			}
			
			
			
			
	
		
		$(function(){
			paintChart();
			getTrendData();
			
			
		});
	</script>
	<script type="text/javascript">
	
		function clickIE4(){
			if(event.button==2){
				return false;
			}
		}
		function clickNS4(e){
			if(document.layers||document.getElementById&&!document.all){
				if(e.which==2||e.which==3){
					return false;
				}
			}
		}
		function OnDeny(){
			if(event.ctrlKey||event.keyCode==78&&event.ctrlKey||event.altKey||event.altKey&&event.keyCode==115){
				return false;
			}
		}
		if(document.layers){
			document.captureEvents(Event.MOUSEDOWN);
			document.onmousedown=clickNS4;
			document.onkeydown=OnDeny();
		}else
			if(document.all&&!document.getElementById){
				document.onmousedown=clickIE4;
				document.onkeydown=OnDeny();
			}
		document.oncontextmenu=new Function("return false");
	</script>
</body>
</html>