<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
    <link href="/Public/Home1/index/css/app.css" rel="stylesheet">
    <link id="app_theme" href="/Public/Home1/index/css/app-theme-5.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/app-demo.css" rel="stylesheet">
    <link href="/Public/Home1/index/css/app-custom.css" rel="stylesheet">
    <link href="/Public/Home1/index/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/Home1/index/fonts/css/fonts.css" rel="stylesheet">
    <link href="/Public/Home1/Css/style.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/apple-touch-icon-120x120.png" />

    <script src="/Public/Home/js/jquery.min.js" type="javascript"></script>
    <!-- <script src="/Public/Home1/Scripts/jquery-1.8.2.min.js" type="javascript"></script> -->
    <script src="/Public/Home1/Scripts/jquery.common.tools.js"></script>
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
<div class="wrapbody" style="padding: 0px; margin-top: 20px;">
 <div class="main">
  <div class="span span8  content">
   <div id="content">
    <div id="klineImage" class="newKlineImage ">
     <div class="marketImageNew" id="marketImageNew" style="">
      <iframe style="border-style: none;" border="0" width="100%" height="600" id="market_chart" src="/Trade/specialty?market=<?php echo ($market); ?>"></iframe>
     </div>
    </div>
   </div>
   <div id="content-trade" class="content">
    <div class="box mt20" id="Titletrd">
     <div class="clear over-auto  account_table">
      <div class="left   over-auto" style="width: 32%; margin-right: 5px; border-right: 1px solid #D5D5D5; border-left: 1px solid #D5D5D5;">
       <div class="over-auto account_table">
        <table class="Transaction no-border-left">
         <thead>
          <tr>
           <th width="50"><?php echo L('trade_buy');?></th>
           <th width="80"><?php echo L('trade_price');?></th>
           <th width="120"><?php echo L('trade_amount');?></th>
           <th width=""><span style="padding-right: 18px;"><?php echo L('trade_ratio');?></span></th>
          </tr>
         </thead>
        </table>
        <div style="_height: 852px; max-height: 852px; overflow-x: hidden; overflow-y: auto;">
         <table class="Transaction no-border-left">
          <tbody id="marketbuylist">
          </tbody>
         </table>
        </div>
       </div>
      </div>
      <div class="left  over-auto" style="width: 32%; border-right: 1px solid #D5D5D5; border-left: 1px solid #D5D5D5;">
       <div class="over-auto">
        <table class="Transaction no-border-right">
         <thead>
          <tr>
           <th width="50"><?php echo L('trade_sell');?></th>
           <th width="80"><?php echo L('trade_price');?></th>
           <th width="120"><?php echo L('trade_amount');?></th>
           <th width=""><span style="padding-right: 18px;"><?php echo L('trade_ratio');?></span></th>
          </tr>
         </thead>
        </table>
        <div style="_height: 852px; max-height: 852px; overflow-x: hidden; overflow-y: auto;">
         <table class="Transaction no-border-right">
          <tbody id="marketselllist">
          </tbody>
         </table>
        </div>
       </div>
      </div>
      <div class="right" style="width: 34.7%; border-right: 1px solid #D5D5D5; border-left: 1px solid #D5D5D5;">
       <div class="clear">
        <div class=" over-hidden">
         <div class="over-auto">
          <table class="Transaction no-border-left  no-border-left-right">
           <thead>
            <tr>
             <th width="70"><?php echo L('trade_time');?></th>
             <th width="70"><?php echo L('trade_price');?></th>
             <th width="100"><?php echo L('trade_amount');?></th>
             <th><span style="padding-right: 18px;"><?php echo L('trade_money');?></span></th>
            </tr>
           </thead>
          </table>
          <div style="_height: 852px; max-height: 852px;; overflow-x: hidden; overflow-y: auto;">
           <table class="Transaction no-border-left  no-border-left-right">
            <tbody id="marketorderlist">
            </tbody>
           </table>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<br>
<br>
<script type="text/javascript">
	var market="<?php echo ($market); ?>";


	function getJsonData(){
		$.getJSON("/Chart/getJsonData?market="+market+"&t="+Math.random(),function(data){
			if(data){
				if(data[0]){
					$("#marketbuylist").html(data[0]);
				}
				if(data[1]){
					$("#marketselllist").html(data[1]);
				}
				if(data[2]){
					$("#marketorderlist").html(data[2]);
				}
			}
		});
	}
	getJsonData();

	// 倒计时
	var wait=second=5;
	var go=setInterval(function(){
		wait--;
		if(wait<0){
			getJsonData();
			wait=second;
		}
	},1000);
</script>
<script>
	//菜单高亮
	$('#list-tab_chart').addClass('on');
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