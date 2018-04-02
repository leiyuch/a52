<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	.owl-item{width: 23%;margin-right: 2%;}
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

		<div class="banner parallax" style="background: url('/Public/Home3/images/banner1.jpg');" data-speed="-0.3">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="slider1">
							<h1>Welcome To Eurasia Digital </h1>
							<p>金融的创新往往令人咋舌，不经意间，一个新的世界就自此诞生。在欧亚国际交易平台，参与者可以随时认购或出售，获取增值利润，流通性极强。</p>
							<a href="#" class="cbtn"><span>Go Transaction</span></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
						<div class="token">
							<div class="token-blog">
								<div class="overlay"></div>
								<h2>TOKEN SALE</h2>
								<h3>- ends in -</h3>
							</div>
							<div class="bay-token">
								<div class="end-in">
									<div id="tokenend"></div>
								</div>
							Buy Tokens Now</div>
							<div class="acard">
								<p>We accept BTC, ETH, LTC and other</p>
								<ul class="list-unstyled align-left">
									<li><a href="#"><img src="/Public/Home3/images/paypal.png" alt=""></a></li>
									<li><a href="#"><img src="/Public/Home3/images/mcard.png" alt=""></a></li>
									<li><a href="#"><img src="/Public/Home3/images/visa.png" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="after-div">
				<img src="/Public/Home3/images/bgs1.png" alt="">
			</div>
		</div><!--// banner -->
		<section class="cryptocurrencies">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="h-style1">
							<h2>12 Cryptocurrencies</h2>
							<p class="ffc">Trade the hottest commodities of 2018 : Bitcoin, Ethereum, Litecoin and others.</p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="currencies-all owl-carousel owl-theme owl-loaded owl-drag">
							<div class="owl-item">
								<div class="c-currencies">
									<div class="img-banner">
										<img src="/Public/Home3/images/c1.png" alt="">
										<span class="ico color1"><i class="cc BTC-alt" title="BTC"></i></span>
									</div>
									<div class="about-cripto">
										<h3>Bitcoin</h3>
										<p>$2,411.75 <span> +0% YTD</span></p>
									</div>
									<div class="about-chart">
										<div class="w50">
											<img src="/Public/Home3/images/chart.png" alt="">
										</div>
										<div class="w50 lst">
											<p class="c-headline">+418%</p>
											<p>3M Change</p>
										</div>
									</div>
								</div>
							</div>
							<div class="owl-item">
								<div class="c-currencies">
									<div class="img-banner">
										<img src="/Public/Home3/images/c2.png" alt="">
										<span class="ico color2"><i class="cc XRP-alt" title="XRP"></i></span>
									</div>
									<div class="about-cripto">
										<h3>Ripple</h3>
										<p>$2,411.75 <span> +0% YTD</span></p>
									</div>
									<div class="about-chart">
										<div class="w50">
											<img src="/Public/Home3/images/chart.png" alt="">
										</div>
										<div class="w50 lst">
											<p class="c-headline">+418%</p>
											<p>3M Change</p>
										</div>
									</div>
								</div>
							</div>
							<div class="owl-item">
								<div class="c-currencies">
									<div class="img-banner">
										<img src="/Public/Home3/images/c3.png" alt="">
										<span class="ico color3"><i class="cc LTC-alt" title="LTC"></i></span>
									</div>
									<div class="about-cripto">
										<h3>Litecoin</h3>
										<p>$2,411.75 <span> +0% YTD</span></p>
									</div>
									<div class="about-chart">
										<div class="w50">
											<img src="/Public/Home3/images/chart.png" alt="">
										</div>
										<div class="w50 lst">
											<p class="c-headline">+418%</p>
											<p>3M Change</p>
										</div>
									</div>
								</div>
							</div>
							<div class="owl-item">
								<div class="c-currencies">
									<div class="img-banner">
										<img src="/Public/Home3/images/c4.png" alt="">
										<span class="ico color4"><i class="cc ETC" title="ETC"></i></span>
									</div>
									<div class="about-cripto">
										<h3>Ethereum</h3>
										<p>$2,411.75 <span> +0% YTD</span></p>
									</div>
									<div class="about-chart">
										<div class="w50">
											<img src="/Public/Home3/images/chart.png" alt="">
										</div>
										<div class="w50 lst">
											<p class="c-headline">+418%</p>
											<p>3M Change</p>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section><!-- cryptocurrencies -->
		<section class="how-c-works parallax" style="background: url('/Public/Home3/images/bg1.jpg');" data-speed="-0.3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="h-style2">
							<h2>安全可信赖的国际数字交易平台</h2>
							<p class="ffc">自主选择交易方，跟谁买卖你说的算双向交易，顶级技术专业管理，你的资产很安全</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="work-block">
							<div class="w-icon">
								<div class="ico-holder">
									<span class="flaticon-signal"></span>
								</div>
							</div>
							<h3>区块链+智能合约</h3>
							<p>以区块链和智能合约为基础，在隐私数据的交换过程中，欧亚交易平台承担着信息中转的角色。可以辅助分析交易条件，提供定制智能合约等服务 。</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="work-block">
							<div class="w-icon">
								<div class="ico-holder">	
									<span class="flaticon-brainstorm"></span>
								</div>
							</div>
							<h3>监控链+交易规则</h3>
							<p>欧亚国际数字交易平台是交易规则的制定者，负责参与方的线下身份认证，监控链上的交易行为，更新发布数字资产的智能合约等。</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="work-block">
							<div class="w-icon">
								<div class="ico-holder">
									<span class="flaticon-care"></span>
								</div>
							</div>
							<h3>安全防护+多重认证</h3>
							<p>多重认证审核，账户暴力破解实时深度检测；保障用户资金安全；短信验证码业务分离；减少被钓鱼可能性；建立反应实时、深入行业、专业能力的安全团队。</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="work-block">
							<div class="w-icon">
								<div class="ico-holder">
									<span class="flaticon-technology"></span>
								</div>
							</div>
							<h3>海量分析+实时修复</h3>
							<p>利用大数据态势感知，定期对网站日志等海量数据进行关联分析，精确定位站点问题，挖掘网站漏洞和弱点，修复服务器漏洞，给用户发送安全情报，随时随地应对未知威胁。</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="work-block">
							<div class="w-icon">
								<div class="ico-holder">
									<span class="flaticon-flask"></span>
								</div>
							</div>
							<h3>加密安全+风险控制</h3>
							<p>军用级密码技术的保护，让你可以掌控自己的资金，针对多形式欺诈提供强大保护。多维度、多层防护，通过设置平台、钱包、内控等多层安全防护来控制风险。</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="work-block">
							<div class="w-icon">
								<div class="ico-holder">
									<span class="flaticon-coins"></span>
								</div>
							</div>
							<h3>交易渠道+平台保障</h3>
							<p>创造稳定、畅通的交易渠道，坚持为用户提供安全、便捷的数字资产特色服务。第三方信用平台保障双方数字货币安全。</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="easy-to-learn">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="h-style1">
							<h2>随时随地把握行情</h2>
							<p class="ffc">交易资产随时看，下单操作更安全，订单历史一目了然，安全快捷的全球各国多币种实时交易；</p>
						</div>
						<ul class="list-unstyled align-left">
							<li><a href="#" class="block-style1">
								<span class="ico">
									<i class="flaticon-lock"></i>
								</span>
								<div class="ab-learn">
									<h2>安全可靠</h2>
									<p>冷存储、SSL、多重加密等银行级别安全技术，拥有十年数字领域经验的安全团队</p>
								</div>
							</a></li>
							<li><a href="#" class="block-style1">
								<span class="ico">
									<i class="flaticon-business"></i>
								</span>
								<div class="ab-learn">
									<h2>指尖掌握</h2>
									<p>随时随地查看实时价格，掌握全球市场方向，24小时随时交易，不错过任何盈利机会</p>
								</div>
							</a></li>
							<li><a href="#" class="block-style1">
								<span class="ico">
									<i class="flaticon-hourglass"></i>
								</span>
								<div class="ab-learn">
									<h2>快速买卖</h2>
									<p>CoinCola是一个不涉及第三方的P2P交易平台，交易过程方便快捷</p>
								</div>
							</a></li>
						</ul>
					</div>
					<div class="col-lg-7 col-md-7">
						<div class="img-block">
							<div class="img-holder">
								<img src="/Public/Home3/images/lt.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="simple-step parallax" style="background: url('/Public/Home3/images/bg2.jpg');" data-speed="-0.3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="h-style2">
							<h2>买币流程</h2>
							<p class="ffc">买币顺畅，随时交易</p>
						</div>
					</div>
					<div class="col-lg-12 text-center">
						<div class="steps">
							<div class="step-content">
								<div class="block">
									<div class="ico">
										<i class="flaticon-cloud-computing"></i>
										<span class="box-down"></span>
									</div>
									<div class="numbers">
										<span>1</span>
									</div>
									<p class="instruction ffc">线上/APP下单</p>
								</div>
								<div class="block">
									<div class="ico">
										<i class="flaticon-wallet"></i>
										<span class="box-down"></span>
									</div>
									<div class="numbers">
										<span>2</span>
									</div>
									<p class="instruction ffc">在线交易</p>
								</div>
								<div class="block">
									<div class="ico">
										<i class="flaticon-smartphone"></i>
										<span class="box-down"></span>
									</div>
									<div class="numbers">
										<span>3</span>
									</div>
									<p class="instruction ffc">瞬时到帐</p>
								</div>
								<div class="bar">
									<div class="fill">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="after-div">
				<img src="/Public/Home3/images/bgs1.png" alt="">
			</div>
			<div class="before-div">
				<img src="/Public/Home3/images/bgs2.png" alt="">
			</div>
		</section>
		<section class="broking-package">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="h-style2">
							<h2>Our Broking Package</h2>
							<p class="ffc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non enim luctus, finibus magna sed, iaculis mauris. Fusce at purus ac diam iaculis posuere.</p>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="custome-container">
							<div class="c-colum">
								<div class="price-table">
									<div class="ico">
										<i class="flaticon-business-1"></i>
									</div>
									<div class="basic-price wfp">
										<p class="wfp ffc">Basic</p>
										<h3 class="wfp">$19</h3>
									</div>
									<p class="txt-block wfp">
										80 Positions <br> Max. 15 Selected Coins<br>Running Every 10 Minutes <br>Best Effort Support
									</p>
									<a href="#" class="cbtn"><span>Start Free Trial</span></a>
								</div>
							</div>
							<div class="c-colum">
								<div class="price-table">
									<div class="ico">
										<i class="flaticon-business-1"></i>
									</div>
									<div class="basic-price wfp">
										<p class="wfp ffc">Basic</p>
										<h3 class="wfp">$29</h3>
									</div>
									<p class="txt-block wfp">
										80 Positions <br> Max. 15 Selected Coins<br>Running Every 10 Minutes <br>Best Effort Support
									</p>
									<a href="#" class="cbtn"><span>Start Free Trial</span></a>
								</div>
							</div>
							<div class="c-colum">
								<div class="price-table">
									<div class="ico">
										<i class="flaticon-business-1"></i>
									</div>
									<div class="basic-price wfp">
										<p class="wfp ffc">Basic</p>
										<h3 class="wfp">$39</h3>
									</div>
									<p class="txt-block wfp">
										80 Positions <br> Max. 15 Selected Coins<br>Running Every 10 Minutes <br>Best Effort Support
									</p>
									<a href="#" class="cbtn"><span>Start Free Trial</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="our-expert wfp parallax" style="background: url('/Public/Home3/images/bg4.jpg');" data-speed="-0.3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="h-style2">
							<h2>Our Experts</h2>
							<p class="ffc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non enim luctus, finibus magna sed, iaculis mauris. Fusce at purus ac diam iaculis posuere.</p>
						</div>
					</div>
					<div class="col-lg-12 padding0">
						<div class="experts owl-carousel owl-theme">
							<div class="item">
								<div class="expert">
									<div class="img-holder">
										<img src="/Public/Home3/images/img1.jpg" alt="" class="img-responsive">
										<div class="overlay">
											<ul class="list-unstyled social-m">
												<li>
													<a href="#" class="fb" ><i class="fa fa-facebook"></i></a>
												</li>
												<li>
													<a href="#" class="tw"><i class="fa fa-twitter"></i></a>
												</li>
												<li>
													<a href="#" class="ig"><i class="fa fa-instagram"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="block">
										<h4>William</h4>
										<p>CEO - cryptonic</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="expert">
									<div class="img-holder">
										<img src="/Public/Home3/images/img11.jpg" alt="" class="img-responsive">
										<div class="overlay">
											<ul class="list-unstyled social-m">
												<li>
													<a href="#" class="fb" ><i class="fa fa-facebook"></i></a>
												</li>
												<li>
													<a href="#" class="tw"><i class="fa fa-twitter"></i></a>
												</li>
												<li>
													<a href="#" class="ig"><i class="fa fa-instagram"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="block">
										<h4>James</h4>
										<p>CEO - Cryptonic</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="expert">
									<div class="img-holder">
										<img src="/Public/Home3/images/img12.jpg" alt="" class="img-responsive">
										<div class="overlay">
											<ul class="list-unstyled social-m">
												<li>
													<a href="#" class="fb" ><i class="fa fa-facebook"></i></a>
												</li>
												<li>
													<a href="#" class="tw"><i class="fa fa-twitter"></i></a>
												</li>
												<li>
													<a href="#" class="ig"><i class="fa fa-instagram"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="block">
										<h4>Anthony</h4>
										<p>CEO - Cryptonic</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="expert">
									<div class="img-holder">
										<img src="/Public/Home3/images/img13.jpg" alt="" class="img-responsive">
										<div class="overlay">
											<ul class="list-unstyled social-m">
												<li>
													<a href="#" class="fb" ><i class="fa fa-facebook"></i></a>
												</li>
												<li>
													<a href="#" class="tw"><i class="fa fa-twitter"></i></a>
												</li>
												<li>
													<a href="#" class="ig"><i class="fa fa-instagram"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="block">
										<h4>Jacob</h4>
										<p>CEO - Cryptonic</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="expert">
									<div class="img-holder">
										<img src="/Public/Home3/images/img12.jpg" alt="" class="img-responsive">
										<div class="overlay">
											<ul class="list-unstyled social-m">
												<li>
													<a href="#" class="fb" ><i class="fa fa-facebook"></i></a>
												</li>
												<li>
													<a href="#" class="tw"><i class="fa fa-twitter"></i></a>
												</li>
												<li>
													<a href="#" class="ig"><i class="fa fa-instagram"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="block">
										<h4>Daniel</h4>
										<p>CEO - Cryptonic</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="how-we-help wfp">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5">
						<div class="h-style1">
							<h2>How We Help People</h2>
							<p class="ffc">See our Testimonials</p>
						</div>
						<div class="clearfix"></div>
						<div class="how-help-tab home1">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="c1">
									<p>Lorem ipsum dolor sit amet, consectetu adipiscing elit Maecenas lacinia, odioety scelerisque gravida, elit dolor maximuso risus, vitae tincidunt diam.</p>
								    <h4>Jayden</h4>
								    <p class="position">CEO - Cryptonic</p>
								    <span class="down-triangle"></span>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="c2">
									<p>Lorem ipsum dolor sit amet, consectetu adipiscing elit Maecenas lacinia, odioety scelerisque gravida, elit dolor maximuso risus, vitae tincidunt diam.</p>
								    <h4>Alina</h4>
								    <p class="position">CEO - Cryptonic</p>
								    <span class="down-triangle"></span>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="c3">
									<p>Lorem ipsum dolor sit amet, consectetu adipiscing elit Maecenas lacinia, odioety scelerisque gravida, elit dolor maximuso risus, vitae tincidunt diam.</p>
								    <h4>William</h4>
								    <p class="position">CEO - Cryptonic</p>
								    <span class="down-triangle"></span>
								</div>
							</div>

							<ul id="tabs" class="nav nav-tabs" role="tablist">
								<li class="active">
									<a href="#c1" role="tab" data-toggle="tab">
								        <img src="/Public/Home3/images/img1.jpg" alt="" class="img-responsive">
									</a>
								</li>
								<li>
									<a href="#c2" role="tab" data-toggle="tab">
										<img src="/Public/Home3/images/img2.jpg" alt="" class="img-responsive">
									</a>
								</li>
								<li>
									<a href="#c3" role="tab" data-toggle="tab">
										<img src="/Public/Home3/images/img3.jpg" alt="" class="img-responsive">
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-7">
						<div class="img-block">
							<div class="img-holder">
								<img src="/Public/Home3/images/img5.png" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="cc-calculator wfp parallax" style="background: url('/Public/Home3/images/newbg1.jpg');" data-speed="-0.3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="h-style2">
							<h2>服务于未来的“加密数字经济社会”</h2>
							<p class="ffc">数字经济社会 = 数字资产 + 数字身份 + 数字社交</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 text-center">
						<div class="token">
							<div class="token-blog">
								<div class="overlay"></div>
								<h2>端对端加密</h2>
							</div>
							<div class="calculator-block">
								<p>通过密码学等技术实现端对端消息的加密通讯， 很好的保护客户通讯信息的隐私性和防窃取性，使我们的用户可以在安全的网络通讯环境下进行交流。</p>
								<!-- <div class="form-group">
									<input type="text" placeholder="2" class="form-control">
								</div>
								<div class="form-group coins">
							        <select class="">
							          <option value="" selected>BTC</option>
							          <option value="1">LTC</option>
							          <option value="2">NMC</option>
							          <option value="3">SwiftCoin</option>
							        </select>
							    </div>
								<div class="form-group">
									<input type="text" placeholder="109205" class="form-control">
								</div>
								<div class="form-group convert-to">
									<select class="">
										<option value="">RMB</option>
										<option value="1">INR</option>
										<option value="2">USD</option>
									</select>
								</div> -->
								<a href="#" class="cbtn"><span>Go Trade</span></a>
							</div>
						</div>
					</div>
					
  
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="img-block">
							<div class="img-holder">
								<img src="/Public/Home3/images/coin.png" alt="" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="after-div">
				<img src="/Public/Home3/images/bgs1.png" alt="">
			</div>
			<div class="before-div">
				<img src="/Public/Home3/images/bgs2.png" alt="">
			</div>
		</section>
		<section class="partners-and-request wfp">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="partners">
							<div class="h-style1">
								<h2>合作伙伴</h2>
								<p class="ffc">优质的国际合作伙伴，为您提供全球服务 -</p>
							</div>
							<div class="partners-logo">
								<img src="/Public/Home3/images/p1.png" alt="" class="img-responsive">
							</div>
							<div class="partners-logo">
								<img src="/Public/Home3/images/p2.png" alt="" class="img-responsive">
							</div>
							<div class="partners-logo">
								<img src="/Public/Home3/images/p3.png" alt="" class="img-responsive">
							</div>
							<div class="partners-logo">
								<img src="/Public/Home3/images/p4.png" alt="" class="img-responsive">
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="request-form wfp">
							<div class="h-style1">
								<h2>Send Your Request!</h2>
								<p class="ffc">Contact Us -</p>
							</div>
							<div class="form-block">
								<form>
									<div class="form-group">
										<i class="fa fa-user"></i>
										<input type="text" value="" placeholder="Your Name" class="form-control">
									</div>
									<div class="form-group">
										<i class="fa fa-envelope"></i>
										<input type="text" value="" placeholder="Your Email" class="form-control">
									</div>
									<div class="form-group">
										<i class="fa fa-phone"></i>
										<input type="text" value="" placeholder="Your Number" class="form-control">
									</div>
									<div class="form-group">
										<i class="fa fa-pencil"></i>
										<textarea class="form-control" placeholder="Your Message Here ..."></textarea>
									</div>
									<div class="form-group text-center">
										<a href="#" class="cbtn"><span>Start Free Trial</span></a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
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
	<script src="/Public/Home3/js/jquery.js"></script>
  <script src="/Public/Home3/js/jquery.nice-select.min.js"></script>
  <script src="/Public/Home3/js/nav.js"></script>
  <script type="text/javascript">

		
	</script>
  <script>
    $(document).ready(function() {
      $('select:not(.ignore)').niceSelect();      
      FastClick.attach(document.body);
    });    
  </script>
	<!-- <script src="/Public/Home3/js/jquery.nice-select.min.js"></script> -->
	<!-- <script src="/Public/Home3/js/jquery.nice-select.js"></script> -->
	<!-- chart js -->
	<script src="/Public/Home3/js/raphael-min.js"></script>
	<script src="/Public/Home3/js/morris.min.js"></script>
	 <!-- dscountdown -->
	<script src="/Public/Home3/js/dscountdown.min.js"></script>
	<!-- custom js -->
	<script src="/Public/Home3/js/custom.js"></script>
	
</body>
</html>