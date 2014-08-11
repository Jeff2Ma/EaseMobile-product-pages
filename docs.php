<?php 
require_once('function.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>EaseMobile 主题使用文档 | DeveWork</title><!---->
		  <meta name="keywords" content="EaseMobile,主题,使用说明,下载," />
	      <meta name="description" content="非常感谢您购买使用EaseMobile 主题，为了能让您熟练使用本主题，特开此使用文档，对常见的操作、问题等予以说明。已购买用户请详细看完本文档。本文档会不时更新。" />
		<link rel='stylesheet' href='<?php echo $path ?>main.css<?php echo $ver ?>' type='text/css'>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $path ?>docs/css/bootstrap.min.css<?php echo $ver ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $path ?>docs/css/docs.css<?php echo $ver ?>" />
	</head>
	<body data-spy="scroll" data-target="#docs_navigation">
		<div class="header">
				<?php
			require_once('fixheader.php');
			?>
			<div class="container">
				<div class="row">
					<div class="m_logo col-md-2 col-sm-12 col-xs-12">
					</div><!-- class="col-" -->
					<div class="mmm col-md-8 col-sm-12 col-xs-12">
						<span>EaseMobile 主题</span>
						<!--<p>最后更新：2014.02.24</p>-->
					</div><!-- class="col-" -->
					<div class="coming col-md-2 col-sm-12 col-xs-12">
					</div><!-- class="col-" -->
				</div>
			</div><!-- class="container" -->
		</div><!-- class="header" -->
		<div class="container">
			<div class="row">
				<div class="sidebar col-sm-3">
					<div id="docs_navigation" class="bs-sidebar hidden-print affix">
						<ul class="nav bs-sidenav">            
							<li>
								<a href="#top">欢迎</a>
							</li>
							<li>
								<a href="#before_buy">购买方式及须知</a>
							</li>
							<li>
								<a href="#install_menu">安装与菜单设置</a>
								<ul class="nav">
									<li><a href="#install_theme">安装主题以及DW Mobile Switcher 插件</a></li>
									<li><a href="#menu_setting">菜单设置</a></li>
								</ul>
							</li>
							<li>
								<a href="#theme_settings">主题后台设置</a>
								<ul class="nav">
									<li><a href="#general">总体设置</a></li>
									<li><a href="#function">功能设置</a></li>
									<li><a href="#slider">幻灯片</a></li>
									<li><a href="#webapp">Web APP</a></li>
									<li><a href="#ad">广告设置</a></li>
									<li><a href="#shuoming">说明</a></li>

								</ul>
							</li>
							<li>
								<a href="#plugin_setting">DW Mobile Switcher插件设置</a>
								<ul class="nav">
									<li><a href="#mobile_theme">选择手机、平板主题</a></li>
									<li><a href="#api">高级接口</a></li>
								</ul>
							</li>
							<li>
								<a href="#edit">编辑文章需注意的地方</a>
								<ul class="nav">
									<li><a href="#word">首页文章截断字数的问题</a></li>
									<li><a href="#pic">添加特色图片</a></li>
								</ul>
							</li>
							<li>
								<a href="#update">主题更新升级</a>
							</li>
							<li>
								<a href="#support">帮助与支持</a>
							</li>
						</ul>
					</div><!-- class="sidebar" -->
				</div><!-- class="sidebar" -->
				<div class="primary_content col-sm-9">
					<div class="bs-docs-section">
						<div class="page-header no_top_margin">
							<h1 id="welcome">欢迎</h1>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<p>非常感谢您购买使用EaseMobile 主题，为了能让您熟练使用本主题，特开此使用文档，对常见的操作、问题等予以说明。已购买用户请详细看完本文档。本文档会不时更新。</p>
								<p><strong>关于移动主题运行逻辑说明：</strong>购买使用移动主题后，通过插件的作用，可以使得访客访问你的网站：如果是PC 环境，访问的是原来的主题（即电脑主题、桌面主题）；如果是移动设备访问，则自动调用移动主题显示。</p>
								<p>小提示：图片如果感觉过小，点击图片即可连接到原大小图片。</p>
							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<table class="table table-bordered">
									<tr>
										<td>文档最后更新</td>
										<td>2014年06月13日</td>
									</tr>
									<tr>
										<td>主题最新版本</td>
										<td>V 1.2.2</td>
									</tr>
								</table>
							</div><!-- /image_container -->
						</div><!-- /row -->
						<!-- /welcome -->


						<div class="page-header">
							<h1 id="before_buy">购买方式及须知</h1>
						</div>
						<!--<h4 id="install" class="small_caption">1) Instal</h4>-->
						
						<div class="row">
							<div class="col-xs-12">
								<p>在购买本主题前，请确保你已经了解并做好以下几点：</p>
								<ol>
									<li>本手机主题需要配合一个手机主题切换插件<a target="_blank" href="http://devework.com/dw-mobile-switcher.html">DW Mobile Switcher</a> 使用。<strong>网站采取了缓存机制</strong>的请确保你的网站在手机访问的时候DW Mobile Switcher 插件可以正常工作。<a target="_blank" href="http://devework.com/dw-mobile-switcher.html#test">自己测试一下</a></li>
									<li>本主题具备域名授权功能，一份主题价格授权1个站点。</li>
									<li>已购买用户在产品生命期内可以免费更新升级。购买后无个性化的代码修改服务，如有额外功能需求，需额外加价进行定制（额外定制请直接联系主题作者）。</li>
									<li>购买者购买主题仅限自用，不得在网络上共享或者二次销售，否则作者将保留追究责任的权利。购买者使用该主题有能力者可进行相关代码修改或者二次开发，但所有开发行为仅限自用。</li>
									<li>购买者有权利参与主题功能的讨论（如提交bug）及提出个人需求的建议，符合需求的可以在下次更新主题时候添加；</li>
									<li>由于主题的特殊性，一旦付款，则表示确认购买主题，不接受退款。</li>
								</ol>
								<p>未尽事宜详见<a href="http://devework.com/theme/devemobile/docs/know.html">《DeveMobile、EaseMobile主题购买须知》</a>，一旦付款，即表示您已经阅读完所有相关内容本承认遵守该《须知》。</p>
							</div>

							<!-- <div class="col-xs-12 col-sm-5 image_container">
								<a href="src/img/sh_instal.jpg"><img src="src/img/sh_instal.jpg" /></a>
							</div>/image_container -->
						</div><!-- /row -->
												<h4>主题当前售价：<strong  style="color: #ff6600;">￥99</strong></h4>

						<div class="row">
						<div class="col-xs-12">
						<h4>购买方式：支付宝转账购买</h4>							
						<div  style="text-indent:2em">					

						<p>支付宝账号：<img src="<?php echo $path ?>docs/img/mail.png" alt="支付宝账号" style="width:167px;">（姓名：*健辉）</p>
						<p>推荐使用支付宝钱包接扫描二维码支付：</p>
						<p><img src="<?php echo $path ?>docs/img/qr200.png" alt="二维码支付" style="width:200px;"></p>
						<p><strong>备注填：EaseMobile+您的QQ 号。购买后请加我qq，12小时内我会处理后续工作（建议付款前<a href="http://devework.com/contact">联系我</a>）。</strong></p>
								<p>另外也支持Paypal 以及工商银行转账，欲采用该方式的请联系我。</p>
								</div></div>
							</div>

						
						<div class="page-header">
							<h1 id="install_menu">安装与菜单设置</h1>
						</div>
						<h4 id="install_theme" class="small_caption">1）安装主题以及DW Mobile Switcher 插件</h4>
						<h4><small>仪表盘 &#9658; 外观 &#9658; 主题 &#9658; 上传</small></h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<p>关于安装不做详细步骤说明，如果你不懂，请自行搜索“WordPress 主题（插件）安装”内容。</p>
								<ol>
								    <li>
										建议安装前备份一下数据。
									</li>
									<li>
										你可以通过WordPress 后台上传后再激活的方式安装或者通过ftp 上传安装方式安装。
									</li>
									<li>
										注意：安装DW Mobile Switcher插件前务必先暂停相关手机主题切换插件，防止与插件功能冲突！
									</li>
									<li>
										安装后激活主题，如果你的域名没有授权，主题将不能使用，请提前联系作者授权域名。
									</li>
									<li style="color:red;">以后关于本主题的文件，如果要通过FTP上传，务必要将上传模式修改为二进制模式，具体不同FTP软件设置方法见： http://bbs.phome.net/showthread-2-27866-0.html 或者http://faq.comsenz.com/viewnews-373</li>
								</ol>
								<p>DW Mobile Switcher插件是Jeff 开发的与主题配套使用的手机主题切换插件，使用其他手机主题切换插件将不能正常使用主题。</p>
							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/anzh.png"><img src="<?php echo $path ?>docs/img/anzh.png" /></a>
							</div><!-- /image_container -->
						</div><!-- /row -->


						<h4 id="menu_setting" class="small_caption">2）菜单设置</h4>
						<h4><small>仪表盘 &#9658; 外观 &#9658; 菜单 &#9658; 编辑菜单</small></h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<p>菜单对于主题的左侧边栏的导航栏。建议新建一个菜单（因为并不一定是要与pc 主题的菜单相同的），菜单名字随便命名。然后拖动选择菜单的子项目，本主题只支持一级菜单，请自行设置。</p>
								<p>主题左侧导航栏的每个小图标是通过每个项目的“图像描述”来设置的（请点击左上角的“显示选项”，勾选“图像描述”），在某个项目中输入图片代码（类似icon-***），限于篇幅，本完整步骤以及视频教程请参考<a target="_blank" href="http://devework.com/easemobile-menu-icon-setting.html">《EaseMobile 主题导航菜单设置小图标的方法（图文+视频教程）》</a>一文。</p>
							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/menu-icon.png"><img src="<?php echo $path ?>docs/img/menu-icon.png" /></a>
							</div><!-- /image_container -->
						</div><!-- /row -->
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<h4><small>仪表盘 &#9658; 外观 &#9658; 菜单 &#9658; 管理菜单</small></h4>
								<p>在“主题位置”下面选择“移动主题菜单”，“已指派的菜单”选择你上一步编辑的菜单，保存即可。</p>
							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/menu2.png"><img src="<?php echo $path ?>docs/img/menu2.png" /></a>
							</div><!-- /image_container -->
						</div><!-- /row -->


						<!-- /quick_start -->

						<div class="page-header">
							<h1 id="theme_settings">主题后台设置</h1>
						</div>
						
						<h4><small>仪表盘 &#9658; 外观 &#9658; 主题设置 &#9658;</small></h4>
						<p>主题后台设置页面是本主题的核心功能实现，借助本设置页面，你可以随心所欲地个性化主题且不必要求你有写代码的能力。以下将针对每一设置板块进行说明。记得设置好后保存。</p>

						<h4 id="general" class="small_caption">1）总体设置</h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<p>“总体设置”板块 包括主题皮肤、首页布局、logo上传等等，具体每个选项的内容在对应位置已经有详细说明，请自行了解。可以尝试保存不同设置，这样对应前台的改变即可一目了然。</p>
								<p>特别需要说明的是关于两个“文章布局”的区别：</p>
								<ul>
											<li>
												第一种布局称为“默认布局”，即是如果有设置特色图像，则在首页的文章会显示特色图像，否则不显示。特色图像的居中显示的。
											</li>
											<li>
												第二种布局称为“传统博客布局”，也是如果有设置特色图像，则在首页的文章会显示特色图像，否则不显示。不同的是，特色图像的靠左侧显示的。
											</li>
											<li>
												特色图像的设置需要你写文章的时候注意设置，当然，前提是你的pc 端主题支持特色图像。
											</li>
										</ul>

							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/theme-setting1.png"><img src="<?php echo $path ?>docs/img/theme-setting1.png" /></a>
							</div><!-- /image_container -->
						</div><!-- /row -->

						<h4 id="function" class="small_caption">2）功能设置</h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<p>“功能设置”板块的前四项（文章信息，分享、上一篇下一篇、相关文章）分别是对应文章页的模块，您可以根据自己的喜好开启与否。其他板块的话注意的是自定义css、js两个板块，你可以在这里写入你想添加的css、js代码，但要注意一定要用闭合标签包含代码。</p>
							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/theme-setting2.png"><img src="<?php echo $path ?>docs/img/theme-setting2.png" /></a>
							</div><!-- /image_container -->
						</div><!-- /row -->

						<h4 id="slider" class="small_caption">3）幻灯片</h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<p>“幻灯片”板块对应前台的首页幻灯片。虽然本主题配有幻灯片，但从移动设备加载的角度上考虑，<strong>不建议</strong>您开启该功能。如需使用，请自行按照说明使用。</p>
								
							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/theme-setting3.png"><img src="<?php echo $path ?>docs/img/theme-setting3.png" /></a>
							</div><!-- /image_container -->
						</div><!-- /row -->

						<h4 id="webapp" class="small_caption">4）Web APP</h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<p>“Web APP”板块：如果你的访客将你的网站“发送到屏幕”生成一个类似app 的东西，那么通过下面的设置就可以让体验更加友好。支持苹果设备及部分安卓机子。具体意思可以参考《》一文。</p>
								<p>本板块启用相关选项后，您需要做的就是准备图片，具体设置页面有说明。</p>
							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/theme-setting4.png"><img src="<?php echo $path ?>docs/img/theme-setting4.png" /></a>
							</div><!-- /image_container -->
						</div><!-- /row -->

						<h4 id="ad" class="small_caption">5）广告设置</h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<p>“广告设置”板块：虽然本主题配有广告位，但从移动网页的加载速度上考虑建议不要添加广告位。如果非要设置，按照说明即可。</p>
							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/theme-setting5.png"><img src="<?php echo $path ?>docs/img/theme-setting5.png" /></a>
							</div><!-- /image_container -->
						</div><!-- /row -->

						<h4 id="shuoming" class="small_caption">6）说明</h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<p>“说明”板块无特别用处。</p>
							</div>
						</div><!-- /row -->
						<!-- /general_settings -->

						<div class="page-header">
							<h1 id="plugin_setting">DW Mobile Switcher插件设置</h1>
						</div>
						<h4><small>仪表盘 &#9658;移动主题 &#9658;DW Mobile Switcher 设置页面</small></h4>
						<p>注意：当你做好上面的主题设置后，请切换回原来的主题（即桌面主题），然后再来到本页面。</p>
						<h4 id="mobile_theme" class="small_caption">1）选择手机、平板主题</h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<p>在该页面会清楚显示你当前的桌面主题，然后由两个选项功能选择手机、平板主题，下拉选择相应的手机主题保存即可。</p>
							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/plugin.png"><img src="<?php echo $path ?>docs/img/plugin.png" /></a>
							</div><!-- /image_container -->
						</div><!-- /row -->

						<h4 id="api" class="small_caption">2）高级接口</h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								<p>本插件支持移动主题与电脑主题的手动切换，如果使用本移动主题默认有<code>手机→电脑主题</code>的入口；但相对应的电脑桌面主题上则需要添加代码以提供<code>电脑→手机主题</code>的接口，复制页面中的代码添加到当前pc主题的适当位置（一般为页脚处），酌情添加css样式即可。</p>
							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/plugin2.png"><img src="<?php echo $path ?>docs/img/plugin2.png" /></a>
							</div><!-- /image_container -->
						</div><!-- /row -->


						<div class="page-header">
							<h1 id="edit">编辑文章需注意的地方</h1>
						</div>
						<h4><small>仪表盘 &#9658;文章 &#9658;攒写或编辑文章</small></h4>

						<h4 id="word" class="small_caption">1）首页文章截断字数的问题</h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
							<p>相信你也知道，首页的文章是截断来显示的（因为首页全文输出会很难看的）。本主题的方式是这样的：有more标签的优先more标签截断输出，否则按照一定数字输出。当然，选择哪个必须考虑到桌面主题。</p>
							</div>
							<!--<div class="col-xs-12 col-sm-5 image_container">
								<a href="src/img/plugin2.png"><img src="src/img/plugin2.png" /></a>
							</div> /image_container -->
						</div><!-- /row -->


						<h4 id="pic" class="small_caption">2）添加特色图片</h4>
						<div class="row">
							<div class="col-xs-12 col-sm-7">
								 <p>在你编辑文章的时候，通过添加特色图片的方式，就可以为你的文章首页添加漂亮的图片。具体本主题支持两种添加特色图像的方式：输出自定义域图片地址thumb & 上传的特色图像</p>
								 <ul>
								 	<li>输出自定义域图片地址thumb：在自定义栏目那里的thumb（第一次需要添加该值）填写图片地址（绝对路径）。</li>
								 	<li>上传特色图像：应该知道怎么做吧？不会请自行搜索。</li>
								 </ul>
								 <p>特色图像优先级：输出自定义域图片地址thumb＞上传的特色图像。即是说比如你又上传了特色图像又用thumb 设置了，那么根据优先级，只会显示thumb的那个图片。</p>
							</div>
							<div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/thumb.png"><img src="<?php echo $path ?>docs/img/thumb.png" /></a>
							</div><!-- /image_container -->
						</div><!-- /row -->

						<div class="page-header">
							<h1 id="update">主题更新升级</h1>
						</div>
						
						
			
						
						<div class="row">
						  <div class="col-xs-12 col-sm-7">			<h4><small>仪表盘 &#9658;更新</small></h4><p>本主题更新采用与WordPress 官方主题一样的更新方式，一旦主题有更新，你就会在后台收到通知，到时候按照提示更新即可。</p>
						<p>注意主题的更新是覆盖更新升级，如果你对主题有过修改，请在更新升级前务必备份好数据！</p>
						  </div><div class="col-xs-12 col-sm-5 image_container">
								<a href="<?php echo $path ?>docs/img/update.png"><img src="<?php echo $path ?>docs/img/update.png" /></a>
							</div><!-- /image_container -->
							</div><!-- /row -->

						<div class="page-header">
							<h1 id="support">帮助与支持</h1>
						</div>
						<p>主题付费用户在看完本文档后如果对一些问题还是不能解决，请<a href="http://devework.com/contact">联系我本人</a>询问。</p>
						<!-- /upport -->
					</div>
				</div><!-- class="sidebar" -->
			</div><!-- class="row" -->
		</div><!-- class="container" -->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="m_logo col-md-2 col-sm-12 col-xs-12">
					</div><!-- class="col-" -->
					<div class="links col-md-8 col-sm-12 col-xs-12">
						<span><a href="http://DeveWork.com/">DeveWork.com</a> &copy; All Rights Reserved. </span>
					</div><!-- class="col-" -->
					<div class="coming col-md-2 col-sm-12 col-xs-12">
					</div><!-- class="col-" -->
				</div>
			</div><!-- class="container" -->
		</div><!-- class="footer" -->
	</body>
		<script type="text/javascript" src="<?php echo $jqpath ?>index/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $path ?>docs/js/bootstrap.min.js<?php echo $ver ?>"></script>
		<script type="text/javascript" src="<?php echo $path ?>jquery.slicknav.js<?php echo $ver ?>"></script>
<script>
jQuery('body').scrollspy({ target: '#docs_navigation' })
$(document).ready(function(){$('#mobile-nav').slicknav();});
//百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?adee489b7da6e25637b2754ce042a4b6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</html>