<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>新闻编辑页</title>
<link rel="stylesheet" href="/news/public/css/reset.css">
<link rel="stylesheet" href="/news/public/css/layout.css">

<!-- ueditor编辑器 -->
<script type="text/javascript" charset="utf-8" src="/news/library/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/news/library/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/news/library/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="/news/public/css/reset.css">
<link rel="stylesheet" href="/news/public/css/layout.css">
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
	<li><a href="/news/admin.php/Partner/create">添加伙伴</a></li>
	<li><a href="/news/admin.php/Partner/listing">伙伴列表</a></li>
</ul>

<h3>用户管理</h3>
<ul>
	<li><a href="/news/admin.php/Admin/create">添加用户</a></li>
	<li><a href="/news/admin.php/Admin/listing">用户列表</a></li>
</ul>

<h3>项目说明手册</h3>
<ul>
	<li><a href="/news/admin.php/project/index">项目说明</a></li>
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
			<div class="current-position">当前位置：<a href="/news/admin.php/Index/menu">首页</a>&nbsp;&gt;&nbsp;编辑新闻</div>
			<form action="/news/admin.php/Article/update/id/<?php echo ($row["0"]["id"]); ?>" method="post">
				<table>
					<tr>
						<td class="col-title">新闻标题</td>
						<td><input type="text" name="art_subject" class="art_subject" value="<?php echo ($row["0"]["art_subject"]); ?>"></td>
					</tr>
					<tr>
						<td class="col-title">所属栏目</td>
						<td>
							<select name="cate_id">
	                        
								<?php echo ($cate_row); ?>		
									
                            </select>
							<a href="#" class="link">栏目管理</a>
						</td>
					</tr>
					<tr>
						<td class="col-title">新闻来源</td>
						<td>
							<select name="ptr_id">
								<?php if(is_array($ptr_row)): foreach($ptr_row as $key=>$v): ?><option <?php if($v["id"] == $row[0][ptr_id]): ?>selected<?php endif; ?> value="<?php echo ($v["id"]); ?>"><?php echo ($v["ptr_name"]); ?></option><?php endforeach; endif; ?>					
							</select>
							<a href="#" class="link">来源管理</a>							
						</td>
					</tr>
					<tr>
						<td class="col-title">新闻正文</td>
						<td><script id="editor" name="art_content" value="<?php echo ($row["art_content"]); ?>" type="text/plain" style="width:100%;height:350px;"><?php echo ($row["0"]["art_content"]); ?></script></td>
					</tr>					
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="保存" class="submit-button"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
<script type="text/javascript">
	var ue = UE.getEditor('editor');	
</script>
</body>
</html>