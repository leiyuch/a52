<?php if (!defined('THINK_PATH')) exit();?>﻿

	<style type="text/css">
.state-overview {
    color: #fff;
    padding: 20px;
}
.state-overview h1.sbold,
.state-overview p.sbold {
    float: left;
}
.state-overview p {
    float: left;
    width: 100%;
}
.state-overview .purple {
    background: #a979d1;
    color: #fff;
}
.state-overview .orange {
    background: #E67D21;
    color: #fff;
}
.state-overview .blue {
    background: #55ACEF;
    color: #fff;
}
.state-overview .blue {
    background: #55ACEF;
    color: #fff;
}
.state-overview .green {
    background: #15A087;
    color: #fff;
}
.state-overview .symbol {
    width: 30%;
    padding: 50px 15px;
}
.state-overview .symbol,
.state-overview .value {
    display: inline-block;
    text-align: center;
}
.state-overview .symbol i {
    font-size: 25px;
}
.fa-send:before,
.fa-paper-plane:before {
    content: "\f1d8";
}
.state-overview .value.white {
    border-color: rgba(255, 255, 255, .2);
    text-align: left;
}
.state-overview .value {
    width: 68%;
    margin-top: 30px;
    border-left: 1px solid;
    padding-left: 10%;
}
.state-overview .value {
    float: right;
    text-align: left;
}
.state-overview .symbol,
.state-overview .value {
    display: inline-block;
    text-align: center;
}
.state-overview .value h1 {
    font-weight: 300;
}
.state-overview .value h1,
.state-overview .value p {
    margin: 0;
    padding: 0;
}
.state-overview .value h1,
.state-overview .value p {
    margin: 0;
    padding-bottom: 15px;
}
.bg-blue {
    background-color: #389af0;
}
.info-box {
	border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    min-height: 100px;
    background: #fff;
    width: 100%;
    box-shadow: 0 5px 20px rgba(0, 0, 0, .1);
    -webkit-box-shadow: 0 5px 20px rgba(0, 0, 0, .1);
    margin-bottom: 20px;
    padding: 15px;
}
.info-box small {
    font-size: 14px;
}
.info-box .progress {
    background: rgba(0, 0, 0, .2);
    margin: 5px -10px 5px 0;
    height: 2px;
}
.info-box .progress, .info-box .progress .progress-bar {
    border-radius: 0;
}
.info-box .progress .progress-bar {
    background: #fff;
}
.info-box-icon {
    float: left;
    height: 70px;
    width: 70px;
    text-align: center;
    font-size: 30px;
    line-height: 74px;
    background: rgba(0, 0, 0, .2);
    border-radius: 100%}
.info-box-icon.push-bottom {
    margin-top: 20px;
}
.info-box-icon>img {
    max-width: 100%}
