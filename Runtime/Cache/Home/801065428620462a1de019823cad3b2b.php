<?php if (!defined('THINK_PATH')) exit();?>﻿
<script type="text/javascript" src="/Public/Home1/Scripts/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home1/Scripts/jquery.common.tools.js"></script>
		<script src="/Public/Home/js/jquery.copy.js"></script>
		<script src="/Public/Home/js/qrcode.js"></script>
		<script src="/Public/layer/layer.js"></script>


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
			            
			    </style>
			    <div class="main-content clearfix">
				    <div class="now"> 
					    <i class="fa fa-home fa-lg move mr5"></i>
					    <a href="/" class="movesay"><?php echo L('home');?></a> &gt; 
					    <a href="<?php echo U('Finance/index');?>" class="movesay"><?php echo L('finance_center');?></a> &gt;<?php echo L('finance_share');?>
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
				      	<h1> <span><?php echo L('finance_share');?> </span> <span> <a class="right" onclick="$('#hints').slideToggle();"> <i class="fa fa-hand-o-right move fz_14 mr5"></i> <span class="fz_12 move">帮助</span> </a> </span> </h1> 
				     </div> 
				     <div id="hints" class="mytips">
			            <p>
			              <span>
			                <span style="background-color:#FFFFFF;font-size:14px;">通過您的專屬邀請碼，當有人使用您的邀請碼或邀請鏈接註冊時，您會根據規則獲得相應的獎勵。當您邀請的用戶足夠多，甚至會受官方邀請參與官方活動。</span></span>
			            </p>
			          </div>
			          <!-- <div id="qrcode-wallet" style="display: inline-block;margin-top: 60px;float: right;margin-right: 30px;" width="100">
			            <saon id="codeaa">
										<img src="/Public/Home3/images/code.jpg">
									</saon>
			            <p id="qrcode-t" style="font-size: 22px;text-align: center;margin-top: 30px;" class="move"><?php echo L('finance_share_two_code');?></p>
								</div> -->
								
								<div id="qrcode-wallet" style="display: inline-block;margin-top: 60px;float: right;margin-right: 30px;" width="100">
                    <saon id="codeaa"></saon>
                    <p id="qrcode-t" style="font-size: 22px;text-align: center;margin-top: 30px;color: red;"><?php echo L('finance_share_two_code');?></p>

                </div>


							

			          <div class="quicklink invite-content" style="margin-top: 15px;">
			            <h4><?php echo L('finance_share_invite_code');?></h4>
			            <p class="tip"><?php echo L('finance_share_invite_code_desc');?></p>
			            <p>
											<!-- <input type="text" class="area texts" id="invite-input" value="<?php echo ($user['invit']); ?>" style="width: 100px;vertical-align: bottom;">
											<input type="button" value="<?php echo L('finance_share_copy');?>" data-clipboard-action="copy" data-clipboard-target="invite-input" class="ml20 btn-quick inviteCopyButton btns2" id="copy_button1" style="width:100px;"> -->
			              <input type="text" class="area texts" id="invite-input" value="<?php echo ($user['invit']); ?>" style="width: 100px;vertical-align: bottom;">
										<input type="button" value="<?php echo L('finance_share_copy');?>" data-clipboard-action="copy" data-clipboard-target="#invite-input" class="ml20  btn-quick inviteCopyButton  btns2" id="copy_button1" style="width:100px;">
									</p>
			          </div>
			          <div class="quicklink invite-content">
			            <h4><?php echo L('finance_share_link');?></h4>
			            <p class="tip"><?php echo L('finance_share_link_desc');?></p>
			            <p>
			              <input type="text" class="area texts" id="invite-inputa" value="http://<?php echo ($_SERVER['HTTP_HOST']); ?>/?invit=<?php echo ($user['invit']); ?>" style="width: 250px;vertical-align: bottom;">
			              <input type="button" value="<?php echo L('finance_share_copy');?>" data-clipboard-action="copy" data-clipboard-target="#invite-inputa" class="ml20 btn-quick inviteCopyButton btns2" id="copy_button2" style="width:100px;"></p>
			          </div>
			          <div class="quicklink invite-content">
			            <h4><?php echo L('finance_share_ad');?></h4>
			            <p class="tip"><?php echo L('finance_share_ad_desc');?></p>
			            <p>
			              <textarea type="text" class="area texts" id="invite-textarea" style="width: 350px;height: 100px;line-height: 25px;"><?php if( (lang_set == 'en' ) && (!empty($c['invit_text_txt_en']))): echo ($C['invit_text_txt_en']); else: echo ($C['invit_text_txt']); endif; ?> http://<?php echo ($_SERVER['HTTP_HOST']); ?>/?invit=<?php echo ($user['invit']); ?></textarea>
			              <input type="button" value="<?php echo L('finance_share_copy');?>" data-clipboard-action="copy" data-clipboard-target="#invite-textarea" class="ml20 btn-quick inviteCopyButton zeroclipboard-is-hover btns2 " id="copy_button3" style="width:100px;"></p>
								</div>
								
								<script type="text/javascript" src="/Public/Home/js/jquery.qrcode.min.js"></script>
                <script type="text/javascript">
                    $('#codeaa').qrcode({
                        render: "table", //table方式
                        size:200,
                        text: "http://<?php echo ($_SERVER['HTTP_HOST']); ?>/?invit=<?php echo ($user['invit']); ?>" //任意内容
                    }); //任意字符串
								</script>
								
			          <div class="quicklink">
			            <h4><?php echo L('finance_share_bbs');?></h4>
			            <div class="reward-share">
			              <a href="javascript:;" title="<?php echo L('finance_share_sina_desc');?>" class="wlb_tsina">
			                <span class="icon icon-sina"></span>
			                <i><?php echo L('finance_share_sina_weibo');?></i>
			              </a>
			              <a href="javascript:;" title="<?php echo L('finance_share_douban_desc');?>" class="wlb_douban">
			                <span class="icon icon-douban"></span>
			                <i><?php echo L('finance_share_douban');?></i>
			              </a>
			              <a href="javascript:;" title="<?php echo L('finance_share_qq_desc');?>" class="wlb_qzone">
			                <span class="icon icon-qzone"></span>
			                <i><?php echo L('finance_share_qq');?></i>
			              </a>
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
	<!-- <script src="/Public/Home3/js/raphael-min.js"></script> -->
	<script src="/Public/Home3/js/morris.min.js"></script>
	 <!-- dscountdown -->
	<script src="/Public/Home3/js/dscountdown.min.js"></script>
	<!-- custom js -->
	<script src="/Public/Home3/js/custom.js"></script>
	<script src="/Public/Home3/js/sidebar-menu.js"></script>
	<script type="text/javascript" src="/Public/Home/js/ZeroClipboard.min.js"></script>
	<script>
			var client=new ZeroClipboard(document.getElementById("copy-button"));
			client.on("ready",function(readyEvent){
					client.on("aftercopy",function(event){
							event.target.style.display="none";
					});
			});
			ZeroClipboard.config({swfPath:'/Public/Home/js/ZeroClipboard.swf'});
			var clip=new ZeroClipboard(document.getElementById("copy"));
			var _share_title=encodeURI('<?php echo L('finance_share_invite_friends');?>');
			var _share_content=encodeURI("<?php echo ($C['invit_text_txt']); ?>");
			var _share_url=encodeURIComponent("http://<?php echo ($_SERVER['HTTP_HOST']); ?>/?invit=<?php echo ($user['id']); ?>");
			var _share_pic='/';
			$(document).ready(function(){

					var clip1=new ZeroClipboard(document.getElementById("copy_button1"));
					var clip2=new ZeroClipboard(document.getElementById("copy_button2"));
					var clip3=new ZeroClipboard(document.getElementById("copy_button3"));
					clip1.on("copy",function(e){
							layer.msg('<?php echo L('finance_share_copy_success');?>',{icon:1});
					});
					clip2.on("copy",function(e){
							layer.msg('<?php echo L('finance_share_copy_success');?>',{icon:1});
					});
					clip3.on("copy",function(e){
							layer.msg('<?php echo L('finance_share_copy_success');?>',{icon:1});
					});
					$(".wlb_tsina").click(function(){
							window.open("http://v.t.sina.com.cn/share/share.php?url="+_share_url+"&title="+_share_content);
					});
					$(".wlb_douban").click(function(){
							window.open("http://www.douban.com/recommend/?url="+_share_url+"&title="+_share_content);
					});
					$(".wlb_qzone").click(function(){
							window.open("http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url="+_share_url+"&title="+_share_title+"&pics="+_share_pic+"&desc="+_share_content);
					});
			});
	</script>

	
	<script>
		$.sidebarMenu($('.sidebar-menu'))
	</script>
</body>
</html>