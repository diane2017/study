<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>后台管理--新闻列表</title>
<link rel="stylesheet" href="/news/public/css/reset.css">
<link rel="stylesheet" href="/news/public/css/layout.css">
<script src="/news/public/js/jquery-1.10.0.min.js"></script>
<script>
	$(function(){
		$('#control_checkbox').on('click',function(){
			$(':checkbox[name=article_checkbox\\[\\]]').prop('checked',$(this).prop('checked'));
		});
		$(':checkbox[name=article_checkbox\\[\\]]').on('click',function(){
			$('#control_checkbox').prop('checked',$(':checkbox[name=article_checkbox\\[\\]]:checked').size()==$(':checkbox[name=article_checkbox\\[\\]]').size());
		});
		$('#delete_btn').on('click',function(){
			$('#form').attr('action','/news/admin.php/Article/remove').submit();
		});
	});
</script>
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
	
	<li><a href="/news/admin.php/Article/index">新闻列表</a></li>
	<li><a href="/news/admin.php/Article/recyclelist">新闻回收站</a></li>

</ul>	

<h3>栏目管理</h3>
<ul>
	<li><a href="/news/admin.php/Category/create">添加栏目</a></li>
	<li><a href="/news/admin.php/Category/index">栏目列表</a></li>
</ul>
<h3>合作伙伴管理</h3>
<ul>
	<li><a href="/news/admin.php/Pattner/create">添加伙伴</a></li>
	<li><a href="/news/admin.php/Pattner/index">伙伴列表</a></li>
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
			<div class="current-position">当前位置：<a href="/news/admin.php/Index/menu">首页</a>&nbsp;&gt;&nbsp;新闻列表</div>
				<form method="post" id="form">
				<div id="buttons-wrapper">
					<input type="button" class="button" value="彻底删除" id="delete_btn">
					<input type="button" class="button" value="放入回收站" id="recycle_btn">
				</div>					
				<table id="search-table">
					<tr>						
						<td>							
							<input type="text" name="keywords" class="search-txt" id="keywords">
							<input type="button" value="" class="search-btn" id="search-btn">
						</td>
					</tr>
					
				</table>
			
			<table id="article-list">
				<tr>
					<td class="checkbox"><input type="checkbox" id="control_checkbox"></td>
					<td>新闻标题</td>
					<td class="cate_name">所属栏目</td>
					<td class="is_checked">状态</td>
					<td class="add_time">发布日期</td>
				</tr>
				 <?php if(is_array($rowset)): foreach($rowset as $key=>$v): ?><tr>
					<td><input type="checkbox" name="article_checkbox[]" value="<?php echo ($v["id"]); ?>"></td>
					<td>
					<a href="/news/admin.php/Article/modify/id/<?php echo ($v["id"]); ?>" title="单击可编辑">
					
						<?php echo ($v["art_subject"]); ?>

					</a></td>
					<td><?php echo ($v["cate_name"]); ?></td>
					<td class="is_checked"><?php echo ($v["is_checked"]); ?></td>
					<td><?php echo ($v["add_time"]); ?></td>
				</tr><?php endforeach; endif; ?>
			</table>
			</form>						
		</div>
	</div>
</body>
</html>