.info-box-content {
    padding: 10px 10px 10px 0;
    margin-left: 90px;
}
.info-box-number {
    font-weight: 300;
    font-size: 21px;
}
.info-box-text, .progress-description {
    display: block;
    font-size: 16px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

    font-weight: 400;
}
.progress-description {
    margin: 0;
}
.bg-blue {
    background: #3598dc;
}
.bg-orange {
    background: #E67D21;
}
.bg-purple {
    background: #8E44AD;
}
.bg-success {
    background: #5FC29D;
}
.progress{
	width: 150px;
}
/********************************************************************							
*********************************************************************/
	</style>
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
		
		<section class="box-content">
			
			    <style>
			            .nav-tab-list .nav-tab-hover {
			                width: 100%;
			                top: 60px;
			                height: 50px;
			                line-height: 50px;
			                background: #EAEDF4;
			                position: absolute;
			                box-sizing: content-box;
			                z-index: 1;
			                transition: all 0.5s;
			                -webkit-transition: all 0.5s;
			                display: none;
			            }
			    </style>
			    <div class="main-content clearfix">
				    <div class="now"> 
					    <i class="fa fa-home fa-lg move mr5"></i>
					    <a href="/" class="movesay"><?php echo L('home');?></a> &gt; 
					    <a href="<?php echo U('Finance/index');?>" class="movesay"><?php echo L('finance_center');?></a> &gt;<?php echo L('finance_my_property');?>
				    </div>
					﻿

				     
				    <div class="left-nav-bar" id="left-nav-bar"> 
				     <div class="left-nav-slider"> 

				      <dl class="nav-tab-list"> 
				       <dt> 
				        <a href="<?php echo U('Finance/index');?>"><i class="fa fa-support mr10"></i><?php echo L('finance_center');?></a> 
				       </dt> 
				      </dl> 
				      <div  class="sidebar">
						  <ul class="sidebar-menu">
						    <li class="treeview">
							    <a href="#">
							      <i class="fa fa-dashboard"></i> <span><?php echo L('finance_wealth_center');?></span> <i class="fa fa-angle-right pull-right"></i>
							    </a>
							    <ul class="treeview-menu">
							       <li><a href="<?php echo U('Finance/index');?>"><i class="fa fa-circle-o"></i><?php echo L('finance_wealth_center');?></a></li>
							      <li><a href="<?php echo U('Finance/myzr');?>"><i class="fa fa-circle-o"></i> <?php echo L('finance_i_want_to_receive');?></a></li>
							      <li><a href="<?php echo U('Finance/myzc');?>"><i class="fa fa-circle-o"></i> <?php echo L('finance_i_want_to_send_it');?></a></li>
							    </ul>
						    </li>
						    <li class="treeview">
							    <a href="#">
							      <i class="fa fa-pie-chart"></i>
							      <span><?php echo L('finance_wealth_bill');?></span>
							      <i class="fa fa-angle-right pull-right"></i>
							    </a>
							    <ul class="treeview-menu">
							      <li><a href="<?php echo U('Finance/mywt');?>"><i class="fa fa-circle-o"></i>  <?php echo L('finance_entrustment_management');?></a></li>
							      <li><a href="<?php echo U('Finance/mycj');?>"><i class="fa fa-circle-o"></i> <?php echo L('finance_deal_query');?></a></li>
							    </ul>
						    </li>
						    <li class="treeview">
							    <a href="#">
							      <i class="fa fa-laptop"></i>
							      <span><?php echo L('finance_i_want_to_share');?></span>
							      <i class="fa fa-angle-right pull-right"></i>
							    </a>
							    <ul class="treeview-menu">
							      <li><a href="<?php echo U('Finance/mytj');?>"><i class="fa fa-circle-o"></i> <?php echo L('finance_share');?></a></li>
							      <li><a href="<?php echo U('Finance/mywd');?>"><i class="fa fa-circle-o"></i> <?php echo L('finance_my_share');?></a></li>
							    </ul>
						    </li>				    
						  </ul>
					  </div>  
				     </div> 
				    </div> 			   

				    <div class="tag-list-content assets_content bg_w">
				    	<div class="right_mcontent myacc-con">
					      <div class="fund-left">
					        <div class="m_title" id="myuserid"> <?php echo L('finance_my_account_id');?>：<b><?php echo (session('userId')); ?></b> </div>
					        <div class="tier-info funds-p-tier" id="tierMenu">
					          <ul>
									<li> <b><?php echo L('finance_current_credit_value');?>：</b> <span><strong><?php echo ($integral); ?></strong></span> </li>
					            <!-- <li> <b>当前交易费折扣：</b> <span><strong>无</strong></span> </li>
					            <li> <b>最近30天交易量：</b> <strong>0.0</strong> BTC 或 <strong>0</strong> CNY </li>
					            <li> <b>升级进度：</b> <span><strong>0.0%</strong></span> </li>
					            <li id="fprogrLi">
					              <div id="fproBar" style="width: 0%;"></div>
					            </li>
					            <li>　</li> -->
					            
					          </ul>
					        </div>
					      </div>
					      <!-- <div class="fund-right">
					        <div class="m_title"> 我的账户资金 </div>
					        <div class="f-d-info funds-p-tier">
					          <ul>
					            <li id="crFund">当前资金总估：
					              <div><span>0.00 星瀚链</span> 或 <span>0.00 美元</span> 或 <span>0.00000 人民币</span></div>
					            </li>
					            <li class="fund-tips">小注1：持有价值是由历史行情估算值，仅为用户提供一个参考，请以单项资金为准</li>
					          </ul>
					        </div>
					      </div> -->
					      <div class="sectioncont funds-dtl">
								<div class="m_title">
										<?php echo L('finance');?>
									</div>
									<table class="dataTable sf-grid all-funds-table" cellspacing="0" cellpadding="0">
										<thead>
											<tr role="row" style="height:40px">
												<td align="right"><b><?php echo L('finance_currency');?></b></td>
												<td align="right"><b><?php echo L('finance_balance');?></b></td>
												<td align="right">
													<!-- <a href="/myaccount/myorders"> -->
														<b><?php echo L('finance_freeze_commission');?></b>
													<!-- </a> -->
												</td>
												<td align="right"><b><?php echo L('finance_total');?></b></td>
												<td align="right"><b><?php echo L('finance_equivalent');?> (￥)</b></td>
												<td align="right"><b><?php echo L('operate');?></b></td>
											</tr>
										</thead>
					
										<tbody role="alert" aria-live="polite" aria-relevant="all">
					
											<?php if(is_array($coinList)): $i = 0; $__LIST__ = $coinList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="odd hanga" data-id="zero" style="">
													<td align="right"><font color="#08a287"><b><?php echo ($vo['title']); ?></b> <!--¥<?php echo (NumToStr($vo['jia'])); ?>--></font></td>
													<td align="right"><?php echo (NumToStr($vo['xnb'])); ?></td>
													<td align="right"><?php echo (NumToStr($vo['xnbd'])); ?></td>
													<td align="right"><?php echo (NumToStr($vo['xnbz'])); ?></td>
													<td align="right"><?php echo (NumToStr($vo['zhehe'])); ?></td>
					
													<td align="right">
														<input type="button" value="<?php echo L('go_trade');?>"  class="normal-depo fund-to-trade" onclick="top.location='/trade/index/market/<?php echo ($vo["name"]); ?>_cny'" />
													</td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>

											
										</tbody>
									</table>
					        <!-- <div class="m_title"> 资金(我的在线钱包): </div>
					        <div class="HideZeroDiv">
					          <label for="hidezero">
					          <input type="checkbox" id="hidezero" name="hidezero" style="width: 20px;">
					          <label for="hidezero" class="vr-btn"></label>
					          <span class="hidezero-span">只显示有资金币种（隐藏0资金币种）</span>
					          </label>
					        </div>
					        <table class="dataTable sf-grid all-funds-table" cellspacing="0" cellpadding="0">
					          <thead>
					            <tr role="row" style="height:40px">
					              <td align="right"><b>类型</b></td>
					              <td align="right"><b>可用余额</b></td>
					              <td align="right"><a href="/myaccount/myorders"><b>挂单金额</b></a></td>
					              <td align="right"><b>总计</b></td>
					              <td align="right"><b>估算为人民币</b></td>
					              <td align="right"><b>操作</b></td>
					            </tr>
					          </thead>
					          <tbody role="alert" aria-live="polite" aria-relevant="all">
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#08a287"><b>CNY</b> 人民币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/CNY" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/CNY" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/btc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="red"><b>BTC</b> 比特币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/BTC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/BTC" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/btc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="blue"><b>LTC</b> 莱特币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/LTC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/LTC" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/ltc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="red"><b>ETH</b> 以太币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/ETH" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/ETH" class="warn-depo fund-withdraw" title="提现缓慢，排队中">提缓慢</a> &nbsp;&nbsp; <a href="/trade/eth_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="green"><b>BCC</b> BCC</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/BCC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/BCC" class="warn-depo fund-withdraw" title="提现缓慢，排队中">提缓慢</a> &nbsp;&nbsp; <a href="/trade/bcc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#0080FF"><b>ZEC</b> ZCash</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/ZEC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/ZEC" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/zec_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#0080C0"><b>DPY</b> 天算</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/DPY" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/DPY" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/dpy_usd" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#f442d9"><b>TNT</b> Tierion </font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/TNT" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/TNT" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/tnt_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#0080FF"><b>LLT</b> 流量币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/LLT" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/LLT" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/llt_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#043859"><b>LRC</b> 路印</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/LRC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/LRC" class="warn-depo fund-withdraw" title="提现缓慢，排队中">提缓慢</a> &nbsp;&nbsp; <a href="/trade/lrc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#0080FF"><b>DNT</b> district0x</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/DNT" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/DNT" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/dnt_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#1B1363"><b>ZRX</b> 0x项目</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/ZRX" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/ZRX" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/zrx_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#0080FF"><b>DOC</b> 域链</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/DOC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/DOC" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/doc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#FFF8000"><b>PST</b> Primas</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/PST" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/PST" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/pst_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#043859"><b>OAX</b> ANX</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/OAX" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/OAX" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/oax_btc" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#0080FF"><b>STORJ</b> Storj</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/STORJ" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/STORJ" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/storj_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="green"><b>CVC</b> Civic</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/CVC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/CVC" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/cvc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="blue"><b>OMG</b> OmiseGo</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/OMG" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/OMG" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/omg_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#000000"><b>PAY</b> TenX</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/PAY" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/PAY" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/pay_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#043859"><b>EOS</b> EOS</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/EOS" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/EOS" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/eos_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#0080FF"><b>SNT</b> Status</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/SNT" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/SNT" class="warn-depo fund-withdraw" title="提现缓慢，排队中">提缓慢</a> &nbsp;&nbsp; <a href="/trade/snt_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#800080"><b>BAT</b> 注意力币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/BAT" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/BAT" class="warn-depo fund-withdraw" title="提现缓慢，排队中">提缓慢</a> &nbsp;&nbsp; <a href="/trade/bat_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#0080C0"><b>UBC</b> 优Wifi</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/UBC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/UBC" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/ubc_btc" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#FFAA00"><b>ICO</b> 爱科币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/ICO" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/ICO" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/ico_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#1B1363"><b>BTM</b> 比原链</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/BTM" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/BTM" class="warn-depo fund-withdraw" title="提现缓慢，排队中">提缓慢</a> &nbsp;&nbsp; <a href="/trade/btm_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#0080C0"><b>XRP</b> 瑞波币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/XRP" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/XRP" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/xrp_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#FF6600"><b>NXT</b> 未来币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/NXT" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/NXT" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/nxt_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="green"><b>ETC</b> 以太经典</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/ETC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/ETC" class="warn-depo fund-withdraw" title="提现缓慢，排队中">提缓慢</a> &nbsp;&nbsp; <a href="/trade/etc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#0080FF"><b>QTUM</b> 量子链</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/QTUM" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/QTUM" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/qtum_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#FF6600"><b>ETP</b> 熵</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/ETP" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/ETP" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/etp_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#800080"><b>REP</b> Augur</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/REP" class="err-depo fund-deposit" title="充值暂停，钱包维护中">充暂停</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/REP" class="err-depo fund-withdraw" title="提现暂停，钱包维护中">提暂停</a> &nbsp;&nbsp; <a href="/trade/rep_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#043859"><b>XCP</b> 合约币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/XCP" class="err-depo fund-deposit" title="充值暂停，钱包维护中">充暂停</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/XCP" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/xcp_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#0080FF"><b>BTS</b> 比特股</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/BTS" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/BTS" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/bts_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#FF8000"><b>DOGE</b> 狗狗币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/DOGE" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/DOGE" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/doge_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#000000"><b>CNC</b> 中国币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/CNC" class="err-depo fund-deposit" title="充值暂停，钱包维护中">充暂停</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/CNC" class="warn-depo fund-withdraw" title="提现缓慢，排队中">提缓慢</a> &nbsp;&nbsp; <a href="/trade/cnc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#525252"><b>DASH</b> 达世币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/DASH" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/DASH" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/dash_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#000000"><b>FTC</b> 羽毛币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/FTC" class="err-depo fund-deposit" title="充值暂停，钱包维护中">充暂停</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/FTC" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/ftc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#FFAA00"><b>HKG</b> HackerGold</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/HKG" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/HKG" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/hkg_btc" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#FF6600"><b>IFC</b> 无限币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/IFC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/IFC" class="warn-depo fund-withdraw" title="提现缓慢，排队中">提缓慢</a> &nbsp;&nbsp; <a href="/trade/ifc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#000000"><b>MG</b> 智慧基因</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/MG" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/MG" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/mg_btc" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#0080C0"><b>NMC</b> 域名币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/NMC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/NMC" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/nmc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#000000"><b>PPC</b> 点点币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/PPC" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/PPC" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/ppc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#000000"><b>XEM</b> 新经币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/XEM" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/XEM" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/xem_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#000000"><b>XTC</b> 物联币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/XTC" class="err-depo fund-deposit" title="充值暂停，钱包维护中">充暂停</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/XTC" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/xtc_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#FFF8000"><b>TIPS</b> 帽子币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/TIPS" class="err-depo fund-deposit" title="充值暂停，钱包维护中">充暂停</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/TIPS" class="err-depo fund-withdraw" title="提现暂停，钱包维护中">提暂停</a> &nbsp;&nbsp; <a href="/trade/tips_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#000000"><b>TIX</b> 彩币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/TIX" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/TIX" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/tix_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="green"><b>XCN</b> 氪石币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/XCN" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/XCN" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/xcn_btc" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="even hangb" data-id="zero" style="">
					              <td align="right"><font color="#FF6600"><b>XMR</b> 门罗币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/XMR" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/XMR" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/xmr_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					            <tr class="odd hanga" data-id="zero" style="">
					              <td align="right"><font color="#FF9900"><b>XPM</b> 质数币</font></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/deposit/XPM" class="normal-depo fund-deposit" title="充值正常">充值</a> &nbsp;&nbsp; <a href="/myaccount/withdraw/XPM" class="normal-depo fund-withdraw" title="提现正常">提现</a> &nbsp;&nbsp; <a href="/trade/xpm_cny" class="normal-depo fund-to-trade" title="交易正常">交易</a></td>
					            </tr>
					          </tbody>
					        </table>
					        <br>
					        <b>已经下架币种列表(请提现): </b><br>
					        <table class="sf-grid" style="margin-top:5px">
					          <thead>
					            <tr class="pur-td" role="row" style="height:40px">
					              <td align="left"><b>类型</b></td>
					              <td align="right"><b>可用余额</b></td>
					              <td align="right"><a href="/myaccount/myorders"><b>挂单金额</b></a></td>
					              <td align="right"><b>总计</b></td>
					              <td align="right"><b>估算为人民币</b></td>
					              <td align="right"><b>操作</b></td>
					            </tr>
					          </thead>
					          <tbody>
					            <tr>
					              <td align="left" style="width: 22%"><span class="cionpic"><img style="margin-top:5px;" border="0" src="/images/coin_icon/msc.png"></span> <span style="text-decoration:line-through;"><font color="#1B1363"><b>MSC</b> 万事达币</font></span></td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.000000</td>
					              <td align="right">0.00</td>
					              <td align="right"><a href="/myaccount/withdraw/MSC">提现</a> &nbsp;&nbsp; <a href="/trade/msc_usd">交易</a></td>
					            </tr>
					          </tbody>
					        </table>
					        <br>
					        <br>
					        <br>
					        <div class="m_title"> 待确认充值: </div>
					        <table class="dataTable" cellspacing="0" cellpadding="0">
					          <thead>
					            <tr role="row" style="height:40px">
					              <td align="right" width="15%"><b>类型</b></td>
					              <td align="right" width="50%"><b>充值金额</b></td>
					              <td align="center" width="35%"><b>操作</b></td>
					            </tr>
					          </thead>
					          <tbody role="alert" aria-live="polite" aria-relevant="all">
					          </tbody>
					        </table> -->
					        <!-- <br>
					        <br>
					        <br>
					        <p>当前服务器时间: <b>2017-09-04 21:13:39 UTC+8</b></p> -->
					      </div>
					      <br>
					      <script>          
							$(document).ready(function() {

							    if ($.cookie('show_zero_funds') === undefined || $.cookie('show_zero_funds') === '1') {
							        $('tr[data-id=zero]').show();
							        $('#hidezero').prop('checked', false);
							    } else {
							        $('#hidezero').prop('checked', true);
							    }
							    $('#hidezero').on('click', function(event) {
							        $('tr[data-id=zero]').toggle();
							        if ($('tr[data-id=zero]').is(':visible')) {
							            $.cookie('show_zero_funds', '1');
							        } else {
							            $.cookie('show_zero_funds', '0');
							        }
							    });
							});

							</script>
					      <script src="/js/jquery.cookie.js"></script>
					      <br>
					      <!---->
					      <br>
					    </div> 
				     
				     

				     
				     
				     
				    </div> 
				</div>
				<div class="clearfix"></div>
		</section>
		

		


		

		
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

		<!-- include jQuery -->
		<script src="/Public/Home3/js/admin/jquery.min.js"></script>
		<!-- bootstrap -->
		<script src="/Public/Home3/js/bootstrap.min.js"></script>
		<!-- plugins.js -->
		<script src="/Public/Home3/js/plugins.js"></script>
		<!-- all parallax -->
		<script src="/Public/Home3/js/parlx.js"></script>
		<!-- nice-select -->
		
		<!-- chart js -->
		<script src="/Public/Home3/js/raphael-min.js"></script>
		<script src="/Public/Home3/js/morris.min.js"></script>
		 <!-- dscountdown -->
		<script src="/Public/Home3/js/dscountdown.min.js"></script>
		<!-- custom js -->
		<script src="/Public/Home3/js/custom.js"></script>
		<script src="/Public/Home3/js/sidebar-menu.js"></script>
		<script>
			$.sidebarMenu($('.sidebar-menu'))
		</script>
</body>
</html>