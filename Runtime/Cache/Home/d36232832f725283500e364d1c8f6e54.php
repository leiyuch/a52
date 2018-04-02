<?php if (!defined('THINK_PATH')) exit();?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo C('web_title');?></title>
	<link rel="stylesheet" href="/Public/Home3/css/style1.css">
	<!-- Favicon -->
	<link rel="shortcut icon" href="/Public/Home3/images/fav.png" type="image/x-icon">
	<link rel="icon" href="/Public/Home3/images/fav.png" type="image/x-icon">
	<!-- font-awesome -->
	<link href="/Public/Home3/css/font-awesome.css" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="/Public/Home3/css/bootstrap.min.css">
	<!-- main stylesheet -->
	<link rel="stylesheet" href="/Public/Home3/css/style.css">
	<!-- responsive css -->
	<link rel="stylesheet" href="/Public/Home3/css/responsive.css">
	<!-- color css -->
	<link rel="stylesheet" href="/Public/Home3/css/colors2.css">
	
	<link rel="stylesheet" href="/Public/Home3/css/admin/style.css">
	<link rel="stylesheet" href="/Public/Home3/css/admin/sidebar-menu.css">
	<link rel="stylesheet" href="/Public/Home3/css/login.css">

	

	
</head>
<body>
	<!-- <div class="loader_wrapper">
        <div class="loader">
        	<div id="loader">
        		<img src="/Public/Home3/images/loader.png" alt="loader" class="flipInY">
        	</div>
		</div>
    </div> -->
	<div id="wrapper">
		<header class="header home2">
			<div class="topnav">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<ul class="list-unstyled align-left">
								<li><a href="#"><i class="fa fa-life-ring" aria-hidden="true"></i> <?php echo L('index_welcome');?></a></li>
							</ul>
						    <?php if(($_SESSION['userId']) > "0"): ?><ul class="list-unstyled align-right">
									<li><a href="<?php echo U('Finance/index');?>" ><?php echo (session('userName')); ?></a></li>
									<li><a href="####" >ID：<span style="color:red;"><?php echo (session('userId')); ?></span></a></li>
									<li><a href="<?php echo U('Login/loginout');?>" style="color:red;"><?php echo L('logout');?></a></li>
									<li ><span class="orange-lang"> <a href="?lang=zh">中文版</a> | <a href="?lang=en">English</a>  </span></li>
								    </ul>
								<!-- <dl class="mywallet">
									<dt id="user-finance">
										<div class="mywallet_name clear">
											<a href="/finance/"><?php echo (session('userName')); ?></a><i></i>
										</div>
									</dt>
									<dd>ID：<span><?php echo (session('userId')); ?></span></dd>
									<dd>
										<a href="<?php echo U('Login/loginout');?>"><?php echo L('logout');?></a>
									</dd>
									<span class="orange-lang"> <a href="?lang=zh">中文版</a> | <a href="?lang=en">English</a>  </span>
								</dl> -->
							<?php else: ?>
							<ul class="list-unstyled align-right">
								<li><a href="<?php echo U('Login/index');?>"><i class="fa fa-key"></i><span style="color:red;"> <?php echo L('login');?></span></a></li>
								<li><a href="<?php echo U('Login/register');?>"><i class="fa fa-lock"></i> <span style="color:red;"> <?php echo L('register');?></span></a></li>
								<li><span class="orange-lang"> <a href="?lang=zh">中文版</a> | <a href="?lang=en">English</a>  </span></li>
							</ul><?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="main-nav">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 wow slideInDown" data-wow-delay="0.6s">
							<div class="logo">
								<a href="/"><img src="/Public/Home3/images/logo.png" alt="logo"></a>
							</div>
							<a href="javascript:;" class="nav-opener"><i class="fa fa-bars"></i></a>
							<nav class="nav1">
								<ul class="list-unstyled">
									<li><a href="/"><?php echo L('home');?></a></li>
									<li><a href="<?php echo U('Trade/index');?>"><?php echo L('trade');?></a></li>
									<li><a href="<?php echo U('Finance/index');?>"><?php echo L('finance');?></a></li>
									<li><a href="<?php echo U('User/index');?>"><?php echo L('security');?></a></li>
									<li><a href="<?php echo U('Article/index');?>"><?php echo L('help');?></a></li>
								</ul>
                            </nav>
							<!-- nav-login -->
						</div>
					</div>
				</div>
			</div>
		</header>

		<link rel="shortcut icon" href="/Public/Home3/images/fav.png" type="image/x-icon">
		<link rel="icon" href="/Public/Home3/images/fav.png" type="image/x-icon">
		<!-- font-awesome -->
		<link href="/Public/Home3/css/font-awesome.css" rel="stylesheet">
		<!-- include the site stylesheet -->
		<link rel="stylesheet" href="/Public/Home3/css/bootstrap.min.css">
		<!-- main stylesheet -->
		<link rel="stylesheet" href="/Public/Home3/css/style.css">
	
	  <link href="/Public/Home3/trade/css/style.css" rel="stylesheet" type="text/css" /> 
	  <link href="/Public/Home3/trade/css/button.css" rel="stylesheet" type="text/css" /> 
	  <link href="/Public/Home3/trade/css/mdi.min.css" rel="stylesheet" /> 
	  <link rel="apple-touch-icon" sizes="120x120" href="//Public/Home3/images/apple-touch-icon-120x120.png" /> 
	  <script src="/Public/Home3/trade/Scripts/jquery-1.8.2.min.js"></script> 
	  <script src="/Public/Home3/trade/Scripts/jquery.common.tools.js"></script> 
	  <!--[if IE]><script src="Scripts/html5.js"></script><![endif]--> 
	  <script>
			(function () {
				if (! /*@cc_on!@*/ 0) return;
				document.createElement("template");
			})();
		</script> 		
  
  <div class="site-header site-header-fixed-top" id="site_header"> 
   <link href="/Public/Home3/trade/head/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
   <link href="/Public/Home3/trade/head/app-theme-5.css" rel="stylesheet" type="text/css" /> 
   <link href="/Public/Home3/trade/css/app.css" rel="stylesheet" type="text/css" /> 
   <link href="/Public/Home3/trade/css/mdi.min.css" rel="stylesheet" /> 
   
   <!-- .navbar--> 
  </div> 
  <style>
	.side-sev{ top:235px; display: none}
	.header{border-bottom: 2px solid #ddd;}
	.main_content{ margin-bottom: 0}
	@media screen and (max-width: 996px) {
		html,body,.risk-tip{min-width: 1257px;}
	}
	/*new ui*/
	.trade-main {width:70%;float:left; padding-right:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
	.trade-main .trade-list_re li{ height:34px;border-bottom: 1px solid #eee}
	.trade-main .trade-list_re li.dealtop{ height: 40px;}
	.trade-main .trade-list_re li.dealtop span{ line-height: 40px}
	#order-info-box .right-align{ width: 12%}
	.dealtop #tlist-date,#ulMyOrderList #tlist-date{ width: 20%}
	#my-tlist-title .dealtop #tlist-date{ width: 25%}
	#order-info-box .dealtop span:last-child,#ulMyOrderList li > span:last-child{width: 19%;padding-right: 5px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
	#ulMyOrderList li > span:last-child{padding-right: 10px;}
	.trade-main .right-align {line-height: 38px;}
	.trade-list_re .right-align {line-height: 34px;width:11%}
	.trade-main .right-align:first-child { text-align: left; padding-left: 15px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
	.trade-main .m_title{ margin-top: 0;margin-bottom: 40px;}
	.trade-main > .mairu,.trade-main > .maichu{height: 428px}
	.buy-sell-order {width:30%;float:right;}
	.buy-sell-order .bottom_maidan{ margin-bottom: 10px}
	.b-s-title{ margin-top: 18px;border-bottom: 1px solid #C8DAE2;padding-bottom: 5px}
	.b-s-t-left {float:left;}
	.b-s-t-left span { font-size: 24px}
	.b-s-t-left span:first-child { margin-left: 10px; color: #666}
	.buy-sell-order .title-line.sorting,.buy-sell-order .number.sorting{ padding-right: 0}
	.b-s-t-right{ float: right}
	#moreOrders{ cursor: pointer}
	#moreOrders .caret{margin: 0 0 0 5px;color: #979ca0;}
	#moreOrders:hover,#moreOrders:hover .caret,#moreOrders.more-order-active,#moreOrders.more-order-active .caret{ color: #ff5e23}
	#moreOrders.more-order-active .caret{transform:rotate(180deg);}
	.rect{height: 30px;position: absolute;right: 0;top: -11px;transform: scaleX(13);z-index: 0;opacity: 0.1;filter: alpha(opacity=10);}
	.right-align{ line-height: 30px}
	.title-line .right-align{ line-height: 20px}
	#tableAskList .maichu .maidan,#tableAskList .mairu .maidan{ height: auto}
	#ask-list li,#bid-list li{position: relative; height: 30px}
	#tableAskList{ overflow: hidden}
	#tableAskList .maichu{ border-top: 1px solid #ddd; padding-top: 15px}
	#tableAskList .mairu{ padding-bottom: 15px}
	.title-line .price b:before{content: '\6863 \4F4D';margin-right: 50px}
	#ul-ask-list .price:before{margin-right: 56px; color: #008069; font-weight: normal}
	#ul-bid-list .price:before{margin-right: 56px; color: #ff5e23; font-weight: normal}
	#ul-ask-list,#ul-ask-list li{transform:rotate(180deg);-ms-transform:rotate(180deg);-moz-transform:rotate(180deg);-webkit-transform:rotate(180deg);-o-transform:rotate(180deg);z-index: 9991}
	#ul-ask-list{ height: 990px}
	.risk-tip{ display:none;position: absolute; top:0;z-index: 9992; width: 100%; height: 100%; background: rgba(0,0,0,0.8); background: #333 \9;}
	.tip-con{width:550px;margin: 0 auto;margin-top: 11%;background: #fff;padding: 30px 30px 15px;line-height: 26px;}
	.r-t-box{ width: 100%; height: 100%}
	.tip-con h3{ text-align: center; margin-bottom: 10px; font-size:18px;border-bottom: 1px solid #ddd;padding-bottom: 20px;}
	.tip-con li{ margin-bottom: 5px; list-style: disc}
	.tip-list{ padding-left: 15px;margin: 20px 0;}
	.tip-con .sub-btn{ width: 100%;display: inline-block;text-align: center;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
	/*卖单档位名称*/
	#ul-ask-list li:nth-child(1) .price:before{ content: '\5356 1'}
	#ul-ask-list li:nth-child(2) .price:before{ content: '\5356 2'}
	#ul-ask-list li:nth-child(3) .price:before{ content: '\5356 3'}
	#ul-ask-list li:nth-child(4) .price:before{ content: '\5356 4'}
	#ul-ask-list li:nth-child(5) .price:before{ content: '\5356 5'}
	#ul-ask-list li:nth-child(6) .price:before{ content: '\5356 6'}
	#ul-ask-list li:nth-child(7) .price:before{ content: '\5356 7'}
	#ul-ask-list li:nth-child(8) .price:before{ content: '\5356 8'}
	#ul-ask-list li:nth-child(9) .price:before{ content: '\5356 9'}
	#ul-ask-list li:nth-child(10) .price:before{ content: '\5356 10'}
	#ul-ask-list li:nth-child(11) .price:before{ content: '\5356 11'}
	#ul-ask-list li:nth-child(12) .price:before{ content: '\5356 12'}
	#ul-ask-list li:nth-child(13) .price:before{ content: '\5356 13'}
	#ul-ask-list li:nth-child(14) .price:before{ content: '\5356 14'}
	#ul-ask-list li:nth-child(15) .price:before{ content: '\5356 15'}
	#ul-ask-list li:nth-child(16) .price:before{ content: '\5356 16'}
	#ul-ask-list li:nth-child(17) .price:before{ content: '\5356 17'}
	#ul-ask-list li:nth-child(18) .price:before{ content: '\5356 18'}
	#ul-ask-list li:nth-child(19) .price:before{ content: '\5356 19'}
	#ul-ask-list li:nth-child(20) .price:before{ content: '\5356 20'}
	#ul-ask-list li:nth-child(21) .price:before{ content: '\5356 21'}
	#ul-ask-list li:nth-child(22) .price:before{ content: '\5356 22'}
	#ul-ask-list li:nth-child(23) .price:before{ content: '\5356 23'}
	#ul-ask-list li:nth-child(24) .price:before{ content: '\5356 24'}
	#ul-ask-list li:nth-child(25) .price:before{ content: '\5356 25'}
	#ul-ask-list li:nth-child(26) .price:before{ content: '\5356 26'}
	#ul-ask-list li:nth-child(27) .price:before{ content: '\5356 27'}
	#ul-ask-list li:nth-child(28) .price:before{ content: '\5356 28'}
	#ul-ask-list li:nth-child(29) .price:before{ content: '\5356 29'}
	#ul-ask-list li:nth-child(30) .price:before{ content: '\5356 30'}
	#ul-ask-list li:nth-child(31) .price:before{ content: '\5356 31'}
	#ul-ask-list li:nth-child(32) .price:before{ content: '\5356 32'}
	/*买单档位名称*/
	#ul-bid-list li:nth-child(1) .price:before{ content: '\4E70 1'}
	#ul-bid-list li:nth-child(2) .price:before{ content: '\4E70 2'}
	#ul-bid-list li:nth-child(3) .price:before{ content: '\4E70 3'}
	#ul-bid-list li:nth-child(4) .price:before{ content: '\4E70 4'}
	#ul-bid-list li:nth-child(5) .price:before{ content: '\4E70 5'}
	#ul-bid-list li:nth-child(6) .price:before{ content: '\4E70 6'}
	#ul-bid-list li:nth-child(7) .price:before{ content: '\4E70 7'}
	#ul-bid-list li:nth-child(8) .price:before{ content: '\4E70 8'}
	#ul-bid-list li:nth-child(9) .price:before{ content: '\4E70 9'}
	#ul-bid-list li:nth-child(10) .price:before{ content: '\4E70 10'}
	#ul-bid-list li:nth-child(11) .price:before{ content: '\4E70 11'}
	#ul-bid-list li:nth-child(12) .price:before{ content: '\4E70 12'}
	#ul-bid-list li:nth-child(13) .price:before{ content: '\4E70 13'}
	#ul-bid-list li:nth-child(14) .price:before{ content: '\4E70 14'}
	#ul-bid-list li:nth-child(15) .price:before{ content: '\4E70 15'}
	#ul-bid-list li:nth-child(16) .price:before{ content: '\4E70 16'}
	#ul-bid-list li:nth-child(17) .price:before{ content: '\4E70 17'}
	#ul-bid-list li:nth-child(18) .price:before{ content: '\4E70 18'}
	#ul-bid-list li:nth-child(19) .price:before{ content: '\4E70 19'}
	#ul-bid-list li:nth-child(20) .price:before{ content: '\4E70 20'}
	#ul-bid-list li:nth-child(21) .price:before{ content: '\4E70 21'}
	#ul-bid-list li:nth-child(22) .price:before{ content: '\4E70 22'}
	#ul-bid-list li:nth-child(23) .price:before{ content: '\4E70 23'}
	#ul-bid-list li:nth-child(24) .price:before{ content: '\4E70 24'}
	#ul-bid-list li:nth-child(25) .price:before{ content: '\4E70 25'}
	#ul-bid-list li:nth-child(26) .price:before{ content: '\4E70 26'}
	#ul-bid-list li:nth-child(27) .price:before{ content: '\4E70 27'}
	#ul-bid-list li:nth-child(28) .price:before{ content: '\4E70 28'}
	#ul-bid-list li:nth-child(29) .price:before{ content: '\4E70 29'}
	#ul-bid-list li:nth-child(30) .price:before{ content: '\4E70 30'}
	#ul-bid-list li:nth-child(31) .price:before{ content: '\4E70 31'}
	#ul-bid-list li:nth-child(32) .price:before{ content: '\4E70 32'}

	#divMyOrderSection{clear: both;padding: 10px 0 30px;}
	.my-order-box{ width: 100%;float: none;}
	.my-order-box .m_title{border: none; margin:0}
	.my-order-box #hidezero  + .vr-btn{ margin-top: 16px}
	/*.my-order-box .m_con{ height: 250px}*/
	#myFunds{ margin-top: 5px}
	#myFunds em{ font-size: 14px; font-style: normal}
	.fund-hide-show{ float: right; font-size: 14px}
	.fund-hide-show .hidezero-span{height: 30px;line-height: 50px; cursor: pointer; user-select: none}
	.fund-hide-show .hidezero-span:hover{ color: #ff5e23}
	.fund-hide-show #hidezero  + .vr-btn{ margin-top: 18px}
	#my-fund-list .right-align:last-child{ padding-right: 5px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
	#fund-info-box,#order-info-box,#history-info-box{ position: relative; width: 100%; height: 100%; text-align: center}
	.noorder-tip{ position: absolute;top: 0;width: 100%;padding-top: 50px;}
	/* #fund-info-box .right-align:nth-child(2){ width: 35%;  } */
	#my-fund-list .sub-btn,#ulMyOrderList .sub-btn,#my-trade-list .sub-btn{display: inline-block;width: 140px;margin-top: 10px;}
	/*#my-fund-list li span a{ padding-left: 5px; color: #ff5e23}
	#my-fund-list li span a:hover{ color: #f80}*/
	#my-fund-list li span .stop-wd,#my-fund-list li span .stop-wd:hover{ color: #888; font-weight: bold}
/*	#my-fund-list li span a:last-child{border-left: 1px solid #ddd;margin-left: 5px;}*/
	#my-fund-title li span:nth-child(2){ text-align: left}
	.my-order-box i{ font-style: normal; margin-top:18px; display: inline-block}
	.my-order-box i.order-tip-icon{ font-style: normal; display: inline-block; width: 18px; height: 18px; line-height: 18px; text-align: center; background: #888; color: #fff; margin-right: 5px; border-radius: 50%}
	#my-fund-list .right-align i{ width: 50%; float: left; text-align: left; margin: 0}
	#my-fund-list .right-align em{ font-style: normal}
	#my-fund-list #my-type,#fund-info-box #my-type{width: 16%!important;}
	.m_title .clear-all{ font-size: 14px;height: 42px;margin-top: 5px; float: right}
	#sectioncont-history{ height: auto}
	#sectioncont1{ clear: both}
	.order-tab{ margin-right: 15px; cursor: pointer;border-bottom: 3px solid transparent;}
	.order-tab:hover{ color: #ff5e23}
	.order-t-active{border-color:#ff5e23;}
	.cjbox{ clear: both}
	#klineLoader{ display:block;position: inherit; right:auto;height: 100px;width: 100px; margin-top: 80px}
	#klineLoader .loader, #klineLoader .loader:after{ width: 48px; height: 48px}
	#klineLoader p{margin-top: 10px;text-indent: 15px;}
	.dp-link{ margin-left: 10px;}
	/*.dp-link i{ display: inline-block; width: 16px; height: 16px; line-height:15px; text-align: center;background: #ccc; color: #fff; border-radius: 50%; margin-left: 3px }
	.dp-link:hover i{ background: #f80}
	.mairu .dp-link:hover i{ background: #11C09C}
	.mairu .dp-link:hover{ color: #11C09C}*/
	.index-modal{height: 100%;width: 100%;position: absolute;top: 0;padding-top: 30px;background: rgba(0,0,0,0.1);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
	.index-modal a{ display: block;width: 150px; margin: 7px auto }
	.free-icon{font-size: 15px;background: #f80;color: #fff;padding: 0 6px;line-height: 26px;margin: 10px;border-radius: 3px;border-bottom: 1px solid #de831b;}
	.high-low{ float: right; font-size: 14px}
	.high-low li{ display: inline-block;}
	.high-low li:last-child{margin-left: 15px}

	::-webkit-scrollbar {
		width: 6px;
		height: 6px;
		background: #ddd
	}
	::-webkit-scrollbar-track {
		background: #ddd
	}
	::-webkit-scrollbar-thumb {
		background: #73abb1;
		right: 10px;
		border-radius: 6px;
	}
	::-webkit-scrollbar-thumb:hover {
		background: #6acad4;
	}

	.k-line-container{height:330px;width: 100%;position:relative;z-index:0;background: #fff;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}#kline{width:100%;float:left;margin-top:20px 0;padding:30px 0;position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}.react-stockcharts-tooltip{fill:#16191b;font-size:12px;fill-opacity:0}.react-stockcharts-toottip line{stroke-opacity:0}.react-stockchart:hover .react-stockcharts-tooltip{fill-opacity:1}.react-stockchart:hover .react-stockcharts-toottip line{stroke-opacity:1}.react-stockcharts-tooltip-label{fill:#787f84}.line-type{position:absolute;top:8px;right:92px;z-index:7}.line-type.line-option{right:auto;left:12px}.line-type ul{float:left}.line-type .choosen{margin-right:25px}.line-type ul li{float:left;height:auto}.line-type li:last-child{border-right:0}.line-type button{background:none;border:none;font-family:Microsoft YaHei;color:#333;cursor:pointer;padding:1px 5px;font-size:12px;outline:none}.line-type button:hover{color:#ff5e23}.btnOn,.line-type .btnOn{color:#ff6e00}.btnOn:hover,.line-type .btnOn:hover{color:#ff9b00}.draw-tools{position:absolute;top:35px;left:-5px;z-index:8;padding-bottom:20px}.draw-tools li{padding:7px;cursor:pointer;position:relative;text-align:center;border-right:1px solid #d1d7e0}.draw-tools li span{position:absolute;top:0;left:45px;display:none;width:92px;font-size:13px;padding:10px 0;text-align:center;background:#37404a;color:#a9b2b9}.draw-tools svg{margin-top:3px}.draw-tools path{stroke:#5c6a75}.draw-tools .tool-cursor{fill:#5c6a75}.draw-tools li:hover{color:#eee}.draw-tools li:hover path{stroke:#ff5e23}.draw-tools li:hover .tool-cursor{fill:#ff5e23}.draw-tools li:hover span{display:block}.tool-cursor{margin:3px 0 0 3px}.draw-tools .caret{position:absolute;top:14px;left:-15px;border-right:6px dashed;border-right:6px solid\9;border-top:6px solid transparent;border-bottom:6px solid transparent;color:#37404a}.draw-tools .caret:before{display:none}.draw-tools .tool-active:hover path,.draw-tools .tool-active path{stroke:#ff6e00;fill:#ff6e00}.draw-tools .tool-clear path{stroke:none;fill:#5c6a75}.draw-tools .tool-active.tool-clear-item{background:none}.draw-tools li:hover .tool-clear path{stroke:none;fill:#ff5e23}.draw-tools .tool-active .tool-clear path,.draw-tools .tool-active:hover .tool-clear path{stroke:none}.choose-chart{margin-left:58px;float:left;display:none}.choose-chart.cc2{margin-left:18px}.cho-chart-on{display:block}.choose-chart li{display:inline-block;padding:0 8px;border-right:1px solid #d4d4d4;font-size:11px;cursor:pointer}.choose-chart li:last-child{border:none}.choose-chart li:hover{color:#ff5e23}.choose-chart .bc-active,.choose-chart .bc-active:hover{color:#ff6e00}.curr-lo-time{float:right;margin:10px 58px 0;font-size:13px;border:none;color:#888}.box-padding{padding:3px;margin-top:22px;margin-bottom:22px}.box-container{width:100%;height:100%;padding:5px}
</style> 
  <script type="text/javascript">decimal_for_KLine='2';init_data=[];trade_global = {};trade_global.symbol = 'BTC_CNY';trade_global.symbol_view = 'BTC/CNY';trade_global.ask = 1.2;init_price='';</script> 
  <div class="content index-content clearfix"> 
   <!--<div class="topspace">
		<div class="scrnewsmore">
			<a href="/articlelist/news"><em>>></em>更多</a>
		</div>
		<div class="scrollnews">
			<div id="scrolltradeDiv">
			       
			</div>
		</div>
	
	</div>--> 
   <table class="leftbar" style="display: none;"> 
    <tbody>
     <tr> 
      <td style="border-bottom:0;" valign="top"> 
       <div id="marketlist_wrapper" class="dataTables_wrapper" role="grid"> 
        <table class="marketlist dataTable" id="tradelist" cellspacing="0" cellpadding="0"> 
         <tbody role="alert" aria-live="polite" aria-relevant="all"> 
          <tr> 
           <td class="no-wrap alignRight" width="100%" style="border-bottom:0"> 
            <ul id="market_controller" class="clearfix"> 
             <!--<button value="CNY" class="tline_btn left_btn tn_selected">--> 
             <button value="CNY" class="tline_btn left_btn tn_selected"> 对CNY交易 </button> 
             <button value="BTC" class="tline_btn left_btn "> 对BTC交易 </button> 
             <button value="ETH" class="tline_btn left_btn "> 对ETH交易 </button> 
            </ul> <input type="text" class="search" id="marketSearch" value="搜索..." /> </td> 
          </tr> 
          <tr> 
           <td id="marketlist_container_cny" class="no-wrap alignRight" style="width:100%;"> 
            <table class="dataTable" id="marketlist_cny" width="100%" cellspacing="0" cellpadding="0">
             <thead>
              <tr role="row" style="height:40px"> 
               <th class="no-wrap sortable sorting" role="columnheader" tabindex="0" aria-controls="marketlist_cny" aria-sort="ascending" aria-label="activate to sort column descending"> 币种 </th> 
               <th class="no-wrap sortable sorting" role="columnheader" tabindex="0" aria-controls="marketlist_cny" aria-sort="ascending" aria-label="activate to sort column descending"> 价格</th> 
               <th class="no-wrap sortable sorting" id="leftbarupdntop" role="columnheader" tabindex="0" aria-controls="marketlist_cny" aria-sort="ascending" aria-label="activate to sort column descending"> 日涨跌 </th> 
              </tr>
             </thead>
             <tbody role="alert" aria-live="polite" aria-relevant="all">
              <tr class="odd" id="market_snt_cny_cny" title="交易量：7,480,490 CNY">
               <td class="no-wrap" data-trade="SNT_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/snt.png"></span>--> <span class="icon-16 icon-16-snt"></span> <span class="bizhong_en" line_id="market_snt_cny_cny">SNT</span> Status </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.3370 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-1.75 %</font></td>
              </tr>
              <tr class="even" id="market_eth_cny_cny" title="交易量：7,409,371 CNY">
               <td class="no-wrap" data-trade="ETH_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/eth.png"></span>--> <span class="icon-16 icon-16-eth"></span> <span class="bizhong_en" line_id="market_eth_cny_cny">ETH</span> 以太币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">1319.00 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-3.16 %</font></td>
              </tr>
              <tr class="odd" id="market_btm_cny_cny" title="交易量：6,496,283 CNY">
               <td class="no-wrap" data-trade="BTM_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/btm.png"></span>--> <span class="icon-16 icon-16-btm"></span> <span class="bizhong_en" line_id="market_btm_cny_cny">BTM</span> 比原链 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.3080 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-2.22 %</font></td>
              </tr>
              <tr class="even" id="market_eos_cny_cny" title="交易量：4,172,446 CNY">
               <td class="no-wrap" data-trade="EOS_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/eos.png"></span>--> <span class="icon-16 icon-16-eos"></span> <span class="bizhong_en" line_id="market_eos_cny_cny">EOS</span> EOS </td>
               <td class="no-wrap alignRight"><span class="rate_up">11.76 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-2.00 %</font></td>
              </tr>
              <tr class="odd" id="market_btc_cny_cny" title="交易量：3,550,909 CNY">
               <td class="no-wrap" data-trade="BTC_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/btc.png"></span>--> <span class="icon-16 icon-16-btc"></span> <span class="bizhong_en" line_id="market_btc_cny_cny">BTC</span> 比特币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">18579.00 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-0.04 %</font></td>
              </tr>
              <tr class="even" id="market_qtum_cny_cny" title="交易量：2,812,460 CNY">
               <td class="no-wrap" data-trade="QTUM_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/qtum.png"></span>--> <span class="icon-16 icon-16-qtum"></span> <span class="bizhong_en" line_id="market_qtum_cny_cny">QTUM</span> 量子链 </td>
               <td class="no-wrap alignRight"><span class="rate_up">36.90 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-3.18 %</font></td>
              </tr>
              <tr class="odd" id="market_ico_cny_cny" title="交易量：2,519,125 CNY">
               <td class="no-wrap" data-trade="ICO_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/ico.png"></span>--> <span class="icon-16 icon-16-ico"></span> <span class="bizhong_en" line_id="market_ico_cny_cny">ICO</span> ICO币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">2.73 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-4.22 %</font></td>
              </tr>
              <tr class="even" id="market_ltc_cny_cny" title="交易量：1,686,225 CNY">
               <td class="no-wrap" data-trade="LTC_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/ltc.png"></span>--> <span class="icon-16 icon-16-ltc"></span> <span class="bizhong_en" line_id="market_ltc_cny_cny">LTC</span> 莱特币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">269.05 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-3.36 %</font></td>
              </tr>
              <tr class="odd" id="market_bts_cny_cny" title="交易量：1,148,726 CNY">
               <td class="no-wrap" data-trade="BTS_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/bts.png"></span>--> <span class="icon-16 icon-16-bts"></span> <span class="bizhong_en" line_id="market_bts_cny_cny">BTS</span> 比特股 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.8280 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-4.63 %</font></td>
              </tr>
              <tr class="even" id="market_etp_cny_cny" title="交易量：1,060,178 CNY">
               <td class="no-wrap" data-trade="ETP_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/etp.png"></span>--> <span class="icon-16 icon-16-etp"></span> <span class="bizhong_en" line_id="market_etp_cny_cny">ETP</span> 熵 </td>
               <td class="no-wrap alignRight"><span class="rate_down">15.46 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-1.97 %</font></td>
              </tr>
              <tr class="odd" id="market_etc_cny_cny" title="交易量：914,225 CNY">
               <td class="no-wrap" data-trade="ETC_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/etc.png"></span>--> <span class="icon-16 icon-16-etc"></span> <span class="bizhong_en" line_id="market_etc_cny_cny">ETC</span> 以太经典 </td>
               <td class="no-wrap alignRight"><span class="rate_down">92.90 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-2.34 %</font></td>
              </tr>
              <tr class="even" id="market_bat_cny_cny" title="交易量：767,788 CNY">
               <td class="no-wrap" data-trade="BAT_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/bat.png"></span>--> <span class="icon-16 icon-16-bat"></span> <span class="bizhong_en" line_id="market_bat_cny_cny">BAT</span> 注意力币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.6890 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-6.89 %</font></td>
              </tr>
              <tr class="odd" id="market_zec_cny_cny" title="交易量：494,575 CNY">
               <td class="no-wrap" data-trade="ZEC_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/zec.png"></span>--> <span class="icon-16 icon-16-zec"></span> <span class="bizhong_en" line_id="market_zec_cny_cny">ZEC</span> ZCash </td>
               <td class="no-wrap alignRight"><span class="rate_down">1174.00 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-4.54 %</font></td>
              </tr>
              <tr class="even" id="market_doge_cny_cny" title="交易量：334,836 CNY">
               <td class="no-wrap" data-trade="DOGE_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/doge.png"></span>--> <span class="icon-16 icon-16-doge"></span> <span class="bizhong_en" line_id="market_doge_cny_cny">DOGE</span> 狗狗币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0114 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-3.06 %</font></td>
              </tr>
              <tr class="odd" id="market_nxt_cny_cny" title="交易量：246,885 CNY">
               <td class="no-wrap" data-trade="NXT_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/nxt.png"></span>--> <span class="icon-16 icon-16-nxt"></span> <span class="bizhong_en" line_id="market_nxt_cny_cny">NXT</span> 未来币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.6609 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-2.81 %</font></td>
              </tr>
              <tr class="even" id="market_cnc_cny_cny" title="交易量：196,995 CNY">
               <td class="no-wrap" data-trade="CNC_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/cnc.png"></span>--> <span class="icon-16 icon-16-cnc"></span> <span class="bizhong_en" line_id="market_cnc_cny_cny">CNC</span> 中国币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.0837 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.60 %</font></td>
              </tr>
              <tr class="odd" id="market_dash_cny_cny" title="交易量：132,705 CNY">
               <td class="no-wrap" data-trade="DASH_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/dash.png"></span>--> <span class="icon-16 icon-16-dash"></span> <span class="bizhong_en" line_id="market_dash_cny_cny">DASH</span> 达世币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">1185.00 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-4.44 %</font></td>
              </tr>
              <tr class="even" id="market_xmr_cny_cny" title="交易量：131,609 CNY">
               <td class="no-wrap" data-trade="XMR_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xmr.png"></span>--> <span class="icon-16 icon-16-xmr"></span> <span class="bizhong_en" line_id="market_xmr_cny_cny">XMR</span> 门罗币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">252.75 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-10.44 %</font></td>
              </tr>
              <tr class="odd" id="market_xem_cny_cny" title="交易量：90,989 CNY">
               <td class="no-wrap" data-trade="XEM_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xem.png"></span>--> <span class="icon-16 icon-16-xem"></span> <span class="bizhong_en" line_id="market_xem_cny_cny">XEM</span> 新经币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">1.07 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-8.07 %</font></td>
              </tr>
              <tr class="even" id="market_xrp_cny_cny" title="交易量：76,238 CNY">
               <td class="no-wrap" data-trade="XRP_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xrp.png"></span>--> <span class="icon-16 icon-16-xrp"></span> <span class="bizhong_en" line_id="market_xrp_cny_cny">XRP</span> 瑞波币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">1.10 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-4.36 %</font></td>
              </tr>
              <tr class="odd" id="market_ifc_cny_cny" title="交易量：54,369 CNY">
               <td class="no-wrap" data-trade="IFC_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/ifc.png"></span>--> <span class="icon-16 icon-16-ifc"></span> <span class="bizhong_en" line_id="market_ifc_cny_cny">IFC</span> 无限币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.000691 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-1.47 %</font></td>
              </tr>
              <tr class="even" id="market_xtc_cny_cny" title="交易量：41,632 CNY">
               <td class="no-wrap" data-trade="XTC_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xtc.png"></span>--> <span class="icon-16 icon-16-xtc"></span> <span class="bizhong_en" line_id="market_xtc_cny_cny">XTC</span> 物联币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0625 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-3.85 %</font></td>
              </tr>
              <tr class="odd" id="market_ppc_cny_cny" title="交易量：41,030 CNY">
               <td class="no-wrap" data-trade="PPC_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/ppc.png"></span>--> <span class="icon-16 icon-16-ppc"></span> <span class="bizhong_en" line_id="market_ppc_cny_cny">PPC</span> 点点币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">11.25 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-3.85 %</font></td>
              </tr>
              <tr class="even" id="market_xpm_cny_cny" title="交易量：40,238 CNY">
               <td class="no-wrap" data-trade="XPM_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xpm.png"></span>--> <span class="icon-16 icon-16-xpm"></span> <span class="bizhong_en" line_id="market_xpm_cny_cny">XPM</span> 质数币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">2.26 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-4.41 %</font></td>
              </tr>
              <tr class="odd" id="market_tix_cny_cny" title="交易量：36,676 CNY">
               <td class="no-wrap" data-trade="TIX_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/tix.png"></span>--> <span class="icon-16 icon-16-tix"></span> <span class="bizhong_en" line_id="market_tix_cny_cny">TIX</span> 彩币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.000156 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-6.19 %</font></td>
              </tr>
              <tr class="even" id="market_nmc_cny_cny" title="交易量：34,296 CNY">
               <td class="no-wrap" data-trade="NMC_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/nmc.png"></span>--> <span class="icon-16 icon-16-nmc"></span> <span class="bizhong_en" line_id="market_nmc_cny_cny">NMC</span> 域名币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">11.86 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-6.47 %</font></td>
              </tr>
              <tr class="odd" id="market_ftc_cny_cny" title="交易量：32,157 CNY">
               <td class="no-wrap" data-trade="FTC_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/ftc.png"></span>--> <span class="icon-16 icon-16-ftc"></span> <span class="bizhong_en" line_id="market_ftc_cny_cny">FTC</span> 羽毛币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.3200 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-3.03 %</font></td>
              </tr>
              <tr class="even" id="market_btrx_cny_cny" title="交易量：31,330 CNY">
               <td class="no-wrap" data-trade="BTRX_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/btrx.png"></span>--> <span class="icon-16 icon-16-btrx"></span> <span class="bizhong_en" line_id="market_btrx_cny_cny">BTRX</span> 赎回代币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.9370 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-2.19 %</font></td>
              </tr>
              <tr class="odd" id="market_tips_cny_cny" title="交易量：22,426 CNY">
               <td class="no-wrap" data-trade="TIPS_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/tips.png"></span>--> <span class="icon-16 icon-16-tips"></span> <span class="bizhong_en" line_id="market_tips_cny_cny">TIPS</span> 帽子币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.000126 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-3.66 %</font></td>
              </tr>
              <tr class="even" id="market_xcp_cny_cny" title="交易量：10,979 CNY">
               <td class="no-wrap" data-trade="XCP_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xcp.png"></span>--> <span class="icon-16 icon-16-xcp"></span> <span class="bizhong_en" line_id="market_xcp_cny_cny">XCP</span> 合约币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">92.00 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-0.81 %</font></td>
              </tr>
              <tr class="odd" id="market_shell_cny_cny" title="交易量：5,693 CNY">
               <td class="no-wrap" data-trade="SHELL_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/shell.png"></span>--> <span class="icon-16 icon-16-shell"></span> <span class="bizhong_en" line_id="market_shell_cny_cny">SHELL</span> 小贝壳 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.1380 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-1.43 %</font></td>
              </tr>
              <tr class="even" id="market_rep_cny_cny" title="交易量：1,562 CNY">
               <td class="no-wrap" data-trade="REP_CNY"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/rep.png"></span>--> <span class="icon-16 icon-16-rep"></span> <span class="bizhong_en" line_id="market_rep_cny_cny">REP</span> Augur </td>
               <td class="no-wrap alignRight"><span class="rate_up">113.80 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-1.90 %</font></td>
              </tr>
             </tbody>
            </table> </td> 
           <td id="marketlist_container_btc" class="no-wrap alignRight" style="width:100%;display:none;"> 
            <table class="dataTable" id="marketlist_btc" width="100%" cellspacing="0" cellpadding="0">
             <thead>
              <tr role="row" style="height:40px"> 
               <th class="no-wrap sortable sorting" role="columnheader" tabindex="0" aria-controls="marketlist_btc" aria-sort="ascending" aria-label="activate to sort column descending"> 币种 </th> 
               <th class="no-wrap sortable sorting" role="columnheader" tabindex="0" aria-controls="marketlist_btc" aria-sort="ascending" aria-label="activate to sort column descending"> 价格</th> 
               <th class="no-wrap sortable sorting" id="leftbarupdntop" role="columnheader" tabindex="0" aria-controls="marketlist_btc" aria-sort="ascending" aria-label="activate to sort column descending"> 日涨跌 </th> 
              </tr>
             </thead>
             <tbody role="alert" aria-live="polite" aria-relevant="all">
              <tr class="odd" id="market_ltc_btc_btc" title="交易量：3.30 BTC">
               <td class="no-wrap" data-trade="LTC_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/ltc.png"></span>--> <span class="icon-16 icon-16-ltc"></span> <span class="bizhong_en" line_id="market_ltc_btc_btc">LTC</span> 莱特币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.0145 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-4.74 %</font></td>
              </tr>
              <tr class="even" id="market_eth_btc_btc" title="交易量：2.50 BTC">
               <td class="no-wrap" data-trade="ETH_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/eth.png"></span>--> <span class="icon-16 icon-16-eth"></span> <span class="bizhong_en" line_id="market_eth_btc_btc">ETH</span> 以太币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0727 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.81 %</font></td>
              </tr>
              <tr class="odd" id="market_eos_btc_btc" title="交易量：2.50 BTC">
               <td class="no-wrap" data-trade="EOS_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/eos.png"></span>--> <span class="icon-16 icon-16-eos"></span> <span class="bizhong_en" line_id="market_eos_btc_btc">EOS</span> EOS </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.000631 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-0.28 %</font></td>
              </tr>
              <tr class="even" id="market_mg_btc_btc" title="交易量：1.50 BTC">
               <td class="no-wrap" data-trade="MG_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/mg.png"></span>--> <span class="icon-16 icon-16-mg"></span> <span class="bizhong_en" line_id="market_mg_btc_btc">MG</span> 智慧基因 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0000042 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="odd" id="market_xcn_btc_btc" title="交易量：1.20 BTC">
               <td class="no-wrap" data-trade="XCN_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xcn.png"></span>--> <span class="icon-16 icon-16-xcn"></span> <span class="bizhong_en" line_id="market_xcn_btc_btc">XCN</span> 氪石币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0000045 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-4.26 %</font></td>
              </tr>
              <tr class="even" id="market_zec_btc_btc" title="交易量：0.80 BTC">
               <td class="no-wrap" data-trade="ZEC_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/zec.png"></span>--> <span class="icon-16 icon-16-zec"></span> <span class="bizhong_en" line_id="market_zec_btc_btc">ZEC</span> ZCash </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0650 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-4.97 %</font></td>
              </tr>
              <tr class="odd" id="market_xmr_btc_btc" title="交易量：0.60 BTC">
               <td class="no-wrap" data-trade="XMR_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xmr.png"></span>--> <span class="icon-16 icon-16-xmr"></span> <span class="bizhong_en" line_id="market_xmr_btc_btc">XMR</span> 门罗币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0141 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-0.96 %</font></td>
              </tr>
              <tr class="even" id="market_doge_btc_btc" title="交易量：0.50 BTC">
               <td class="no-wrap" data-trade="DOGE_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/doge.png"></span>--> <span class="icon-16 icon-16-doge"></span> <span class="bizhong_en" line_id="market_doge_btc_btc">DOGE</span> 狗狗币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.00000063 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-3.08 %</font></td>
              </tr>
              <tr class="odd" id="market_snt_btc_btc" title="交易量：0.20 BTC">
               <td class="no-wrap" data-trade="SNT_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/snt.png"></span>--> <span class="icon-16 icon-16-snt"></span> <span class="bizhong_en" line_id="market_snt_btc_btc">SNT</span> Status </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.0000224 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+16.67 %</font></td>
              </tr>
              <tr class="even" id="market_bat_btc_btc" title="交易量：0.20 BTC">
               <td class="no-wrap" data-trade="BAT_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/bat.png"></span>--> <span class="icon-16 icon-16-bat"></span> <span class="bizhong_en" line_id="market_bat_btc_btc">BAT</span> 注意力币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0000372 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-2.87 %</font></td>
              </tr>
              <tr class="odd" id="market_ppc_btc_btc" title="交易量：0.20 BTC">
               <td class="no-wrap" data-trade="PPC_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/ppc.png"></span>--> <span class="icon-16 icon-16-ppc"></span> <span class="bizhong_en" line_id="market_ppc_btc_btc">PPC</span> 点点币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.000650 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+-0.00 %</font></td>
              </tr>
              <tr class="even" id="market_cnc_btc_btc" title="交易量：0.20 BTC">
               <td class="no-wrap" data-trade="CNC_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/cnc.png"></span>--> <span class="icon-16 icon-16-cnc"></span> <span class="bizhong_en" line_id="market_cnc_btc_btc">CNC</span> 中国币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.0000046 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-1.73 %</font></td>
              </tr>
              <tr class="odd" id="market_xem_btc_btc" title="交易量：0.10 BTC">
               <td class="no-wrap" data-trade="XEM_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xem.png"></span>--> <span class="icon-16 icon-16-xem"></span> <span class="bizhong_en" line_id="market_xem_btc_btc">XEM</span> 新经币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.0000751 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+17.18 %</font></td>
              </tr>
              <tr class="even" id="market_etc_btc_btc" title="交易量：0.10 BTC">
               <td class="no-wrap" data-trade="ETC_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/etc.png"></span>--> <span class="icon-16 icon-16-etc"></span> <span class="bizhong_en" line_id="market_etc_btc_btc">ETC</span> 以太经典 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.004951 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-6.51 %</font></td>
              </tr>
              <tr class="odd" id="market_qtum_btc_btc" title="交易量：0.10 BTC">
               <td class="no-wrap" data-trade="QTUM_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/qtum.png"></span>--> <span class="icon-16 icon-16-qtum"></span> <span class="bizhong_en" line_id="market_qtum_btc_btc">QTUM</span> 量子链 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.002059 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+3.05 %</font></td>
              </tr>
              <tr class="even" id="market_nxt_btc_btc" title="交易量：0.10 BTC">
               <td class="no-wrap" data-trade="NXT_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/nxt.png"></span>--> <span class="icon-16 icon-16-nxt"></span> <span class="bizhong_en" line_id="market_nxt_btc_btc">NXT</span> 未来币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0000357 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-1.65 %</font></td>
              </tr>
              <tr class="odd" id="market_nmc_btc_btc" title="交易量：0.10 BTC">
               <td class="no-wrap" data-trade="NMC_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/nmc.png"></span>--> <span class="icon-16 icon-16-nmc"></span> <span class="bizhong_en" line_id="market_nmc_btc_btc">NMC</span> 域名币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.000659 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+-0.00 %</font></td>
              </tr>
              <tr class="even" id="market_xtc_btc_btc" title="交易量：0.10 BTC">
               <td class="no-wrap" data-trade="XTC_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xtc.png"></span>--> <span class="icon-16 icon-16-xtc"></span> <span class="bizhong_en" line_id="market_xtc_btc_btc">XTC</span> 物联币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0000034 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-3.15 %</font></td>
              </tr>
              <tr class="odd" id="market_btrx_btc_btc" title="交易量：0.10 BTC">
               <td class="no-wrap" data-trade="BTRX_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/btrx.png"></span>--> <span class="icon-16 icon-16-btrx"></span> <span class="bizhong_en" line_id="market_btrx_btc_btc">BTRX</span> 赎回代币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0000476 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-2.00 %</font></td>
              </tr>
              <tr class="even" id="market_hkg_btc_btc" title="交易量：0.10 BTC">
               <td class="no-wrap" data-trade="HKG_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/hkg.png"></span>--> <span class="icon-16 icon-16-hkg"></span> <span class="bizhong_en" line_id="market_hkg_btc_btc">HKG</span> HackerGold </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0000190 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="green" id="leftbarupdn">-5.00 %</font></td>
              </tr>
              <tr class="odd" id="market_btm_btc_btc" title="交易量：0.00 BTC">
               <td class="no-wrap" data-trade="BTM_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/btm.png"></span>--> <span class="icon-16 icon-16-btm"></span> <span class="bizhong_en" line_id="market_btm_btc_btc">BTM</span> 比原链 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.0000185 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="even" id="market_bts_btc_btc" title="交易量：0.00 BTC">
               <td class="no-wrap" data-trade="BTS_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/bts.png"></span>--> <span class="icon-16 icon-16-bts"></span> <span class="bizhong_en" line_id="market_bts_btc_btc">BTS</span> 比特股 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.0000529 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="odd" id="market_dash_btc_btc" title="交易量：0.00 BTC">
               <td class="no-wrap" data-trade="DASH_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/dash.png"></span>--> <span class="icon-16 icon-16-dash"></span> <span class="bizhong_en" line_id="market_dash_btc_btc">DASH</span> 达世币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0650 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="even" id="market_etp_btc_btc" title="交易量：0.00 BTC">
               <td class="no-wrap" data-trade="ETP_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/etp.png"></span>--> <span class="icon-16 icon-16-etp"></span> <span class="bizhong_en" line_id="market_etp_btc_btc">ETP</span> 熵 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.000850 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="odd" id="market_ftc_btc_btc" title="交易量：0.00 BTC">
               <td class="no-wrap" data-trade="FTC_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/ftc.png"></span>--> <span class="icon-16 icon-16-ftc"></span> <span class="bizhong_en" line_id="market_ftc_btc_btc">FTC</span> 羽毛币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.0000194 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="even" id="market_ico_btc_btc" title="交易量：0.00 BTC">
               <td class="no-wrap" data-trade="ICO_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/ico.png"></span>--> <span class="icon-16 icon-16-ico"></span> <span class="bizhong_en" line_id="market_ico_btc_btc">ICO</span> ICO币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.000166 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="odd" id="market_rep_btc_btc" title="交易量：0.00 BTC">
               <td class="no-wrap" data-trade="REP_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/rep.png"></span>--> <span class="icon-16 icon-16-rep"></span> <span class="bizhong_en" line_id="market_rep_btc_btc">REP</span> Augur </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.005550 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="even" id="market_xcp_btc_btc" title="交易量：0.00 BTC">
               <td class="no-wrap" data-trade="XCP_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xcp.png"></span>--> <span class="icon-16 icon-16-xcp"></span> <span class="bizhong_en" line_id="market_xcp_btc_btc">XCP</span> 合约币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.005000 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="odd" id="market_xpm_btc_btc" title="交易量：0.00 BTC">
               <td class="no-wrap" data-trade="XPM_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xpm.png"></span>--> <span class="icon-16 icon-16-xpm"></span> <span class="bizhong_en" line_id="market_xpm_btc_btc">XPM</span> 质数币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.000122 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="even" id="market_xrp_btc_btc" title="交易量：0.00 BTC">
               <td class="no-wrap" data-trade="XRP_BTC"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/xrp.png"></span>--> <span class="icon-16 icon-16-xrp"></span> <span class="bizhong_en" line_id="market_xrp_btc_btc">XRP</span> 瑞波币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0000597 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
             </tbody>
            </table> </td> 
           <td id="marketlist_container_eth" class="no-wrap alignRight" style="width:100%;display:none;"> 
            <table class="dataTable" id="marketlist_eth" width="100%" cellspacing="0" cellpadding="0">
             <thead>
              <tr role="row" style="height:40px"> 
               <th class="no-wrap sortable sorting" role="columnheader" tabindex="0" aria-controls="marketlist_eth" aria-sort="ascending" aria-label="activate to sort column descending"> 币种 </th> 
               <th class="no-wrap sortable sorting" role="columnheader" tabindex="0" aria-controls="marketlist_eth" aria-sort="ascending" aria-label="activate to sort column descending"> 价格</th> 
               <th class="no-wrap sortable sorting" id="leftbarupdntop" role="columnheader" tabindex="0" aria-controls="marketlist_eth" aria-sort="ascending" aria-label="activate to sort column descending"> 日涨跌 </th> 
              </tr>
             </thead>
             <tbody role="alert" aria-live="polite" aria-relevant="all">
              <tr class="odd" id="market_snt_eth_eth" title="交易量：1.40 ETH">
               <td class="no-wrap" data-trade="SNT_ETH"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/snt.png"></span>--> <span class="icon-16 icon-16-snt"></span> <span class="bizhong_en" line_id="market_snt_eth_eth">SNT</span> Status </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.000290 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+7.10 %</font></td>
              </tr>
              <tr class="even" id="market_eos_eth_eth" title="交易量：0.10 ETH">
               <td class="no-wrap" data-trade="EOS_ETH"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/eos.png"></span>--> <span class="icon-16 icon-16-eos"></span> <span class="bizhong_en" line_id="market_eos_eth_eth">EOS</span> EOS </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.009886 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="odd" id="market_bat_eth_eth" title="交易量：0.10 ETH">
               <td class="no-wrap" data-trade="BAT_ETH"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/bat.png"></span>--> <span class="icon-16 icon-16-bat"></span> <span class="bizhong_en" line_id="market_bat_eth_eth">BAT</span> 注意力币 </td>
               <td class="no-wrap alignRight"><span class="rate_down">0.000575 <i class="icon-arrow-down">↓</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="even" id="market_etc_eth_eth" title="交易量：0.00 ETH">
               <td class="no-wrap" data-trade="ETC_ETH"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/etc.png"></span>--> <span class="icon-16 icon-16-etc"></span> <span class="bizhong_en" line_id="market_etc_eth_eth">ETC</span> 以太经典 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.0710 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
              <tr class="odd" id="market_ico_eth_eth" title="交易量：0.00 ETH">
               <td class="no-wrap" data-trade="ICO_ETH"> 
                <!--<span class="leftcionpic" style="display: inline-block;width: 20px;">
						<img style="margin-top:5px;" border=0 src="Picture/ico.png"></span>--> <span class="icon-16 icon-16-ico"></span> <span class="bizhong_en" line_id="market_ico_eth_eth">ICO</span> ICO币 </td>
               <td class="no-wrap alignRight"><span class="rate_up">0.003400 <i class="icon-arrow-up">↑</i></span></td>
               <td class="no-wrap alignRight rzd"><font color="red" id="leftbarupdn">+0.00 %</font></td>
              </tr>
             </tbody>
            </table> </td> 
          </tr> 
         </tbody> 
        </table> 
       </div> </td> 
     </tr> 
    </tbody>
   </table> 
   <script>

$(function () {
	var base = 'CNY';
	var item = $("#marketlist_container_cny").find("[data-trade='BTC_CNY']");
	if (item.length > 0) {
		item.closest('tr').addClass('coin-selected');
	}
	
	$("#marketlist_container_btc").css('display', 'none');
	$("#marketlist_container_eth").css('display', 'none');
	//$("#marketlist_container_new").css('display', 'none');
	$("#marketlist_container_cny").css('display', 'none');
	$("#marketlist_container_cny").css('display', 'block');
    $("#market_controller button").click(function () {
		$("#market_controller").find("button").removeClass("tn_selected");
        $(this).addClass("tn_selected").siblings().removeClass("tn_selected");
        
		$("#marketlist_container_btc").css('display', 'none');
		$("#marketlist_container_eth").css('display', 'none');
		//$("#marketlist_container_new").css('display', 'none');
		$("#marketlist_container_cny").css('display', 'none');

		var td = $(this).attr('value');
        if (td == 'CNY') {
			$("#marketlist_container_cny").css('display', 'block');
			base = 'CNY';
        } else if (td == 'BTC') {
			$("#marketlist_container_btc").css('display', 'block');
			base = 'BTC';
        } else if (td == 'ETH') {
			$("#marketlist_container_eth").css('display', 'block');
			base = 'ETH';
        } /*else {
			$("#marketlist_container_new").css('display', 'block');
			base = 'BTC';
		}*/
		
        return false;
    });
	
	$('#marketSearch').focus(function() {
		if ($(this).val() === '搜索...') {
			$(this).val('');
		}
	});
	$('#marketSearch').focusout(function() {
		if ($(this).val() === '') {
			$(this).val('搜索...');
		}
	});
	$('#marketSearch').keyup(function(e) {
		var needle = $(this).val();
		$.each($('.bizhong_en'),
		function() {
			var symbol = $(this).html();
			if (symbol.toLowerCase().indexOf(needle.toLowerCase()) == -1) {
				$('#' + $(this).attr('line_id')).hide();
			} else {
				$('#' + $(this).attr('line_id')).show();
				 if (e.keyCode == 13) {
					window.location = "#"+symbol+"_"+base;  
				}
			}
		});		
	});
});

</script> 
   <script language="javascript" type="text/javascript" src="/Public/Home3/trade/Scripts/jquery.datatables.min.js"></script> 
   <script language="javascript" type="text/javascript" src="/Public/Home3/trade/Scripts/marketlist_trade.js"></script> 
   <style type="text/css">
	.main_content{width:100%;}
	 #feature_3_section .iconbox{   
	 	padding: 2.5rem 3rem !important;
	 }
	 #feature_3_section {
		padding-top: 0;
		padding-bottom: 0;
	}
	.iconbox-item-media{
		margin-bottom: 20px;
	}
	#feature_3_section .iconbox > .icon:before {
		font-size: 10rem;
		position: absolute;
		top: 80px;
		right: 0;
		-webkit-transform: rotate(-45deg);
		-ms-transform: rotate(-45deg);
		transform: rotate(-45deg);
		opacity: .12;
	}
	.iconbox-item{
		color: #fff;
	}
	</style> 
   <div class="feature-3-section section" id="feature_3_section"> 
    <div class="container-fluid"> 
     <div class="section-content row"> 
	      <div class="iconbox col-sm-6 col-lg-3 color-auto bg-primary" style="background:rgb(7, 105, 224);">
		       <i class="icon mdi mdi-responsive"></i> 
		       <div class="iconbox-item"> 
		        <div class="iconbox-item-media wow flipInX" style="visibility: visible; animation-name: flipInX;">
		         <button class="btn btn-fab btn-secondary legitRipple" type="button"><i class="icon mdi mdi-responsive"></i></button>
		        </div> 
		        <div class="iconbox-item-title">
		         <?php echo L('day_change');?>
				</div> 
				<div class="iconbox-item-body" id="market_change">-</div>
		       </div> 
	      </div> 
	      <div class="iconbox col-sm-6 col-lg-3 color-auto bg-secondary" style="background-color: rgb(255, 87, 34);">
		       <i class="icon mdi mdi-palette-advanced"></i> 
		       <div class="iconbox-item"> 
		        <div class="iconbox-item-media wow flipInX" data-wow-delay="150ms" style="visibility: visible; animation-delay: 150ms; animation-name: flipInX;">
		         <button class="btn btn-fab btn-primary legitRipple" style="background-color: rgb(7, 105, 224); border-color: rgb(7, 105, 224);" type="button"><i class="icon mdi mdi-palette-advanced"></i></button>
		        </div> 
		        <div class="iconbox-item-title">
						<?php echo L('buy_price');?> / <?php echo L('sell_price');?>
		        </div> 
		        <div class="iconbox-item-body">
						<span id="market_buy_price">-</span> / <span id="market_sell_price">-</span>
		        </div> 
		       </div> 
	      </div> 
	      <div class="iconbox col-sm-6 col-lg-3 color-auto bg-tertiary" style="background-color: rgb(156, 39, 176);">
		       <i class="icon mdi mdi-tune"></i> 
		       <div class="iconbox-item"> 
		        <div class="iconbox-item-media wow flipInX" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: flipInX;">
		         <button class="btn btn-fab btn-quaternary legitRipple" style="background-color: rgb(0, 150, 136); border-color: rgb(0, 150, 136);" type="button"><i class="icon mdi mdi-tune" style="color: #fff;"></i></button>
		        </div> 
		        <div class="iconbox-item-title">
						<?php echo L('trade_higher_price');?> / <?php echo L('trade_lower_price');?>
		        </div> 
		        <div class="iconbox-item-body">
						<span id="market_max_price">-</span> / <span id="market_min_price">-</span>
		        </div> 
		       </div> 
	      </div> 
	      <div class="iconbox col-sm-6 col-lg-3 color-auto bg-quaternary" style="background-color: rgb(0, 150, 136);">
		       <i class="icon mdi mdi-heart-pulse"></i> 
		       <div class="iconbox-item"> 
		        <div class="iconbox-item-media wow flipInX" data-wow-delay="450ms" style="visibility: visible; animation-delay: 450ms; animation-name: flipInX;">
		         <button class="btn btn-fab btn-tertiary legitRipple" style="background-color: rgb(156, 39, 176); border-color: rgb(156, 39, 176);" type="button"><i class="icon mdi mdi-heart-pulse"></i></button>
		        </div> 
		        <div class="iconbox-item-title">
						<?php echo L('volume');?>
		        </div> 
		        <div class="iconbox-item-body" id="market_volume">
		        -
		        </div> 
		       </div> 
	      </div> 
     </div> 
    </div> 
   </div> 

   <div class="main_content">
    <div class="main_title" style="display: none;">
        <h1> 
        <ul id="mianTlist" class="clearfix">
          <li><a href="/coininfo/BTC" target="_blank"><span class="icon-48 icon-48-btc"></span></a><a href="/coininfo/BTC" target="_blank">比特币 BTC</a> 对<strong style="margin-right: 20px"> 人民币 CNY </strong></li>
                                                        <li class="top_last_li">
                                                            <span style='display:none;' id='market_unit_symbol'>￥</span>
                                                            <span style="float: left; padding: 0">￥</span>
                                                            <span id="top_last_rate_change">
                    <i id="currPrice" title="实时价格">18579.92</i> <em title="日涨跌"><font class='green'>-0.03%</font></em><span class=arr-con><i class="caret" id="upArrow"></i><i class="caret" id="dnArrow"></i></span>
                                                            </span>
                                                            <i id="currVol" title="24h 成交量"><small>量：</small>￥355.09万</i>
                                                        </li>
                                                        </ul>
                                                        </h1>
    </div>
    <div class="wrap" style="display: none;">
        <div class="shortcut"></div>
        <div class="top-nav">
            <div id="navList" class="navlist-wrap">
                <div class="navlist clearfix">
                    <!--<a href="" id="tradeCoinFunds" class="nav-btn" data-device="#myfunds">我的财务<span></span></a>-->
                    <a href="" class="nav-btn" data-device="#coin_about">币种资料
                    <ul id="coinStatus">
                        <li  id="depositStatus" class="normal-st-bg">充</li>
                        <li  id="withdrawalStatus" class="err-st-bg">提</li>
                        <li  id="tradeStatus" class="normal-st-bg">易</li>
                    </ul>
                    <i class="caret"></i>
                </a>
                    <a href="#myFunds" style="float: left;margin: 6px;">我的资金</a>
                    <!--<a href="" id="tradeCoinNews" class="nav-btn" data-device="#coin_news">新闻(<font color='#FF552A'><b></b></font>)<span></span></a>
                <a href="" id="tradeCoinComment" class="nav-btn" data-device="#coin_comments">热评(<font color='#FF552A'><b></b></font>)<span></span></a>-->
                </div>
            </div>
            <div id="expandZone" class="expand active">
                <div class="download">
                    <div id="coin_about" class="item">
                        <div class="introduction">
                            <h3>Bitcoin 比特币 <b>(BTC)</b> 资料</h3>
                            <div class="cionintro">
                                <ul class="infolist">
                                    <li> <i class="icon-caret-right">▦ </i> 推出日期： <span> 2009-01-03 </span> </li>
                                    <li> <i class="icon-caret-right">▦ </i> 发行总量： <span> 21000000 </span> </li>
                                    <li> <i class="icon-caret-right">▦ </i> 存量： <span> 0 </span> </li>
                                    <li> <i class="icon-caret-right">▦ </i> 市值： <span> - BTC </span> </li>
                                    <li> <i class="icon-caret-right">▦ </i> 币种算法： <span> SHA-256 </span> </li>
                                    <li> <i class="icon-caret-right">▦ </i> 区块速度： <span> 600秒/块 </span> </li>
                                    <li> <i class="icon-caret-right">▦ </i> 当前区块： <span> 478343/6 </span> </li>
                                    <li> <i class="icon-caret-right">▦ </i> 难度调整： <span> 2016 Blocks </span> </li>
                                    <li> <i class="icon-caret-right">▦ </i> 证明方式： <span> PoW </span> </li>
                                </ul>
                                <div style="clear:both;">
                                    <p><i class="icon-caret-right">▦ </i>简介： Bitcoin是点对点的基于SHA-256算法的网络数字货币，到2140年之前总额达到2100万。</p>
                                </div>
                                <ul class="status-dtl">
                                    <li class="normal-st-bg"><a href='#' target='_blank'><b>充值：</b><span>充值正常</span></a></li>
                                    <li class="err-st-bg"><a href='#' target='_blank'><b>提现：</b><span>提现暂停，钱包维护中</span></a></li>
                                    <li class="normal-st-bg"><a href='#'><b>交易：</b><span>交易正常</span></a></li>
                                </ul>
                            </div>
                            <!--<p><a href="/coininfo/BTC" target="_blank">查看 BTC 详细参数</a></p>-->
                        </div>
                        <div class="download-list dc-info">
                            <a href="#" target="_blank" class="btn zj" id="download-link"><span class="text">BTC钱包下载</span></a>
                            <a href="#" target="_blank" class="btn sjgj" id="tencent_app_assistant_btn"><span class="text">BTC源码下载</span></a>
                            <a href="#" target="_blank" class="btn wdj"><span class="text">BTC区块浏览器</span></a>
                            <a href="#" target="_blank" class="btn gfw" id="web-link"><span class="text">BTC官方网站</span></a>
                            <a href="#" target="_blank" class="btn gfbbs" id="bbs_btn"><span class="text">BTC论坛</span></a>
                            <a href="#" target="_blank" class="btn kch"><span class="text">BTC挖矿</span></a>
                        </div>
                    </div>
                    <!--<div id="coin_news" class="item"></div>
                <div id="coin_comments" class="item"></div>-->
                </div>
                <div id="closeBtn" class="close-btn">︽</div>
            </div>
            <div class="nav-bottom-bg"></div>
        </div>
    </div>
    	<script>
			$(function () {
			  //navlist
			  $('#navList').on('click', '.nav-btn', function(event) {
			    if($(this).hasClass('btn-active')){
			      $('#expandZone #closeBtn').click();
			      return false;
			    }
			    var curIndex = $(this).index()
			      , mlValue = '-' + curIndex * 100 + '%';
			    if( $('#expandZone').hasClass('active') ){
			      $('#expandZone .download').animate({marginLeft: mlValue});
			    }
			    else{
			      $('#expandZone .download').css({marginLeft: mlValue});
			    }
			    var device = $(this).data('device');
			    $(this).addClass('btn-active').siblings().removeClass('btn-active');
			    $(device).addClass('item-active').siblings().removeClass('item-active');
			      $('#expandZone').animate({height: '370px'},50,function () {
			          $(".leftbar").css("height",$(".leftbar").height()+437)
			      }).addClass('active');
			    return false;
			  });

			  $('#expandZone #closeBtn').on('click', function() {
			    $('#expandZone').animate({height: '0px'},50, function () {
			      $(this).removeClass('active');
			      $('#navList .btn-active').removeClass('btn-active');
			        $(".leftbar").css("height",$(".leftbar").height()-437)
			    });
			    return false;
			  });
			  
			  /*$("#tradeCoinNews").on('click', function() {
				$("#coin_news").append('<iframe frameborder="0" width="100%" height="400" style="overflow-x: hidden; overflow-y: scroll;" name="iframe_comment" src="/articlelist/tag_BTC/0"></iframe>');
			  });
			  $("#tradeCoinComment").on('click', function() {
				$("#coin_comments").append('<iframe frameborder="0" width="100%" height="400" scrolling="no" name="iframe_comment" src="/comments/BTC"></iframe>');
			  });*/
			  
			});
		</script> 
		    <div class="right_mcontent">
				<div class="k-line-container box-padding clearfix">
				   <!--  <ul class="top_botton">
						<li>
							<span class="button fullscreen" title="全屏"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M4.712 10.043L2.045 12.71 0 10.667V16h5.334L3.29 13.955l2.667-2.667M5.334 0H0v5.334L2.045 3.29l2.667 2.667 1.245-1.245L3.29 2.045M10.666 0l2.045 2.045-2.666 2.667 1.245 1.245 2.666-2.667L16 5.334V0m-4.712 10.043l-1.245 1.245 2.668 2.667L10.668 16H16v-5.334l-2.045 2.045"/></svg></span>
						</li>
						<li>
							<span class="button kline-on-off" title="隐藏"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M0 0v5.333h16V0H0zm15 4.167H1v-3h14v3zM0 16v-5.333h7.12v-1.5H4.23L8 5.393l3.77 3.772H8.88v1.5H16V16H0z"/></svg></span>
						</li>
					</ul> -->
					<div id="kline" class="box-container clearfix">
						<!-- div class="load8" id="klineLoader">
							<div class="loader">Loading</div>
							<p>拼命加载中...</p>
					</div> -->
					<iframe style="border-style: none;" border="0" width="90%" height="300" id="market_chart" src="/Trade/ordinary?market=<?php echo ($market); ?>"></iframe>
				</div>
			</div>
		     <!--<div class="right-kline">
							<div id="chartContainer"></div>
		                </div>--> 
		     <div class="trade-main"> 
			      <!-- <div class="maichu"> 
				       <div class="m_title"> 
				        <span>买入BTC</span> 
				       </div> 
				       <div class="m_con_buy"> 
					        <table class="dealbox" cellspacing="0"> 
					         <tbody>
					          <tr class="tableOrderTr" t="static" style="display: none"> 
					           <td width="16%" align="right">最佳买价</td> 
					           <td width="61%"><span id="rate_best_ask" style="font-weight:600"></span><span class="coin-unit">CNY/BTC</span></td> 
					           <td width="23%"></td> 
					          </tr> 
					          <tr class="tableOrderTr" t="static"> 
					           <td align="right"><span class="red">我的余额</span></td> 
					           <td colspan="2" style="color:#ff5e23;cursor:pointer; " onclick="buy_all()"><span id="balance_ask_able" style="font-weight:600">0.0000</span><span class="coin-unit" style="color:#ff5e23">CNY</span><a class="dp-link" href="/myaccount/deposit/CNY">充值</a><a class="dp-link" href="/myaccount/withdraw/CNY">提现</a></td> 
					          </tr> 
					          <tr class="tableOrderTr" t="static"> 
					           <td align="right">可买入量</td> 
					           <td><span id="amount_ask_able" style="font-weight:600">0.0000</span><span class="coin-unit">BTC</span></td> 
					           <td></td> 
					          </tr> 
					          <tr> 
					           <td align="right">买入价</td> 
					           <td> <input id="ask_rate" class="inputRate" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_ask_rate();_page.obj.recalc_fee('ask');" value="" /> </td> 
					           <td class="b-unit">CNY/BTC</td> 
					          </tr> 
					          <tr> 
					           <td align="right">买入量</td> 
					           <td> <input id="ask_vol" class="inputRate" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_ask_vol();_page.obj.recalc_fee('ask');" value="0" /> </td> 
					           <td class="b-unit">BTC</td> 
					          </tr> 
					          <tr> 
					           <td align="right">兑换额</td> 
					           <td> <input id="ask_amount" class="inputRate" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_ask_amount();_page.obj.recalc_fee('ask');" value="0" /> </td> 
					           <td class="b-unit">CNY</td> 
					          </tr> 
					          <tr> 
					           <td align="right">手续费</td> 
					           <td>
					            <div style="display: inline;" id="ask_fee">
					             0
					            </div> <span style="color: #ff5e23;font-size: 12px;">0.2%</span> <i>(成交才收，撤单退回)</i> </td> 
					           <td></td> 
					          </tr> 
					          <tr> 
					           <td></td> 
					           <td style="border:0"> <input type="button" class="btnAskBid jiaoyi_btn  button button-flat-action" t="ask" onclick="_page.obj.on_request_ask_bid( 'ask',  get_element('ask_rate').value, get_element('ask_vol').value );" value="买入 (CNY→BTC)" /> </td> 
					           <td></td> 
					          </tr> 
					          <tr> 
					           <td></td> 
					           <td colspan="3" style="border:0"> </td> 
					           <td></td> 
					          </tr> 
					         </tbody>
					        </table> 
				       </div> 
			      </div> 
			      <div class="mairu"> 
				       <div class="m_title"> 
				        <span>卖出BTC</span> 
				       </div> 
				       <div class="m_con"> 
				        <table class="dealbox" cellspacing="0"> 
				         <tbody>
				          <tr class="tableOrderTr" t="static" style="display: none"> 
				           <td width="16%" align="right">最佳卖价</td> 
				           <td width="61%"><span id="rate_best_bid" style="font-weight:600"></span><span class="coin-unit">CNY/BTC</span></td> 
				           <td width="23%"></td> 
				          </tr> 
				          <tr class="tableOrderTr" t="static"> 
				           <td align="right"><span class="green">我的余额</span></td> 
				           <td colspan="2" style="color:#008069; cursor:pointer; " onclick="sell_all()"><span id="balance_bid_able" style="font-weight:600">0.0000</span><span class="coin-unit" style="color:#008069">BTC</span><a class="dp-link" href="/myaccount/deposit/BTC">充值</a><a class="dp-link" href="/myaccount/withdraw/BTC">提现</a></td> 
				          </tr> 
				          <tr class="tableOrderTr" t="static"> 
				           <td align="right">可兑换额</td> 
				           <td><span id="amount_bid_able" style="font-weight:600">0.0000</span><span class="coin-unit">CNY</span></td> 
				           <td></td> 
				          </tr> 
				          <tr> 
				           <td align="right">卖出价</td> 
				           <td> <input id="bid_rate" class="inputRate" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_bid_rate();_page.obj.recalc_fee('bid');" value="" /> </td> 
				           <td class="b-unit">CNY/BTC</td> 
				          </tr> 
				          <tr> 
				           <td align="right">卖出量</td> 
				           <td> <input id="bid_vol" class="inputRate" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_bid_vol();_page.obj.recalc_fee('bid');" value="0" /> </td> 
				           <td class="b-unit">BTC</td> 
				          </tr> 
				          <tr> 
				           <td align="right">兑换额</td> 
				           <td> <input id="bid_amount" class="inputRate" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_bid_amount();_page.obj.recalc_fee('bid');" value="0" /> </td> 
				           <td class="b-unit">CNY</td> 
				          </tr> 
				          <tr> 
				           <td align="right">手续费</td> 
				           <td>
				            <div style="display: inline;" id="bid_fee">
				             0
				            </div> <span style="color: #008069;font-size: 12px;">0.2%</span> <i>(成交才收，撤单退回)</i> </td> 
				           <td></td> 
				          </tr> 
				          <tr> 
				           <td></td> 
				           <td style="border:0"> <input type="button" class="btnAskBid jiaoyi_btn  button button-flat-action" t="bid" onclick="_page.obj.on_request_ask_bid( 'bid',  get_element('bid_rate').value, get_element('bid_vol').value );" value="卖出 (BTC→CNY)" /> </td> 
				           <td></td> 
				          </tr> 
				          <tr> 
				           <td colspan="3" style="border:0"> </td> 
				          </tr> 
				         </tbody>
				        </table> 
				       </div> 
				  </div>  -->

				  <div class="maichu">
					<div class="m_title">
						<span><?php echo L('trade_buy');?></span>
					</div>
					<div class="m_con_buy">
						<table class="dealbox" cellspacing="0">
							<tr class="tableOrderTr" t="static" style="display: none">
								<td align="right"><?php echo L('trade_best_price');?></td>
								<td width="61%"><span id="rate_best_ask" style="font-weight:600" id="buy_best_price"></span><span class="coin-unit"> <?php echo (strtoupper($rmb)); ?>/<?php echo (strtoupper($xnb)); ?></span></td>
								<td width="23%"></td>
							</tr>
						  <!--   <tr class="tableOrderTr" t="static">
								<td align="right"><span class="red">我的余额1</span></td>
								<td colspan="2" style="color:#ff5e23;cursor:pointer; " onclick="buy_all()"><span id="balance_ask_able" style="font-weight:600">0.0000</span><span class="coin-unit" style="color:#ff5e23">CNY</span><a class="dp-link" href="/myaccount/deposit/CNY">充值</a><a class="dp-link" href="/myaccount/withdraw/CNY">提现</a></td>
							</tr> -->
							<tr class="tableOrderTr" t="static">
								<td align="right"><?php echo L('trade_maximum');?></td>
								<td>
									<span id="buy_max" style="font-weight:600" title="<?php echo L('trade_maximum');?>">-</span><span class="coin-unit"><?php echo (strtoupper($xnb)); ?></span>
								</td>
								<td></td>
							</tr>
							<tr>
								<td align="right"><?php echo L('trade_buying_price');?></td>
								<td>
									<input id="buy_price" name="price" class="inputRate" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_ask_rate();_page.obj.recalc_fee('ask');" value="" />
								</td>
								<td class="b-unit"><?php echo (strtoupper($rmb)); ?>/<?php echo (strtoupper($xnb)); ?></td>
							</tr>
							<tr>
								<td align="right"><?php echo L('trade_buy_amount');?></td>
								<td>
									<input id="buy_num" class="inputRate" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_ask_vol();_page.obj.recalc_fee('ask');" value="0" />
								</td>
								<td class="b-unit"><?php echo (strtoupper($xnb)); ?></td>
							</tr>
							<tr>
								<td align="right"><?php echo L('trade_total_price');?></td>
								<td>
									<!--  <input id="ask_amount" class="inputRate" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_ask_amount();_page.obj.recalc_fee('ask');" value="0" /> -->
									<span id="buy_mum" style="font-weight:600">-</span>
								</td>
								<td class="b-unit"><?php echo (strtoupper($rmb)); ?></td>
							</tr>
							<tr>
								<td align="right"><?php echo L('trade_fee');?></td>
								<td>
									<div style="display: none" id="ask_fee" style="display: inline;">0</div>
									<span style="color: #ff5e23;font-size: 12px;"><?php echo C('market')[$market]['fee_buy'];?>%</span> <i>(成交才收，撤单退回)</i>
								</td>
								<td></td>
							</tr>
							<!-- <tr>
										<td align="right"><?php echo L('trade_password');?></td>
										<td>
											<input id="buy_paypassword" class="inputRate" name="pwtrade" type="password" /><span onclick="layertpwd()" class="settings"></span>
										</td>
										<td class="b-unit">BTC</td>
									</tr> -->
							<tr>
								<td></td>
								<td style="border:0">
									<input type="button" class="btnAskBid jiaoyi_btn  button button-flat-action" t="ask" onclick="tradeadd_buy();" value="<?php echo L('trade_buy');?>" />
								</td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td colspan="3" style="border:0">
								</td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="mairu">
					<div class="m_title">
						<span><?php echo L('trade_sell');?></span>
					</div>
					<div class="m_con">
						<table class="dealbox" cellspacing="0">
							<tr class="tableOrderTr" t="static" style="display: none">
								<td width="16%" align="right"><?php echo L('trade_best_sell_price');?></td>
								<td width="61%"><span id="rate_best_bid" style="font-weight:600"></span><span class="coin-unit"><?php echo (strtoupper($rmb)); ?>/<?php echo (strtoupper($xnb)); ?></span></td>
								<td width="23%"></td>
							</tr>
						   <!--  <tr class="tableOrderTr" t="static">
								<td align="right"><span class="green">我的余额</span></td>
								<td colspan="2" style="color:#008069; cursor:pointer; " onclick="sell_all()"><span id="balance_bid_able" style="font-weight:600">0.0000</span><span class="coin-unit" style="color:#008069">BTC</span><a class="dp-link" href="/myaccount/deposit/BTC">充值</a><a class="dp-link" href="/myaccount/withdraw/BTC">提现</a></td>
							</tr> -->
							<tr class="tableOrderTr" t="static">
								<td align="right"><?php echo L('trade_sell_maximum');?></td>
								<td><span id="sell_max" style="font-weight:600">-</span><span class="coin-unit"><?php echo (strtoupper($xnb)); ?></span></td>
								<td></td>
							</tr>
							<tr>
								<td align="right"><?php echo L('trade_selling_price');?></td>
								<td>
									<input id="sell_price" class="inputRate" name="price" placeholder="<?php echo L('trade_selling_price_p');?>" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_bid_rate();_page.obj.recalc_fee('bid');" value="" />
								</td>
								<td class="b-unit"><?php echo (strtoupper($rmb)); ?>/<?php echo (strtoupper($xnb)); ?></td>
							</tr>
							<tr>
								<td align="right"><?php echo L('trade_sell_amount');?></td>
								<td>
									<input id="sell_num" name="num" class="inputRate" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_bid_vol();_page.obj.recalc_fee('bid');" value="0" />
								</td>
								<td class="b-unit"><?php echo (strtoupper($xnb)); ?></td>
							</tr>
							<tr>
								<td align="right"><?php echo L('trade_total_price');?></td>
								<td>
									<!-- <input id="sell_mum" class="inputRate" maxlength="10" onkeydown="return check_number(event);" onkeyup="_page.obj.on_input_bid_amount();_page.obj.recalc_fee('bid');" value="0" /> -->
									<span id="sell_mum" style="font-weight:600">-</span>
								</td>
								<td class="b-unit"><?php echo (strtoupper($rmb)); ?></td>
							</tr>
							<tr>
								<td align="right"><?php echo L('trade_fee');?></td>
								<td>
									<div style="display: none" id="bid_fee" style="display: inline;">0</div>
									<span style="color: #008069;font-size: 12px;"><?php echo C('market')[$market]['fee_sell'];?>%</span> <i>(成交才收，撤单退回)</i>
								</td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td style="border:0">
									<input type="button" class="btnAskBid jiaoyi_btn  button button-flat-action" t="bid" onclick="tradeadd_sell();" value="<?php echo L('trade_sell');?>" />
								</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3" style="border:0">
								</td>
							</tr>
						</table>
					</div>
				</div>
				  

			      <div id="divMyOrderSection">
				       <!--style='display:none'--> 
				       <!-- <div class="mairu my-order-box"> 
					        <div class="m_title"> 
					         <span class="order-tab order-t-active" id="ot1">当前委托</span> 
					         <span class="order-tab" id="ot2">历史委托</span> 
					        </div> 
					        <div id="currOrder" class="m_con cjbox" style="height: 250px;border: 1px solid #ddd;background: #fff;"> 
					         <div id="order-info-box" class="box"> 
					          <div class="list-wrapper"> 
					           <ul class="trade-list_re"> 
					            <li class="number sorting dealtop"> <span class="right-align" id="tlist-date">日期</span> <span class="right-align" id="my-type">类型</span> <span class="right-align">价格(CNY)</span> <span class="right-align">挂单量(BTC)</span> <span class="right-align">操作</span> </li> 
					           </ul> 
					           <ul id="ulMyOrderList" class="trade-list_re" style="height: 209px; overflow-y: scroll; overflow-x: hidden;"> 
					           </ul> 
					          </div> 
					         </div> 
					        </div> 
					        <div id="historyOrder" class="m_con cjbox" style="height: 250px;border: 1px solid #ddd;background: #fff;display: none"> 
					         <div id="history-info-box" class="box"> 
					          <div class="list-wrapper"> 
					           <ul class="trade-list_re" id="my-tlist-title"> 
					            <li class="number sorting dealtop"> <span class="right-align" id="tlist-date">日期</span> <span class="right-align" id="my-type">类型</span> <span class="right-align">价格(CNY)</span> <span class="right-align">成交量(BTC)</span> </li> 
					           </ul> 
					           <ul id="my-trade-list" class="trade-list_re" style="height: 209px; overflow-y: scroll; overflow-x: hidden;"> 
					           </ul> 
					          </div> 
					         </div> 
					        </div> 
				       </div> 
				       <div class="maichu my-order-box"> 
					        <div class="m_title" id="myFunds">
					          我的资金 
					         <em>(<a href="/myaccount">查看全部</a>) </em> 
					        </div> 
					        <div id="currFunds" class="m_con cjbox" style="border: 1px solid #ddd;background: #fff;"> 
					         <div id="fund-info-box" class="box"> 
					          <div class="list-wrapper"> 
					           <ul class="trade-list_re" id="my-fund-title"> 
					            <li class="number sorting dealtop"> <span class="right-align" id="my-type">币种</span> <span class="right-align">可用余额<span style="float: right;padding-right: 28px;">充值/提现</span></span> <span class="right-align">挂单金额</span> <span class="right-align">总计</span> </li> 
					           </ul> 
					           <ul id="my-fund-list" class="trade-list_re" style="height: 209px; overflow-y: auto; overflow-x: hidden; text-align: center;position: relative"> 
					           </ul> 
					          </div> 
					         </div> 
					        </div> 
				       </div> 
			      </div> 
			 </div>  -->
			 
			 <div class="mairu my-order-box" id="divMyEntrust">
                <div class="m_title">
                    <!--  <span class="order-tab order-t-active" id="ot1">当前委托</span>
                            <span class="order-tab" id="ot2">历史委托</span> -->
                    <?php echo L('trade_my_entrust');?>
                </div>
                <div id="currOrder" class="m_con cjbox" style="height: 250px;border: 1px solid #ddd;background: #fff;">
                    <div id="order-info-box" class="box">
                        <div class="list-wrapper">
                            <ul class="trade-list_re">
                                <li class="number sorting dealtop">
                                    <span class='right-align' id="tlist-date"><?php echo L('trade_time');?></span>
                                    <span class='right-align' id="my-type"><?php echo L('trade_buy_o');?>/<?php echo L('trade_sell_o');?></span>
                                    <span class='right-align'><?php echo L('trade_price');?></span>
                                    <span class='right-align'><?php echo L('trade_amount');?></span>
                                    <span class='right-align'><?php echo L('trade_traded');?></span>
                                    <span class='right-align'><?php echo L('trade_total_price');?></span>
                                    <span class='right-align'><?php echo L('operate');?></span>
                                </li>
                            </ul>
                            <ul id="ulMyOrderList" class="trade-list_re" style="height: 189px; overflow-y: scroll; overflow-x: hidden;">
                            </ul>
                        </div>
                        <!-- <div class="index-modal"><i class="order-tip-icon">i</i><i>暂无委托</i><a class="sub-btn" href="/login">登录后查看</a></div> -->
                    </div>
                </div>
                <div id="historyOrder" class="m_con cjbox" style="height: 250px;border: 1px solid #ddd;background: #fff;display: none">
                    <div id="history-info-box" class="box">
                        <div class="list-wrapper">
                            <ul class="trade-list_re" id="my-tlist-title">
                                <li class="number sorting dealtop">
                                    <span class='right-align' id="tlist-date">日期</span>
                                    <span class='right-align' id="my-type">类型</span>
                                    <span class='right-align'>价格(CNY)</span>
                                    <span class='right-align'>成交量(BTC)</span>
                                </li>
                            </ul>
                            <ul id="my-trade-list" class="trade-list_re" style="height: 209px; overflow-y: scroll; overflow-x: hidden;">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="maichu my-order-box">
                <div class="m_title" id="myFunds" id="divOtherUsersSell">
                   <?php echo L('trade_other_users_sell');?>
                </div>
                <div id="currFunds" class="m_con cjbox" style="border: 1px solid #ddd;background: #fff;">
                    <div id="fund-info-box" class="box">
                        <div class="list-wrapper">
                            <ul class="trade-list_re" id="my-fund-title">
                                <li class="number sorting dealtop">
                                    <span class='right-align' style="width:15%;" ><?php echo L('trade_time');?></span>
                                    <span class='right-align'><?php echo L('trade_buy_o');?>/<?php echo L('trade_sell_o');?></span>
                                    <span class='right-align'><?php echo L('trade_traded_price');?></span>
                                    <span class='right-align'><?php echo L('trade_traded_amount');?></span>
                                    <span class='right-align'><?php echo L('trade_traded');?></span>
                                    <span class='right-align' style="width:25%;" ><?php echo L('trade_total_price');?></span>
                                    <span class='right-align'><?php echo L('operate');?></span>


                                    <!-- <span class='right-align' id="my-type"><?php echo L('trade_time');?></span>
                                    <span class='right-align'><?php echo L('trade_buy_o');?>/<?php echo L('trade_sell_o');?><span style="float: right;padding-right: 28px;"><?php echo L('trade_traded_price');?></span></span>
                                    <span class='right-align'><?php echo L('trade_traded_amount');?></span>
                                    <span class='right-align'><?php echo L('trade_total_price');?></span>
                                    <span class='right-align'>操作</span> -->
                                </li>
                            </ul>
                            <ul id="my-fund-list" class="trade-list_re" style="height: 209px; overflow-y: auto; overflow-x: hidden; text-align: center;position: relative">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		     <!--end of place order box --> 
		     <div id="sectioncont" class="buy-sell-order "> 
			      <div id="tableAskList" data-id="sectioncont"> 
						<div class="mairu">
								<!-- <div class="b-s-title clearfix">
									<div class="b-s-t-left">
										最新价 <span>￥</span>
										<span class="green" id='orderbook_last_rate'>18579.92</span>
									</div>
									<div class="b-s-t-right" id="moreOrders">
										<span>更多<i class="caret"></i></span>
									</div>
								</div> -->
								<div class="m_con maidan">
									<box padding-bottom=0 class="right-list list">
										<li class="title-line sorting" style="height:30px; margin-top:15px;border-bottom: 1px solid #e4ebf0">
											<span class="right-align price"><b>卖出价</b></span>
											<span class="volume right-align"><b>数量(<?php echo (strtoupper($xnb)); ?>)</b></span>
											<span class="total right-align"><b>总计(<?php echo (strtoupper($rmb)); ?>)</b></span>
										</li>
										<div id="ask-list">
											<ul id="ul-ask-list" data-id='ask-list'>
												
											</ul>
										</div>
									</box>
								</div>

				       <!-- <div class="mairu"> 
					        <div class="b-s-title clearfix"> 
					         <div class="b-s-t-left">
					           最新价 
					          <span>￥</span> 
					          <span class="green" id="orderbook_last_rate">18579.92</span> 
					         </div> 
					         <div class="b-s-t-right" id="moreOrders"> 
					          <span>更多<i class="caret"></i></span> 
					         </div> 
					        </div> 
					        <div class="m_con maidan"> 
					         <box padding-bottom="0" class="right-list list"> 
					          <li class="title-line sorting" style="height:30px; margin-top:15px;border-bottom: 1px solid #e4ebf0"> <span class="right-align price"><b>卖出价</b></span> <span class="volume right-align"><b>数量(BTC)</b></span> <span class="total right-align"><b>总计(CNY)</b></span> </li> 
					          <div id="ask-list"> 
					           <ul id="ul-ask-list" data-id="ask-list"> 
					            <li onclick="set_price(1,18575.00,0.2100,3900.75)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18575.00</span> <span data-id="volume" class="volume right-align">0.2100</span> <span data-id="total" class="right-align total">3900.75</span> <span data-id="rect" class="right-align rect down orange" style="width: 6.3098420600494px;"></span> </li> 
					            <li onclick="set_price(1,18580.00,0.7869,14619.09)" class="orderline even hangb"> <span data-id="price" class="price right-align">18580.00</span> <span data-id="volume" class="volume right-align">0.5769</span> <span data-id="total" class="right-align total">10718.34</span> <span data-id="rect" class="right-align rect down orange" style="width: 10.458025597457px;"></span> </li> 
					            <li onclick="set_price(1,18597.00,5.7869,107604.09)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18597.00</span> <span data-id="volume" class="volume right-align">5.0000</span> <span data-id="total" class="right-align total">92985.00</span> <span data-id="rect" class="right-align rect down orange" style="width: 30.78887663348px;"></span> </li> 
					            <li onclick="set_price(1,18599.00,5.8529,108831.62)" class="orderline even hangb"> <span data-id="price" class="price right-align">18599.00</span> <span data-id="volume" class="volume right-align">0.0660</span> <span data-id="total" class="right-align total">1227.53</span> <span data-id="rect" class="right-align rect down orange" style="width: 3.5373726127511px;"></span> </li> 
					            <li onclick="set_price(1,18600.00,17.0029,316221.62)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18600.00</span> <span data-id="volume" class="volume right-align">11.1500</span> <span data-id="total" class="right-align total">207390.00</span> <span data-id="rect" class="right-align rect down orange" style="width: 45.977597602573px;"></span> </li> 
					            <li onclick="set_price(1,18629.00,17.6658,328571.10)" class="orderline even hangb"> <span data-id="price" class="price right-align">18629.00</span> <span data-id="volume" class="volume right-align">0.6629</span> <span data-id="total" class="right-align total">12349.47</span> <span data-id="rect" class="right-align rect down orange" style="width: 11.210844136289px;"></span> </li> 
					            <li onclick="set_price(1,18684.59,18.4508,343238.62)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18684.59</span> <span data-id="volume" class="volume right-align">0.7850</span> <span data-id="total" class="right-align total">14667.52</span> <span data-id="rect" class="right-align rect down orange" style="width: 12.199594508464px;"></span> </li> 
					            <li onclick="set_price(1,18684.61,18.4658,343519.62)" class="orderline even hangb"> <span data-id="price" class="price right-align">18684.61</span> <span data-id="volume" class="volume right-align">0.0150</span> <span data-id="total" class="right-align total">281.00</span> <span data-id="rect" class="right-align rect down orange" style="width: 1.6885884241102px;"></span> </li> 
					            <li onclick="set_price(1,18750.00,18.4684,343568.37)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18750.00</span> <span data-id="volume" class="volume right-align">0.0026</span> <span data-id="total" class="right-align total">48.75</span> <span data-id="rect" class="right-align rect down orange" style="width: 1px;"></span> </li> 
					            <li onclick="set_price(1,18781.21,18.4933,344035.00)" class="orderline even hangb"> <span data-id="price" class="price right-align">18781.21</span> <span data-id="volume" class="volume right-align">0.0248</span> <span data-id="total" class="right-align total">466.62</span> <span data-id="rect" class="right-align rect down orange" style="width: 2.1703563744944px;"></span> </li> 
					            <li onclick="set_price(1,18800.00,18.5182,344503.12)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18800.00</span> <span data-id="volume" class="volume right-align">0.0249</span> <span data-id="total" class="right-align total">468.12</span> <span data-id="rect" class="right-align rect down orange" style="width: 2.1727437776395px;"></span> </li> 
					            <li onclick="set_price(1,18800.06,18.5399,344911.68)" class="orderline even hangb"> <span data-id="price" class="price right-align">18800.06</span> <span data-id="volume" class="volume right-align">0.0217</span> <span data-id="total" class="right-align total">408.56</span> <span data-id="rect" class="right-align rect down orange" style="width: 2.0298287007949px;"></span> </li> 
					            <li onclick="set_price(1,18850.00,18.5410,344932.42)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18850.00</span> <span data-id="volume" class="volume right-align">0.0011</span> <span data-id="total" class="right-align total">20.74</span> <span data-id="rect" class="right-align rect down orange" style="width: 1px;"></span> </li> 
					            <li onclick="set_price(1,18880.00,18.6410,346820.42)" class="orderline even hangb"> <span data-id="price" class="price right-align">18880.00</span> <span data-id="volume" class="volume right-align">0.1000</span> <span data-id="total" class="right-align total">1888.00</span> <span data-id="rect" class="right-align rect down orange" style="width: 4.3542046905299px;"></span> </li> 
					            <li onclick="set_price(1,18888.00,18.8096,350004.93)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18888.00</span> <span data-id="volume" class="volume right-align">0.1686</span> <span data-id="total" class="right-align total">3184.52</span> <span data-id="rect" class="right-align rect down orange" style="width: 5.6537633527711px;"></span> </li> 
					            <li onclick="set_price(1,18900.00,19.2096,357564.93)" class="orderline even hangb"> <span data-id="price" class="price right-align">18900.00</span> <span data-id="volume" class="volume right-align">0.4000</span> <span data-id="total" class="right-align total">7560.00</span> <span data-id="rect" class="right-align rect down orange" style="width: 8.7084093810598px;"></span> </li> 
					            <li onclick="set_price(1,18939.98,19.2273,357900.03)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18939.98</span> <span data-id="volume" class="volume right-align">0.0177</span> <span data-id="total" class="right-align total">335.10</span> <span data-id="rect" class="right-align rect down orange" style="width: 1.8315049943673px;"></span> </li> 
					            <li onclick="set_price(1,18940.00,19.6273,365476.03)" class="orderline even hangb"> <span data-id="price" class="price right-align">18940.00</span> <span data-id="volume" class="volume right-align">0.4000</span> <span data-id="total" class="right-align total">7576.00</span> <span data-id="rect" class="right-align rect down orange" style="width: 8.7084093810598px;"></span> </li> 
					            <li onclick="set_price(1,18998.20,19.7273,367375.85)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18998.20</span> <span data-id="volume" class="volume right-align">0.1000</span> <span data-id="total" class="right-align total">1899.82</span> <span data-id="rect" class="right-align rect down orange" style="width: 4.3542046905299px;"></span> </li> 
					            <li onclick="set_price(1,18999.00,19.7654,368099.72)" class="orderline even hangb"> <span data-id="price" class="price right-align">18999.00</span> <span data-id="volume" class="volume right-align">0.0381</span> <span data-id="total" class="right-align total">723.86</span> <span data-id="rect" class="right-align rect down orange" style="width: 2.6876414425216px;"></span> </li> 
					            <li onclick="set_price(1,19000.00,35.7208,671252.32)" class="orderline odd hanga"> <span data-id="price" class="price right-align">19000.00</span> <span data-id="volume" class="volume right-align">15.9554</span> <span data-id="total" class="right-align total">303152.60</span> <span data-id="rect" class="right-align rect down orange" style="width: 55px;"></span> </li> 
					            <li onclick="set_price(1,19050.00,38.7408,728783.32)" class="orderline even hangb"> <span data-id="price" class="price right-align">19050.00</span> <span data-id="volume" class="volume right-align">3.0200</span> <span data-id="total" class="right-align total">57531.00</span> <span data-id="rect" class="right-align rect down orange" style="width: 23.9283257732px;"></span> </li> 
					            <li onclick="set_price(1,19099.00,39.0708,735085.99)" class="orderline odd hanga"> <span data-id="price" class="price right-align">19099.00</span> <span data-id="volume" class="volume right-align">0.3300</span> <span data-id="total" class="right-align total">6302.67</span> <span data-id="rect" class="right-align rect down orange" style="width: 7.9098056238575px;"></span> </li> 
					            <li onclick="set_price(1,19100.00,44.2914,834800.02)" class="orderline even hangb"> <span data-id="price" class="price right-align">19100.00</span> <span data-id="volume" class="volume right-align">5.2206</span> <span data-id="total" class="right-align total">99714.03</span> <span data-id="rect" class="right-align rect down orange" style="width: 31.460838884931px;"></span> </li> 
					            <li onclick="set_price(1,19160.00,48.4714,914888.82)" class="orderline odd hanga"> <span data-id="price" class="price right-align">19160.00</span> <span data-id="volume" class="volume right-align">4.1800</span> <span data-id="total" class="right-align total">80088.80</span> <span data-id="rect" class="right-align rect down orange" style="width: 28.151204534761px;"></span> </li> 
					            <li onclick="set_price(1,19200.00,54.6627,1033761.78)" class="orderline even hangb"> <span data-id="price" class="price right-align">19200.00</span> <span data-id="volume" class="volume right-align">6.1913</span> <span data-id="total" class="right-align total">118872.96</span> <span data-id="rect" class="right-align rect down orange" style="width: 34.260978745909px;"></span> </li> 
					            <li onclick="set_price(1,19298.60,57.6827,1092043.55)" class="orderline odd hanga"> <span data-id="price" class="price right-align">19298.60</span> <span data-id="volume" class="volume right-align">3.0200</span> <span data-id="total" class="right-align total">58281.77</span> <span data-id="rect" class="right-align rect down orange" style="width: 23.9283257732px;"></span> </li> 
					            <li onclick="set_price(1,19300.00,63.0793,1196196.41)" class="orderline even hangb"> <span data-id="price" class="price right-align">19300.00</span> <span data-id="volume" class="volume right-align">5.3965</span> <span data-id="total" class="right-align total">104152.86</span> <span data-id="rect" class="right-align rect down orange" style="width: 31.98643039427px;"></span> </li> 
					            <li onclick="set_price(1,19324.00,63.1024,1196642.79)" class="orderline odd hanga"> <span data-id="price" class="price right-align">19324.00</span> <span data-id="volume" class="volume right-align">0.0231</span> <span data-id="total" class="right-align total">446.38</span> <span data-id="rect" class="right-align rect down orange" style="width: 2.0927378599587px;"></span> </li> 
					            <li onclick="set_price(1,19333.90,63.4115,1202618.90)" class="orderline even hangb"> <span data-id="price" class="price right-align">19333.90</span> <span data-id="volume" class="volume right-align">0.3091</span> <span data-id="total" class="right-align total">5976.11</span> <span data-id="rect" class="right-align rect down orange" style="width: 7.6552317681059px;"></span> </li> 
					            <li onclick="set_price(1,19349.00,63.6115,1206488.70)" class="orderline odd hanga"> <span data-id="price" class="price right-align">19349.00</span> <span data-id="volume" class="volume right-align">0.2000</span> <span data-id="total" class="right-align total">3869.80</span> <span data-id="rect" class="right-align rect down orange" style="width: 6.1577753266959px;"></span> </li> 
					            <li onclick="set_price(1,19350.00,63.7397,1208969.37)" class="orderline even hangb"> <span data-id="price" class="price right-align">19350.00</span> <span data-id="volume" class="volume right-align">0.1282</span> <span data-id="total" class="right-align total">2480.67</span> <span data-id="rect" class="right-align rect down orange" style="width: 4.9300673687462px;"></span> </li> 
					           </ul> 
					          </div> 
					         </box> 
					        </div>  -->
				       </div> 
				       <div class="maichu"> 
				        <div class="m_con maidan"> 
								<box padding-bottom=0 class="right-list list">
										<div id="bid-list">
											<ul id="ul-bid-list" data-id='bid-list'>
												
											</ul>
										</div>
									</box>
				         <!-- <box padding-bottom="0" class="right-list list"> 
				          <div id="bid-list"> 
				           <ul id="ul-bid-list" data-id="bid-list"> 
				            <li onclick="set_price(0,18400.00,0.5082,9351.30)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18400.00</span> <span data-id="volume" class="right-align volume">0.5082</span> <span data-id="total" class="right-align total">9351.30</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 12.422760029896px;"></span> </li> 
				            <li onclick="set_price(0,18395.00,0.6708,12342.60)" class="orderline even hangb"> <span data-id="price" class="price right-align">18395.00</span> <span data-id="volume" class="right-align volume">0.1626</span> <span data-id="total" class="right-align total">2991.30</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 7.026063089323px;"></span> </li> 
				            <li onclick="set_price(0,18394.00,0.7803,14355.70)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18394.00</span> <span data-id="volume" class="right-align volume">0.1094</span> <span data-id="total" class="right-align total">2013.11</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 5.7638905007119px;"></span> </li> 
				            <li onclick="set_price(0,18300.00,1.9003,34851.70)" class="orderline even hangb"> <span data-id="price" class="price right-align">18300.00</span> <span data-id="volume" class="right-align volume">1.1200</span> <span data-id="total" class="right-align total">20496.00</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 18.391481897114px;"></span> </li> 
				            <li onclick="set_price(0,18288.00,4.9213,90099.75)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18288.00</span> <span data-id="volume" class="right-align volume">3.0210</span> <span data-id="total" class="right-align total">55248.05</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 30.195389561559px;"></span> </li> 
				            <li onclick="set_price(0,18260.01,10.8893,199075.49)" class="orderline even hangb"> <span data-id="price" class="price right-align">18260.01</span> <span data-id="volume" class="right-align volume">5.9680</span> <span data-id="total" class="right-align total">108975.74</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 42.407930605499px;"></span> </li> 
				            <li onclick="set_price(0,18260.00,11.3893,208205.49)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18260.00</span> <span data-id="volume" class="right-align volume">0.5000</span> <span data-id="total" class="right-align total">9130.00</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 12.274888520139px;"></span> </li> 
				            <li onclick="set_price(0,18204.20,11.8893,217307.59)" class="orderline even hangb"> <span data-id="price" class="price right-align">18204.20</span> <span data-id="volume" class="right-align volume">0.5000</span> <span data-id="total" class="right-align total">9102.10</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 12.256119000706px;"></span> </li> 
				            <li onclick="set_price(0,18202.26,12.3413,225535.01)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18202.26</span> <span data-id="volume" class="right-align volume">0.4520</span> <span data-id="total" class="right-align total">8227.42</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 11.652363978047px;"></span> </li> 
				            <li onclick="set_price(0,18202.05,12.3443,225589.62)" class="orderline even hangb"> <span data-id="price" class="price right-align">18202.05</span> <span data-id="volume" class="right-align volume">0.0030</span> <span data-id="total" class="right-align total">54.61</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 1px;"></span> </li> 
				            <li onclick="set_price(0,18201.00,12.6190,230589.43)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18201.00</span> <span data-id="volume" class="right-align volume">0.2747</span> <span data-id="total" class="right-align total">4999.81</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 9.0836234406128px;"></span> </li> 
				            <li onclick="set_price(0,18200.00,14.1293,258077.39)" class="orderline even hangb"> <span data-id="price" class="price right-align">18200.00</span> <span data-id="volume" class="right-align volume">1.5103</span> <span data-id="total" class="right-align total">27487.95</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 21.298712680453px;"></span> </li> 
				            <li onclick="set_price(0,18180.00,14.1346,258173.74)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18180.00</span> <span data-id="volume" class="right-align volume">0.0053</span> <span data-id="total" class="right-align total">96.35</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 1.2610056778587px;"></span> </li> 
				            <li onclick="set_price(0,18105.01,14.2456,260183.40)" class="orderline even hangb"> <span data-id="price" class="price right-align">18105.01</span> <span data-id="volume" class="right-align volume">0.1110</span> <span data-id="total" class="right-align total">2009.66</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 5.7589464697081px;"></span> </li> 
				            <li onclick="set_price(0,18105.00,14.6367,267263.38)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18105.00</span> <span data-id="volume" class="right-align volume">0.3911</span> <span data-id="total" class="right-align total">7079.98</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 10.809317177112px;"></span> </li> 
				            <li onclick="set_price(0,18103.00,15.0624,274969.82)" class="orderline even hangb"> <span data-id="price" class="price right-align">18103.00</span> <span data-id="volume" class="right-align volume">0.4257</span> <span data-id="total" class="right-align total">7706.45</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 11.277407370334px;"></span> </li> 
				            <li onclick="set_price(0,18100.00,15.9009,290148.10)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18100.00</span> <span data-id="volume" class="right-align volume">0.8386</span> <span data-id="total" class="right-align total">15178.27</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 15.826808046947px;"></span> </li> 
				            <li onclick="set_price(0,18065.26,21.8689,397961.57)" class="orderline even hangb"> <span data-id="price" class="price right-align">18065.26</span> <span data-id="volume" class="right-align volume">5.9680</span> <span data-id="total" class="right-align total">107813.47</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 42.18117596769px;"></span> </li> 
				            <li onclick="set_price(0,18000.00,32.0522,581260.97)" class="orderline odd hanga"> <span data-id="price" class="price right-align">18000.00</span> <span data-id="volume" class="right-align volume">10.1833</span> <span data-id="total" class="right-align total">183299.40</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 55px;"></span> </li> 
				            <li onclick="set_price(0,17900.00,33.0522,599160.97)" class="orderline even hangb"> <span data-id="price" class="price right-align">17900.00</span> <span data-id="volume" class="right-align volume">1.0000</span> <span data-id="total" class="right-align total">17900.00</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 17.187340594756px;"></span> </li> 
				            <li onclick="set_price(0,17885.28,33.0586,599274.09)" class="orderline odd hanga"> <span data-id="price" class="price right-align">17885.28</span> <span data-id="volume" class="right-align volume">0.0063</span> <span data-id="total" class="right-align total">113.12</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 1.3663036340644px;"></span> </li> 
				            <li onclick="set_price(0,17885.27,33.4446,606178.80)" class="orderline even hangb"> <span data-id="price" class="price right-align">17885.27</span> <span data-id="volume" class="right-align volume">0.3861</span> <span data-id="total" class="right-align total">6904.71</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 10.674683360745px;"></span> </li> 
				            <li onclick="set_price(0,17880.00,33.5728,608470.73)" class="orderline odd hanga"> <span data-id="price" class="price right-align">17880.00</span> <span data-id="volume" class="right-align volume">0.1282</span> <span data-id="total" class="right-align total">2291.93</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 6.1501071513474px;"></span> </li> 
				            <li onclick="set_price(0,17800.00,34.5780,626364.11)" class="orderline even hangb"> <span data-id="price" class="price right-align">17800.00</span> <span data-id="volume" class="right-align volume">1.0052</span> <span data-id="total" class="right-align total">17893.38</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 17.184161506902px;"></span> </li> 
				            <li onclick="set_price(0,17790.03,34.5808,626412.66)" class="orderline odd hanga"> <span data-id="price" class="price right-align">17790.03</span> <span data-id="volume" class="right-align volume">0.0027</span> <span data-id="total" class="right-align total">48.55</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 1px;"></span> </li> 
				            <li onclick="set_price(0,17790.01,34.5897,626572.08)" class="orderline even hangb"> <span data-id="price" class="price right-align">17790.01</span> <span data-id="volume" class="right-align volume">0.0090</span> <span data-id="total" class="right-align total">159.42</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 1.6220181841582px;"></span> </li> 
				            <li onclick="set_price(0,17790.00,34.5915,626603.36)" class="orderline odd hanga"> <span data-id="price" class="price right-align">17790.00</span> <span data-id="volume" class="right-align volume">0.0018</span> <span data-id="total" class="right-align total">31.28</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 1px;"></span> </li> 
				            <li onclick="set_price(0,17780.00,34.6903,628360.20)" class="orderline even hangb"> <span data-id="price" class="price right-align">17780.00</span> <span data-id="volume" class="right-align volume">0.0988</span> <span data-id="total" class="right-align total">1756.84</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 5.3845386142293px;"></span> </li> 
				            <li onclick="set_price(0,17680.00,34.7304,629068.29)" class="orderline odd hanga"> <span data-id="price" class="price right-align">17680.00</span> <span data-id="volume" class="right-align volume">0.0400</span> <span data-id="total" class="right-align total">708.08</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 3.4184063838324px;"></span> </li> 
				            <li onclick="set_price(0,17633.00,34.7329,629114.00)" class="orderline even hangb"> <span data-id="price" class="price right-align">17633.00</span> <span data-id="volume" class="right-align volume">0.0026</span> <span data-id="total" class="right-align total">45.71</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 1px;"></span> </li> 
				            <li onclick="set_price(0,17610.00,34.8476,631132.44)" class="orderline odd hanga"> <span data-id="price" class="price right-align">17610.00</span> <span data-id="volume" class="right-align volume">0.1146</span> <span data-id="total" class="right-align total">2018.44</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 5.7715193141609px;"></span> </li> 
				            <li onclick="set_price(0,17600.00,35.8476,648732.44)" class="orderline even hangb"> <span data-id="price" class="price right-align">17600.00</span> <span data-id="volume" class="right-align volume">1.0000</span> <span data-id="total" class="right-align total">17600.00</span> <span data-id="rect" class="right-align rect down fenlv" style="width: 17.042704021092px;"></span> </li> 
				           </ul> 
				          </div> 
				         </box>  -->
				        </div> 
				       </div> 
				       <template data-id="ask-list-item-tpl"> 
				        <li class="list-item-number-ask"> <span data-id="price" class="price right-align"></span> <span data-id="volume" class="volume right-align"></span> <span data-id="total" class="total right-align"></span> <span data-id="rect" class="right-align rect down orange"></span> </li> 
				       </template> 
				       <template data-id="bid-list-item-tpl"> 
				        <li class="list-item-number-bid"> <span data-id="price" class="price right-align"></span> <span data-id="volume" class="volume right-align"></span> <span data-id="total" class="total right-align"></span> <span data-id="rect" class="right-align rect down fenlv"></span> </li> 
				       </template> 
			      </div> 
			      <div class="chengjiao"> 
				       <div class="bottom_maidan"> 
					        <div class="m_title" style="margin:15px 0 0">
					          最新成交 
					         <!-- <ul class="high-low"> 
					          <li> 最高价: 18684.6 </li> 
					          <li> 最低价: 18100 </li> 
					         </ul>  -->
					        </div> 
					        <div class="m_con maidan cjbox" id="sectioncont-history"> 
					         <div id="deal-info-box" class="box"> 
					          <div class="list-wrapper"> 
					           <ul class="trade-list_re"> 
					            <li class="number sorting dealtop">
									 <!-- <span class="time">时间</span> 
								<span class="type">交易类型</span><span class="price">成交价(CNY)</span> <span class="amount">成交量(BTC)</span> <span class="total">总计(CNY)</span>
								 -->
								 <span class="time"><?php echo L('trade_time');?></span>
								 <!--<span class="type">交易类型</span>-->
								 <span class="price"><?php echo L('trade_traded_price');?></span>
								 <span class="amount"><?php echo L('trade_traded_amount');?></span>
								 <span class="total"><?php echo L('trade_total_price');?></span>
							</li> 
					           </ul> 
					           <div id="trade-list"> 
								    <ul id="ul-trade-list" data-id='trade-list' class='trade-list_re' style='height: 510px; overflow: hidden;'>
                                    
										</ul>
					            <!-- <ul id="ul-trade-list" data-id="trade-list" class="trade-list_re" style="height: 510px; overflow: hidden;"> 
					             <li data-id="list-item" tid="2227010" class="number up odd hanga"><span class="time" data-id="time">09:58:52</span><span class="price" data-id="price">18579.86</span><span class="amount" data-id="amount">0.0081</span><span class="total" data-id="total">150.00</span></li>
					             <li data-id="list-item" tid="2226978" class="number up even hangb"><span class="time" data-id="time">09:57:52</span><span class="price" data-id="price">18579.86</span><span class="amount" data-id="amount">0.0081</span><span class="total" data-id="total">150.00</span></li>
					             <li data-id="list-item" tid="2226966" class="number up odd hanga"><span class="time" data-id="time">09:56:48</span><span class="price" data-id="price">18579.89</span><span class="amount" data-id="amount">0.0024</span><span class="total" data-id="total">45.07</span></li>
					             <li data-id="list-item" tid="2226965" class="number up even hangb"><span class="time" data-id="time">09:56:48</span><span class="price" data-id="price">18579.00</span><span class="amount" data-id="amount">0.0036</span><span class="total" data-id="total">66.88</span></li>
					             <li data-id="list-item" tid="2226964" class="number up odd hanga"><span class="time" data-id="time">09:56:48</span><span class="price" data-id="price">18460.00</span><span class="amount" data-id="amount">0.0021</span><span class="total" data-id="total">38.29</span></li>
					             <li data-id="list-item" tid="2226947" class="number up even hangb"><span class="time" data-id="time">09:54:49</span><span class="price" data-id="price">18460.00</span><span class="amount" data-id="amount">0.0081</span><span class="total" data-id="total">150.00</span></li>
					             <li data-id="list-item" tid="2226940" class="number down odd hanga"><span class="time" data-id="time">09:54:25</span><span class="price" data-id="price">18460.00</span><span class="amount" data-id="amount">0.0022</span><span class="total" data-id="total">40.61</span></li>
					             <li data-id="list-item" tid="2226937" class="number up even hangb"><span class="time" data-id="time">09:53:50</span><span class="price" data-id="price">18579.92</span><span class="amount" data-id="amount">0.0081</span><span class="total" data-id="total">150.00</span></li>
					             <li data-id="list-item" tid="2226932" class="number up odd hanga"><span class="time" data-id="time">09:52:57</span><span class="price" data-id="price">18579.91</span><span class="amount" data-id="amount">0.0081</span><span class="total" data-id="total">150.00</span></li>
					             <li data-id="list-item" tid="2226928" class="number up even hangb"><span class="time" data-id="time">09:51:53</span><span class="price" data-id="price">18579.93</span><span class="amount" data-id="amount">0.0081</span><span class="total" data-id="total">150.00</span></li>
					             <li data-id="list-item" tid="2226911" class="number up odd hanga"><span class="time" data-id="time">09:50:52</span><span class="price" data-id="price">18579.97</span><span class="amount" data-id="amount">0.0081</span><span class="total" data-id="total">150.00</span></li>
					             <li data-id="list-item" tid="2226905" class="number up even hangb"><span class="time" data-id="time">09:49:48</span><span class="price" data-id="price">18579.94</span><span class="amount" data-id="amount">0.0081</span><span class="total" data-id="total">150.00</span></li>
					             <li data-id="list-item" tid="2226898" class="number up odd hanga"><span class="time" data-id="time">09:48:57</span><span class="price" data-id="price">18579.95</span><span class="amount" data-id="amount">0.0081</span><span class="total" data-id="total">150.00</span></li>
					             <li data-id="list-item" tid="2226887" class="number up even hangb"><span class="time" data-id="time">09:47:53</span><span class="price" data-id="price">18579.95</span><span class="amount" data-id="amount">0.0081</span><span class="total" data-id="total">150.00</span></li>
					             <li data-id="list-item" tid="2226885" class="number up odd hanga"><span class="time" data-id="time">09:47:49</span><span class="price" data-id="price">18579.95</span><span class="amount" data-id="amount">0.0148</span><span class="total" data-id="total">274.58</span></li>
					             <li data-id="list-item" tid="2226882" class="number up even hangb"><span class="time" data-id="time">09:47:12</span><span class="price" data-id="price">18579.96</span><span class="amount" data-id="amount">0.0084</span><span class="total" data-id="total">156.31</span></li>
					             <li data-id="list-item" tid="2226880" class="number up odd hanga"><span class="time" data-id="time">09:46:52</span><span class="price" data-id="price">18579.96</span><span class="amount" data-id="amount">0.0081</span><span class="total" data-id="total">150.00</span></li>
					             <li data-id="list-item" tid="2226876" class="number up even hangb"><span class="time" data-id="time">09:46:50</span><span class="price" data-id="price">18579.96</span><span class="amount" data-id="amount">0.0011</span><span class="total" data-id="total">21.06</span></li>
					             <li data-id="list-item" tid="2226875" class="number up odd hanga"><span class="time" data-id="time">09:46:19</span><span class="price" data-id="price">18579.94</span><span class="amount" data-id="amount">0.0027</span><span class="total" data-id="total">50.17</span></li>
					             <li data-id="list-item" tid="2226874" class="number up even hangb"><span class="time" data-id="time">09:46:08</span><span class="price" data-id="price">18579.95</span><span class="amount" data-id="amount">0.0151</span><span class="total" data-id="total">281.30</span></li>
					             <li data-id="list-item" tid="2226873" class="number up odd hanga"><span class="time" data-id="time">09:46:06</span><span class="price" data-id="price">18579.94</span><span class="amount" data-id="amount">0.6033</span><span class="total" data-id="total">11209.28</span></li>
					             <li data-id="list-item" tid="2226869" class="number up even hangb"><span class="time" data-id="time">09:45:55</span><span class="price" data-id="price">18460.00</span><span class="amount" data-id="amount">0.0022</span><span class="total" data-id="total">40.61</span></li>
					             <li data-id="list-item" tid="2226862" class="number down odd hanga"><span class="time" data-id="time">09:45:41</span><span class="price" data-id="price">18400.00</span><span class="amount" data-id="amount">0.0027</span><span class="total" data-id="total">49.68</span></li>
					             <li data-id="list-item" tid="2226860" class="number down even hangb"><span class="time" data-id="time">09:45:37</span><span class="price" data-id="price">18400.00</span><span class="amount" data-id="amount">0.0148</span><span class="total" data-id="total">272.32</span></li>
					             <li data-id="list-item" tid="2226859" class="number down odd hanga"><span class="time" data-id="time">09:45:35</span><span class="price" data-id="price">18400.00</span><span class="amount" data-id="amount">0.0074</span><span class="total" data-id="total">136.67</span></li>
					             <li data-id="list-item" tid="2226855" class="number down even hangb"><span class="time" data-id="time">09:45:28</span><span class="price" data-id="price">18400.00</span><span class="amount" data-id="amount">0.0179</span><span class="total" data-id="total">329.36</span></li>
					             <li data-id="list-item" tid="2226852" class="number down odd hanga"><span class="time" data-id="time">09:45:24</span><span class="price" data-id="price">18400.00</span><span class="amount" data-id="amount">0.0454</span><span class="total" data-id="total">835.36</span></li>
					             <li data-id="list-item" tid="2226842" class="number down even hangb"><span class="time" data-id="time">09:43:10</span><span class="price" data-id="price">18400.00</span><span class="amount" data-id="amount">0.0150</span><span class="total" data-id="total">276.00</span></li>
					             <li data-id="list-item" tid="2226831" class="number down odd hanga"><span class="time" data-id="time">09:42:19</span><span class="price" data-id="price">18400.00</span><span class="amount" data-id="amount">0.0150</span><span class="total" data-id="total">276.00</span></li>
					             <li data-id="list-item" tid="2226827" class="number down even hangb"><span class="time" data-id="time">09:41:53</span><span class="price" data-id="price">18400.00</span><span class="amount" data-id="amount">0.3735</span><span class="total" data-id="total">6873.31</span></li> 
					            </ul>  -->
					           </div> 
					          </div> 
					          <template data-id="list-item-tpl"> 
					           <li data-id="list-item" tid="" class="number"> <span class="time" data-id="time"></span> <span class="type" data-id="type"></span> <span class="price" data-id="price"></span> <span class="amount" data-id="amount"></span> <span class="total" data-id="total"></span> 
					            <!--<span class="right-align rect" data-id="rect"></span>--> </li> 
					          </template> 
					         </div> 
					        </div> 
				       </div> 
			      </div> 
		     </div> 
	     	<!--end of order lists --> 
		     
	     <!--end of order depth --> 
	    </div> 
    <!--end of right content--> 
   </div> 
   <!-- end of main content--> 
  </div> 
  <!-- content --> 
  <div class="risk-tip"> 
   <div class="r-t-box"> 
    <div class="tip-con sectioncont"> 
     <h3 style="color:rgb(156, 39, 176);font-weight: bold;   font-family:microsoft yahei;">欢迎使用本交易平台，在正式交易前，请您先阅读以下风险提示。</h3> 
     <ul class="tip-list"> 
      <li>区块链资产市场<b>24小时交易，行情波动剧烈，无涨跌停限制</b> ，价格受到各国新闻事件等多种因素影响，浮动很大，请您务必了解<b>市场风险，理性参与</b>。 </li>
      <li>根据《中华人民共和国反洗钱法》、中国人民银行相关规定 等法律法规规定，我们将对平台交易用户实行实名身份验证制度，保护用户资产，防范可能存在的金融风险。</li> 
      <li>本平台按照严格的评估标准选择有社区共识和长期价值的币种上线，不会承诺或与任何开发团队合作，更不会收费上币，切勿相信任何上币传言。</li> 
      <li>本平台只为用户提供价值投资和交易平台，拒绝一切炒币团，切勿相信和参与任何类似 “千万富豪，组团炒币” 等市场操控行为，以免上当受骗。</li> 
     </ul> 
     <a class="sub-btn risk-agree" href="javascript:;" style="background-color:rgb(156, 39, 176)">我已阅读和了解市场风险，进入</a> 
     <a id="riskLeave" href="/" style="margin: 0 auto;display: block;width: 100px;clear: both;font-size: 14px;color:rgb(156, 39, 176)">暂不交易，离开</a> 
    </div> 
   </div> 
  </div> 

  <script type="text/javascript">
	$(function() {
		//显示风险提示
		var riskCo=$.cookie('risktip');
		if(typeof(riskCo) == 'undefined'){ //风险提示cookie未定义的
			$(".risk-tip").show();
			$("body").css("overflow","hidden").animate({scrollTop: '0'}, 100);
		}
		$(".risk-agree").click(function() {$(".risk-tip").hide();$("body").css("overflow","");$.cookie('risktip', 1, { expires: 365, path: '/' });});
		$("#riskLeave").click(function () {$.cookie('nav_index', 0,{ path: '/' });});
	
	
	
	
	});

	
	
	/*设置买单滚动到底部*/
	$("#ask-list").scrollTop($('#ul-ask-list').height());
	
	
		/*挂单tab*/
		$(".order-tab").click(function () {
			$(this).siblings().removeClass("order-t-active");
			$(this).addClass("order-t-active");
		});
		$("#ot1").click(function () {
			$("#historyOrder").hide();
			$("#currOrder").show();
			checkEmpty(1);
		});
		$("#ot2").click(function () {
			$("#currOrder").hide();
			$("#historyOrder").show();
			checkEmpty(2);
		});
	
	</script> 
  <script src="/Public/layer/layer.js"></script> 
 <footer class="r-footer">
    <div class="fixed-bg-scroll scroll2" style="background: url('/Public/Home3/images/fbg.jpg');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="f-block">
                    <div class="h-head">
                        <div class="img-holder">
                            <a href="#"><img src="/Public/Home3/images/f-logo.png" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="f-content">
                        <p>是一个全球化的数字货币交易所。正在高速发展的区块链资产交易平台，为全球区块链爱好者提供多币种、多语言的币币兑换服务。 最安全，最便利的多币种全球交易平台。</p>
                        <ul class="list-unstyled align-left social-nav">
                             <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                             <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                             <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                             <li><a href="https://plus.google.com/ "><i class="fa fa-google-plus"></i></a></li>
                             <li><a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="f-block">
                    <div class="h-head">
                        <h2>场景应用</h2>
                    </div>
                    <div class="f-content">
                        <ul class="list-unstyled align-left project-gallery">
                            <li>
                                <a href="#">
                                    <img src="/Public/Home3/images/img5.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/Public/Home3/images/img6.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/Public/Home3/images/img7.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/Public/Home3/images/img8.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/Public/Home3/images/img9.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/Public/Home3/images/img10.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="f-block p20">
                    <div class="h-head">
                        <h2>联系方式</h2>
                    </div>
                    <div class="f-content">
                        <ul class="list-unstyled align-left f-contact">
                            <li><span class="flaticon-place-localizer"></span>
                                <div>
                                    <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                                </div>
                            </li>
                            <li><span class="flaticon-telephone"></span>
                                <div>
                                    <ul class="list-unstyled align-left contact-num">
                                        <li>Phone.<br>Fax.</li>
                                        <li>+61 3 8376 6284 <br> +61 3 8376 6285</li>
                                    </ul>
                                </div>
                            </li>
                            <li><span class="flaticon-contact"></span>
                                <div>
                                    <ul class="list-unstyled align-left contact-num">
                                        <li>Info.<br>HR</li>
                                        <li>love@Cryptonic.com <br> job@Cryptonic.com</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright wfp"><a href="#">Copyright</a> © 2018 - baidu.com All Rights Reserved</div>
<span id="go_to_top" class="go-to-top"><i class="fa fa-long-arrow-up"></i></span>
</div>

  <!-- force user to use https --> 
  <script>
            //if ('https:' != document.location.protocol) {
               // window.location = 'https://' + window.location.hostname + window.location.pathname;
                //return true;
            ///}
        </script> 
  




<!-- start -->

<script type="text/javascript">
	var market = "<?php echo ($market); ?>";
	var market_round = "<?php echo ($C['market'][$market]['round']); ?>";
	var market_round_num = 8 - "<?php echo ($C['market'][$market]['round']); ?>";
	var userid = "<?php echo (session('userId')); ?>";
	var trade_moshi = 1;
	var getDepth_tlme = null;
	var trans_lock = 0;
	
	
	
	function hangqing() {
		layer.alert("<?php echo L('trade_market');?>:<?php echo C('market')[$market]['title'];?><br><br>" +
			"<?php echo L('trade_yesterday_closing_price');?>:<?php echo (NumToStr($C['market'][$market]['hou_price'])); ?><br>" +
			"<?php echo L('trade_today_or_limit');?>:<?php echo C('market')[$market]['zhang'];?>%<br>" +
			"<?php echo L('trade_today_limit');?>:<?php echo C('market')[$market]['die'];?>%<br>" +
			"<?php echo L('trade_minimum_price');?>:<?php echo (NumToStr($C['market'][$market]['buy_min'])); ?><br>" +
			"<?php echo L('trade_maximum_price');?>:<?php echo (NumToStr($C['market'][$market]['sell_max'])); ?><br>", { title: '<?php echo L('trade_today_market ');?>', });
	}
	
	
	function moshi(id) {
		trade_moshi = id;
		$('.trade_moshi').removeClass('on');
		$('#trade_moshi_' + id).addClass('on');
		if (id == 3) {
			$('#ul-ask-list').hide();
		} else {
			$('#').show();
		}
	
		if (id == 4) {
			$('#ul-bid-list').hide();
		} else {
			$('#ul-bid-list').show();
		}
	
		if (id == 2) {
			$('#trade_moshi_liaotian_2').hide();
			$('#trade_moshi_liaotian_1').show();
			getChat();
		} else {
			$('#trade_moshi_liaotian_2').show();
			$('#trade_moshi_liaotian_1').hide();
			getDepth();
		}
	}
	
	
	
	function layertpwd() {
		var html = '<div id="all_mask" class="all_mask"></div><div id="tpwd" class="all_mask_loginbox">' +
			'<div class="login_title pl20"><?php echo L('trade_set_trade_password_enter ');?></div><form id="tpwdsetting" class="set_verify">' +
			'<ul class="tpwd"><li><label for="only"><input type="radio" id="only" value="1" name="aaatpwdsetting"> <?php echo L('trade_set_trade_password_op1 ');?> </label></li><li>' +
			'<label for="every"><input type="radio" checked id="every" value="2" name="aaatpwdsetting"> <?php echo L('trade_set_trade_password_op2 ');?></label></li><li><label for="none">' +
			'<input type="radio" id="none" name="aaatpwdsetting" value="3"> <?php echo L('trade_set_trade_password_op3 ');?></label></li><li><input type="password" id="aaapaypassword" name="paypassword" placeholder="<?php echo L('enter_trade_password ');?>" class="text"/>' +
			'</li></ul><div class="save_verify"><input type="button" value="<?php echo L('save ');?>" onclick="tpwdsettingaa()" /></div><div class="mask_wrap_close" id="pwd_close"></div></form></div>';
		$('body').append(html);
		$('#tpwd').css('top', ($(window).height() / 2) - (265 / 2) + $(document).scrollTop());
		$('.all_mask').css({ 'height': $(document).height() });
		$('#pwd_close').click(function() {
			$('#tpwd').remove();
			$('#all_mask').remove();
			$('#all_mask').remove();
		})
	
	
		$.get('/user/tpwdsetting', function(d) {
			if (d == 1) {
				$('#only').prop('checked', true);
			}
			if (d == 2) {
				$('#every').prop('checked', true);
			}
			if (d == 3) {
				$('#none').prop('checked', true);
			}
	
	
		})
	}
	
	//保存交易密码设置
	function tpwdsettingaa() {
		var paypassword = $("#aaapaypassword").val();
		var tpwdsetting = $("input[name='aaatpwdsetting']:checked").val();
		if (paypassword == "" || paypassword == null) {
			layer.tips('<?php echo L('enter_trade_password ');?>', '#paypassword', { tips: 3 });
			return false;
		}
		if (tpwdsetting == "" || tpwdsetting == null) {
			layer.tips('<?php echo L('trade_enter_select_one ');?>', '#tpwdsetting', { tips: 3 });
			return false;
		}
	
	
	
		$.post('/user/uptpwdsetting', { paypassword: paypassword, tpwdsetting: tpwdsetting }, function(d) {
			if (d.status) {
				layer.msg('<?php echo L('trade_set_succeed ');?>', { icon: 1 });
				window.location.reload();
			} else {
				layer.msg(d.info, { icon: 2 });
			}
	
		}, 'json');
	}
	
	
	
	
	
	function tradeadd_buy() {
	
		if (market == 'sgc_cny') {
	
			if (au_id>0) {
	
				ofcbuy(au_id,au_userid);
			}
			else
			{
				  layer.alert('<?php echo L('trade_select_amount_of_money');?>', { icon: 6, title: '<?php echo L('kindly_reminder');?>' });
	
			}
	
	
	
	
		  
	
			return;
		}
		if (trans_lock) {
			layer.msg('<?php echo L('trade_not_repeat ');?>', { icon: 2 });
			return;
		}
		trans_lock = 1;
	
		var price = parseFloat($('#buy_price').val());
		var num = parseFloat($('#buy-num').val());
		var paypassword = $('#buy_paypassword').val();
		if (price == "" || price == null) {
			layer.tips('<?php echo L('trade_enter_content ');?>', '#buy_price', { tips: 3 });
			return false;
		}
		if (num == "" || num == null) {
			layer.tips('<?php echo L('trade_enter_content');?>', '#buy_num', { tips: 3 });
			return false;
		}
	
		//加载层-风格3
		layer.load(2);
	
	
		//此处演示关闭
		setTimeout(function() {
			layer.closeAll('loading');
			trans_lock = 0;
		}, 10000);
		$.post("<?php echo U('Trade/upTrade');?>", { price: $('#buy_price').val(), num: $('#buy_num').val(), paypassword: $('#buy_paypassword').val(), market: market, type: 1 }, function(data) {
			layer.closeAll('loading');
			trans_lock = 0;
			if (data.status == 1) {
	
				$("#buy_price").val('');
				$("#buy_num").val('');
				$("#sell_price").val('');
				$("#sell_num").val('');
				layer.msg(data.info, { icon: 1 });
			} else {
				if (data.info == '147') {
					layer.msg('<?php echo L('trade_first_bound_phone');?>', { icon: 2 });
					window.setTimeout("window.location='<?php echo U('Home/User/moble');?>'", 2000);
				} else {
					layer.msg(data.info, { icon: 2 });
				}
			}
		}, 'json');
	}
	
	function tradeadd_sell() {
	
	
		if (trans_lock) {
			layer.msg('<?php echo L('trade_not_repeat');?>', { icon: 2 });
			return;
		}
	
		trans_lock = 1;
		var price = parseFloat($('#sell_price').val());
		var num = parseFloat($('#sell_num').val());
		var paypassword = $('#sell_paypassword').val();
		if (price == "" || price == null) {
			layer.tips('<?php echo L('trade_enter_content');?>', '#sell_price', { tips: 3 });
			return false;
		}
		if (num == "" || num == null) {
			layer.tips('<?php echo L('trade_enter_content');?>', '#sell_num', { tips: 3 });
			return false;
		}
		layer.load(2);
		//此处演示关闭
		setTimeout(function() {
			layer.closeAll('loading');
			trans_lock = 0;
		}, 10000);
	
	
	
	
		$.post("<?php echo U('Trade/upTrade');?>", { price: $('#sell_price').val(), num: $('#sell_num').val(), paypassword: $('#sell_paypassword').val(), market: market, type: 2 }, function(data) {
			layer.closeAll('loading');
			trans_lock = 0;
			if (data.status == 1) {
				$("#buy_price").val('');
				$("#buy_num").val('');
				$("#sell_price").val('');
				$("#sell_num").val('');
				layer.msg(data.info, { icon: 1 });
			} else {
	
				if (data.info == '147') {
					layer.msg('<?php echo L('trade_first_bound_phone');?>', { icon: 2 });
					window.setTimeout("window.location='<?php echo U('Home/User/moble');?>'", 2000);
				} else {
					layer.msg(data.info, { icon: 2 });
				}
	
			}
		}, 'json');
	}
	
	
	
	
	
	//撤销
	function cancelaa(id) {
		$.post("<?php echo U('Trade/chexiao');?>", { id: id }, function(data) {
			if (data.status == 1) {
				getEntrustAndUsercoin();
				layer.msg(data.info, { icon: 1 });
			} else {
				layer.msg(data.info, { icon: 2 });
			}
		});
	}
	
	
	//买入 ofcbuy
	
	function ofcbuy(id, userid) {
		if (trans_lock) {
			layer.msg('<?php echo L('trade_not_repeat');?>', { icon: 2 });
			return;
		}
		trans_lock = 1;
		layer.load(2);
	
	
	
	
	
		$.post("<?php echo U('Trade/ofcbuy');?>", { id: id }, function(data) {
			layer.closeAll('loading');
			trans_lock = 0;
			if (data.status == 1) {
				getEntrustAndUsercoin();
	
	
				$.getJSON("/Ajax/getUserBank?userid=" + userid + "&t=" + Math.random(), function(data) {
					if (data) {
						if (data['BankOne']) {
							var list = '<table>';
							var type = '';
							var typename = '';
							for (var i in data['BankOne']) {
								list += '<tr ><td class="green"  colspan="2" style="font-size: 20px;"   align="center"><?php echo L('trade_Buy_autoCancel');?></td></tr>';
								list += '<tr ><td class="buy"   width="90"><?php echo L('user_open_bank');?></td><td class="buy"   >' + data['BankOne'][i]['bank'] + '</td></tr>';
								list += '<tr ><td class="buy"   width="90"><?php echo L('user_open_province');?></td><td class="buy"   >' + data['BankOne'][i]['bankprov'] + '</td></tr>';
								list += '<tr ><td class="buy"   width="90"><?php echo L('user_open_city');?></td><td class="buy"   >' + data['BankOne'][i]['bankcity'] + '</td></tr>';
								list += '<tr ><td class="buy"   width="90"><?php echo L('user_open_branch');?></td><td class="buy"   >' + data['BankOne'][i]['bankaddr'] + '</td></tr>';
								list += '<tr ><td class="buy"   width="90"><?php echo L('user_open_name');?></td><td class="buy"   >' + data['BankOne'][i]['truename'] + '</td></tr>';
								list += '<tr ><td class="buy"   width="90"><?php echo L('user_bank_number');?></td><td class="buy"  >' + data['BankOne'][i]['bankcard'] + '</td></tr>';
								list += '<tr ><td class="buy"   width="90"><?php echo L('user_bank_mobile');?></td><td class="buy"   >' + data['BankOne'][i]['moble'] + '</td></tr>';
							}
							list += '</table>'
							layer.alert(list, { title: '<?php echo L('trade_Buy_Success');?>!!', });
						} else {
	
							layer.msg(data.info, { icon: 1 });
						}
					}
				});
	
			} else {
	
	
	
				if (data.info == '147') {
					layer.msg('<?php echo L('trade_first_bound_phone');?>', { icon: 2 });
					window.setTimeout("window.location='<?php echo U('Home/User/moble');?>'", 2000);
				} else {
					layer.msg(data.info, { icon: 2 });
				}
			}
		});
	}
	
	
	
	
	function getTradelog() {
		$.getJSON("/Ajax/getTradelog?market=" + market + "&t=" + Math.random(), function(data) {
			if (data) {
				if (data['tradelog']) {
					var list = '';
					var type = '';
					var typename = '';
					for (var i in data['tradelog']) {
						 var rowclass = "odd hanga";
							if (i % 2 == 0) {
								rowclass = "even hangb";
							}
						if (data['tradelog'][i]['type'] == 1) {
	
							list += '<li data-id="list-item" class="number up ' + rowclass + '"  onclick="autotrust(this,\'buy\',1)"><span class="time" data-id="time">' + data['tradelog'][i]['addtime'] + '</span><span class="price" data-id="price">' + data['tradelog'][i]['price'] + '</span><span class="amount" data-id="amount">' + data['tradelog'][i]['num'] + '</span><span class="total" data-id="total">' + data['tradelog'][i]['mum'] + '</span></li>';
						} else {
	
							list += '<li data-id="list-item" class="number down ' + rowclass + '"  onclick="autotrust(this,\'sell\',1)"><span class="time" data-id="time">' + data['tradelog'][i]['addtime'] + '</span><span class="price" data-id="price">' + data['tradelog'][i]['price'] + '</span><span class="amount" data-id="amount">' + data['tradelog'][i]['num'] + '</span><span class="total" data-id="total">' + data['tradelog'][i]['mum'] + '</span></li>';
						}
					}
					$("#ul-trade-list").html(list);
				}
			}
		});
		// setTimeout('getTradelog()',5000);
	}
	
	function getDepth() {
		// if(trade_moshi!=2){
	
		$.getJSON("/Ajax/getDepth?market=" + market + "&trade_moshi=" + trade_moshi + "&t=" + Math.random(), function(data) {
			if (data) {
	
				if (data['depth']) {
					var list = '';
					var sellk = data['depth']['sell'].length;
					if (data['depth']['sell']) {
						for (i = 0; i < data['depth']['sell'].length; i++) {
	
							var rowclass = "odd hanga";
							if (i % 2 == 0) {
								rowclass = "even hangb";
							}
							list += '<li onclick="autotrust(this,\'sell\',0,1,' + data['depth']['sell'][i][2] + ',' + data['depth']['sell'][i][3] + ')" class="orderline ' + rowclass + '"><span data-id= "price" class= "price right-align" >  ' + data['depth']['sell'][i][0] + '</span><span data-id= "volume" class= "volume right-align"  >' + data['depth']['sell'][i][1] + '</span><span data-id= "total" class= "right-align total" >' + (data['depth']['sell'][i][0] * data['depth']['sell'][i][1]).toFixed(6) + '</span><span data-id= "rect" class= "right-align rect down orange" style="width: 0px;"></span></li>';
						}
	
					}
					$("#ul-ask-list").html(list);
					list = '';
					if (data['depth']['buy']) {
						for (i = 0; i < data['depth']['buy'].length; i++) {
	
							var rowclass = "odd hanga";
							if (i % 2 == 0) {
								rowclass = "even hangb";
							}
							list += '<li onclick="autotrust(this,\'buy\',0)" class="orderline ' + rowclass + '"><span data-id= "price" class= "price right-align" >  ' + data['depth']['buy'][i][0] + '</span><span data-id= "volume" class= "volume right-align"  >' + data['depth']['buy'][i][1] + '</span><span data-id= "total" class= "right-align total" >' + (data['depth']['buy'][i][0] * data['depth']['buy'][i][1]).toFixed(6) + '</span><span data-id= "rect" class= "right-align rect down orange" style="width: 0px;"></span></li>';
						}
					}
					$("#ul-bid-list").html(list);
				}
	
			}
		});
		clearInterval(getDepth_tlme);
	
		// var wait = second = 5;
		// getDepth_tlme=setInterval(function(){
		//   wait--;
		//   if(wait<0){
		//     clearInterval(getDepth_tlme);
		//     getDepth();
		//     wait=second;
		//   }
		// },1000);
		// }
	}
	
	function getEntrustAndUsercoin() {
	
		$.getJSON("/Ajax/getEntrustAndUsercoin?market=" + market + "&t=" + Math.random(), function(data) {
			if (data) {
				if (data['entrust']) {
					$('#divMyEntrust').show();
					var list = '';
					var cont = data['entrust'].length;
					for (i = 0; i < data['entrust'].length; i++) {
						if (data['entrust'][i]['type'] == 1) {
							var rowclass = "odd hanga";
							if (i % 2 == 0) {
								rowclass = "even hangb";
							}
							if (market == 'sgc_cny') {
	
								list+='<li data-id="list-item" class="number down" '+ rowclass +'"  onclick="autotrust(this,\'buy\',2)"><span class="right-align" id="tlist-date">' + data['entrust'][i]['addtime'] + '</span><span class="right-align" id="my-type"><?php echo L('trade_buy_o');?></span><span class="right-align">' + data['entrust'][i]['price'] + '</span><span class="right-align">' + data['entrust'][i]['num'] + '</span><span class="right-align">' + data['entrust'][i]['deal'] + '</span><span class="right-align">' + (data['entrust'][i]['price'] * data['entrust'][i]['num']).toFixed(6) + '</span><span class="right-align"><a style="color: #2674FF;" class="cancelaa" id="' + data['entrust'][i]['id'] + '" href="/Finance/mywt/type/0/status/0/market/sgc_cny.html"><?php echo L('trade_Entrust_management');?></a></span></li>';
	
							
							} else {
								list+='<li data-id="list-item" class="number down" '+ rowclass +'"  onclick="autotrust(this,\'buy\',2)"><span class="right-align" id="tlist-date">' + data['entrust'][i]['addtime'] + '</span><span class="right-align" id="my-type"><?php echo L('trade_buy_o');?></span><span class="right-align">' + data['entrust'][i]['price'] + '</span><span class="right-align">' + data['entrust'][i]['num'] + '</span><span class="right-align">' + data['entrust'][i]['deal'] + '</span><span class="right-align">' + (data['entrust'][i]['price'] * data['entrust'][i]['num']).toFixed(6) + '</span><span class="right-align"><a style="color: #2674FF;" class="cancelaa" id="' + data['entrust'][i]['id'] + '" onclick="cancelaa(\'' + data['entrust'][i]['id'] + '\')" href="javascript:void(0);">撤销</a></span></li>';
							}
	
						} else {
	
							if (market == 'sgc_cny') {
	
								list+='<li data-id="list-item" class="number down" '+ rowclass +'"  onclick="autotrust(this,\'sell\',2)"><span class="right-align" id="tlist-date">' + data['entrust'][i]['addtime'] + '</span><span class="right-align" id="my-type"><?php echo L('trade_sell_o');?></span><span class="right-align">' + data['entrust'][i]['price'] + '</span><span class="right-align">' + data['entrust'][i]['num'] + '</span><span class="right-align">' + data['entrust'][i]['deal'] + '</span><span class="right-align">' + (data['entrust'][i]['price'] * data['entrust'][i]['num']).toFixed(6) + '</span><span class="right-align"><a style="color: #2674FF;" class="cancelaa" id="' + data['entrust'][i]['id'] + '" href="/Finance/mywt/type/0/status/0/market/sgc_cny.html"><?php echo L('trade_Entrust_management');?></a></span></li>';
	
							} else {
								list+='<li data-id="list-item" class="number down" '+ rowclass +'"  onclick="autotrust(this,\'sell\',2)"><span class="right-align" id="tlist-date">' + data['entrust'][i]['addtime'] + '</span><span class="right-align" id="my-type"><?php echo L('trade_sell_o');?></span><span class="right-align">' + data['entrust'][i]['price'] + '</span><span class="right-align">' + data['entrust'][i]['num'] + '</span><span class="right-align">' + data['entrust'][i]['deal'] + '</span><span class="right-align">' + (data['entrust'][i]['price'] * data['entrust'][i]['num']).toFixed(6) + '</span><span class="right-align"><a style="color: #2674FF;" class="cancelaa" id="' + data['entrust'][i]['id'] + '" onclick="cancelaa(\'' + data['entrust'][i]['id'] + '\')" href="javascript:void(0);">撤销</a></span></li>';
	
							}
	
						}
					}
					if (cont == 10) {
						list += '<tr><td style="text_align:center;" colspan="7"><a href="/Finance/mywt" style="color: #2674FF;">更多委托信息</a>&nbsp;&nbsp;</td></tr>';
					}
					$('#ulMyOrderList').html(list);
				} else {
					$('#divMyEntrust').hide();
				}
	
	
				if (data['entrust1']) {
					$('#divOtherUsersSell').show();
					var list1 = '';
					var cont1 = data['entrust1'].length; 
					for (i = 0; i < data['entrust1'].length; i++) {
						var rowclass = "odd hanga";
							if (i % 2 == 0) {
								rowclass = "even hangb";
							}
	
						if (data['entrust1'][i]['type'] == 1) {
	
							list1+='<li data-id="list-item" class="number down '+ rowclass +'"  onclick="autotrust(this,\'buy\',2)"><span class="right-align" style="width:15%;" >' + data['entrust1'][i]['addtime'] + '</span><span class="right-align" ><?php echo L('trade_buy_o');?></span><span class="right-align">' + data['entrust1'][i]['price'] + '</span><span class="right-align"  >' + data['entrust1'][i]['num'] + '</span><span class="right-align" >' + data['entrust1'][i]['deal'] + '</span><span class="right-align" style="width:25%;">' + (data['entrust1'][i]['price'] * data['entrust1'][i]['num']).toFixed(6) + '</span><span class="right-align" style="padding-right:15px;"><a style="color: #2674FF;" class="cancelaa" id="' + data['entrust1'][i]['id'] + '" onclick="ofcbuy(\'' + data['entrust1'][i]['id'] + '\',\'' + data['entrust1'][i]['userid'] + '\')" href="javascript:void(0);"><?php echo L('trade_Buy_In');?></a></span></li>';
						} else {
							
							list1+='<li data-id="list-item" class="number down '+ rowclass +'"  onclick="autotrust(this,\'sell\',2)"><span class="right-align" style="width:15%;">' + data['entrust1'][i]['addtime'] + '</span><span class="right-align"><?php echo L('trade_sell_o');?></span><span class="right-align" >' + data['entrust1'][i]['price'] + '</span><span class="right-align" >' + data['entrust1'][i]['num'] + '</span><span class="right-align" >' + data['entrust1'][i]['deal'] + '</span><span class="right-align" style="width:25%;">' + (data['entrust1'][i]['price'] * data['entrust1'][i]['num']).toFixed(6) + '</span><span class="right-align" style="padding-right:15px;"><a style="color: #2674FF;" class="cancelaa" id="' + data['entrust1'][i]['id'] + '" onclick="ofcbuy(\'' + data['entrust1'][i]['id'] + '\',\'' + data['entrust1'][i]['userid'] + '\')" href="javascript:void(0);"><?php echo L('trade_Buy_In');?></a></span></li>';
						}
					}
					if (cont1 == 10) {
						list1 += '<tr><td style="text_align:center;" colspan="7"><a href="/Finance/mywt" style="color: #2674FF;">更多卖单信息</a>&nbsp;&nbsp;</td></tr>';
					}
					$('#my-fund-list').html(list1);
				} else {
					$('#divOtherUsersSell').hide();
				}
	
	
	
				if (data['usercoin']) {
					if (data['usercoin']['cny']) {
						$("#my_rmb").html(data['usercoin']['cny']);
					} else {
						$("#my_rmb").html('0.00');
					}
	
					if (data['usercoin']['cnyd']) {
						$("#my_rmbd").html(data['usercoin']['cnyd']);
					} else {
						$("#my_rmbd").html('0.00');
					}
	
					if (data['usercoin']['xnb']) {
						$("#my_xnb").html(data['usercoin']['xnb']);
					} else {
						$("#my_xnb").html('0.00');
					}
	
					if (data['usercoin']['xnbd']) {
						$("#my_xnbd").html(data['usercoin']['xnbd']);
					} else {
						$("#my_xnbd").html('0.00');
					}
				}
	
			}
		});
		$.getJSON("/Ajax/allfinance?t=" + Math.random(), function(data) {
	
			$('#user_finance').html(data);
		});
	
	
		//setTimeout('getEntrustAndUsercoin()', 5000);
	}
	
	
	
	$(function() {
		
		getTradelog();
		getDepth();
		if (userid > 0) {
			getEntrustAndUsercoin();
			if (market == 'sgc_cny') {
				$('#entrust_over1').show();
			} else {
				$('#entrust_over1').hide();
			}
		} else {
			$('#divMyOrderSection').hide();
			$('#entrust_over1').hide();
		}
	});
	
	
	function toNum(num, round) {
		return Math.round(num * Math.pow(10, round) - 1) / Math.pow(10, round);
	}
	
	var au_id = 0;
	var au_userid = 0;
	// 自动填价格
	function autotrust(_this, type, cq,cn=-1,id=-1,userid=-1) {
	
	
		if (type == 'sell') {
			$('#buy_price').val($(_this).children().eq(cq).html()).css({ 'color': '#333', 'font_size': '14px' });
			if(cn>-1){
				$('#buy_num').val($(_this).children().eq(cn).html()).css({ 'color': '#333', 'font_size': '14px' });
			}
			if (id>-1) {
				au_id=id;
				au_userid=userid;
			}
			if ($("#my_rmb").html() > 0) {
				$("#buy_max").html(toNum(($("#my_rmb").html() / $('#buy_price').val()), market_round_num));
			}
			if ($('#buy_num').val()) {
				$("#buy_mum").html(($('#buy_num').val() * $('#buy_price').val()).toFixed(8) * 1);
			}
	
		}
		if (type == 'buy') {
			$('#sell_price').val($(_this).children().eq(cq).html()).css({ 'color': '#333', 'fontSize': '14px' });
			if ($("#my_xnb").html() > 0) {
				$("#sell_max").html($("#my_xnb").html());
			}
			if ($('#sell_num').val()) {
				$("#sell_mum").html(($('#sell_num').val() * $('#sell_price').val()).toFixed(8) * 1);
			}
		}
	
	}
	
	
	
	
	
	
	
	$('#buy_price,#buy_num,#sell_price,#sell_num').css("ime-mode", "disabled").bind('keyup change', function() {
		var buyprice = parseFloat($('#buy_price').val());
		var buynum = parseFloat($('#buy_num').val());
		var sellprice = parseFloat($('#sell_price').val());
		var sellnum = parseFloat($('#sell_num').val());
		var buymum = buyprice * buynum;
		var sellmum = sellprice * sellnum;
		var myrmb = $("#my_rmb").html();
		var myxnb = $("#my_xnb").html();
		var buykenum = 0;
		var sellkenum = 0;
		if (myrmb > 0) {
			buykenum = myrmb / buyprice;
		}
		if (myxnb > 0) {
			sellkenum = myxnb;
		}
		if (buyprice != null && buyprice.toString().split(".") != null && buyprice.toString().split(".")[1] != null) {
			if (buyprice.toString().split('.')[1].length > market_round) {
				$('#buy_price').val(buyprice.toFixed(market_round));
			}
		}
		if (buynum != null && buynum.toString().split(".") != null && buynum.toString().split(".")[1] != null) {
			if (buynum.toString().split('.')[1].length > market_round_num) {
				$('#buy_num').val(toNum(buynum, market_round_num));
			}
		}
		if (sellprice != null && sellprice.toString().split(".") != null && sellprice.toString().split(".")[1] != null) {
			if (sellprice.toString().split('.')[1].length > market_round) {
				$('#sell_price').val(sellprice.toFixed(market_round));
			}
		}
		if (sellnum != null && sellnum.toString().split(".") != null && sellnum.toString().split(".")[1] != null) {
			if (sellnum.toString().split('.')[1].length > market_round_num) {
				$('#sell_num').val(toNum(sellnum, market_round_num));
			}
		}
		if (buymum != null && buymum > 0) {
			$('#buy_mum').html(buymum.toFixed(8) * 1);
		}
		if (sellmum != null && sellmum > 0) {
			$('#sell_mum').html(sellmum.toFixed(8) * 1);
		}
		if (buykenum != null && buykenum > 0 && buykenum != 'Infinity') {
			$('#buy_max').html(toNum(buykenum, market_round_num));
		}
		if (sellkenum != null && sellkenum > 0 && sellkenum != 'Infinity') {
			$('#sell_max').html(sellkenum);
		}
	}).bind("paste", function() {
		return false;
	}).bind("blur", function() {
		if (this.value.slice(-1) == ".") {
			this.value = this.value.slice(0, this.value.length - 1);
		}
	}).bind("keypress", function(e) {
		var code = (e.keyCode ? e.keyCode : e.which); //兼容火狐 IE 
		if (this.value.indexOf(".") == -1) {
			return (code >= 48 && code <= 57) || (code == 46);
		} else {
			return code >= 48 && code <= 57
		}
	});
	</script>
	<script>
	function getJsonTop() {
		$.getJSON("/Ajax/getJsonTop?market=<?php echo ($market); ?>&t=" + Math.random(), function(data) {
			console.log('data222>>>>>>>>>>>>>>>>>',data);
			if (data) {
				if (data['info']['new_price']) {
					$('#market_new_price').removeClass('buy');
					$('#market_new_price').removeClass('sell');
					if ($("#market_new_price").html() > data['info']['new_price']) {
						$('#market_new_price').addClass('sell');
					}
					if ($("#market_new_price").html() < data['info']['new_price']) {
						$('#market_new_price').addClass('buy');
					}
					$("#market_new_price").html(data['info']['new_price']);
				}
				if (data['info']['buy_price']) {
					$('#market_buy_price').removeClass('buy');
					$('#market_buy_price').removeClass('sell');
					if ($("#market_buy_price").html() > data['info']['buy_price']) {
						$('#market_buy_price').addClass('sell');
					}
					if ($("#market_buy_price").html() < data['info']['buy_price']) {
						$('#market_buy_price').addClass('buy');
					}
					$("#market_buy_price").html(data['info']['buy_price']);
					$("#sell_best_price").html('￥' + data['info']['buy_price']);
				}
				if (data['info']['sell_price']) {
					$('#market_sell_price').removeClass('buy');
					$('#market_sell_price').removeClass('sell');
					if ($("#market_sell_price").html() > data['info']['sell_price']) {
						$('#market_sell_price').addClass('sell');
					}
					if ($("#market_sell_price").html() < data['info']['sell_price']) {
						$('#market_sell_price').addClass('buy');
					}
					$("#market_sell_price").html(data['info']['sell_price'] + '￥');
					$("#buy_best_price").html('￥' + data['info']['sell_price']);
				}
				if (data['info']['max_price']) {
					$("#market_max_price").html(data['info']['max_price']);
				}
				if (data['info']['min_price']) {
					$("#market_min_price").html(data['info']['min_price']);
				}
				if (data['info']['volume']) {
					if (data['info']['volume'] > 10000) {
						data['info']['volume'] = (data['info']['volume'] / 10000).toFixed(2) + "<?php echo L('thousand');?>"
					}
					if (data['info']['volume'] > 100000000) {
						data['info']['volume'] = (data['info']['volume'] / 100000000).toFixed(2) + "<?php echo L('billion');?>"
					}
					$("#market_volume").html(data['info']['volume']);
				}
				if (data['info']['change']) {
					$('#market_change').removeClass('buy');
					$('#market_change').removeClass('sell');
					if (data['info']['change'] > 0) {
						$('#market_change').addClass('buy');
					} else {
						$('#market_change').addClass('sell');
					}
					$("#market_change").html(data['info']['change'] + "%");
				}
	
	
				if (data['list']) {
					var list = '';
					for (var i in data['list']) {
						if (data['list'][i]['name'] != 'doge_cny' && data['list'][i]['name'] != 'ybc_cny') {
							list += '<li><a href="/Trade/index/market/' + data['list'][i]['name'] + '"> <img src="/Upload/coin/' + data['list'][i]['img'] + '" style="width: 40px; float: left; margin-right: 5px;"> <span class="all_coin_name"><p>' + data['list'][i]['title'] + '</p> <span id="all_coin_' + data['list'][i]['name'] + '">' + data['list'][i]['new_price'] + '</span></span></a></li>';
						}
					}
					$("#all_coin").html(list);
				}
	
	
			}
		});
		setTimeout('getJsonTop()', 5000);
	}
	$(function() {
		
		
		getJsonTop();
		$('.all_coin_price').hover(function() {
			$('.all_coin_list').show()
		}, function() {
			$('.all_coin_list').hide()
		});
	});
	</script>



<!-- end -->




 </body>
</html>