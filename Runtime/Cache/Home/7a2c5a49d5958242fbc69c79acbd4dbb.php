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
					    <a href="<?php echo U('Finance/index');?>" class="movesay"><?php echo L('finance_center');?></a> &gt; <?php echo L('finance_entrustment_management');?> 
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
				      	<h1> <span> <?php echo L('finance_entrustment_management');?> </span> <span> <a class="right" onclick="$('#hints').slideToggle();"> <i class="fa fa-hand-o-right move fz_14 mr5"></i> <span class="fz_12 move">帮助</span> </a> </span> </h1> 
				     </div> 
				     
				     <div class="mytable-body"> 
					        
					       <div class="cnyin_record" > 
						      <div class="f_body"> 
						       <div class="f_body_main"> 
						        <div class="f_tab_body"> 
						         <div> 
						          <table class="f_table" id="investLog_content"> 
						           <thead> 
						            <tr> 
						             <th>
						             <select name="market-selectTest" id="market-selectTest">
											<?php if(is_array($market_list)): $i = 0; $__LIST__ = $market_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($market) == $key): ?><option value="<?php echo ($vo['name']); ?>" selected="selected"><?php echo ($coin_list[$vo['xnb']]['title']); ?>(<?php echo (strtoupper($vo['xnb'])); ?>/<?php echo (strtoupper($vo['rmb'])); ?>)</option>
														<?php else: ?>
														<option value="<?php echo ($vo['name']); ?>"><?php echo ($coin_list[$vo['xnb']]['title']); ?>(<?php echo (strtoupper($vo['xnb'])); ?>/<?php echo (strtoupper($vo['rmb'])); ?>)</option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
									  <!-- <option value="btc_cny" selected="selected">比特幣(BTC/CNY)</option>
									  <option value="wkb_cny">玩客幣(鏈克)(WKB/CNY)</option>
									  <option value="llt_cny">流量幣(LLT/CNY)</option>
									  <option value="wc_cny">玩家幣(WC/CNY)</option>
									  <option value="sdc_cny">星域幣(SDC/CNY)</option>
									  <option value="yz_cny">360云钻合约(YZ/CNY)</option> -->
									</select> 
						             </th>
						             <th><?php echo L('finance_entrust_time');?></th> 
						             <th>
											<select name="type-selectTest" id="type-selectTest">
													<option value="0"
														<?php if(($type) == "0"): ?>selected<?php endif; ?>>--<?php echo L('all');?>--
													</option>
													<option value="1"
														<?php if(($type) == "1"): ?>selected<?php endif; ?>><?php echo L('finance_entrust_buy');?>
													</option>
													<option value="2"
														<?php if(($type) == "2"): ?>selected<?php endif; ?>><?php echo L('finance_entrust_sell');?>
													</option>
												</select>
										 <!-- <select name="type-selectTest" id="type-selectTest"> <option value="0">-全部- </option> <option value="1">买入 </option> <option value="2">卖出 </option> </select> -->
									 </th>
						             <th><?php echo L('finance_entrust_price');?></th> 
						             <th><?php echo L('finance_entrust_amount');?></th>
						             <th><?php echo L('finance_entrust_amountprice');?></th> 
						             <th><?php echo L('finance_entrust_volume');?></th> 
						             <th>
											<select name="status-selectTest" id="status-selectTest">
													<option value="0"
														<?php if(($status) == "0"): ?>selected<?php endif; ?>>---<?php echo L('all');?>---
													</option>
													<option value="1"
														<?php if(($status) == "1"): ?>selected<?php endif; ?>><?php echo L('finance_entrust_transaction');?>
													</option>
													<option value="2"
														<?php if(($status) == "2"): ?>selected<?php endif; ?>><?php echo L('finance_entrust_completed');?>
													</option>
													<option value="3"
														<?php if(($status) == "3"): ?>selected<?php endif; ?>><?php echo L('finance_entrust_canceled');?>
													</option>
													<option value="100"
														<?php if(($status) == "100"): ?>selected<?php endif; ?>><?php echo L('finance_entrust_succeed');?>
													</option>
												</select>
										 <!-- <select name="status-selectTest" id="status-selectTest"> <option value="0">---全部--- </option> <option value="1">交易中 </option> <option value="2">已完成 </option> <option value="3">已撤销 </option> </select> -->
										 </th>
						            </tr> 
						           </thead> 
						           <tbody> 

										<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                                    <td><?php echo ($coin_list[$market_list[$vo['market']]['xnb']]['title']); ?> (<?php echo (strtoupper($market_list[$vo['market']]['xnb'])); ?>/<?php echo (strtoupper($market_list[$vo['market']]['rmb'])); ?>)</td>
                                                    <td><?php echo (date('m-d H:i:s',$vo["addtime"])); ?></td>
                                                    <td><?php if(($vo["type"]) == "1"): ?><font class="buy"><?php echo L('finance_entrust_buy');?></font> <?php else: ?> <font class="sell"><?php echo L('finance_entrust_sell');?></font><?php endif; ?></td>
                                                    <td><?php echo (NumToStr($vo['price'])); ?></td>
                                                    <td><?php echo (NumToStr($vo['num'])); ?></td>
                                                    <td><?php echo (NumToStr($vo['num']*$vo['price'])); ?></td>
                                                    <td><?php echo (NumToStr($vo['deal'])); ?></td>
                                                    <td>

                                                        <?php if(($vo["status"]) == "0"): echo L('finance_entrust_transaction');?> |



                                                            <?php if(($vo["market"]) == "sgc_cny"): if(($vo["type"]) == "1"): ?><a id="<?php echo ($vo["id"]); ?>" onclick="getbank(<?php echo ($vo["buyuserid"]); ?>)" href="javascript:void(0);" style="color:red;"><?php echo L('finance_bank_info');?></a>
                                                                    <?php if(($vo["status1"]) == "1"): ?><a class="fukuan" id="<?php echo ($vo["id"]); ?>" href="javascript:void(0);"> <?php echo L('finance_confirm_payment');?></a><?php endif; ?>

                                                                    <?php if(($vo["status1"]) == "2"): ?>| <?php echo L('finance_confirmation_of_the_seller'); endif; ?>
                                                                    <a id="<?php echo ($vo["id"]); ?>" onclick="up(<?php echo ($vo["id"]); ?>)" href="javascript:void(0);" style="color:red;"> | <?php echo L('finance_upload_transaction_certificate');?></a>
                                                                    <input type="hidden" id="img" name="img" value="<?php echo ($data["img"]); ?>">
                                                                    <input type="file" id="inputfile" style="height:0;width:0;z-index: -1; position: absolute;left: 10px;top: 5px;" value="" />
                                                                    <?php if(($vo["status1"]) == "1"): ?><a class="buycancel" id="<?php echo ($vo["id"]); ?>" href="javascript:void(0);">| <?php echo L('finance_cancel');?></a><?php endif; endif; ?>

                                                                <?php if(($vo["type"]) == "2"): if(($vo["status1"]) == "1"): echo L('finance_buyers_paid'); endif; ?>

                                                                    <?php if(($vo["status1"]) == "2"): ?><a class="pipei" id="<?php echo ($vo["id"]); ?>" href="javascript:void(0);"> <?php echo L('finance_confirm_receipt');?></a><?php endif; ?>
                                                                    <?php if(($vo["status1"]) == ""): ?><a class="cancel" id="<?php echo ($vo["id"]); ?>" href="javascript:void(0);"> <?php echo L('finance_cancel');?></a><?php endif; endif; ?>
                                                                <?php if(($vo["imgurl"]) == ""): else: ?> <br /><a id="<?php echo ($vo["id"]); ?>" onclick="upimg('<?php echo ($vo["imgurl"]); ?>')" href="javascript:void(0);"> <?php echo L('finance_view_certificate');?></a><?php endif; ?>





                                                                <?php else: ?><a class="cancel" id="<?php echo ($vo["id"]); ?>" href="javascript:void(0);"> <?php echo L('finance_cancel');?></a><?php endif; endif; ?> <?php if(($vo["status"]) == "1"): echo L('finance_entrust_completed'); endif; ?> <?php if(($vo["status"]) == "2"): echo L('finance_entrust_canceled'); endif; ?>

                                                    </td>
                                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>


						           </tbody> 
						          </table> 
						          <div class="pages"></div> 
						         </div> 
						        </div> 
						       </div> 
						      </div> 
						   </div>  
					      
					      <!--转入记录--> 
					      
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
        var trans_lock = 0;

