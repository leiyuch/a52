<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="renderer" content="webkit">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo C('web_title');?></title>
	<meta name="Keywords" content="<?php echo C('web_keywords');?>">
	<meta name="Description" content="<?php echo C('web_description');?>">
	<meta name="author" content="meunite.com">
	<meta name="coprright" content="meunite.com">
	<link rel="shortcut icon" href=" /favicon.ico"/>
    <script src="/Public/Home1/Scripts/jquery-1.8.2.min.js" ></script>
    <link type="text/css" rel="stylesheet" href="/Public/Home1/Css/style.css">
    <link type="text/css" rel="stylesheet" href="/Public/Home1/Css/style1.css">
    <link type="text/css" rel="stylesheet" href="/Public/Home1/Css/usercenter.css">
    <link type="text/css" rel="stylesheet" href="/Public/Home1/Css/style2.css">
	 <link href="/Public/Home1/index/assets/index/images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="/Public/Home1/index/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/mdi.min.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/ripple.min.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/animate.min.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/slick.css" rel="stylesheet">

    <link href="/Public/Home1/index/css/slick-theme.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/jquery.carousel-3d.default.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/vegas.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/jquery.mb.ytplayer.min.css" rel="stylesheet">
  <!--<link href="/Public/Home1/index/css/app.css" rel="stylesheet">-->
    <link id="app_theme" href="/Public/Home1/index/css/app-theme-5.css" rel="stylesheet">

    <link href="/Public/Home1/index/css/app-demo.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/app-custom.css" rel="stylesheet">
    <link href="/Public/Home1/index/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/Home1/index/fonts/css/fonts.css" rel="stylesheet">
    <link href="/Public/Home1/Css/style.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/apple-touch-icon-120x120.png" />
    <script src="/Public/layer/layer.js"></script>
    <script src="/Public/Home1/Scripts/jquery-1.8.2.min.js" type="javascript"></script>
   
    <!--<script src="/Public/Home/js/jquery.min.js" type="javascript"></script>-->
   
    <script src="/Public/Home1/Scripts/jquery.cookies.2.2.0.js"></script>
    <script src="/Public/Home1/index/js/modernizr.js"></script>
    <style>
    @font-face {
        font-family: 'Glyphicons Halflings';
        src: url('fonts/glyphicons-halflings-regular.eot');
        src: url('fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('fonts/glyphicons-halflings-regular.woff') format('woff'), url('fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
    }

    .glyphicon {
        position: relative;
        top: 1px;
        display: inline-block;
        font-family: 'Glyphicons Halflings';
        -webkit-font-smoothing: antialiased;
        font-style: normal;
        font-weight: normal;
        line-height: 1;
        -moz-osx-font-smoothing: grayscale;
    }

    .hearder_top {
        line-height: 33px;
        height: 33px;
        width: 100%;
        background: #000;
        font-size: 12px;
        font-family: tahoma, Microsoft YaHei, Arial, Helvetica, sans-serif;
    }

    .autobox {
        width: 1200px;
        margin: 0 auto;
        min-width: 1200px;
    }

    .hearder_top a:hover {
        text-decoration: underline
    }

    .autobox {
        width: 1200px;
        margin: 0 auto;
        min-width: 1200px;
    }

    .autobox .disc {
        float: left;
        height: 4px;
        width: 4px;
        border-radius: 2px;
        background: #e55600;
        display: inline;
        margin-right: 8px;
        overflow: hidden;
        margin-top: 17px
    }

    .po_re {
        position: relative
    }

    .zin100 {
        z-index: 100
    }

    .welcome {
        float: left;
        color: #888
    }

    .right {
        float: right
    }

    .mywallet {
        font-size: 12px;
        _width: 300px
    }

    .mywallet dt {
        float: left;
        line-height: 32px;
        position: relative;
        z-index: 110
    }

    .mywallet_name {
        padding: 0 11px;
        border: 1px solid #f6f6f6;
        border-bottom: none;
        position: relative;
        z-index: 120
    }

    .mywallet dt:hover .mywallet_name {
        background: #fff;
        box-shadow: 0 -4px 4px #d9d9d9;
        border: 1px solid #d9d9d9;
        border-bottom: none
    }

    .mywallet_list {
        position: absolute;
        right: 0;
        top: 32px;
        background: #fff;
        box-shadow: 0 0 4px #d9d9d9;
        border: 1px solid #d9d9d9;
        padding: 9px 14px 8px;
        width: 406px;
        display: none
    }

    .mywallet_list ul {
        float: left;
        width: 203px
    }

    .mywallet_list h4 {
        font-weight: normal;
        margin-bottom: 4px;
        height: 30px;
        line-height: 30px;
        font-size: 14px;
        color: #333
    }

    .mywallet_list li {
        height: 30px;
        line-height: 30px;
        font-size: 12px
    }

    .mywallet_list li em,
    .price_today_ul em,
    #profit_list em {
        float: left;
        width: 26px;
        height: 19px;
        margin-top: 11px;
        background: url(../images/coinstyle.png?v=1.40) no-repeat
    }

    .mywallet_list li strong {
        float: left;
        font-weight: normal;
        color: #333
    }

    .mywallet_list span {
        float: left
    }

    .balance_list li a span {
        color: #690
    }

    .freeze_list li a span {
        color: #e55600
    }

    .mywallet dt a {
        color: #e55600;
        float: left
    }

    .mywallet dt a:hover strong {
        color: #e55600
    }

    .mywallet dt i {
        height: 3px;
        margin-top: 15px;
        margin-left: 6px;
        width: 6px;
        overflow: hidden;
        background: url(../images/icon.png) no-repeat left -181px;
        float: left;
        webkit-transition: 0.3s ease all;
        transition: 0.3s ease all;
        -o-transition: 0.3s ease all;
        -moz-transition: 0.3s ease all;
        -ms-transition: 0.3s ease all;
        transform: rotateZ(0deg);
        -webkit-transform: rotateZ(0deg);
        -moz-transform: rotateZ(0deg);
        -ms-transform: rotateZ(0deg);
        -o-transform: rotateZ(0deg);
        display: inline
    }

    .mywallet dt:hover i {
        transform: rotateZ(180deg);
        -webkit-transform: rotateZ(180deg);
        -moz-transform: rotateZ(180deg);
        -ms-transform: rotateZ(180deg);
        -o-transform: rotateZ(180deg)
    }

    .mywallet dd {
        float: left;
        padding: 0 6px 0 5px;
        line-height: 33px;
        color: #333
    }

    .mywallet dd span,
    .mywallet dd a {
        color: #e55600
    }

    .mywallet_btn_box {
        margin-top: 11px;
        border-top: 1px dotted #888;
        padding-top: 15px;
        width: 408px
    }

    .mywallet_btn_box a {
        float: left;
        width: 80px;
        height: 25px;
        border: 1px solid #e55600;
        margin-right: 10px;
        margin-bottom: 10px;
        color: #e55600;
        background: #fff;
        line-height: 25px;
        font-size: 14px;
        text-align: center;
        border-radius: 3px;
        webkit-transition: 0.3s ease all;
        transition: 0.3s ease all;
        -o-transition: 0.3s ease all;
        -moz-transition: 0.3s ease all;
        -ms-transition: 0.3s ease all
    }

    .mywallet_btn_box a:hover {
        color: #fff;
        background: #e55600;
        text-decoration: none
    }

    .clear {
        zoom: 1
    }

    .clear:after {
        display: block;
        content: "";
        clear: both
    }

    .orange {
        color: #e55600!important
    }

    .zhuce {
        background: url(/Public/Home1/images/zhuce.png) no-repeat 6px 6px;
        display: inline-block;
        padding-left: 29px;
        background-size: 35%
    }


    .orange-lang {
        margin-left: 30px;
    }

    .orange-lang a {
        color: #e55600!important;
    }

    .news_clua {
        width: 288px;
        float: left;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        color: #818181;
        font-size: 14px;
    }

    .news_clda {
        width: 80px;
        float: right;
        text-align: right;
        color: #818181;
        font-size: 14px;
    }
    </style>
    <script type="text/javascript">
    function loginpop() {
        $('.all_mask').css({ 'height': $(document).height() });
        $('.all_mask').show();
        $('.all_mask_loginbox').show();
        $(".reloadverify").click();
    }
    </script>
