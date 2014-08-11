<?php 
require_once('function.php');
?>
<!DOCTYPE html>
<head lang="zh_CN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EaseMobile 主题预览 | DeveWork</title>
	<meta name="keywords" content="EaseMobile,主题,WordPress,演示," />
	<meta name="description" content="EaseMobile 主题预览界面，可以在这里查看显示效果；建议是直接用移动设备查看以获得最佳的体验！" />
<link rel='stylesheet' href='<?php echo $path ?>main.css<?php echo $ver ?>' type='text/css'>
<link href="<?php echo $path ?>demo/css/style.css<?php echo $ver ?>" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
		<?php require_once('fixheader.php'); ?>
		<!---->
<div id="note">
    <p>提示：</p>
    <p>1、此页面仅为演示页面，界面与真实效果几乎无异，但功能与实际略有不同。</p>
	<p>3、移动设备访问体验才正常，请直接扫描二维码或在<strong>手机浏览器</strong>输入 <a target="_blank" href="http://m.devework.com/?theme=EaseMobile-demo">http://m.devework.com/?theme=EaseMobile-demo</a> 以获真实体验！</p>
<img class="go-landscape" src="<?php echo $path ?>demo/images/emqr.png" alt="扫描二维码">
</div>
<div id="iphone-demo">
	<div class="iphone-portrait">
		<img class="iphone-pic" src="<?php echo $path ?>demo/images/iphone.png" alt="img">
		<div class="hide-scroll"></div>
		<iframe class="iphone" src="http://m.devework.com/?theme=EaseMobile-demo" width="344" height="488"/></iframe>
 	</div>
</div>
</div>
<script type="text/javascript" src="<?php echo $jqpath ?>index/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $path ?>jquery.slicknav.js<?php echo $ver ?>"></script>
<script>
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
</body>
</html>

