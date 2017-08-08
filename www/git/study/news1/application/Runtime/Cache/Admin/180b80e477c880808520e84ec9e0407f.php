<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>系统提示信息</title>
<link rel="stylesheet" type="text/css" href="/news1/public/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="/news1/public/css/index.css"/>
<script>
	var index=5;
	function changeTime(){
		document.getElementById('timeSpan').innerHTML=index;
		index--;
		if(index<0){
			window.location="<?php echo ($jumpUrl); ?>";
		}else{
			window.setTimeout("changeTime()",1000);
		}
	}
</script>
</head>
<body onload="changeTime()">


<h3 align="center">系统提示信息</h3>
<p align="center"><?php echo ($message); ?>页面将在<span id="timeSpan">5</span>秒钟内自动跳转！</p>
<br/>
<p align="center">如果没有自动跳转，<a href="<?php echo ($jumpUrl); ?>">请点击这里</a></p>
</body>
</html>