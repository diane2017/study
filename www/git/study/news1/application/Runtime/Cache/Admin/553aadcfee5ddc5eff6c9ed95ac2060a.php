<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>后台管理--添加栏目</title>
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
<div id="admin-main">
		<div id="admin-main-wrapper">
			<div class="current-position">当前位置：<a href="/news1/admin.php/Index/index">首页</a>&nbsp;&gt;&nbsp;添加栏目</div>
			<form action="/news1/admin.php/Category/insert" method="post">
				<table>
					<tr>
						<td class="col-title">栏目名称</td>
						<td><input type="text" name="cate_name" class="cate_name"></td>
					</tr>
					<tr>
						<td class="col-title">所属栏目</td>
						<td>
							<select name="parent_id">
								<option value="0">顶级分类</option>
								<?php echo ($option); ?>
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