var tid='';

function getbank(userid)
{
$.getJSON("/Ajax/getUserBank?userid="+userid+"&t="+Math.random(),function(data){
            if(data){
                if(data['BankOne']){
                    var list='<table>';
                    var type='';
                    var typename='';
                    for( var i in data['BankOne']){
                    
                            list+='<tr ><td class="buy"   width="65"><?php echo L('finance_open_bank');?></td><td class="buy"   >'+data['BankOne'][i]['bank']+'</td></tr>';
                                list+='<tr ><td class="buy"   width="65"><?php echo L('finance_open_province');?></td><td class="buy"   >'+data['BankOne'][i]['bankprov']+'</td></tr>';
                                    list+='<tr ><td class="buy"   width="65"><?php echo L('finance_open_city');?></td><td class="buy"   >'+data['BankOne'][i]['bankcity']+'</td></tr>';
                                        list+='<tr ><td class="buy"   width="65"><?php echo L('finance_open_branch');?></td><td class="buy"   >'+data['BankOne'][i]['bankaddr']+'</td></tr>';
                                            list+='<tr ><td class="buy"   width="65"><?php echo L('finance_open_name');?></td><td class="buy"   >'+data['BankOne'][i]['truename']+'</td></tr>';
                                                list+='<tr ><td class="buy"   width="65"><?php echo L('finance_open_bank_number');?></td><td class="buy"  >'+data['BankOne'][i]['bankcard']+'</td></tr>';
                            list+='<tr ><td class="buy"   width="65"><?php echo L('finance_phone');?></td><td class="buy"   >'+data['BankOne'][i]['moble']+'</td></tr>';
                    }
                    list+='</table>'
                       layer.alert(list,             {title: '<?php echo L('finance_open_bank_info');?>',});
                }
                else{
                layer.msg(data.info,{icon : 1 });
                }
            }
        });
}