</head>

<body>
    <!--[if lt IE 8]><p class="browserupgrade">You are using an <strong>outdated</strong> browser.
Please <a href="http://browsehappy.com/">upgrade your browser</a>
to improve your experience.</p><![endif]-->
    <div class="site" id="site">
        <!-- <div class="site-loader" id="site_loader">
            <div class="site-loader__wrap">
                <div class="loader loader_circular"></div>
            </div>
        </div> -->
        <!-- .site-loader-->
        <div class="site-canvas" id="site_canvas">
            <div class="site-header site-header-fixed-top" id="site_header">
                <nav class="navbar site-navbar navbar-lg navbar-primary navbar-bg-from-transparent navbar-fg-from-light" id="site_navbar" style="background:rgb(7, 105, 224); ">
                    <div class="hearder_top">
                        <div class="autobox po_re zin100" id="header">
                            <div class="welcome"><?php echo C('top_name');?></div>
                            <div class="right " id="login">
                                <?php if(($_SESSION['userId']) > "0"): ?><dl class="mywallet">
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
                                    </dl>
                                    <?php else: ?>
                                    <!-- 登陆前 -->
                                    <div class="">
                                        <span class="zhuce"><a class="" style="color:#e55600!important" href="<?php echo U('Login/register');?>"><?php echo L('register');?></a></span> |
                                        <a href="<?php echo U('Login/index');?>" class="" style="color:#e55600!important"><?php echo L('login');?></a>
                                        <span class="orange-lang"> <a href="?lang=zh">中文版</a> | <a href="?lang=en">English</a></span>
                                    </div><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#site_navbar_collapse"><i class="navbar-toggle-icon mdi mdi-menu"></i></button>
                            <div class="site-branding">
                                <h1 class="site-branding-title sr-only"><a class="site-branding-title-link" href="#">Site title</a></h1>
                                <div class="site-branding-media">
                                    <a class="site-branding-media-link" href="/"><!--<img class="site-branding-media-img site-branding-media-img-light" src="/Public/Home1/index/images/site-branding-media-img-light.png" alt=""> <img class="site-branding-media-img site-branding-media-img-dark" src="/Public/Home1/index/images/site-branding-media-img-dark.png" alt=""> -->
                                   <?php if((LANG_SET == 'en') && (!empty($C['web_logo_en']))): ?><img src="/Upload/public/<?php echo ($C['web_logo_en']); ?>" alt=""/>
                                    <?php else: ?>
                                    <img src="/Upload/public/<?php echo ($C['web_logo']); ?>" alt=""/><?php endif; ?>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="site_navbar_collapse">
                            <div class="navbar-right">
                                <ul class="nav navbar-nav menu primary-menu">
                                    <li class="menu-item active"><a href="/" id="index_box"><?php echo L('home');?></a></li>
                                    <li class="menu-item"><a id="trade_box" href="<?php echo U('Trade/index');?>"><?php echo L('trade');?></a></li>
                                    <li class="menu-item"><a id="finance_box" href="<?php echo U('Finance/index');?>"><?php echo L('finance');?></a></li>
                                    <li class="menu-item"><a id="user_box" href="<?php echo U('User/index');?>"><?php echo L('security');?></a></li>
                                    <li class="menu-item"><a id="article_box" href="<?php echo U('Article/index');?>"><?php echo L('help');?></a></li>
                                    <!--  <li class="menu-item"><a href="#contact_1_section" data-smooth-scroll="true">Contact</a></li> -->
                                </ul>
                                <!-- <button class="btn btn-secondary navbar-btn" type="button" data-toggle="modal" data-target="#subscribe_form_1_modal">Subscribe</button> -->
                            </div>
                        </div>
                    </div>
                    <!-- .container-fluid-->
                </nav>
                <!-- .navbar-->
            </div>
            <!-- .site-header-->

