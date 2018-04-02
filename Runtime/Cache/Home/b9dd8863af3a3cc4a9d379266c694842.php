<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo C('web_title');?></title>
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
								<li><a href="#"><i class="fa fa-life-ring" aria-hidden="true"></i> 欢迎使用COIN数字资产国际交易平台。</a></li>
							</ul>
						    <?php if(($_SESSION['userId']) > "0"): ?><ul class="list-unstyled align-right">
									<li><a href="<?php echo U('Finance/index');?>" ><?php echo (session('userName')); ?></a></li>
									<li><a href="####" >ID：<span><?php echo (session('userId')); ?></span></a></li>
									<li><a href="<?php echo U('Login/loginout');?>" ><?php echo L('logout');?></a></li>
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
								<li><a href="<?php echo U('Login/index');?>"><i class="fa fa-key"></i> login</a></li>
								<li><a href="<?php echo U('Login/register');?>"><i class="fa fa-lock"></i> Register</a></li>
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
									<li><a href="/">首页</a></li>
									<li><a href="<?php echo U('Trade/index');?>">交易中心</a></li>
									<li><a href="<?php echo U('Finance/index');?>">财务中心</a></li>
									<li><a href="<?php echo U('User/index');?>">安全中心</a></li>
									<li><a href="<?php echo U('Article/index');?>">帮助中心</a></li>
								</ul>
                            </nav>
							<!-- nav-login -->
						</div>
					</div>
				</div>
			</div>
		</header>
<link href="/Public/Home1/css/movesay.css" >
<link rel="stylesheet" href="/Public/Home1/css/movesay.css" />                   
<div class="wrapper">
	<div class="register" style="border-radius: 15px; margin-bottom: 20px;">
		<table>
			<tbody>
				<tr>
					<th align="right"><?php echo L('user_name');?>：</th>
					<td><div class="formbody" style="width: 250px;">
							<i class="icon_username"></i>
							<input type="text" class="username" id="username" name="username" placeholder="<?php echo L('enter_user_name');?>">
						</div></td>
				</tr>
				<tr>
					<th align="right"><?php echo L('secure_email');?>：</th>
					<td><div class="formbody" style="width: 250px;">
							<i class="icon_phone"></i>
							<input type="text" class="username" id="moble" name="moble" placeholder="<?php echo L('enter_binding_email');?>">
						</div></td>
				</tr>
				<tr>
					<th align="right"><?php echo L('captcha');?>：</th>
					<td><div class="formbody">
							<i class="icon_code"></i>
							<input type="text" class="code" id="verify" name="code" placeholder="<?php echo L('enter_captcha');?>" style="width: 100px;"><img id="codeImg" src="<?php echo U('Verify/code');?>" width="145" height="42" onclick="this.src=this.src+'?t='+Math.random()" style="float: left; cursor: pointer;" title="换一张">
						</div></td>
				</tr>
				<tr>
					<th align="right"><?php echo L('Email_Verification_Code');?>：</th>
					<td><div class="formbody">
							<i class="icon_code"></i>
							<input type="text" class="code" id="moble_verify" name="code" placeholder="<?php echo L('enter_sms_code');?>" style="width: 100px;"><input id="regBtn" type="button" class="getyzm" value="<?php echo L('get_sms_code');?>" onclick="SendCode()" style="width: 145px; height: 42px;">
						</div></td>
				</tr>
				<tr>
					<th align="right"><?php echo L('new_login_password');?>：</th>
					<td><div class="formbody" style="width: 250px;">
							<i class="icon_password"></i>
							<input type="password" class="password" id="password" name="password" placeholder="<?php echo L('login_password_format');?>">
						</div></td>
				</tr>
				<tr>
					<th align="right"><?php echo L('confirm_login_password');?>：</th>
					<td><div class="formbody" style="width: 250px;">
							<i class="icon_password"></i>
							<input type="password" class="password" id="repassword" name="password" placeholder="<?php echo L('enter_confirm_login_password');?>">
						</div></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><div class="formbody">
							<input type="button" class="movesay_btn" name="index_submit" id="Submin" onclick="Update();" value="<?php echo L('find_login_password');?>" title="<?php echo L('find_login_password');?>" style="width: 320px;">
						</div></td>
					<td>&nbsp;</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="autobox" style="margin-bottom: 30px">
		<ul class="safety_tips_ul clear">
			<li>
				<div class="safety_img safety_img_1"></div>
				<h4><?php echo L('reliable_system');?></h4>
				<p><?php echo L('reliable_system_desc');?></p>
			</li>
			<li>
				<div class="safety_img safety_img_2"></div>
				<h4><?php echo L('capital_security');?></h4>
				<p><?php echo L('capital_security_desc');?></p>
			</li>
			<li>
				<div class="safety_img safety_img_3"></div>
				<h4><?php echo L('quick_and_easy');?></h4>
				<p><?php echo L('quick_and_easy_desc');?></p>
			</li>
			<li>
				<div class="safety_img safety_img_4"></div>
				<h4><?php echo L('service_sector');?></h4>
				<p><?php echo L('service_sector_desc');?></p>
			</li>
		</ul>
	</div>
