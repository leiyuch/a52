<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="viewport" content="width=100%; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
  <title><?php echo C('web_title');?></title>
  <link href="/Public/Home1/index/images/favicon.ico" rel="icon">
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
  <!--edit to
app-theme-1.css
app-theme-2.css
app-theme-3.css
app-theme-4.css
app-theme-5.css
app-theme-6.css
app-theme-7.css
app-theme-8.css-->
  <link id="app_theme" href="/Public/Home1/index/css/app-theme-5.css" rel="stylesheet">
  <link href="/Public/Home1/index/css/app-demo.css" rel="stylesheet">
  <link href="/Public/Home1/index/css/app-custom.css" rel="stylesheet">
  <link href="/Public/Home1/index/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="/Public/Home1/index/fonts/css/font.css" rel="stylesheet">
  <link href="/Public/Home1/Css/style.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="120x120" href="/Public/Home1/images/apple-touch-icon-120x120.png"/>
    <script src="/Public/Home1/Scripts/jquery-1.8.2.min.js"></script>
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
  </style>
</head>

<body>
  <!--[if lt IE 8]><p class="browserupgrade">You are using an <strong>outdated</strong> browser.
Please <a href="http://browsehappy.com/">upgrade your browser</a>
to improve your experience.</p><![endif]-->
  <div class="site" id="site">
    <div class="site-loader" id="site_loader">
      <div class="site-loader__wrap">
        <div class="loader loader_circular"></div>
      </div>
    </div>
    <!-- .site-loader-->
    <div class="site-canvas" id="site_canvas">
      <!-- <div class="theme-options bg-canvas-default">
        <div class="theme-options-toggle bg-card-default"><a class="color-primary" href="#"><span class="icon mdi mdi-tune"></span></a></div>
        <div class="theme-option theme-option-color">
          <h5 class="theme-option-title">Color</h5>
          <ul class="theme-option-list row">
            <li class="col-xs-3"><a href="#" data-theme-option-theme="1" data-theme-option-primary-color="#0769e0" data-theme-option-secondary-color="#ff5722"><span></span><span></span></a></li>
            <li class="col-xs-3"><a href="#" data-theme-option-theme="2" data-theme-option-primary-color="#0180cd" data-theme-option-secondary-color="#eb866a"><span></span><span></span></a></li>
            <li class="col-xs-3"><a href="#" data-theme-option-theme="3" data-theme-option-primary-color="#7c7aa1" data-theme-option-secondary-color="#6cc3bd"><span></span><span></span></a></li>
            <li class="col-xs-3"><a href="#" data-theme-option-theme="4" data-theme-option-primary-color="#1d1145" data-theme-option-secondary-color="#f1a49e"><span></span><span></span></a></li>
            <li class="col-xs-3"><a href="#" data-theme-option-theme="5" data-theme-option-primary-color="#ef494d" data-theme-option-secondary-color="#406d94"><span></span><span></span></a></li>
            <li class="col-xs-3"><a href="#" data-theme-option-theme="6" data-theme-option-primary-color="#3f51b5" data-theme-option-secondary-color="#e91e63"><span></span><span></span></a></li>
            <li class="col-xs-3"><a href="#" data-theme-option-theme="7" data-theme-option-primary-color="#37474f" data-theme-option-secondary-color="#e91e63"><span></span><span></span></a></li>
            <li class="col-xs-3"><a href="#" data-theme-option-theme="8" data-theme-option-primary-color="#7b1fa2" data-theme-option-secondary-color="#69f0ae"><span></span><span></span></a></li>
          </ul>
        </div>
      </div> -->
      <div class="site-header site-header-fixed-top" id="site_header">
        <nav class="navbar site-navbar navbar-lg navbar-primary navbar-bg-from-transparent navbar-fg-from-light" id="site_navbar" style="background:rgb(7, 105, 224);">
          <div class="container">
            <div class="navbar-header"><button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#site_navbar_collapse"><i class="navbar-toggle-icon mdi mdi-menu"></i></button>
              <div class="site-branding">
                <h1 class="site-branding-title sr-only"><a class="site-branding-title-link" href="#">Site title</a></h1>
                <div class="site-branding-media">
                  <a class="site-branding-media-link" href="#">
                   <?php if((LANG_SET == 'en') && (!empty($C['web_logo_en']))): ?><img src="/Upload/public/<?php echo ($C['web_logo_en']); ?>" alt=""/>
                                    <?php else: ?>
                                    <img src="/Upload/public/<?php echo ($C['web_logo']); ?>" alt=""/><?php endif; ?>



                  <img class="site-branding-media-img site-branding-media-img-dark" src="/Public/Home1/index/images/site-branding-media-img-dark.png"
                      alt=""></a>
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
                </ul>

                 <?php if(($_SESSION['userId']) > "0"): ?><a href="<?php echo U('Login/loginout');?>"><button class="btn btn-secondary navbar-btn" type="button" data-toggle="modal" ><?php echo L('logout');?></button></a>
                                    <?php else: ?>
                                    <!-- 登陆前 -->
                                     <a href="<?php echo U('Login/index');?>"><button class="btn btn-secondary navbar-btn" type="button" data-toggle="modal" ><?php echo L('login');?></button></a><?php endif; ?>
              
              </div>
            </div>
            <!-- .navbar-collapse-->
          </div>
          <!-- .container-fluid-->
        </nav>
        <!-- .navbar-->
      </div>
      <!-- .site-header-->
      <div class="site-content" id="site_content">
        <div class="intro-5-section section" id="intro_5_section">
          <div class="bg" style="background:#0769e0">
            <div class="bg-img bg-repeat bg-fixed bg-no-cover bg-img-animation" data-css-bg-img="/Public/Home1/index/images/intro-5-section-bg-pattern.png"></div>
            <!-- .bg-img-->
          </div>
           <div class="container">
            <div class="section-content row">
              <div class="section-text col-md-6">
                <div class="section-heading wow fadeInDownShort">
                  <div class="section-title">Welcome To Eurasia Digital Platform</div>
                  <div class="section-subtitle">金融的创新往往令人咋舌，不经意间，一个新的世界就自此诞生。在欧亚国际交易平台，参与者可以随时认购或出售，获取增值利润，流通性极强。</div>
                </div>
                <div class="section-cta wow fadeInUpShort" data-wow-delay="150ms">
                  <h5>Available now on:</h5>
                  <p>
                    <a class="btn-download" href="#" target="_blank"><img src="/Public/Home1/index/images/badge-google-play.png" alt=""></a>
                    <a class="btn-download" href="#" target="_blank"><img src="/Public/Home1/index/images/badge-app-store.png" alt=""></a>
                  </p>
                </div>
              </div>
              <div class="section-media col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0 wow fadeInRightShort" data-wow-delay="300ms"><img class="section-media-img" src="/Public/Home1/index/images/intro-4-section-media-img.png" alt=""></div>
            </div>
          </div>
        </div>
        <div class="client-1-section section" id="client_1_section">
          <div class="container">
            <div class="section-content row">
              <div class="client-logo bfc-carousel" data-slick="{&quot;autoplay&quot;: true, &quot;autoplaySpeed&quot;: 3000, &quot;mobileFirst&quot;: true, &quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1, &quot;arrows&quot;: false, &quot;responsive&quot;: [{&quot;breakpoint&quot;: 991, &quot;settings&quot;: {&quot;slidesToShow&quot;: 4}}, {&quot;breakpoint&quot;: 1199, &quot;settings&quot;: {&quot;slidesToShow&quot;: 5}}]}">
                <div class="client-logo-item">
                  <a class="client-logo-item-link" href="#"><img class="client-logo-item-img" src="/Public/Home1/index/images/client-logo-1.png" alt=""></a>
                </div>
                <div class="client-logo-item">
                  <a class="client-logo-item-link" href="#"><img class="client-logo-item-img" src="/Public/Home1/index/images/client-logo-2.png" alt=""></a>
                </div>
                <div class="client-logo-item">
                  <a class="client-logo-item-link" href="#"><img class="client-logo-item-img" src="/Public/Home1/index/images/client-logo-3.png" alt=""></a>
                </div>
                <div class="client-logo-item">
                  <a class="client-logo-item-link" href="#"><img class="client-logo-item-img" src="/Public/Home1/index/images/client-logo-4.png" alt=""></a>
                </div>
                <div class="client-logo-item">
                  <a class="client-logo-item-link" href="#"><img class="client-logo-item-img" src="/Public/Home1/index/images/client-logo-5.png" alt=""></a>
                </div>
                <div class="client-logo-item">
                  <a class="client-logo-item-link" href="#"><img class="client-logo-item-img" src="/Public/Home1/index/images/client-logo-6.png" alt=""></a>
                </div>
                <div class="client-logo-item">
                  <a class="client-logo-item-link" href="#"><img class="client-logo-item-img" src="/Public/Home1/index/images/client-logo-7.png" alt=""></a>
                </div>
                <div class="client-logo-item">
                  <a class="client-logo-item-link" href="#"><img class="client-logo-item-img" src="/Public/Home1/index/images/client-logo-8.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
            <div class="container">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard_graph">

                      <div class="row x_title" style="padding:50px;">
                        <div class="col-md-6">
                          <h3>Trading charts <small>In tardus foro notitia</small></h3>
                        </div>
                        <!-- <div class="col-md-6">
                          <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>August 6, 2017 - September 4, 2017</span> <b class="caret"></b>
                          </div>
                        </div> -->
                      </div>
                      <style>
                          @media screen and (max-width: 700px) {
                            .indeximg img{width:100%;}
                          }
                      </style>
                      <div class="col-md-9 col-sm-9 col-xs-12 wow fadeInRightShort indeximg" data-wow-delay="1000ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInRightShort;padding-bottom:50px;width: 100%">
                      
                          <iframe style="border-style: none;" border="0" width="100%" height="400" id="market_chart" src="/Trade/ordinary?market=<?php echo ($market); ?>"></iframe>
                      </div>
                     

                      <div class="clearfix"></div>
                    </div>
                  </div>

              </div>
            </div>
        </div>
        <!-- <div class="feature-1-section section" id="feature_1_section">
          <div class="container">
            <div class="section-content row">
              <div class="iconbox col-sm-6 col-md-3">
                <div class="iconbox-item">
                  <div class="iconbox-item-media wow flipInX"><button class="btn btn-fab btn-primary" type="button"><i class="icon mdi mdi-responsive"></i></button></div>
                  <div class="iconbox-item-title">Fully responsive</div>
                  <div class="iconbox-item-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><button class="btn btn-lg btn-wide btn-default" type="button">Learn more</button></div>
                </div>
              </div>
              <div class="iconbox col-sm-6 col-md-3">
                <div class="iconbox-item">
                  <div class="iconbox-item-media wow flipInX" data-wow-delay="150ms"><button class="btn btn-fab btn-secondary" type="button"><i class="icon mdi mdi-palette-advanced"></i></button></div>
                  <div class="iconbox-item-title">Multiple colors</div>
                  <div class="iconbox-item-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><button class="btn btn-lg btn-wide btn-default" type="button">Learn more</button></div>
                </div>
              </div>
              <div class="iconbox col-sm-6 col-md-3">
                <div class="iconbox-item">
                  <div class="iconbox-item-media wow flipInX" data-wow-delay="300ms"><button class="btn btn-fab btn-tertiary" type="button"><i class="icon mdi mdi-tune"></i></button></div>
                  <div class="iconbox-item-title">Easy to customize</div>
                  <div class="iconbox-item-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><button class="btn btn-lg btn-wide btn-default" type="button">Learn more</button></div>
                </div>
              </div>
              <div class="iconbox col-sm-6 col-md-3">
                <div class="iconbox-item">
                  <div class="iconbox-item-media wow flipInX" data-wow-delay="450ms"><button class="btn btn-fab btn-quaternary" type="button"><i class="icon mdi mdi-heart-pulse"></i></button></div>
                  <div class="iconbox-item-title">Made with love</div>
                  <div class="iconbox-item-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><button class="btn btn-lg btn-wide btn-default" type="button">Learn more</button></div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="feature-2-section section" id="feature_2_section">
          <div class="container">
            <div class="section-content row">
              <div class="section-text col-md-6 col-md-offset-1">
                <div class="section-heading">
                  <div class="section-title"> <span>随时随地把握行情</span></div>
                  <div class="section-subtitle">交易资产随时看，下单操作更安全，订单历史一目了然，买卖多档行情，逐笔成交记录，安全快捷的全球各国多币种实时交易；</div>
                </div>
                <div class="section-body">
                  <div class="feature-info row">
                    <div class="feature-info-item col-sm-6 wow fadeInRightShort">
                      <div class="media">
                        <div class="media-left"><button class="btn btn-fab btn-primary btn-primary" type="button" style="background-color: rgb(7, 105, 224);
    border-color: rgb(7, 105, 224);"><i class="icon mdi mdi-responsive"></i></button></div>
                        <div class="media-body">
                          <h3 class="media-heading">加密安全</h3>
                          <p>军用级密码技术的保护，让你可以掌控自己的资金，针对多形式欺诈提供强大保护。
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="feature-info-item col-sm-6 wow fadeInRightShort" data-wow-delay="150ms">
                      <div class="media">
                        <div class="media-left"><button class="btn btn-fab btn-primary btn-secondary" type="button"><i class="icon mdi mdi-palette-advanced"></i></button></div>
                        <div class="media-body">
                          <h3 class="media-heading">技术团队</h3>
                          <p>技术团队拥有十余年数字领域经验，致力打造最纯粹的数字资产交易平台
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="feature-info-item col-sm-6 wow fadeInRightShort" data-wow-delay="300ms">
                      <div class="media">
                        <div class="media-left"><button class="btn btn-fab btn-primary btn-tertiary" type="button" style="background-color: rgb(156, 39, 176);
    border-color: rgb(156, 39, 176);"><i class="icon mdi mdi-tune"></i></button></div>
                        <div class="media-body">
                          <h3 class="media-heading">交易渠道</h3>
                          <p>创造稳定、畅通的交易渠道，坚持为用户提供安全、便捷的数字资产特色服务。
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="feature-info-item col-sm-6 wow fadeInRightShort" data-wow-delay="450ms">
                      <div class="media">
                        <div class="media-left"><button class="btn btn-fab btn-primary btn-quaternary" type="button" style="background-color: rgb(0, 150, 136); border-color: rgb(0, 150, 136);"><i class="icon mdi mdi-heart-pulse"></i></button></div>
                        <div class="media-body">
                          <h3 class="media-heading">风险控制</h3>
                          <p>多维度、多层防护，通过设置平台、钱包、内控等多层安全防护来控制风险。


                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="section-media col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-0"><img class="section-media-img" src="/Public/Home1/index/images/screenshot-2.png" alt=""></div>
            </div>
          </div>
        </div>
        <div class="feature-3-section section" id="feature_3_section">
          <div class="container-fluid">
            <div class="section-content row">
              <div class="iconbox col-sm-6 col-lg-3 color-auto bg-primary" style="background:rgb(7, 105, 224);"><i class="icon mdi mdi-responsive"></i>
                <div class="iconbox-item">
                  <div class="iconbox-item-media wow flipInX"><button class="btn btn-fab btn-secondary" type="button"><i class="icon mdi mdi-responsive"></i></button></div>
                  <div class="iconbox-item-title">区块链+智能合约</div>
                  <div class="iconbox-item-body">以区块链和智能合约为基础，在隐私数据的交换过程中，欧亚交易平台承担着信息中转的角色。可以辅助分析交易条件，提供定制智能合约等服务 。</div>
                </div>
              </div>
              <div class="iconbox col-sm-6 col-lg-3 color-auto bg-secondary" style="background-color: rgb(255, 87, 34);"><i class="icon mdi mdi-palette-advanced"></i>
                <div class="iconbox-item">
                  <div class="iconbox-item-media wow flipInX" data-wow-delay="150ms"><button class="btn btn-fab btn-primary" style="background-color: rgb(7, 105, 224); border-color: rgb(7, 105, 224);" type="button"><i class="icon mdi mdi-palette-advanced"></i></button></div>
                  <div class="iconbox-item-title">监控链+交易规则</div>
                  <div class="iconbox-item-body">欧亚国际数字交易平台是交易规则的制定者，负责参与方的线下身份认证，监控链上的交易行为，更新发布数字资产的智能合约等。</div>
                </div>
              </div>
              <div class="iconbox col-sm-6 col-lg-3 color-auto bg-tertiary" style="background-color: rgb(156, 39, 176);"><i class="icon mdi mdi-tune"></i>
                <div class="iconbox-item">
                  <div class="iconbox-item-media wow flipInX" data-wow-delay="300ms"><button class="btn btn-fab btn-quaternary" style="background-color: rgb(0, 150, 136); border-color: rgb(0, 150, 136);" type="button"><i class="icon mdi mdi-tune"></i></button></div>
                  <div class="iconbox-item-title">安全防护+多重认证</div>
                  <div class="iconbox-item-body">多重认证审核，账户暴力破解实时深度检测；保障用户资金安全；短信验证码业务分离；减少被钓鱼可能性；建立反应实时、深入行业、专业能力的安全团队。</div>
                </div>
              </div>
              <div class="iconbox col-sm-6 col-lg-3 color-auto bg-quaternary" style="background-color: rgb(0, 150, 136);"><i class="icon mdi mdi-heart-pulse"></i>
                <div class="iconbox-item">
                  <div class="iconbox-item-media wow flipInX" data-wow-delay="450ms"><button class="btn btn-fab btn-tertiary" style="background-color: rgb(156, 39, 176); border-color: rgb(156, 39, 176);" type="button"><i class="icon mdi mdi-heart-pulse"></i></button></div>
                  <div class="iconbox-item-title">海量分析+实时修复</div>
                  <div class="iconbox-item-body">利用大数据态势感知，定期对网站日志等海量数据进行关联分析，精确定位站点问题，挖掘网站漏洞和弱点，修复服务器漏洞，给用户发送安全情报，随时随地应对未知威胁。</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="screenshot-1-section section" id="screenshot_1_section">
          <div class="container">
            <div class="section-header row">
              <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="section-title">App  <span>应用</span></div>
                <div class="section-subtitle">多种交易模式，专业的交易面板，买卖多档行情，逐笔成交记录进出自由，精准信用登记，闪电下单。让交易更安心，增值准保障。</div>
              </div>
            </div>
            <div class="section-content row">
              <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div id="screenshot_carousel_3d" data-carousel-3d>
                  <div class="screenshot-media"><img class="img-responsive" src="/Public/Home1/index/images/screenshot-2.png" alt=""></div>
                  <div class="screenshot-media"><img class="img-responsive" src="/Public/Home1/index/images/screenshot-2.png" alt=""></div>
                  <div class="screenshot-media"><img class="img-responsive" src="/Public/Home1/index/images/screenshot-2.png" alt=""></div>
                  <div class="screenshot-media"><img class="img-responsive" src="/Public/Home1/index/images/screenshot-2.png" alt=""></div>
                  <div class="screenshot-media"><img class="img-responsive" src="/Public/Home1/index/images/screenshot-2.png" alt=""></div>
                  <div class="screenshot-media"><img class="img-responsive" src="/Public/Home1/index/images/screenshot-2.png" alt=""></div>
                </div>
              </div>
            </div>
            <div class="section-cta" style="margin-top:30px;">
                  <h5>Available now on:</h5>
                  <p>
                    <a class="btn-download" href="#" target="_blank"><img src="/Public/Home1/index/images/badge-google-play.png" alt=""></a>
                    <a class="btn-download" href="#" target="_blank"><img src="/Public/Home1/index/images/badge-app-store.png" alt=""></a>
                  </p>
                </div>
          </div>
        </div>
        <!-- <div class="pricing-1-section section" id="pricing_1_section">
          <div class="container">
            <div class="section-content row">
              <div class="section-text col-md-5">
                <div class="section-heading">
                  <div class="section-title">Explore our <span>latest offers</span></div>
                  <div class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation.</div>
                </div>
                <div class="section-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <h5>Want to know more? <a href="#contact_1_section" data-smooth-scroll="true">Contact us</a> for further information.</h5>
                </div>
              </div>
              <div class="section-media col-sm-12 col-md-7">
                <div class="pricing-table-row row">
                  <div class="pricing-table pricing-table-1 col-sm-6 wow fadeInUpShort pricing-table-primary" data-wow-delay="150ms">
                    <div class="pricing-table-wrap">
                      <div class="panel md-panel">
                        <div class="panel-heading">
                          <div class="panel-title">Starter</div>
                        </div>
                        <div class="panel-body">
                          <p class="pricing-table-price">$19.9<small>/mo</small></p><a class="btn btn-secondary" href="#">Get started</a></div>
                        <ul class="list-group">
                          <li class="list-group-item"><i class="icon mdi mdi-check color-success"></i>List group item</li>
                          <li class="list-group-item"><i class="icon mdi mdi-check color-success"></i>List group item</li>
                          <li class="list-group-item"><i class="icon mdi mdi-check color-success"></i>List group item</li>
                          <li class="list-group-item"><i class="icon mdi mdi-close color-danger"></i>List group item</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="pricing-table pricing-table-1 col-sm-6 wow fadeInUpShort pricing-table-secondary" data-wow-delay="300ms">
                    <div class="pricing-table-wrap">
                      <div class="panel md-panel">
                        <div class="panel-heading">
                          <div class="panel-title">Premium</div>
                        </div>
                        <div class="panel-body">
                          <p class="pricing-table-price">$29.9<small>/mo</small></p><a class="btn btn-primary" href="#">Get started</a></div>
                        <ul class="list-group">
                          <li class="list-group-item"><i class="icon mdi mdi-check color-success"></i>List group item</li>
                          <li class="list-group-item"><i class="icon mdi mdi-check color-success"></i>List group item</li>
                          <li class="list-group-item"><i class="icon mdi mdi-check color-success"></i>List group item</li>
                          <li class="list-group-item"><i class="icon mdi mdi-check color-success"></i>List group item</li>
                          <li class="list-group-item"><i class="icon mdi mdi-check color-success"></i>List group item</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
       <!--  <div class="cta-1-section section section-sm" id="cta_1_section">
          <div class="container">
            <div class="section-header row">
              <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="section-title">Call to action</div>
                <div class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation.</div>
              </div>
            </div>
            <div class="section-content row">
              <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="section-cta"><a class="btn btn-lg btn-secondary" href="#">Free trial</a> <a class="btn btn-lg btn-outline btn-inverse" href="#">Learn more</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="download-1-section section" id="download_1_section">
          <div class="container">
            <div class="section-content row">
              <div class="section-text col-sm-12 col-md-6">
                <div class="section-heading">
                  <div class="section-title">Start your <span>free trial</span></div>
                  <div class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation.</div>
                </div>
                <div class="section-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="section-cta">
                  <h5>Available now on:</h5>
                  <p>
                    <a class="btn-download" href="#" target="_blank"><img src="index/images/badge-google-play.png" alt=""></a>
                    <a class="btn-download" href="#" target="_blank"><img src="index/images/badge-app-store.png" alt=""></a>
                  </p>
                </div>
              </div>
              <div class="section-media col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-1"><img class="section-media-img wow fadeInRightShort" src="index/images/download-1-section-media-img.png" alt=""></div>
            </div>
          </div>
        </div> -->
        <style>
            .right_con{width:1226px; margin:0 auto;} 
            @media screen and (max-width: 700px) {
              .right_con{ width:100% !important; }
              .right-box{width:100%;}
            }
        </style>
        <div class="right_con clearfix">
  <div class="right-box">
    <div class="right_title"> <a href="#"> <span class="title-icon">
      <!--[if !IE]-->
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="-17.5 -17.914 48 48">
        <g fill="#999">
          <path d="M11.104-6.21L8.346-3.76v.18c2.283 2.492 3.692 5.903 3.692 9.666 0 3.765-1.41 7.176-3.692 9.667v.18l2.76 2.45C13.97 15.19 15.73 10.86 15.73 6.085c0-4.774-1.76-9.105-4.626-12.296zM-17.5-1.3v14.77h7.385L.96 24.55v-36.923L-10.114-1.3"></path>
          <path d="M16.913-11.375L14.15-8.923c3.3 4.112 5.272 9.33 5.272 15.01 0 5.678-1.972 10.9-5.268 15.006l2.758 2.452c3.88-4.76 6.202-10.835 6.202-17.46 0-6.62-2.32-12.697-6.2-17.46z"></path>
          <path d="M22.553-16.385l-2.776 2.466c4.395 5.46 7.03 12.42 7.03 20.008 0 7.587-2.635 14.546-7.03 20.005l2.776 2.467C27.515 22.442 30.5 14.62 30.5 6.09s-2.985-16.358-7.947-22.473z"></path>
        </g>
      </svg>
      <!--[endif]-->
      <!--[if IE]><img src="Picture/speaker.png" alt="本站公告"><![endif]-->
      </span> <em><?php if((LANG_SET == 'en') && (!empty($indexArticleType[1]['en_title']))): echo ($indexArticleType[1]['en_title']); ?>
                        <?php else: ?>
                        <?php echo ($indexArticleType[1]['title']); endif; ?></em></a> </div>
    <div class="right_content bul" style="margin-bottom:20px">
      <ul>
       <?php if(is_array($indexArticle[1])): $i = 0; $__LIST__ = $indexArticle[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                        <a class="news_clua" target="_blank" href="<?php echo U('Article/detail','id='.$vo['id']);?>">
                                            <?php if((LANG_SET == 'en') && (!empty($vo['en_title']))): echo ($vo['en_title']); ?>
                                                <?php else: ?> <?php echo ($vo['title']); endif; ?>
                                        </a>
                                        <!-- <a class="news_clda" target="_blank" href="<?php echo U('Article/detail','id='.$vo['id']);?>"> [ <?php echo (date("y-m-d",$vo['addtime'])); ?> ] </a> -->
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                <li>
                                    <a class="news_clda" target="_blank" href="/Article/index/id/<?php echo ($indexArticleType[1]['id']); ?>"> <?php echo L('more');?>&gt;&gt; </a>
                                </li>
      </ul>
    </div>
  </div>
  <div class="right-box">
    <div class="right_title"> <a href="#" target="_blank"> <span class="title-icon">
      <!--[if !IE]-->
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="84 49 48 48">
        <path d="M111.977 85h-9c-.4 0-.75.15-1.05.45-.3.3-.45.65-.45 1.05v9c0 .4.15.75.45 1.05.3.3.65.45 1.05.45h9c.4 0 .75-.15 1.05-.45.3-.3.45-.65.45-1.05v-9c0-.4-.148-.75-.45-1.05-.3-.3-.65-.45-1.05-.45zm11.813-26.942c-1.024-1.89-2.35-3.482-3.975-4.782-1.625-1.3-3.45-2.338-5.476-3.112-2.03-.775-4.04-1.162-6.04-1.162-7.6 0-13.4 3.325-17.4 9.975-.2.325-.27.675-.21 1.05.06.375.25.688.58.938l6.15 4.688c.32.2.64.3.94.3.45 0 .83-.2 1.16-.6 1.8-2.25 3.13-3.69 4.01-4.314 1.07-.73 2.42-1.09 4.05-1.09 1.52 0 2.87.4 4.03 1.2 1.16.8 1.74 1.72 1.74 2.77 0 1.17-.31 2.12-.94 2.85-.627.72-1.677 1.42-3.15 2.1-1.95.87-3.74 2.23-5.364 4.07-1.624 1.83-2.437 3.79-2.437 5.86v1.69c0 .474.13.942.393 1.404.26.464.58.694.955.694h9c.4 0 .75-.193 1.05-.58s.45-.794.45-1.22c0-.624.342-1.463 1.03-2.51.686-1.058 1.542-1.87 2.57-2.44.972-.55 1.734-.998 2.284-1.33.55-.34 1.27-.888 2.156-1.63.888-.75 1.576-1.5 2.064-2.238s.923-1.695 1.31-2.87c.39-1.175.58-2.438.58-3.788.006-2.078-.51-4.06-1.53-5.945z" fill="#999"></path>
      </svg>
      <!--[endif]-->
      <!--[if IE]><img src="Picture/question.png" alt="常见问题"><![endif]-->
      </span> <em><?php if((LANG_SET == 'en') && (!empty($indexArticleType[1]['en_title']))): echo ($indexArticleType[1]['en_title']); ?>
                        <?php else: ?>
                        <?php echo ($indexArticleType[1]['title']); endif; ?></em></a> </div>
    <div class="right_content bul">
      <ul id="ulLive" class="questions-ul">
         <?php if(is_array($indexArticle[1])): $i = 0; $__LIST__ = $indexArticle[1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                        <a class="news_clua" target="_blank" href="<?php echo U('Article/detail','id='.$vo['id']);?>">
                                            <?php if((LANG_SET == 'en') && (!empty($vo['en_title']))): echo ($vo['en_title']); ?>
                                                <?php else: ?> <?php echo ($vo['title']); endif; ?>
                                        </a>
                                        <!-- <a class="news_clda" target="_blank" href="<?php echo U('Article/detail','id='.$vo['id']);?>"> [ <?php echo (date("y-m-d",$vo['addtime'])); ?> ] </a> -->
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                <li>
                                    <a class="news_clda" target="_blank" href="/Article/index/id/<?php echo ($indexArticleType[1]['id']); ?>"> <?php echo L('more');?>&gt;&gt; </a>
                                </li>
      </ul>
    </div>
  </div>
  <div class="right-box">
    <div class="right_title"> <a href="#"> <span class="title-icon">
      <!--[if !IE]-->
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="232 232 48 48">
        <path fill="#999" d="M274.434 238v39h-31.5c-2.485 0-4.5-2.015-4.5-4.5s2.015-4.5 4.5-4.5h28.5v-36h-30c-3.3 0-6 2.7-6 6v36c0 3.3 2.7 6 6 6h36v-42h-3zm-30 33h27v3h-27v-3z"></path>
      </svg>
      <!--[endif]-->
      <!--[if IE]><img src="Picture/help.png" alt="使用帮助"><![endif]-->
      </span> <em><?php if((LANG_SET == 'en') && (!empty($indexArticleType[2]['en_title']))): echo ($indexArticleType[2]['en_title']); ?>
                        <?php else: ?>
                        <?php echo ($indexArticleType[2]['title']); endif; ?></em></em></a> </div>
    <div class="right_content bul" style="margin-bottom:20px">
      <ul class="index-help">
        <?php if(is_array($indexArticle[2])): $i = 0; $__LIST__ = $indexArticle[2];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                        <a class="news_clua" target="_blank" href="<?php echo U('Article/detail','id='.$vo['id']);?>">
                                            <?php if((LANG_SET == 'en') && (!empty($vo['en_title']))): echo ($vo['en_title']); ?>
                                                <?php else: ?> <?php echo ($vo['title']); endif; ?>
                                        </a>
                                        <!-- <a class="news_clda" target="_blank" href="<?php echo U('Article/detail','id='.$vo['id']);?>"> [ <?php echo (date("y-m-d",$vo['addtime'])); ?> ] </a> -->
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                <li>
                                    <a class="news_clda" target="_blank" href="/Article/index/id/<?php echo ($indexArticleType[2]['id']); ?>"> <?php echo L('more');?>&gt;&gt; </a>
                                </li>
      </ul>
    </div>
  </div>
</div>

    
  <!-- <div class="cta-1-section section section-sm" id="cta_1_section">
          <div class="container">
            <div class="section-header row">
              <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="section-title">Call to action</div>
                <div class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation.</div>
              </div>
            </div>
            <div class="section-content row">
              <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="section-cta"><a class="btn btn-lg btn-secondary legitRipple" href="#">Free trial</a> <a class="btn btn-lg btn-outline btn-inverse legitRipple" href="#">Learn more</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-1-section section" id="contact_1_section">
          <div class="container">
            <div class="section-header row">
              <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="section-title">Get in touch <span>with us</span></div>
                <div class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation.</div>
              </div>
            </div>
            <div class="section-content row">
              <div class="section-contact-form col-sm-7 col-md-6 col-md-offset-1 col-lg-5 col-lg-offset-1">
                <form class="contact-form form" id="contact_form_1" novalidate data-form-action="assets/php/contact.php">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group"><label for="contact_form_fname">First Name</label><input class="form-control" id="contact_form_fname" type="text" name="fname" placeholder="First name" data-rule-required="true" data-msg-required="This field is required."><span class="help-block form-notify"></span></div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group"><label for="contact_form_lname">Last Name</label><input class="form-control" id="contact_form_lname" type="text" name="lname" placeholder="Last name" data-rule-required="true" data-msg-required="This field is required."><span class="help-block form-notify"></span></div>
                    </div>
                  </div>
                  <div class="form-group"><label for="contact_form_email">Email address</label><input class="form-control" id="contact_form_email" type="email" name="email" placeholder="Email" data-rule-required="true" data-msg-required="This field is required." data-rule-email="true"
                      data-msg-email="Please enter a valid email address."><span class="help-block form-notify"></span></div>
                  <div class="form-group"><label for="contact_form_message">Message</label><textarea class="form-control" id="contact_form_message" rows="4" name="message" placeholder="Message" data-rule-required="true" data-msg-required="This field is required."></textarea>
                    <span
                      class="help-block form-notify"></span>
                  </div>
                  <div class="form-group"><input class="btn btn-block btn-primary" type="submit" value="Submit" form="contact_form_1" style="background-color: rgb(7, 105, 224); border-color: rgb(7, 105, 224);"><span class="help-block submit-notify"></span></div>
                </form>
              </div>
              <div class="section-contact-info col-sm-5 col-md-4 col-lg-4 col-lg-offset-1">
                <div class="contact-info">
                  <div class="contact-info-item wow fadeInRightShort" data-wow-delay="0ms">
                    <div class="media">
                      <div class="media-left"><button class="btn btn-fab btn-primary" style="background-color: rgb(6, 93, 199); border-color: rgb(7, 105, 224);" type="button"><i class="icon mdi mdi-map-marker-radius"></i></button></div>
                      <div class="media-body">
                        <h3 class="media-heading">Office location</h3><address>1000 Friendship Lane, <br>Mountain View, CA 1000</address></div>
                    </div>
                  </div>
                  <div class="contact-info-item wow fadeInRightShort" data-wow-delay="150ms">
                    <div class="media">
                      <div class="media-left"><button class="btn btn-fab btn-secondary" type="button"><i class="icon mdi mdi-deskphone"></i></button></div>
                      <div class="media-body">
                        <h3 class="media-heading">Phone number</h3><address><b>Tel:</b> +0 123-456-7890<br><b>Fax:</b> +0 123-456-7890</address></div>
                    </div>
                  </div>
                  <div class="contact-info-item wow fadeInRightShort" data-wow-delay="300ms">
                    <div class="media">
                      <div class="media-left"><button class="btn btn-fab btn-tertiary" type="button" style="background-color: rgb(156, 39, 176); border-color: rgb(156, 39, 176);"><i class="icon mdi mdi-email"></i></button></div>
                      <div class="media-body">
                        <h3 class="media-heading">Email address</h3><address><b>General:</b> email@example.com<br><b>Support:</b> email@example.com</address></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <!-- .site-content-->
      <div class="site-footer" id="site_footer">
        <div class="site-footer-info-1 section section-sm" id="site_footer_info_1" style="background-color: #0769e0;">
          <div class="container"><a class="btn btn-fab btn-secondary wow bounceIn" id="btn_scroll_to_top" href="#"><i class="icon mdi mdi-chevron-up"></i></a>
            <div class="section-content row">
              <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="site-footer-branding wow bounceIn">
                  <div class="site-footer-branding-media">
                    <a class="site-footer-branding-media-link" href="#"><img class="site-footer-branding-media-img" src="/Public/Home1/index/images/site-footer-branding-media-img-light.png" alt=""></a>
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
                  <div>Copyright &copy; 2017 BFC. All Rights Reserved.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .site-footer-->
    </div>
    <!-- .site-canvas-->
  </div>
  <!-- .site-->
  <div class="modal modal-primary fade" id="subscribe_form_1_modal" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-block">
          <div class="bg">
            <div class="bg-img" data-css-bg-img="assets/index/images/subscribe-form-1-bg-img.jpg"></div>
            <!-- .bg-img-->
            <div class="bg-overlay" data-css-opacity=".6"></div>
            <!-- .bg-overlay-->
          </div><button class="close" type="button" data-dismiss="modal"><span>&times;</span></button></div>
        <div class="modal-body">
          <h2>Subscribe</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <form class="subscribe-form form" id="subscribe_form_1" novalidate data-form-action="assets/php/mailchimp.php">
            <div class="form-group"><label class="sr-only" for="subscribe_form_1_email">Email address</label><input class="form-control" id="subscribe_form_1_email" type="email" name="email" placeholder="Email address" data-rule-required="true" data-msg-required="This field is required."
                data-rule-email="true" data-msg-email="Please enter a valid email address."><span class="help-block form-notify"></span></div>
            <div class="form-group"><input class="btn btn-block btn-secondary" type="submit" value="Submit" form="subscribe_form_1"><span class="help-block submit-notify"></span></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- #subscribe_form_1_modal-->
  <script src="/Public/Home1/index/js/jquery.min.js"></script>
  <script src="/Public/Home1/index/js/jquery.easing.min.js"></script>
  <script src="/Public/Home1/index/js/bootstrap.min.js"></script>
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
  <script src="/Public/Home1/index/js/jquery.mb.ytplayer.min.js"></script>
  <script src="/Public/Home1/index/js/app.js"></script>
</body>

</html>