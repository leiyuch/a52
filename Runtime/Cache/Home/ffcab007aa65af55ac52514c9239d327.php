<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=100%; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <title>用户登录/注册 -  - 优质区块链资产交易平台，支持比特币，莱特币，以太坊等交易</title>
    <meta name="description" content="比特儿 的网址是 bter.com， 是一个中文比特币Bitcoin, 以太坊, Ethereum,莱特币, Litecoin，交易平台，其特点是快捷，安全。 ">
    <meta name="keywords" content="比特币, bitcoin, BTC, Ethereum, 以太坊, litecoin, LTC, namecoin, ppcoin, ETC, ETH, FTC, NMC, PPC, 交易平台，交易网站，比特币交易，比特币兑换，比特币市场 ">
    <link href="Css/style.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/apple-touch-icon-120x120.png" />
    <link type="text/css" rel="stylesheet" href="/Public/Home1/Css/style.css">
    <link type="text/css" rel="stylesheet" href="/Public/Home1/Css/style1.css">
    <link type="text/css" rel="stylesheet" href="/Public/Home1/Css/usercenter.css">
    <link type="text/css" rel="stylesheet" href="/Public/Home1/Css/style2.css">
    <script type="text/javascript" src="/Public/Home1/Scripts/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home1/Scripts/jquery.common.tools.js"></script>
    <script src="/Public/Home/js/jquery.copy.js"></script>
    <script src="/Public/Home/js/qrcode.js"></script>

    <!--[if IE]><script src="Scripts/html5.js"></script><![endif]-->
    <script>
        (function () {
            if (! /*@cc_on!@*/ 0) return;
            document.createElement("template");
        })();
    </script>
    <style>
        *:before, *:after, .form-control {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .glyphicon-ok:before {
            content: "\221A";
        }

        .leftregi form, .rightlogin form {
            width: 100%;
            text-align: left;
        }

        .rightlogin {
            display: flex;
            align-items: center;
        }

        label {
            float: left;
            width: 30%;
            font-weight: bold;
            text-align: right;
            padding: 15px 15px 0 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .btn-block.sub-btn {
            width: 40%;
            margin: 10px auto;
        }

            .btn-block.sub-btn:focus {
                background: #f60 !important;
            }

        p.red {
            margin: 20px 0;
            text-align: center;
        }

        .form-group .red, p.red {
            font-size: 13px;
        }

        .r-tip {
            font-size: 13px;
            font-weight: normal;
            vertical-align: middle;
            height: 48px;
            display: table-cell;
            padding-left: 5px;
        }

        .code-box {
            position: relative;
            width: 70%;
            float: left;
        }

            .code-box .help-block {
                margin-left: 0;
                padding-top: 5px;
            }

        #code, #codeReg {
            position: absolute;
            left: 160px;
            top: -5px;
        }

        .checkbox {
            clear: both;
            margin-left: 30%;
        }

            .checkbox a {
                margin-top: 15px;
            }

        #agrCheckLabel {
            width: auto;
            user-select: none;
        }

        .m_title h4 {
            text-align: center;
            font-weight: normal;
            font-size: 24px;
        }
        /*auto email*/
        .auto-tip {
            background: #fff;
            color: #2c3e50;
            border: 2px solid #dce4ec;
            border-top: none;
            border-radius: 4px;
            z-index: 10000;
            text-align: left;
        }

            .auto-tip li {
                width: 100%;
                height: 28px;
                line-height: 28px;
                padding: 0 15px;
                font-size: 14px;
            }

                .auto-tip li.hoverBg {
                    background: #ecf0f1;
                    cursor: pointer;
                }

            .auto-tip em {
                font-style: normal;
            }

        #signupForm .auto-tip {
            top: 71px !important;
        }

        .completer-container, .pla {
            position: absolute;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: inherit;
            font-size: 14px;
            line-height: normal;
            list-style: none;
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 3px;
        }

            .completer-container li, .pla li {
                padding: .5em .8em;
                margin: 0;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                cursor: pointer;
                background-color: #fff;
                border-bottom: 1px solid #eee;
            }

                .completer-container .completer-selected, .completer-container li:hover, .pla .completer-selected {
                    margin-left: -1px;
                    background-color: #eee;
                    border-left: 1px solid #ff5e23;
                }

        /*bootstrap*/
        .has-feedback {
            position: relative;
            clear: both;
        }

            .has-feedback .form-control {
                float: left;
                width: 40%;
                padding-right: 42.5px;
                font-size: 15px;
                margin-bottom: 0;
            }

        .form-control-feedback {
            position: absolute;
            top: 0;
            right: 30%;
            z-index: 2;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            pointer-events: none;
        }

        .has-success .help-block, .has-success .control-label, .has-success .radio, .has-success .checkbox, .has-success .radio-inline, .has-success .checkbox-inline, .has-success.radio label, .has-success.checkbox label, .has-success.radio-inline label, .has-success.checkbox-inline label {
            color: #3c763d;
        }

        .has-success .form-control {
            border-color: #3c763d;
        }

            .has-success .form-control:focus {
                border-color: #2b542c;
            }

        .has-success .input-group-addon {
            color: #3c763d;
            border-color: #3c763d;
            background-color: #dff0d8;
        }

        .has-success .form-control-feedback {
            color: #0da77d;
            font-size: 18px;
            font-weight: bold;
        }

        .has-error .help-block, .has-error .control-label, .has-error .radio, .has-error .checkbox, .has-error .radio-inline, .has-error .checkbox-inline, .has-error.radio label, .has-error.checkbox label, .has-error.radio-inline label, .has-error.checkbox-inline label {
            color: #a94442;
        }

        .has-error .form-control {
            border-color: #a94442;
        }

            .has-error .form-control:focus {
                border-color: #843534;
            }

        .has-error .input-group-addon {
            color: #a94442;
            border-color: #a94442;
            background-color: #f2dede;
        }

        .has-error .form-control-feedback {
            color: #a94442;
        }

        .has-feedback label ~ .form-control-feedback {
            top: 8px;
        }

        .has-feedback label.sr-only ~ .form-control-feedback {
            top: 0;
        }

        .help-block {
            display: block;
            clear: both;
            width: 40%;
            margin-left: 30%;
            margin-top: 5px;
            margin-bottom: 10px;
            color: #737373;
        }

        .has-feedback .form-control.code-input {
            width: 152px;
        }

        #codeGroup .form-control-feedback {
            left: 114px;
            top: 8px;
        }
        /*loading*/
        .spinner {
            display: none;
            margin: 0 auto;
            width: 50px;
            text-align: center;
        }

            .spinner > div {
                width: 10px;
                height: 10px;
                background-color: #ffad69;
                border-radius: 100%;
                display: inline-block;
                -webkit-animation: bouncedelay 1.4s infinite ease-in-out;
                animation: bouncedelay 1.4s infinite ease-in-out;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }

            .spinner .bounce1 {
                -webkit-animation-delay: -0.32s;
                animation-delay: -0.32s;
            }

            .spinner .bounce2 {
                -webkit-animation-delay: -0.16s;
                animation-delay: -0.16s;
            }

        @-webkit-keyframes bouncedelay {
            0%, 80%, 100% {
                -webkit-transform: scale(0.0);
            }

            40% {
                -webkit-transform: scale(1.0);
            }
        }

        @keyframes bouncedelay {
            0%, 80%, 100% {
                transform: scale(0.0);
                -webkit-transform: scale(0.0);
            }

            40% {
                transform: scale(1.0);
                -webkit-transform: scale(1.0);
            }
        }

        .form-control-feedback {
            margin-right: 0;
            display: none;
        }

        .has-success .form-control-feedback {
            display: block;
        }

        .has-feedback #captcha_code {
            padding-right: 40px;
        }

        #loginSub:focus {
            background-color: #18bc9c;
            border-color: #18bc9c;
        }

        legend {
            text-align: center;
            color: #fff;
        }

        /*注册*/
        #agreeCheck {
            margin-top: 2px;
        }

        .password-level {
            clear: both;
            width: 40%;
            margin: 0 auto;
        }

            .password-level .col-md-11 {
                padding-left: 0;
            }

            .password-level .col-md-4 {
                width: 33.33%;
                float: left;
            }

            .password-level span {
                display: block;
                width: 100%;
                height: 3px;
                text-align: center;
                line-height: 0;
                font-size: 14px;
                font-weight: bold;
            }

        #signPswLevel.password-level span, #fundPswLevel.password-level span {
            height: 16px;
            line-height: 16px;
            font-size: 12px;
            font-weight: bold;
        }

        .discount {
            color: #ff5e23;
            margin: 10px 0 18px;
            font-weight: bold;
        }

        #signupSub {
            margin: 0 auto;
        }

        .input-item-info {
            width: 30%;
            float: left;
        }

        .code-box .form-control-feedback {
            right: auto;
            left: 114px;
            top: 8px;
        }
    </style>