function upimg(url)
{

    $.post("<?php echo U('Trade/file_type');?>",{filename:url},function(data){
        
            if(data.info==1){


                var json='';
                 layer.photos({
                    photos: {
                  "status": 1,
                  "msg": "",
                  "title": "<?php echo L('finance_certificate');?>",
                  "id": 8,
                  "start": 0,

                  "data": [
                    {
                      "alt": "",
                      "pid": 109,
                      "src": url,
                      "thumb": ""
                    }
                  ]
                } //格式见API文档手册页
                    ,shift: 5 //0-6的选择，指定弹出图片动画类型，默认随机
                  });
            
            }else{
                layer.msg('图片类型不正确，请联系买家重新上传凭证',{icon : 2 });
            }
        });


}
function up(id)
{
tid=id;

document.getElementById('inputfile').click();
}
$(document).ready(function () {
        //响应文件添加成功事件
        $("#inputfile").change(function () 
        {
        
        if(trans_lock){
            layer.msg('<?php echo L('finance_repeat');?>',{icon : 2 });
            return;
        }
         trans_lock = 1;
         layer.load(2);
        //此处演示关闭
        
        
        
            //创建FormData对象
            var data = new FormData();
            //为FormData对象添加数据
            $.each($('#inputfile')[0].files, function (i, file) {
                data.append('upload_file' + i, file);
            });


            //发送数据
            $.ajax({
                url: '/Home/Trade/tradeImage',
                type: 'POST',
                data: data,
                cache: false,
                contentType: false,     //不可缺参数
                processData: false,     //不可缺参数
                success: function (data) {
                    if (data) {
                        
                        $.post("<?php echo U('Trade/ofcupimg');?>",{id : tid,url:data },function(data){
                        layer.closeAll('loading');
            trans_lock = 0;
            if(data.status==1){
                layer.msg(data.info,{icon : 1 });
                window.setTimeout("window.location='<?php echo U('Finance/mywt');?>'",1000);
            }else{
                layer.msg(data.info,{icon : 2 });
            }
        });
                    }
                },
                error: function () {
                    alert('<?php echo L('finance_upload_error');?>');
                    $(".loading").hide();   //加载失败移除加载图片
                }
            });

        });
    });
