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
		
		<section class="login-content clearfix ">
			<div class="form register">
		        <div class="title">注册</div>
		        <div class="input register_email">
		            <!-- <form action="#" id="registerForm" method="post" novalidate="novalidate"> -->
					<!-- <form role="form" id="registerForm" name="reg" method="post" action="#"> -->
		                <input name="regType" type="hidden" value="1">
		                <!-- <div class="tel-box">
		                    <span class="tip" style="position: absolute; right: 0; margin-top: -20px;color: red"></span>
		                    <div class="input-box">
		                        <input type="text" autocomplete="off" value="" tabindex="1" placeholder="请输入邮箱" name="email" id="email">
		                        <i class="icon email-icon"></i>
		                    </div>
						</div> -->
						<div class="tel-box">
								<span class="tip" style="position: absolute; right: 0; margin-top: -20px;color: red"></span>
								<div class="input-box">
									<input type="text" autocomplete="off" value="" tabindex="1" placeholder="请输入用户名" name="username" id="username">
									<i class="icon email-icon"></i>
								</div>
							</div>
		                <div class="msg-field">
		                    <span class="tip" style="position: absolute; right: 0; margin-top: -20px;color: red"></span>
		                    <div class="input-box">
		                        <div class="input-wrapper">
		                            <input type="text" maxlength="6" placeholder="验证码" id="code" name="code">
		                            <i class="icon verify-icon"></i>
		                        </div>
		                        <div class="send-msg" id="e-msg" style="color: #1F212A;" onclick="getcode()">
		                            获取验证码
		                        </div>
		                    </div>
		                </div>
		                <div class="password-box">
		                    <span class="tip" style="position: absolute; right: 0; margin-top: -20px;color: red"></span>
		                    <div class="input-box">
		                        <input type="password" autocomplete="off" tabindex="2" placeholder="请输入密码" name="password" id="password">
		                        <i class="icon password-icon"></i>
		                    </div>
						</div>
						<div class="password-box">
								<span class="tip" style="position: absolute; right: 0; margin-top: -20px;color: red"></span>
								<div class="input-box">
									<input type="password" autocomplete="off" tabindex="2" placeholder="重复密码" name="repassword" id="repassword">
									<i class="icon password-icon"></i>
								</div>
							</div>

		                <div class="invite-box">
		                    <span class="tip" style="position: absolute; right: 0; margin-top: -20px;color: red"></span>
		                    <div class="input-box">
		                        <input type="text" autocomplete="off" tabindex="2" value="" name="invit" id="invit" placeholder="邀请码 (选填)">
		                        <i class="icon invite-icon"></i>
		                    </div>
		                </div>
		                <div class="protocol">
		                    <input type="checkbox" checked="" style="margin-top: 0px;" id="agree"><a href="https://yex-help.zendesk.com/hc/zh-cn/articles/360000776414-YEX%E7%94%A8%E6%88%B7%E5%8D%8F%E8%AE%AE%E4%B8%8E%E7%89%B9%E5%88%AB%E5%A3%B0%E6%98%8E" target="_blank">阅读并同意《用户手册》</a>
		                </div>
		                <button class="button" id="saveBtn-e" onclick="add();">下一步</button>
		                <div class="free-reg">
		                    <a href="<?php echo U('Login/index');?>">已有账号，直接登录 &gt;</a>
		                </div>
		            <!-- </form> -->
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
	<script src="/Public/Home3/js/jquery.nice-select.js"></script>
	<!-- chart js -->
	<script src="/Public/Home3/js/raphael-min.js"></script>
	<script src="/Public/Home3/js/morris.min.js"></script>
	 <!-- dscountdown -->
	<script src="/Public/Home3/js/dscountdown.min.js"></script>
	<!-- custom js -->
	<script src="/Public/Home3/js/custom.js"></script>
	<script src="/Public/Home3/js/sidebar-menu.js"></script>
	<script src="/Public/Home3/layer/layer.js"></script>
	<script>
		$.sidebarMenu($('.sidebar-menu'))
	</script>
	<script>

		function getcode() {
			var email=$("#email").val();  
			if (!f_email(email)) {
				layer.alert("请输入正确的邮箱！", {
                  icon: 2,
                  skin: 'layer-ext-moon'
				});
				$("#email").focus();
                return false;
             }     
	
   
		   $.post("/Verify/emailcode", { email: email }, function (data) {
			   console.log(data);
			   layer.alert("验证码为526314！", {
			         icon: 1,
                  skin: 'layer-ext-moon'
				});
			//    if (data.status == 1) {               
			// 	   	layer.alert("邮箱验证码已发送到你的邮箱，请查收！", {
			//          icon: 1,
            //       skin: 'layer-ext-moon'
			// 	});
				  
			//    } else {
			// 		layer.alert("邮箱验证码发送失败，请重新点击发送！", {
			// 			icon: 2,
			// 		skin: 'layer-ext-moon'
			// 		});
			//    }
		   }, "json");

	   }
	 function f_email(value){
		   var re=/^(?:[a-z\d]+[_\-\+\.]?)*[a-z\d]+@(?:([a-z\d]+\-?)*[a-z\d]+\.)+([a-z]{2,})+$/i;
	       return re.test(value);
		}
	   function add() {
			// var email=$("#email").val();
			var username = $("#username").val();
			var code = $("#code").val();
			var password = $("#password").val();
			var invit = $("#invit").val();
			var repassword = $("#repassword").val();
			// if (!f_email(email)) {
			// 	layer.alert("请输入正确的邮箱！", {
            //       icon: 2,
            //       skin: 'layer-ext-moon'
			// 	});
			// 	$("#email").focus();
            //     return false;
			//  }
			
			if(username=='' || username =="请输入用户名"){
				layer.alert("请输入用户名", {
                  icon: 2,
                  skin: 'layer-ext-moon'
				});
				$("#username").focus();
				return false;
			}
			if(code=='' || code =="验证码"){
				layer.alert("请输入验证码！", {
                  icon: 2,
                  skin: 'layer-ext-moon'
				});
				$("#code").focus();
				return false;
			}
			if(password=='' || password =="请输入密码"){
				layer.alert("请输入密码", {
                  icon: 2,
                  skin: 'layer-ext-moon'
				});
				$("#password").focus();
				return false;
			}
			if(repassword=='' || repassword =="重复密码"){
				layer.alert("请输入重复密码", {
                  icon: 2,
                  skin: 'layer-ext-moon'
				});
				$("#repassword").focus();
				return false;
			}
		
		//	alert(code);
		
			$.post("<?php echo U('Login/userRegister');?>", {username:username, password: password,repassword:repassword,code:code, invit: invit}, function(data) {
				if (data.status == 1) {
					//layer.msg(data.info, { icon: 1 });
				//	$.cookies.set('cookie_username', username);
				// layer.alert("注册成功！", {
                //   icon: 1,
                //   skin: 'layer-ext-moon'
				// });
				 window.location = '/Login/register2';
				} else {
					layer.alert(data.info, {
                  icon: 2,
                  skin: 'layer-ext-moon'
				});
				}
			}, "json");
     }
	</script>
</body>
</html>