</head>
<body >
    <div id="siteNoty" class="notification-box"></div>
    ﻿<!DOCTYPE html>
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
    <div class="content clearfix">
        <!--左侧菜单-->
        <table class="leftbar" style="padding-top: 35px; ">
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
                                                <a href="#one" class="active">财务中心<span class="umicon"></span></a>
                                                <ul class="sub-menu" style="display: block;">
                                                    <li><a data-id="myfunds" href="/finance/index.html"><em>01</em>财富中心</a></li>
                                                    <li><a data-id='interest' href="/finance/myzr.html"><em>02</em>我要接收</a></li>
                                                    <li><a data-id='dividend' href="/finance/myzc.html"><em>03</em>我要发送</a></li>


                                                </ul>
                                            </li>
                                            <li id="adn4" class="cloud">
                                                <a href="#two" class="">财富账单<span class="umicon"></span></a>
                                                <ul class="sub-menu" style="display: none;">
                                                    <li><a data-id="myreferrals" href="/finance/mywt.html"><em>04</em>委托管理</a></li>
                                                    <li><a data-id="mypurselog" href="/finance/mycj.html"><em>05</em>成交查询</a></li>
                                                </ul>
                                            </li>
                                            <li id="adn4" class="sign">
                                                <a href="#there" class="">我要分享<span class="umicon"></span></a>
                                                <ul class="sub-menu" style="display: none;">
                                                    <li><a data-id="myreferrals" href="/finance/mytj.html"><em>06</em>分享</a></li>
                                                    <li><a data-id="mypurselog" href="/finance/mywd.html"><em>07</em>我的分享</a></li>
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

