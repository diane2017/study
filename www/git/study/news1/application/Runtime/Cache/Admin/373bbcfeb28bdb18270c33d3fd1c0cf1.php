<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>菜单页</title>
<link rel="stylesheet" href="/news/public/css/reset.css"/>
<link rel="stylesheet" href="/news/public/css/layout.css"/>
</head>
<body>

	<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<div id="header">
		<div class="logo"><img src="/news/public/images/logo1.png" alt=""></div>
		<div class="logout">欢迎<?php echo ($session); ?>登录&nbsp;&nbsp;<a href="/news/admin.php/Login/index">注销</a></div>
	</div>
<div id="admin-menu">
<h3>新闻管理</h3>
<ul>
	<li><a href="/news/admin.php/Article/create">发布新闻</a></li>
	
	<li><a href="/news/admin.php/Article/listing">新闻列表</a></li>
	<li><a href="/news/admin.php/Article/recyclelist">新闻回收站</a></li>

</ul>	

<h3>栏目管理</h3>
<ul>
	<li><a href="/news/admin.php/Category/create">添加栏目</a></li>
	<li><a href="/news/admin.php/Category/listing">栏目列表</a></li>
</ul>
<h3>合作伙伴管理</h3>
<ul>
	<li><a href="/news/admin.php/Pattner/create">添加伙伴</a></li>
	<li><a href="/news/admin.php/Pattner/listing">伙伴列表</a></li>
</ul>

<h3>用户管理</h3>
<ul>
	<li><a href="/news/admin.php/Admin/create">添加用户</a></li>
	<li><a href="/news/admin.php/Admin/listing">用户列表</a></li>
</ul>

<h3>项目说明手册</h3>
<ul>
	<li><a href="index.php?ctl=project">项目说明</a></li>
</ul>
</div>
<script>
	$(function(){
		$('#admin-menu>h3').click(function(){
			$(this).next().slideToggle();
		});	
		$('#admin-menu').height($(document).height());		
	});
</script>
</body>
</html>
	
	<div id="admin-main">
		<div id="admin-main-wrapper">
			<table>
				<tr>
					<td class="col-title">系统名称</td>
					<td>新闻视界CMS项目</td>
				</tr>
				<tr>
					<td class="col-title">开发团队</td>
					<td>达内PHP学院-PSD1703</td>
				</tr>	
				<tr>
					<td class="col-title">操作系统</td>
					<td><?php echo ($php_os); ?></td>
				</tr>
				<tr>
					<td class="col-title">PHP版本</td>
					<td><?php echo ($php_ver); ?></td>
				</tr>
				<tr>
					<td class="col-title">PHP运行方式</td>
					<td><?php echo ($php_sapi); ?></td>
				</tr>
					
			</table>
		</div>
	</div>
</body>
</html>