<!--头部结束-->
<div class="content clearfix" >
    <!--左侧菜单-->
    ﻿<table class="leftbar" style="padding-top: 35px">
    <tbody>
        <tr>
            <td style="border-bottom:0;" valign="top">
                <div id="marketlist_wrapper" class="dataTables_wrapper" role="grid">
                    <table class="marketlist dataTable" id="tradelist" cellspacing="0" cellpadding="0">
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <tr>
                                <td class="no-wrap alignRight" style=" width:100%;border:none">
                                    <div id="wrapper-250">
                                        <ul class="accordion">
                                            <li id="adn1" class="files">
                                                <a href="#one" class="active">认证中心<span class="umicon"></span></a>
                                                <ul class="sub-menu" style="display: block;">
                                                    <li><a data-id="id_setup" href="<?php echo U('User/nameauth');?>"><em>07</em><?php echo L('certification');?></a></li>
                                                    <li><a data-id="totp" href="<?php echo U('User/ga');?>"><em>10</em><?php echo L('user_set_dual_authentication');?></a></li>
                                                    <li><a data-id="sms_setup" href="<?php echo U('User/moble');?>"><em>11</em><?php echo L('bound_phone');?></a></li>
                                                    <li><a data-id="login2_setup" href="<?php echo U('User/alipay');?>"><em>12</em><?php echo L('user_bound_alipay');?></a></li>
                                                    <li><a data-id="mylogs" href="<?php echo U('User/bank');?>"><em>14</em><?php echo L('user_bank_card_management');?></a></li>
                                                </ul>
                                            </li>
                                            <li id="adn4" class="control">
                                                <a href="#two" class=""><?php echo L('user_modify_login_password');?><span class="umicon"></span></a>
                                                <ul class="sub-menu" style="display: none;">
                                                    <li><a data-id="resetpw" href="<?php echo U('User/password');?>"><em>08</em><?php echo L('user_modify_login_password');?></a></li>
                                                    <li><a data-id="resetfpw" href="<?php echo U('User/paypassword');?>"><em>09</em><?php echo L('user_modify_trade_password');?></a></li>
                                                    <li><a data-id="apikeys" href="<?php echo U('User/tpwdset');?>"><em>13</em><?php echo L('user_set_trade_password_enter');?></a></li>
                                                    <li><a data-id="mylogs" href="<?php echo U('User/goods');?>"><em>14</em><?php echo L('user_contact_address_management');?></a></li>
                                                </ul>
                                            </li>
                                            <li id="adn5" class="cloud">
                                                <a href="#two" class=""><?php echo L('user_wallet_address_management');?><span class="umicon"></span></a>
                                                <ul class="sub-menu" style="display: none;">

                                                    <li><a data-id="mylogs" href="<?php echo U('User/qianbao');?>"><em>14</em><?php echo L('user_wallet_address_management');?></a></li>
                                                </ul>
                                            </li>
                                            <li id="adn6" class="sign">
                                                <a href="#two" class=""><?php echo L('user_login_log');?><span class="umicon"></span></a>
                                                <ul class="sub-menu" style="display: none;">

                                                    <li><a data-id="mylogs" href="<?php echo U('User/log');?>"><em>14</em><?php echo L('user_login_log');?></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </tbody>
