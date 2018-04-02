<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
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
								<li><a href="#"><i class="fa fa-life-ring" aria-hidden="true"></i> 欢迎使用COIN数字资产国际交易平台。</a></li>
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
					    <a href="<?php echo U('User/index');?>" class="movesay"><?php echo L('security');?> </a> &gt;  <?php echo L('user_wallet_address_management');?>
				    </div>
				     
                    ﻿<div class="left-nav-bar" id="left-nav-bar"> 
    <div class="left-nav-slider"> 

     <dl class="nav-tab-list"> 
      <dt> 
       <a href="<?php echo U('User/index');?>"><i class="fa fa-shield mr10"></i><?php echo L('security');?></a> 
      </dt> 
     </dl> 
     <div  class="sidebar">
         <ul class="sidebar-menu">
           <li class="treeview">
               <a href="<?php echo U('User/index');?>">
                 <i class="fa fa-lock"></i> <span><?php echo L('authentication_center');?></span> <i class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="treeview-menu">
                 <li><a href="<?php echo U('User/nameauth');?>"><i class="fa fa-circle-o"></i> <?php echo L('certification');?></a></li>
                 <li><a href="<?php echo U('User/moble');?>"><i class="fa fa-circle-o"></i> <?php echo L('bound_phone');?></a></li>
                 <li><a href="<?php echo U('User/alipay');?>"><i class="fa fa-circle-o"></i> <?php echo L('user_bound_alipay');?></a></li>
                 <li><a href="<?php echo U('User/bank');?>"><i class="fa fa-circle-o"></i> <?php echo L('user_bank_card_management');?></a></li>
               </ul>
           </li>
           <li class="treeview">
               <a href="#">
                 <i class="fa fa-link"></i>
                 <span><?php echo L('user_modify_login_password');?></span>
                 <i class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="treeview-menu">
                 <li><a href="<?php echo U('User/password');?>"><i class="fa fa-circle-o"></i> <?php echo L('user_modify_login_password');?></a></li>
                 <li><a href="<?php echo U('User/paypassword');?>"><i class="fa fa-circle-o"></i> <?php echo L('user_modify_trade_password');?></a></li>
                 <li><a href="<?php echo U('User/tpwdset');?>"><i class="fa fa-circle-o"></i> <?php echo L('user_set_trade_password_enter');?></a></li>
                 <li><a href="<?php echo U('User/goods');?>"><i class="fa fa-circle-o"></i> <?php echo L('user_contact_address_management');?></a></li>
               </ul>
           </li>
           <li class="treeview">
               <a href="#">
                 <i class="fa fa-laptop"></i>
                 <span><?php echo L('user_wallet_address_management');?></span>
                 <i class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="treeview-menu">
                 <li><a href="<?php echo U('User/qianbao');?>"><i class="fa fa-circle-o"></i> <?php echo L('user_wallet_address_management');?></a></li>
               </ul>
           </li>
           <li class="treeview">
               <a href="#">
                 <i class="fa fa-file-text-o"></i>
                 <span><?php echo L('user_login_log');?></span>
                 <i class="fa fa-angle-right pull-right"></i>
               </a>
               <ul class="treeview-menu">
                 <li><a href="<?php echo U('User/log');?>"><i class="fa fa-circle-o"></i> <?php echo L('user_login_log');?></a></li>
               </ul>
           </li>				    
         </ul>
     </div> 
    </div> 
   </div>  
                    
				    <div class="tag-list-content assets_content bg_w"> 
				     <div class="safe_center clear"> 
				      	<h1> <span> <?php echo L('user_wallet_address_management');?> </span> <span> <a class="right" onclick="$('#hints').slideToggle();"> <i class="fa fa-hand-o-right move fz_14 mr5"></i> <span class="fz_12 move">帮助</span> </a> </span> </h1> 
				     </div> 
				     
				     
				     <div class="f_body">
	                    <div class="f_body_main">
	                        <div class="f_tab_body">
	                            <div>
	                                <table class="f_table" id="investLog_content">
	                                    <thead>
	                                        <tr>
	                                            <th style="width: 150px;">
														<select name="type" id="qianbao_type">
																<?php if(is_array($coin_list)): $i = 0; $__LIST__ = $coin_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($xnb) == $key): ?><option value="<?php echo ($vo['name']); ?>" selected="selected"><?php echo ($vo["title"]); ?> (<?php echo (strtoupper($vo['name'])); ?>)</option>
																		<?php else: ?>
																		<option value="<?php echo ($vo['name']); ?>"><?php echo ($vo["title"]); ?> (<?php echo (strtoupper($vo['name'])); ?>)</option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
															</select>
	                                            </th>
												<th><?php echo L('user_wallet_id');?></th>
												<th><?php echo L('user_wallet_address');?></th>
												<th><?php echo L('user_addtime');?></th>
												<th><?php echo L('operate');?></th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
												<?php if(is_array($userQianbaoList)): $i = 0; $__LIST__ = $userQianbaoList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
															<td><?php echo ($coin_list[$vo['coinname']]['title']); ?>(<?php echo ($vo["coinname"]); ?>)</td>
															<td><?php echo ($vo["name"]); ?></td>
															<td><?php echo ($vo["addr"]); ?></td>
															<td><?php echo (addtime($vo["addtime"])); ?></td>
															<td>
																<a class="cancel" href="javascript:void(0)" onclick="UpdateB(<?php echo ($vo['id']); ?>)"><?php echo L('delete');?></a>
															</td>
														</tr><?php endforeach; endif; else: echo "" ;endif; ?>			 
										</tbody>
	                                </table>
	                                <div class="pages">
	                                   <!-- <a href="javascript:void(0)" onclick="showA()">添加一个地址</a>-->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                 <div id="demo1" onclick="showA()" style="width:150px; border:1px solid orange; padding:5px 10px; border-radius:5px; color:orange; margin:0 auto; text-align: center;"> <?php echo L('user_add_now');?></div>
				     
				     
				     
				    </div> 
				</div>
				<div class="clearfix"></div>
		</section>

