<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>新闻视界--项目说明</title>
<link rel="stylesheet" href="/news1/public/css/reset.css">
<link rel="stylesheet" href="/news1/public/css/layout.css">
<script src="/news1/public/js/jquery-1.10.0.min.js"></script>
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
			<div class="current-position">当前位置：<a href="index.php">首页</a>&nbsp;&gt;&nbsp;项目说明</div>			
				<table>
					<tr>						
						<td>1、项目名称：《新闻视界》CMS项目</td>
					</tr>
					<tr>
						<td style="line-height:2.5em;">2、项目阶段：在总学习时长为第二个月时的阶段项目,目标是将前期所学习的前端知识（HTML、CSS、JavaScript、jQuery）、数据库知识(MySQL数据库)、PHP编程知识（PHP Core、PHP核心函数库、PHP OOP）等知识进行贯穿；</td>
					</tr>
					<tr>
						<td style="line-height:2.5em;">3、技术说明:
							<p>前端技术:HTML、CSS、jQuery实现页面的布局及前端交互功能;<br>通过AJAX技术实现页面的局部刷新(如新闻审核/取消审核功能、新闻栏目名称的修改功能等);
							   <br>通过JSON实现数据的交换;</p>
							<p>数据库技术:MySQL数据库技术(主要实现记录增、删、改、查及多表的连接操作);</p>
							<p>服务器编程技术:PHPCore、PHP函数库、PHP面向对象编程、单一入口、MVC设计模式(自行编写)</p>
							<p>单一入口的实现原理:利用地址栏传递的合法参数,动态调用相关类文件(控制器)内的相关方法(动作);</p>
							<p><img src="/news1/public/images/images/single.png" alt="单一入口原理图" title="单一入口原理图"></p>
							<p>MVC的好处:将程序的业务逻辑与前端页面相互分离;</p>	
						</td>
					</tr>
					<tr>
						<td>4、数据库ER图：<img src="/news1/public/images/images/er.png"></td>
					</tr>					
				</table>
			
		</div>
	</div>
</body>
</html>