</table>


<!--<div class="coin_menu">
    <div class="coin_menu_box">
        <ul>
            <li id="user_index">
                <i class="coin_menu_op_14_1"></i><a href="<?php echo U('User/index');?>"><?php echo L('security');?></a>
            </li>
            <li id="user_nameauth">
                <i class="coin_menu_op_8_1"></i><a href="<?php echo U('User/nameauth');?>"><?php echo L('certification');?></a>
            </li>
            <li id="user_password">
                <i class="coin_menu_op_9_1"></i><a href="<?php echo U('User/password');?>"><?php echo L('user_modify_login_password');?></a>
            </li>
            <li id="user_paypassword">
                <i class="coin_menu_op_10_1"></i><a href="<?php echo U('User/paypassword');?>"><?php echo L('user_modify_trade_password');?></a>
            </li>
            <li id="user_ga">
                <i class="coin_menu_op_11_1"></i><a href="<?php echo U('User/ga');?>"><?php echo L('user_set_dual_authentication');?></a>
            </li>
            <li id="user_moble">
                <i class="coin_menu_op_12_1"></i><a href="<?php echo U('User/moble');?>"><?php echo L('bound_phone');?></a>
            </li>
            <li id="user_alipay">
                <i class="coin_menu_op_6_1"></i><a href="<?php echo U('User/alipay');?>"><?php echo L('user_bound_alipay');?></a>
            </li>
            <li id="user_tpwdset">
                <i class="coin_menu_op_15_1"></i><a href="<?php echo U('User/tpwdset');?>"><?php echo L('user_set_trade_password_enter');?></a>
            </li>
            <li id="user_bank">
                <i class="coin_menu_op_3_1"></i><a href=" <?php echo U('User/bank');?>"><?php echo L('user_bank_card_management');?></a>
            </li>
            <li id="user_qianbao">
                <i class="coin_menu_op_0_1"></i><a href=" <?php echo U('User/qianbao');?>"><?php echo L('user_wallet_address_management');?></a>
            </li>
            <li id="user_goods">
                <i class="coin_menu_op_13_1"></i><a href=" <?php echo U('User/goods');?>"><?php echo L('user_contact_address_management');?></a>
            </li>
            <li id="user_log">
                <i class="coin_menu_op_7_1"></i><a href=" <?php echo U('User/log');?>"><?php echo L('user_login_log');?></a>
            </li>
        </ul>
    </div>
