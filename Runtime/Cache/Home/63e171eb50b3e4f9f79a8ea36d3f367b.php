<?php if (!defined('THINK_PATH')) exit();?>﻿
﻿<!DOCTYPE html>
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
	<script src="/Public/layer/layer.js"></script>
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
		
<section class="login-content clearfix ">
    <div class="form" style="height:395px">
        <div class="title">实名认证</div>
        <div class="input register_email">
            <!-- <form action="#" id="registerForm" method="post" novalidate="novalidate"> -->
                
                <div class="tel-box">
                    <span class="tip" style="position: absolute; right: 0; margin-top: -20px;color: red"></span>
                    <div class="input-box">
                        <input type="text" autocomplete="off" tabindex="2" placeholder="请输入真实姓名" name="regtruename" id="regtruename">
                        <i class="icon email-icon"></i>
                    </div>
                </div>
                <div class="tel-box">
                        <span class="tip" style="position: absolute; right: 0; margin-top: -20px;color: red"></span>
                        <div class="input-box">
                            <input type="text" autocomplete="off" value="" tabindex="1" placeholder="请输入身份证件" name="regidcard" id="regidcard">
                            <i class="icon email-icon"></i>
                        </div>
                    </div>

                    <div class="tel-box">
                            <span class="tip" style="position: absolute; right: 0; margin-top: -20px;color: red"></span>
                            <div class="input-box">
                                <input type="text" autocomplete="off" value="" tabindex="1" placeholder="请输入邮箱" name="regemail" id="regemail">
                                <i class="icon email-icon"></i>
                            </div>
                        </div>  
                <button class="button" id="saveBtn-e" onclick="add();" style="margin-top: 25px;">下一步</button>
               
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
<script src="/Public/layer/layer.js"></script>
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

}
function f_email(value){
   var re=/^(?:[a-z\d]+[_\-\+\.]?)*[a-z\d]+@(?:([a-z\d]+\-?)*[a-z\d]+\.)+([a-z]{2,})+$/i;
   return re.test(value);
}
function add() {
                  var truename=$("#regtruename").val();
                    var idcard=$("#regidcard").val();
                    var email=$("#regemail").val();

                    /*
                    if(truename==""||truename=null){
                        formMsg('truename', 0, '请输入真实姓名');
                        return false;
                    }*/
                    if(truename=="" || truename==null || truename=="请输入真实姓名"){
                       // formMsg('idcard', 0, '<?php echo L('enter_id_number');?>');
                        layer.alert('请输入真实姓名', {
                        icon: 2,
                        skin: 'layer-ext-moon'
                        });
                        $("#regtruename").focus();
                        return false;
                    }
                    if(idcard=="" || idcard==null || idcard=="请输入身份证件"){
                       // formMsg('idcard', 0, '<?php echo L('enter_id_number');?>');
                        layer.alert('<?php echo L('enter_id_number');?>', {
                        icon: 2,
                        skin: 'layer-ext-moon'
                        });
                        $("#regidcard").focus();
                        return false;
                    }

                    if (!f_email(email)) {
                        layer.alert("请输入正确的邮箱！", {
                        icon: 2,
                        skin: 'layer-ext-moon'
                        });
                        $("#regemail").focus();
                        return false;
                    } 


                    $.post("<?php echo U('Login/upregister3');?>",{truename:truename,idcard:idcard,email:email},function(data){
                        if(data.status==1){
                          //  layer.msg(data.info,{icon:1});
                            // layer.alert(data.info, {
                            //  icon: 1,
                            //  skin: 'layer-ext-moon'
                            // });
                            window.location='/Login/register4';
                        }else{
                             layer.alert(data.info, {
                             icon: 2,
                             skin: 'layer-ext-moon'
                            });
                            // layer.msg(data.info,{icon:2});
                            // if(data.url){
                            //     window.location=data.url;
                            // }
                        }
                    },"json");
    
    }
</script>
</body>
</html>