<div id="withdrawCnyAddress" style="background:rgba(0,0,0,0.5); width:100%; height:100%; position:fixed; float:left; z-index:1000; top:0; left:0; display:none;">
    <div style="padding: 10px 40px 40px; background:#fff; border-radius:5px; max-width:520px; margin:10% auto; position: relative;">
    	<div class="close2" onclick="closeAddress()" style=" position: absolute;right: 20px;font-size: 20px; cursor:  pointer;">X</div>
        <h2 style="text-align:center;padding: 20px 0;font-weight: bold;"><?php echo L('user_add_one_wallet_address');?></h2>
        
        <div class="form-group form-material floating">
				<input type="text" class="form-control empty" value="<?php echo ($coin_list[$xnb]['title']); ?>(<?php echo (strtoupper($xnb)); ?>)" name="username" data-fv-notempty="true" data-fv-message="请输入用户名或邮箱或手机号码" data-fv-field="username" placeholder="BitCoin(BTC)" style="height:40px !important">
			</div>
			<div class="form-group form-material floating">
				<input type="text" class="form-control empty" id="qianbao_name" name="username" data-fv-notempty="true" data-fv-message="" data-fv-field="username" placeholder="钱包标识" style="height:40px !important">
			</div>
			<div class="form-group form-material floating">
				<input type="text" class="form-control empty" id="qianbao_addr" name="username" data-fv-notempty="true" data-fv-message="" data-fv-field="username" placeholder="钱包地址" style="height:40px !important">
			</div>
			<div class="form-group form-material floating">
				<input type="text" class="form-control empty" id="qianbao_paypassword" name="username" data-fv-notempty="true" data-fv-message="" data-fv-field="username" placeholder="交易密码" style="height:40px !important">
			</div>
			<div id="demo3" onclick="Update()" style="background:rgb(7, 105, 224); padding:5px 10px; border-radius:5px; color:#fff; text-align:center;"><?php echo L('user_add_now');?></div>
		</div>
</div>
<div id="dialogBoxShadow" style="position: absolute; top: 0px; left: 0px; z-index: 100; background-color: rgb(0, 0, 0); opacity: 0.4; width: 100%; background-position: initial initial; background-repeat: initial initial; display: none;"></div>
<br>
<br>



		


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
	<script src="/Public/layer/layer.js"></script>
	<script>
		$.sidebarMenu($('.sidebar-menu'))
	</script>
	<script>
			$("#qianbao_type").change(function () {
				var coin = $("#qianbao_type option:selected").val();
				window.location = '/User/qianbao/coin/' + coin + '.html';
			});
		
		
			var coin = "<?php echo ($xnb); ?>";
		
		
			$("#city_1").citySelect({
				nodata: "none",
				required: false
			});
		
			$('#dialogBoxShadow').height($(document).height());
			function closeAddress() {
				$("#withdrawCnyAddress").hide();
				$("#dialogBoxShadow").hide();
			}
			function showA() {
				$("#withdrawCnyAddress").show();
				$("#dialogBoxShadow").show();
			}
			function Update() {
		
				var name = $('#qianbao_name').val();
				var addr = $('#qianbao_addr').val();
				var paypassword = $('#qianbao_paypassword').val();
				if (name == "" || name == null || name=="钱包标识") {
					layer.tips('<?php echo L('user_enter_wallet_id');?>', '#qianbao_name', {tips: 3});
					return false;
				}
				if (addr == "" || addr == null || addr=="钱包地址") {
					layer.tips('<?php echo L('user_enter_wallet_address');?>', '#qianbao_addr', {tips: 3});
					return false;
				}
				if (paypassword == "" || paypassword == null || paypassword =="交易密码") {
					layer.tips('<?php echo L('enter_trade_password');?>', '#qianbao_paypassword', {tips: 3});
					return false;
				}
		
		
				$.post("<?php echo U('User/upqianbao');?>", {
					coin: coin,
					name: name,
					addr: addr,
					paypassword: paypassword
				}, function (data) {
					if (data.status == 1) {
						layer.msg(data.info, {icon: 1});
						window.location = "<?php echo U('User/qianbao');?>?coin=" + coin;
					} else {
						layer.msg(data.info, {icon: 2});
						if (data.url) {
							window.location = data.url;
						}
					}
				}, "json");
			}
		
			function UpdateB(id) {
				layer.config({
					extend: 'extend/layer.ext.js'
				});
				layer.ready(function () {
					//默认prompt
					layer.prompt({
						title: '<?php echo L('user_enter_trade_pwd_confirm');?>',
						formType: 1,
						btn: ['<?php echo L('confirm');?>','<?php echo L('cancel');?>']
					}, function (val) {
						if (val) {
							//需要执行的方法
							$.post("<?php echo U('User/delqianbao');?>", {
								id: id,
								paypassword: val
							}, function (data) {
								if (data.status == 1) {
									layer.msg(data.info, {icon: 1});
									window.location = "<?php echo U('User/qianbao');?>?coin=" + coin;
								} else {
									layer.msg(data.info, {icon: 2});
									if (data.url) {
										window.location = data.url;
									}
								}
							}, "json");
		
		
						}
						;
					});
		
				});
			}
		</script>
</body>
</html>