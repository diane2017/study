<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登录页面</title>
<link rel="stylesheet" href="/news/public/css/reset.css">
<link rel="stylesheet" href="/news/public/css/layout.css">
<link rel="stylesheet" href="/news/public/css/admin.css">
</head>
<body>
	<div class="loginCt">		
		<form method="post" action="/news/admin.php/Admin/login">
			<table id="login-table">
				<tr>
					<td>用户名</td>
					<td><input type="text" name="admin_name"></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="password" name="admin_pass"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="登录"></td>
				</tr>
				
			</table>
		</form>
	</div>
</body>
</html>