</div>-->
    <script type="text/javascript">
        $(document).ready(function () {
            // Store variables
            var accordion_head = $('.accordion > li > a'),
                accordion_body = $('.accordion li > .sub-menu');
            // Open the first tab on load
            //accordion_head.first().addClass('active').next().slideDown('normal');
            //accordion_body.eq(2).find('a').eq(2).css('background', ' #efefef');
            var found = false;
            for (i = 0; i < accordion_body.length; i++) {
                item = accordion_body.eq(i).find("[data-id='']");
                if (item.length > 0) {
                    accordion_head.eq(i).addClass('active').next().slideDown('normal');
                    item.css({ 'color': ' #ff5e23', 'border-right-width': '3px', 'border-right-color': '#ff5e23' });
                    found = true;
                    break;
                }
            }
            if (found == false)
                accordion_head.eq(0).addClass('active').next().slideDown('normal');
            // Click function
            accordion_head.on('click', function (event) {
                // Disable header links
                event.preventDefault();
                // Show and hide the tabs on click
                if ($(this).attr('class') != 'active') {
                    accordion_body.slideUp('normal');
                    $(this).next().stop(true, true).slideToggle('normal');
                    accordion_head.removeClass('active');
                    $(this).addClass('active');
                }
            });

            var icoType = '';
            if (icoType == '') {
                $("#buyIco").parent("li").remove()
            }

            $("input").focus(function () {
                $(".failed").html("")
            });

            $(".files,.cloud,.mail").find("li").click(function () {
                $.cookie('nav_index', 2, { path: '/' });
            });
            $(".sign").find("li").click(function () {
                $.cookie('nav_index', 3, { path: '/' });
            });
        });
    </script>
    <!--右侧内容-->
    <div class="main_content acc-m-con">
        <div class="right_mcontent">
            <div class="safe_center clear" style="padding-left: 0px; border-bottom: 2px solid #e55600;">
                <h1 style="margin-top: 0px; margin-bottom: 15px; line-height: 15px;"><?php echo L('user_set_dual_authentication');?></h1>
            </div>

            <?php if(!empty($prompt_text)): ?><div class="mytips">
                    <h6 style="color: #ff8000;"><?php echo L('kindly_reminder');?></h6>
                    <?php echo ($prompt_text); ?>
                </div><?php endif; ?>

            <br>

            <?php if(($is_ga) == "0"): ?><!--     <form id="form-gaa" class="assets_content w900 right bg_w">-->
                    <div class="pb29">
                        <div class="dv_info">
                            <p><?php echo L('user_ga_desc_1');?></p>

                            <p><?php echo L('user_ga_desc_2');?></p>
                        </div>
                        <div class="dv_title">
                            <em class="dv_num_1"></em> <?php echo L('user_ga_desc_3');?>
                        </div>
                        <div class="dv_content">
                            <div class="mbphone_btn" id="mbphone_btn">
                                <dl>
                                    <dt><?php echo L('user_ga_desc_4');?></dt>
                                    <dd>
                                        <a target="_blank"
                                           href="http://itunes.apple.com/cn/app/google-authenticator/id388497605?mt=8"><?php echo L('user_click_view');?></a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo L('user_ga_desc_5');?></dt>
                                    <dd>
                                        <a target="_blank" href="http://apk.hiapk.com/html/2013/07/1643619.html"><?php echo L('user_click_download');?></a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt><?php echo L('user_ga_desc_16');?></dt>
                                    <dd>
                                        <a target="_blank" href="http://code.google.com/p/lwuitgauthj2me/"><?php echo L('user_click_download');?></a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="dv_title">
                            <em class="dv_num_2"></em> <?php echo L('user_ga_desc_6');?>
                        </div>
                        <div class="dv_content">
                            <p><?php echo L('user_ga_desc_7');?></p>

                            <div class="dv_ewm" id="qrcode"></div>
                            <p>
                                <?php echo L('user_ga_desc_8');?><b><?php echo ($Asecret); ?></b>
                            </p>
                        </div>
                        <div class="dv_title">
                            <em class="dv_num_3"></em><?php echo L('user_configuration_complete');?>
                        </div>
                        <div class="dv_content">
                            <p><?php echo L('user_ga_desc_9');?></p>

                            <p class="orange"><?php echo L('user_ga_desc_10');?></p>

                            <p class="orange">
                                <?php echo L('user_ga_desc_11');?> :
                                <b><?php echo ($Asecret); ?></b> <?php echo L('user_ga_desc_12');?>
                            </p>

                            <p><?php echo L('user_ga_desc_13');?></p>

                            <div class="dv_input">
                                <input type="hidden" name="secret" value="<?php echo ($Asecret); ?>"> <?php echo L('user_dual_authentication_pwd');?>：<input id="ga" type="text"
                                                                                                                                   name="ga" />

                                <div class="dv_ts">
                                    <em></em><?php echo L('user_ga_desc_14');?>
                                </div>
                            </div>
                            <div class="dv_radio">
                                <?php echo L('user_ga_desc_15');?>：
                                <label for="ga-login">
                                    <input type="checkbox" id="ga-login" name="login" checked="1"><?php echo L('login');?>
                                </label>
                                <label for="ga-transfer">
                                    <input type="checkbox" id="ga-transfer" checked="1"
                                           name="transfer"><?php echo L('user_money_out');?>
                                </label>
                            </div>
                        </div>
                        <div class="dv_title">
                            <em class="dv_num_4"></em>

                            <div class="dv_submit">
                                <input type="button" onclick="goole_verify()" value="<?php echo L('user_verify_and_enable');?>">
                            </div>
                        </div>
                    </div>
                <!--</form>-->
                <script type="text/javascript" src="/Public/Home/js/jquery.qrcode.min.js"></script>
                <script>
                    $('#qrcode').qrcode({
                        render: "table", //table方式
                        size: 200,
                        text: "<?php echo ($qrCodeUrl); ?>" //任意内容
                    }); //任意字符串

                    function goole_verify() {
                        var ga = $('#ga').val();
                        var ga_login = $('#ga-login').is(':checked') ? 1 : 0;
                        var ga_transfer = $('#ga-transfer').is(':checked') ? 1 : 0;
                        var ga = $('#ga').val();
                        if (!ga) {
                            layer.tips('<?php echo L('enter_captcha');?>', '#ga', {
                            tips: [
                                1,
                                '#0FA6D8'
                            ]
                        });
                        return;
                    }
                    $.post("<?php echo U('user/ga');?>", {
                        ga: ga,
                        ga_login: ga_login,
                        ga_transfer: ga_transfer,
                        type: 'add'
                    }, function (ret) {
                        if (ret.status) {
                            layer.msg('<?php echo L('user_operation_success_jump');?>...', {icon: 16});
                            setTimeout('flash()', 3000);
                        } else {
                            layer.msg(ret.info);
                        }
                    }, 'json');
                    }
                </script>
                <?php else: ?>
                <!--<form id="form-ga" class="assets_content w900 right bg_w">-->
                    <div class="set_verify">
                        <ul>
                            <li><?php echo L('user_ga_desc_15');?>：</li>
                            <li>
                                <label for="ga-login">
                                    <input type="checkbox" id="ga-login" name="login">
                                    <?php if(($ga_login) == "1"): ?>checked="1"<?php endif; ?>
                                    >
                                    <?php echo L('login');?>
                                </label>
                                <span>(<?php echo L('user_login_ga_desc');?>)</span>
                            </li>
                            <li>
                                <label for="ga-transfer">
                                    <input type="checkbox" id="ga-transfer" name="transfer">
                                    <?php if(($ga_transfer) == "1"): ?>checked="1"<?php endif; ?>
                                    >
                                    <?php echo L('user_money_out');?>
                                </label>
                                <span>(<?php echo L('user_money_out_ga_desc');?>)</span>
                            </li>
                            <li>
                                <div class="sv_input">
                                    <input id="ga" placeholder="<?php echo L('user_enter_ga_pwd');?>" type="text">
                                </div>
                            </li>
                        </ul>
                        <div class="save_verify">
                            <input value="<?php echo L('save');?>" type="button" onclick="google_set()">
                        </div>
                    </div>
                    <div class="off_fn">
                        <dl>
                            <dt><?php echo L('user_open_or_close_ga');?>：</dt>
                            <dd>
                                <div class="off_fn_input">
                                    <input id="ga_delete" name="ga_delete" placeholder="<?php echo L('user_enter_ga_pwd');?>" type="text">
                                </div>
                            </dd>
                            <dd class="clear">
                                <a onclick="ga_cancel()"><?php echo L('user_cancel_ga');?></a>
                            </dd>
                        </dl>
                    </div>
                <!--</form>-->
                <script>
                    function google_set() {
                        var ga = $('#ga').val();
                        var ga_login = $('#ga-login').is(':checked') ? 1 : 0;
                        var ga_transfer = $('#ga-transfer').is(':checked') ? 1 : 0;
                        var ga = $('#ga').val();
                        if (!ga) {
                            layer.tips('<?php echo L('enter_captcha');?>', '#ga', {
                            tips: [
                                1,
                                '#0FA6D8'
                            ]
                        });
                        return;
                    }
                    $.post("<?php echo U('user/ga');?>", {
                        ga: ga,
                        ga_login: ga_login,
                        ga_transfer: ga_transfer,
                        type: 'update'
                    }, function (ret) {
                        if (ret.status) {
                            layer.msg('<?php echo L('user_operation_success_jump');?>...', {icon: 16});
                            setTimeout('flash()', 3000);
                        } else {
                            layer.msg(ret.info);
                        }
                    }, 'json');
                    }

                    function ga_cancel() {
                        var ga = $('#ga_delete').val();
                        var ga = $('#ga_delete').val();
                        if (!ga) {
                            layer.tips('<?php echo L('enter_captcha');?>', '#ga_delete', {
                            tips: [
                                1,
                                '#0FA6D8'
                            ]
                        });
                        return;
                    }
                    $.post("<?php echo U('user/ga');?>", {
                        ga: ga,
                        type: 'delete'
                    }, function (ret) {
                        if (ret.status) {
                            layer.msg('<?php echo L('user_operation_success_jump');?>...', {icon: 16});
                            setTimeout('flash()', 3000);
                        } else {
                            layer.msg(ret.info);
                        }
                    }, 'json');
                    }
                </script><?php endif; ?>
        </div>
    </div>