</div>
<script>
	function SendCode(){
		var username=$("#username").val();
		var moble=$("#moble").val();
		var verify=$("#verify").val();
		if(username==""||username==null){
			layer.tips('<?php echo L('enter_user_name');?>','#username',{tips:3});
			return false;
		}
		if(moble==""||moble==null){
			layer.tips('<?php echo L('enter_binding_phone');?>','#moble',{tips:3});
			return false;
		}
		if(verify==""||verify==null){
			layer.tips('<?php echo L('enter_captcha');?>','#verify',{tips:3});
			return false;
		}


		$.post("<?php echo U('Verify/findpwdbyemail');?>",{username:username,moble:moble,verify:verify},function(data){
			if(data.status==1){
				$('#regBtn').attr("disabled","disabled");
				layer.msg(data.info,{icon:1});
				var obj=$('#regBtn');
				var wait=120;
				var interval=setInterval(function(){
					obj.css('backgroundColor','#999B9C');
					obj.val('（'+wait+'）<?php echo L('second_to_send_again');?>');
					wait--;
					if(wait<0){
						clearInterval(interval);
						obj.val('<?php echo L('get_sms_code');?>');
						obj.css('backgroundColor','#0096e0');
					}
					;
				},1000);
			}else{
				layer.msg(data.info,{icon:2});
			}
		},"json");
	}
	function Update(){
		var username=$("#username").val();
		var moble=$("#moble").val();
		var moble_verify=$("#moble_verify").val();
		var verify=$("#verify").val();
		var password=$("#password").val();
		var repassword=$("#repassword").val();
		if(username==""||username==null){
			layer.tips('<?php echo L('enter_user_name');?>','#username',{tips:3});
			return false;
		}
		if(moble==""||moble==null){
			layer.tips('<?php echo L('enter_binding_phone');?>','#moble',{tips:3});
			return false;
		}
		if(moble_verify==""||moble_verify==null){
			layer.tips('<?php echo L('enter_sms_code_1');?>','#moble_verify',{tips:3});
			return false;
		}
		if(verify==""||verify==null){
			layer.tips('<?php echo L('enter_captcha');?>','#verify',{tips:3});
			return false;
		}
		if(password==""||password==null){
			layer.tips('<?php echo L('enter_new_login_password');?>','#password',{tips:3});
			return false;
		}
		if(repassword==""||repassword==null){
			layer.tips('<?php echo L('enter_confirm_login_password');?>','#repassword',{tips:3});
			return false;
		}
		if(password!=repassword){
			layer.tips('<?php echo L('confirm_login_password');?>','#repassword',{tips:3});
			return false;
		}
		$.post("<?php echo U('Login/findpwdbyemail');?>",{username:username,moble:moble,moble_verify:moble_verify,verify:verify,password:password,repassword:repassword},function(data){
			if(data.status==1){
				layer.msg(data.info,{icon:1});
				window.setTimeout("window.location='<?php echo U('Login/index');?>'",1000);
			}else{
				layer.msg(data.info,{icon:2});
			}
		},"json");
	}
</script>
<script>
	//顶部菜单高亮
	$('#menu_top_index').addClass('current');
</script>
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