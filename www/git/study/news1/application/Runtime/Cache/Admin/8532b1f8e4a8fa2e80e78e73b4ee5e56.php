<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>后台管理--添加用户</title>
<link rel="stylesheet" href="/news1/public/css/reset.css">
<link rel="stylesheet" href="/news1/public/css/layout.css">
</head>
<body>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="/news1/public/css/reset.css">
<link rel="stylesheet" href="/news1/public/css/layout.css">
</head>
<body>
<div id="header">
		<div class="logo"><img src="/news1/public/images/logo1.png" alt=""></div>
		<div class="logout">欢迎<?php echo ($session); ?>登录&nbsp;&nbsp;<a href="/news1/admin.php/Login/index">注销</a></div>
	</div>
<div id="admin-menu">
<h3>新闻管理</h3>
<ul>
	<li><a href="/news1/admin.php/Article/create">发布新闻</a></li>
	
	<li><a href="/news1/admin.php/Article/listing">新闻列表</a></li>
	<li><a href="/news1/admin.php/Article/recyclelist">新闻回收站</a></li>

</ul>	

<h3>栏目管理</h3>
<ul>
	<li><a href="/news1/admin.php/Category/create">添加栏目</a></li>
	<li><a href="/news1/admin.php/Category/listing">栏目列表</a></li>
</ul>
<h3>合作伙伴管理</h3>
<ul>
	<li><a href="/news1/admin.php/Partner/create">添加伙伴</a></li>
	<li><a href="/news1/admin.php/Partner/listing">伙伴列表</a></li>
</ul>

<h3>用户管理</h3>
<ul>
	<li><a href="/news1/admin.php/Admin/create">添加用户</a></li>
	<li><a href="/news1/admin.php/Admin/listing">用户列表</a></li>
</ul>

<h3>项目说明手册</h3>
<ul>
	<li><a href="/news1/admin.php/project/index">项目说明</a></li>
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
</div>
	<div id="admin-main">
		<div id="admin-main-wrapper">
			<div class="current-position">当前位置：<a href="/news1/admin.php/Index/menu">首页</a>&nbsp;&gt;&nbsp;添加用户</div>
			<form id="form" action="/news1/admin.php/Admin/insert" method="post">
				<table>
					<tr>
						<td class="col-title">用户名</td>
						<td><input type="text" name="admin_name" class="cate_name" id="admin_name"><span id="username_checkinfo"></span></td>
					</tr>
					<tr>
						<td class="col-title">密码</td>
						<td><input type="password" name="admin_pass" class="cate_name" id="admin_pass"><span id="password_checkinfo"></span></td>
					</tr>
					<tr>
						<td class="col-title">确认密码</td>
						<td><input type="password" name="admin_pass2" id="admin_pass2" class="cate_name"><span id="password2_checkinfo"></span></td>
					</tr>
					<tr>
						<td class="col-title">真实姓名</td>
						<td><input type="text" name="true_name" class="cate_name" id="true_name"><span id="truename_checkinfo"></span></td>
					</tr>	
					<tr>
						<td class="col-title">用户等级</td>
						<td>
							<select name="admin_level">
								<option value="1">新闻采编</option>
								<option value="2">新闻主编</option>
								<option value="3">系统管理员</option>
							</select>
						</td>
					</tr>										
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="保存" class="submit-button"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>