<script>
	//顶部菜单高亮
	$('.coin_menu_box a').hover(function(){var str=str_1=$(this).parent().find('i').attr('class');if(str.length>15)str=str.substring(0,str.length-2);$(this).parent().find('i').attr('class',str)},function(){$(this).parent().find('i').attr('class',str_1)});
</script>

        <script type="text/javascript">
            $(document).ready(function() {
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
                        item.css({'color':' #ff5e23','border-right-width':'3px','border-right-color':'#ff5e23'});
                        found = true;
                        break;
                    }
                }
                if (found == false)
                    accordion_head.eq(0).addClass('active').next().slideDown('normal');
                // Click function
                accordion_head.on('click', function(event) {
                    // Disable header links
                    event.preventDefault();
                    // Show and hide the tabs on click
                    if ($(this).attr('class') != 'active'){
                        accordion_body.slideUp('normal');
                        $(this).next().stop(true,true).slideToggle('normal');
                        accordion_head.removeClass('active');
                        $(this).addClass('active');
                    }
                });

                var icoType='';
                if(icoType==''){
                    $("#buyIco").parent("li").remove()
                }

                $("input").focus(function(){
                    $(".failed").html("")
                });

                $(".files,.cloud,.mail").find("li").click(function () {
                    $.cookie('nav_index', 2,{ path: '/' });
                });
                $(".sign").find("li").click(function () {
                    $.cookie('nav_index', 3,{ path: '/' });
                });
            });
        </script>
        <!--右侧内容-->
        <div class="main_content acc-m-con">
            <div class="right_mcontent myacc-con">

                <div class="safe_center clear" style="padding-left: 0px; border-bottom: 2px solid #e55600;">
                    <h1 style="margin-top: 0px; margin-bottom: 15px; line-height: 15px;"><?php echo L('finance_share');?></h1>
                </div>
                <div class="sj" style="top: 40px; left: 60px;"></div>
                <?php if(!empty($prompt_text)): ?><div class="mytips">
                        <h6 style="color: #ff8000;"><?php echo L('kindly_reminder');?></h6>
                        <?php echo ($prompt_text); ?>
                    </div><?php endif; ?>
                <br>



                <div id="qrcode-wallet" style="display: inline-block;margin-top: 60px;float: right;margin-right: 30px;" width="100">
                    <saon id="codeaa"></saon>
                    <p id="qrcode-t" style="font-size: 22px;text-align: center;margin-top: 30px;color: red;"><?php echo L('finance_share_two_code');?></p>

                </div>
                <div class="quicklink invite-content" style="margin-top: 15px;">
                    <h4><?php echo L('finance_share_invite_code');?></h4>
                    <p class="tip"><?php echo L('finance_share_invite_code_desc');?></p>
                    <p>
                        <input type="text" class="area" id="invite-input" value="<?php echo ($user['invit']); ?>" style="width: 100px;"><input type="button" value="<?php echo L('finance_share_copy');?>" data-clipboard-target="invite-input" class="btn-quick inviteCopyButton" id="copy_button1">
                    </p>
                </div>
                <div class="quicklink invite-content">
                    <h4><?php echo L('finance_share_link');?></h4>
                    <p class="tip"><?php echo L('finance_share_link_desc');?></p>
                    <p>
                        <input type="text" class="area" id="invite-inputa" value="http://<?php echo ($_SERVER['HTTP_HOST']); ?>/?invit=<?php echo ($user['invit']); ?>" style="width: 250px;"><input type="button" value="<?php echo L('finance_share_copy');?>" data-clipboard-target="invite-inputa" class="btn-quick inviteCopyButton" id="copy_button2">
                    </p>
                </div>
                <div class="quicklink invite-content">
                    <h4><?php echo L('finance_share_ad');?></h4>
                    <p class="tip"><?php echo L('finance_share_ad_desc');?></p>
                    <p>
                        <input type="text" class="area" id="invite-textarea" value="<?php if( (lang_set == 'en' ) && (!empty($c['invit_text_txt_en']))): echo ($C['invit_text_txt_en']); else: echo ($C['invit_text_txt']); endif; ?> http://<?php echo ($_SERVER['HTTP_HOST']); ?>/?invit=<?php echo ($user['invit']); ?>" style="width: 400px;"><input type="button" value="<?php echo L('finance_share_copy');?>" data-clipboard-target="invite-textarea" class="btn-quick inviteCopyButton zeroclipboard-is-hover" id="copy_button3">
                    </p>
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

    </div>
</body></html>

    <br>
    <br>


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
        //菜单高亮
        $('#finance_box').addClass('active');
        $('#finance_mytj').addClass('active');
        $('#finance_mytj i').attr('class','coin_menu_op_13');
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
<script src="/Public/layer/layer.js"></script>