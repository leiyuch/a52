<?php if (!defined('THINK_PATH')) exit();?>﻿﻿<!DOCTYPE html>
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
				
		</style>
		<div class="main-content clearfix">
			<div class="now"> 
				<i class="fa fa-home fa-lg move mr5"></i>
				<a href="/" class="movesay"><?php echo L('home');?></a> &gt; 
				<a href="<?php echo U('Finance/index');?>" class="movesay"><?php echo L('finance_center');?> </a> &gt; <?php echo L('finance_i_want_to_receive');?> 
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
				     <div class="safe_center clear"> 
				      	<h1> <span> <?php echo L('finance_i_want_to_receive');?> </span> <span> <a class="right" onclick="$('#hints').slideToggle();"> <i class="fa fa-hand-o-right move fz_14 mr5"></i> <span class="fz_12 move">帮助</span> </a> </span> </h1> 
				     </div> 
				     
				     <div class="mytable-body"> 
					      <div class="step1 cny_record"> 
					       <div class="weituo_bizhong"> 
					        <div class="bizhong_select"> 
					         <div class="bz_btn"> 
					          <img src="http://moduoio.oss-cn-hongkong.aliyuncs.com/moduoio/1510216983457.png" alt="" style=" width: 22px;float: left;margin-top: 5px;" /> 
					          <span id="coin-default"> 
									<select name="type" id="coin-select" style="margin-top: 6px;">
											<?php if(is_array($coin_list)): $i = 0; $__LIST__ = $coin_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($xnb) == $key): ?><option value="<?php echo ($vo['name']); ?>" selected="selected"><?php echo ($vo["title"]); ?> (<?php echo (strtoupper($vo['name'])); ?>)</option>
														<?php else: ?>
														<option value="<?php echo ($vo['name']); ?>"><?php echo ($vo["title"]); ?> (<?php echo (strtoupper($vo['name'])); ?>)</option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
									</select>
					          </span> 
					         </div> 
					        </div> 
					        <div class="bizhong_type" style="width: 620px;"> 
					         <span><?php echo L('finance_usable');?><em class="coin-name"></em>：<font class="coin-balance"><?php echo (Num($user_coin[$xnb])); ?></font></span> 
					        </div> 
					       </div> 
					       <br /> 
					       <div class="cnyin_record"> 
							   <!-- <p>这是您的钱包地址，请将您的 BitCoin 转入此地址：</p> -->
							   <p>  <?php echo L('finance_wallet_address1');?><b ><?php echo ($coin_list[$xnb]['title']); ?></b> <?php echo L('finance_wallet_address2');?>：</p>
					        <div class="adr-zhuanru" style="position: relative;z-index:0;"> 
					         <!--线下处理 以及 需绑定监听--> 
					         <div class="coin-name txtEmphasis" style=""> 
					          <dt style="margin: 4px 0">
					           <b><?php echo ($qianbao); ?></b>
					          </dt> 
					           
					          
					         </div> 
					        </div> 
							<div id="hints" class="mytips"> 
						        <p> </p>
								<p><?php echo L('finance_wallet_address4');?>：<br /> 1.  <span id="txxz_1"><?php echo L('finance_wallet_address5');?></span>
									<b ><?php echo ($coin_list[$xnb]['title']); ?></b> <?php echo L('finance_wallet_address6');?>
									<b ><?php echo ($coin_list[$xnb]['title']); ?></b> <?php echo L('finance_wallet_address7');?>
									<b id="confirmNum"><?php echo ($coin_list[$xnb]['zr_dz']); ?></b> <?php echo L('finance_wallet_address8');?>
									<b ><?php echo ($coin_list[$xnb]['title']); ?></b> <?php echo L('finance_wallet_address9');?>
									<br /> 2. <?php echo L('finance_wallet_address10');?><span class="kuangchi-buyao"><?php echo L('finance_wallet_address11');?></span> </p> 
						        <p> <br /> </p> 
						        <p></p> 
						    </div> 


					       </div> 
					      </div> 
					      <!--转入记录--> 
					      <div class="step2 f_body"> 
					       <table class="f_table" id="investLog_content"> 
					        <thead> 
					         <tr> 
									<th><?php echo L('finance_transfer_in_time');?></th>
                                    <th><?php echo L('finance_transfer_in_currency');?></th>
                                    <th><?php echo L('finance_transfer_out_address');?></th>
                                    <th ><?php echo L('finance_transfer_out_amount');?></th>
                                    <th><?php echo L('finance_transfer_out_give');?></th>
                                    <th ><?php echo L('finance_arrival_quantity');?></th>
                                    <th ><?php echo L('status');?></th>
					         </tr> 
					        </thead> 
					        <tbody> 
									<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
												<td><?php echo (addtime($vo["addtime"])); ?></td>
												<td><?php echo ($vo["coinname"]); ?></td>
												<td><?php echo ($vo["username"]); ?></td>
												<td><?php echo (NumToStr($vo['num'])); ?></td>
												<td><?php echo (NumToStr($vo['fee'])); ?></td>
												<td><?php echo (NumToStr($vo['mum'])); ?></td>
												<td>
													<?php if(($vo["status"]) == "1"): ?><font color="#23a800"><?php echo L('finance_transfer_succeed');?> </font>
														<?php else: ?>
														<font color="red"><?php echo L('finance_transfer_wait'); echo (abs($vo["status"])); echo L('finance_transfer_a_confirm');?></font><?php endif; ?>
												</td>
											</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					        </tbody> 
					       </table> 
					       <div class="pages"><?php echo ($page); ?></div> 
					      </div> 
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