$("#type-selectTest,#status-selectTest,#market-selectTest").change(function(){
        var type=$("#type-selectTest option:selected").val();
        var status=$("#status-selectTest option:selected").val();
        var market=$("#market-selectTest option:selected").val();
        window.location='/Finance/mywt/type/'+type+'/status/'+status+'/market/'+market+'.html';
    });

    $('.cancel').click(function(){
        $.post("<?php echo U('Trade/chexiao');?>",{id : $(this).attr('id'), },function(data){
            if(data.status==1){
                layer.msg(data.info,{icon : 1 });
                window.setTimeout("window.location='<?php echo U('Finance/mywt');?>'",1000);
            }else{
                layer.msg(data.info,{icon : 2 });
            }
        });
    });

    $('.pipei').click(function(){
    
    if(trans_lock){
            layer.msg('<?php echo L('finance_repeat');?>',{icon : 2 });
            return;
        }
    trans_lock = 1;
        layer.load(2);
        //此处演示关闭
        setTimeout(function(){
          layer.closeAll('loading');
          trans_lock = 0;
        }, 10000);
    
    
        $.post("<?php echo U('Trade/upTrade2');?>",{id : $(this).attr('id'), },function(data){
            layer.closeAll('loading');
            trans_lock = 0;
            if(data.status==1){
                layer.msg(data.info,{icon : 1 });
                window.setTimeout("window.location='<?php echo U('Finance/mywt');?>'",1000);
            }else{
                layer.msg(data.info,{icon : 2 });
            }
        });
    });
    $('.fukuan').click(function(){
        $.post("<?php echo U('Trade/ofcfukuan');?>",{id : $(this).attr('id'), },function(data){
            if(data.status==1){
                layer.msg(data.info,{icon : 1 });
                window.setTimeout("window.location='<?php echo U('Finance/mywt');?>'",1000);
            }else{
                layer.msg(data.info,{icon : 2 });
            }
        });
    });
    $('.buycancel').click(function(){
        $.post("<?php echo U('Trade/ofcbuy_chexiao');?>",{id : $(this).attr('id'), },function(data){
            if(data.status==1){
                layer.msg(data.info,{icon : 1 });
                window.setTimeout("window.location='<?php echo U('Finance/mywt');?>'",1000);
            }else{
                layer.msg(data.info,{icon : 2 });
            }
        });
    });









        $(function () {
            //nav标记
            var currUrl = window.location.toString();
            if (currUrl.indexOf('#') > 0) {
                $.cookie('nav_index', 1, { path: '/' });
            } else if (currUrl.indexOf('/login') > 0 || currUrl.indexOf('#') > 0 || currUrl.indexOf('/page/') > 0 || currUrl.indexOf('/fee') > 0) {
                $.cookie('nav_index', 9, { path: '/' });
            } else if (currUrl.indexOf('/coins') > 0) {
                $.cookie('nav_index', 4, { path: '/' });
            }
            $(".bter-nav").children("li").click(function () {
                $.cookie('nav_index', $(this).index(), { path: '/' });
            }).eq($.cookie('nav_index')).addClass("nav-active");
            $(".user-log-out a,.more-lan a").click(function () {
                $.cookie('nav_index', 0, { path: '/' });
            });
            //用户等级
            var pb = $("#ProgressBar"), pbWidth = pb.width(), loginbar = $("#topLoginBar"), tmenu = $("#tierMenu"), barcon = $("#pbCon"), barmark = $("#pbCon").find("i"), pbar = $("#proBar"), fbar = $("#fproBar"), pro_val = '';
            loginbar.hover(function () {
                tmenu.stop().slideDown(200);
                $(this).stop().css("color", "#f80");
                barmark.css("opacity", "0");
                pbar.animate({ width: pro_val + '%' }, 800);
            }, function () {
                tmenu.stop().slideUp(100);
                $(this).stop().css("color", "#fff");
                barmark.css("opacity", "1");
                pbar.css('width', '0');
            });
            tmenu.css("width", pbWidth);
            fbar.animate({ width: pro_val + '%' }, 800);

            $.fn.animateProgress = function (progress, callback) {
                return this.each(function () {
                    $(this).animate({
                        width: progress + '%'
                    }, {
                        duration: 800,
                        easing: 'swing',
                        step: function (progress) {
                            $('.value').text(Math.ceil(progress) + '%');
                        },
                        complete: function (scope, i, elem) {
                            if (callback) {
                                callback.call(this, i, elem);
                            };
                        }
                    });
                });
            };
            if (pro_val == '') barcon.animateProgress(0); else barcon.animateProgress(pro_val);

            //页面高度
            var lb = $(".leftbar"), mc = $(".main_content"), lh = lb.height(), mh = mc.height();
            if (lh < mh) { lb.css("height", mh) }

            //右侧客户服务
            $(".side-sev ul li").hover(function () {
                var _this = $(this);
                _this.find(".sidebox").stop().animate({ "width": "165px" }, 2).css({ "background": "#009173" });
            }, function () {
                $(this).find(".sidebox").stop().animate({ "width": "45px" }, 2).css({ "background": "none" });
            });

            $(".sideweixin").hover(function () {
                $(".wx-code span").stop().show();
                $(this).stop();
                $(".wx-code").stop().html('<img width="120" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJgAAACYAQMAAAAiDLJiAAAABlBMVEUrNDz///8m7jN3AAABkklEQVR4XrXWMc60IBSF4ddYUN4dDBsxsi0LE0mmcFtM3IizA0oKw/ln/JNpvhI9HU/JIfeC/qbJMjA+LLsjVHIBfJtJx9gpOyWvXBbVG6wwjICTdm9lYmy3UFHsU7dzjY2YCkG73WTStwmmPj38eS8t9uvS1uf23nMB2kzf7Ab9Jtl5utyyIviMi72EKwO+yVTclrqcmcGbi3RqM6DbjWnR2Rv4yy3jlDrlRdsObj06NZmYhhFYjlB9ZtGrzXJZlMDWg05ZSuEOc6mrZmUeICsGNZpiXx+m9am3cGsafZOpuANQmcN7Bwi63LKL/WuHaR46qXyK8I1WhlBNZeYBTqnVpK0+yPTSb25cbCoQ3lnrc6uYYi81WXYxvHbTqm8+h1aTUveWdIAHtyV/g326rKh8uzQXBxrN6QCkc7ZDeKnJJKliLDFUj8oQrrf/+wg774AyNZt0jJjWCKAy4Bvst89xMVSAkG6yx/mSK9kpje0WJIszXuZin1rs9wcxKXWSK3CDASNmcR78OYuDmkx/crn9A2cj27YK/b1/AAAAAElFTkSuQmCC" alt="比特儿微信" /><span>比特儿微信</span>').animate({ "width": "120px" }, 200).css({ "padding": "10px", "border-width": "1px" })
            }, function () {
                $(".wx-code span").stop().hide();
                $(this).stop();
                $(".wx-code").stop().animate({ "width": "0" }, 200).css({ "padding": "0", "border-width": "0" })
            });
            $("#bottomWXli").hover(function () {
                $(".wx-bottom").show()
            }, function () {
                $(".wx-bottom").hide()
            });

            //全站重要通知
            var notyContent = '';

            function notyCookie() { //设置通知cookie
                var noticeMsg = $("#siteNotyCon").text();
                $.cookie('notice', noticeMsg, { expires: 365, path: '/' });
            }

            var annCookie = $.cookie('notice');
            if (annCookie != notyContent && notyContent != '') { //通知有更新时
                var sNoty = $("#siteNoty").noty({
                    text: "【重要通知】：<a id='siteNotyCon' href='#' target='_blank'>" + notyContent + "</a>",
                    type: 'error',
                    layout: 'top',
                    theme: 'bterNotyTheme',
                    closeWith: ['button'],
                    animation: { speed: 0 },
                    callback: {
                        afterShow: function () {
                            $("#siteNotyCon").click(function () {
                                notyCookie();
                                sNoty.close();
                            })
                        },
                        onClose: function () {
                            $("#siteNoty").animate({ height: 0 }, 100).css("border", "none");
                            notyCookie()
                        }
                    }
                });
            }

        });

        //backtotop
        (function () {
            var $backToTopTxt = "^", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
                    .text($backToTopTxt).click(function () {
                        $("html, body").animate({ scrollTop: 0 }, 500);
                    }), $backToTopFun = function () {
                        var st = $(document).scrollTop(), winh = $(window).height();
                        (st > 0) ? $backToTopEle.show() : $backToTopEle.hide();
                        //IE6下的定位
                        if (!window.XMLHttpRequest) {
                            $backToTopEle.css("top", st + winh - 166);
                        }
                    };
            $(window).bind("scroll", $backToTopFun);
            $(function () { $backToTopFun(); });
        })();
    </script>
    <script>
        $(document).ready(function () {

            if ($.cookie('show_zero_funds') === undefined || $.cookie('show_zero_funds') === '1') {
                $('tr[data-id=zero]').show();
                $('#hidezero').prop('checked', false);
            } else {
                $('#hidezero').prop('checked', true);
            }
            $('#hidezero').on('click', function (event) {
                $('tr[data-id=zero]').toggle();
                if ($('tr[data-id=zero]').is(':visible')) {
                    $.cookie('show_zero_funds', '1');
                } else {
                    $.cookie('show_zero_funds', '0');
                }
            });
        });

    </script>



</body>
</html>