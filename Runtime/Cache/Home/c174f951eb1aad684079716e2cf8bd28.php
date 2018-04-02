<?php if (!defined('THINK_PATH')) exit();?>﻿
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
					    <a href="<?php echo U('Finance/index');?>" class="movesay"><?php echo L('finance_center');?></a> &gt; <?php echo L('finance_i_want_to_send_it');?> 
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
				      	<h1> <span> <?php echo L('finance_i_want_to_send_it');?> </span> <span> <a class="right" onclick="$('#hints').slideToggle();"> <i class="fa fa-hand-o-right move fz_14 mr5"></i> <span class="fz_12 move">帮助</span> </a> </span> </h1> 
				     </div> 
				     <div id="hints" class="mytips"> 
				        <p> </p>
				        <p> <?php echo L('finance_step_one');?><br /> <?php echo L('finance_explanation_one_data');?><br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo L('finance_explanation_two_data');?> </p> 
				        <p> <br /> </p> 
				        <p></p> 
				     </div> 
				     
				     <div class="mytable-body " style="    padding-top: 0px;"> 
				        <div class="pwtrade  pw  mt50"> 
				         <dl> 
				          <dt>
								<?php echo L('finance_transfer_out');?>：
				          </dt> 
				          <div class="weituo_bizhong" style="padding-top: 1px;"> 
				           <div class="bizhong_select" style="    width: 350px;"> 
				            <div class="bz_btn"> 
				             <img src="http://moduoio.oss-cn-hongkong.aliyuncs.com/moduoio/1510216983457.png" alt="" style="width:22px;float:left;margin-top: 7px;margin-right: 5px;" /> 
					             <span id="coin-default">
										<select name="type" id="myzc_type" style="margin-top: 6px;">
												<?php if(is_array($coin_list)): $i = 0; $__LIST__ = $coin_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($xnb) == $key): ?><option value="<?php echo ($vo['name']); ?>" selected="selected"><?php echo ($vo["title"]); ?> (<?php echo (strtoupper($vo['name'])); ?>)</option>
															<?php else: ?>
															<option value="<?php echo ($vo['name']); ?>"><?php echo ($vo["title"]); ?> (<?php echo (strtoupper($vo['name'])); ?>)</option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
										
									</select>
								 </span>
								 <?php echo L('finance_usable');?>:
				             <font class="coin-balance"><?php echo (Num($user_coin[$xnb])); ?></font> 
				            </div> 
				           </div> 
				          </div> 
				         </dl> 
				         <dl> 
				          <dt>
								<?php echo L('finance_transfer_out_address');?>：
				          </dt> 
				          <dd> 
				           <span> <select id="myzc_addr" class="texts">
								<!-- <option value="">--选择转出账号--</option> <option value="tianjia">新添加一个转出账号</option>  -->
								<option value="">--<?php echo L('finance_select_recipient_address');?>--</option>
								<?php if(is_array($userQianbaoList)): $i = 0; $__LIST__ = $userQianbaoList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["addr"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								<option value="tianjia"><?php echo L('finance_add_recipient_address');?></option>
							</select> </span> 
				          </dd> 
				         </dl> 
				         <dl> 
				          <dt>
								<?php echo L('finance_transfer_in_amount');?>：
				          </dt> 
				          <dd style="position: relative;"> 
				           <input type="text" class="cztxinput" id="nums" maxlength="12" value="" /> <em class="move"><?php echo L('finance_transfer_fee'); echo ($coin_list[$xnb]['zc_fee']); ?>%</em> 
				          </dd> 
				         </dl> 
				         <!-- <dl class="step5"> 
				          <dt>
				           邮箱验证码：
				          </dt> 
				          <dd class="yuyin"> 
				           <div class="clear"> 
				            <input type="button" value="发送邮箱验证码" class="btns" onclick="send_moble_coinout('email')" style="width: 100px;font-size: 12px;" /> 358****976@qq.com(接收验证码) 
				           </div> 
				          </dd> 
				         </dl> 
				         <dl class="step6" style="display:none;"> 
				          <dt>
				           邮箱验证码：
				          </dt> 
				          <dd> 
				           <input type="text" id="cnyout_moble_verify" value="" class="texts" placeholder="请输入邮箱验证码" /> 
				           <span id="reg_moble_new"></span> 
				          </dd> 
				         </dl>  -->
				         <dl> 
				          <dt>
								<?php echo L('trade_password');?>：
				          </dt> 
				          <dd> 
				           <input type="password" class="cztxinput" id="paypassword" value="" />
				           <a href="<?php echo U('Login/findpaypwd');?>" class="move ml5"><?php echo L('forget_password');?>?</a> 
				          </dd> 
				         </dl> 
				         <dl> 
				          <dt></dt> 
				          <dd> 
				           <input type="button" class="btns2" value="<?php echo L('finance_submit');?>" onclick="Update()" /> 
				          </dd> 
				         </dl> 
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
	<script src="/Public/layer/layer.js"></script>	
	<script>
		$.sidebarMenu($('.sidebar-menu'))
	</script>

<script>
        $("#myzc_type").change(function () {
            var coin = $("#myzc_type option:selected").val();
            window.location = '/Finance/myzc/coin/' + coin + '.html';
        });

        $("#myzc_addr").change(function () {
            var coin = $("#myzc_type option:selected").val();
            var type = $("#myzc_addr option:selected").val();
            if (type == 'tianjia') {
                window.location = '/User/qianbao?coin=' + coin;
            }
        });

        function SendCode() {
            $('#regBtn').attr("disabled", "disabled");
            $.post("<?php echo U('Verify/myzc');?>", {}, function (data) {
                if (data.status == 1) {
                    layer.msg(data.info, {icon: 1});
                    var obj = $('#regBtn');
                    var wait = 60;
                    var interval = setInterval(function () {
                        obj.css('backgroundColor', '#999B9C');
                        obj.val(wait + '<?php echo L('second_to_send_again');?>');
                        wait--;
                        if (wait < 0) {
                            clearInterval(interval);
                            obj.val('<?php echo L('get_sms_code');?>');
                            obj.css('backgroundColor', '#0096e0');
                        }
                        ;
                    }, 1000);
                }
            }, "json");
        }

        function Update() {

            var coin = "<?php echo ($xnb); ?>";
            var addr = $('#myzc_addr option:selected').val();
            var num = $("#nums").val();
            var moble_verify = $("#moble_verify").val();
            var paypassword = $("#paypassword").val();

            if (addr == "" || addr == null) {
                layer.tips('<?php echo L('finance_select_wallet');?>', '#myzc_addr', {tips: 3});
            return false;
        }

        if (num == "" || num == null) {
            layer.tips('<?php echo L('finance_enter_transfer_out_amount');?>', '#nums', {tips: 3});
        return false;
        }

        if (paypassword == "" || paypassword == null) {
            layer.tips('<?php echo L('enter_trade_password');?>', '#paypassword', {tips: 3});
        return false;
        }

        $.post("<?php echo U('Finance/upmyzc1');?>", {
            coin: coin,
            addr: addr,
            num: num,
            paypassword: paypassword,
            moble_verify: moble_verify
        }, function (data) {
            if (data.status == 1) {
                layer.msg(data.info, {icon: 1});
                window.location = "<?php echo U('Finance/myzc');?>?coin=" + coin;
            } else {
                layer.msg(data.info, {icon: 2});
            }
        }, "json");

        }
</script>
</body>
</html>