</div>
<br>
<br>
<script>

    $('#user_box').addClass('active');
    $('#user_ga').addClass('active');
    $('#user_ga i').attr('class', 'coin_menu_op_11');

    function flash() {

        window.location = "<?php echo U('user/ga');?>"
    }
</script>
<style>
.backToTop {
    display: none;
    width: 38px;
    padding: 12px 0 5px;
    background-color: #000;
    color: #fff;
    font-size: 26px;
    text-align: center;
    position: fixed;
    z-index: 888;
    right: 10px;
    bottom: 65px;
    cursor: pointer;
    opacity: .4;
    filter: Alpha(opacity=40)
}
.backToTop:hover {
    opacity: 0.9
}

.footer{clear:both;height:522px;margin-bottom:-19px;border-top: 1px solid #ddd;background:#fff;z-index:2;position:relative}
</style>
<link href="/Public/Home1/index/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/Public/Home1/index/css/mdi.min.css" rel="stylesheet"> -->
    <!-- <link href="/Public/Home1/index/css/ripple.min.css" rel="stylesheet"> -->
 <!--    <link href="/Public/Home1/index/css/animate.min.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/slick.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/slick-theme.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/jquery.carousel-3d.default.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/vegas.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/jquery.mb.ytplayer.min.css" rel="stylesheet">-->
<!-- <link href="/Public/Home1/index/css/app.css" rel="stylesheet"> -->
<link id="app_theme" href="/Public/Home1/index/css/app-theme-5.css" rel="stylesheet">
<!-- link href="index/css/mdi.min.css" rel="stylesheet">  -->

 <!-- <script src="/Public/Home1/index/js/bootstrap.min.js"></script> -->
<!-- <script src="/Public/Home1/index/js/jquery.min.js"></script>
    <script src="/Public/Home1/index/js/jquery.easing.min.js"></script>
   
    <script src="/Public/Home1/index/js/jquery.mb.ytplayer.min.js"></script>
    <script src="/Public/Home1/index/js/jquery.resize.js"></script>
    <script src="/Public/Home1/index/js/jquery.waitforimages.min.js"></script>
    <script src="/Public/Home1/index/js/device.js"></script>
    <script src="/Public/Home1/index/js/imagesloaded.pkgd.min.js"></script>
    <script src="/Public/Home1/index/js/wow.min.js"></script>
    <script src="/Public/Home1/index/js/jquery.validate.min.js"></script>
    <script src="/Public/Home1/index/js/ripple.min.js"></script>
    <script src="/Public/Home1/index/js/slick.min.js"></script>
    <script src="/Public/Home1/index/js/jquery.carousel-3d.min.js"></script>
    <script src="/Public/Home1/index/js/jquery.parallax-1.1.3.js"></script>
    <script src="/Public/Home1/index/js/vegas.js"></script>
    <script src="/Public/Home1/index/js/jquery.mb.ytplayer.min.js"></script> -->
    <!-- <script src="/Public/Home1/index/js/app.js"></script> -->
    </div>
<!-- .site-content-->
<div class="site-footer" id="site_footer">
    <div class="site-footer-info-1 section section-sm" id="site_footer_info_1" style="background-color: #0769e0;">
        <div class="container"><a class="btn btn-fab btn-secondary wow bounceIn" id="btn_scroll_to_top" href="#"><i class="icon mdi mdi-chevron-up"></i></a>
            <div class="section-content row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="site-footer-branding wow bounceIn" style="visibility: visible;animation-name: bounceIn;">
                        <div class="site-footer-branding-media">
                            <?php if((LANG_SET == 'en') && (!empty($C['footer_logo_en']))): ?><a href="javascript:" class="site-footer-branding-media-link"><img src="/Upload/public/<?php echo ($C['footer_logo_en']); ?>"></a>
                                <?php else: ?>
                                <a href="javascript:" class="site-footer-branding-media-link"><img src="/Upload/public/<?php echo ($C['footer_logo']); ?>"></a><?php endif; ?>
                        </div>
                    </div>
                    <div class="site-footer-social">
                        <ul class="list-inline text-center">
                            <li class="site-footer-social-item"><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                            <li class="site-footer-social-item"><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                            <li class="site-footer-social-item"><a href="https://plus.google.com/" target="_blank">Google+</a></li>
                            <li class="site-footer-social-item"><a href="https://dribbble.com/" target="_blank">Dribbble</a></li>
                        </ul>
                    </div>
                    <div class="site-footer-copyright">
                        <div>Copyright &copy; 2017 <?php echo ($C['web_name']); ?>. All Rights Reserved. &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action" target="_blank"><?php echo ($C['web_icp']); ?></a><span style="display: inline-block; color:#A6A9AB"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .site-footer-->
<script>
//backtotop
(function() {
    var $backToTopTxt = "^",
        $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
        .text($backToTopTxt).click(function() {
            $("html, body").animate({ scrollTop: 0 }, 500);
        }),
        $backToTopFun = function() {
            var st = $(document).scrollTop(),
                winh = $(window).height();
            (st > 0) ? $backToTopEle.show(): $backToTopEle.hide();
            //IE6下的定位
            if (!window.XMLHttpRequest) {
                $backToTopEle.css("top", st + winh - 166);
            }
        };
    $(window).bind("scroll", $backToTopFun);
    $(function() { $backToTopFun(); });
})();
</script>
</body>

</html>