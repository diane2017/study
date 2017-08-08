<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>后台管理--新闻列表</title>
<link rel="stylesheet" href="/news1/public/css/reset.css">
<link rel="stylesheet" href="/news1/public/css/layout.css">
<script src="/news1/public/js/jquery-1.10.0.min.js"></script>
<script>
	$(function(){
		$('#control_checkbox').on('click',function(){
			$(':checkbox[name=article_checkbox\\[\\]]').prop('checked',$(this).prop('checked'));
		});
		$(':checkbox[name=article_checkbox\\[\\]]').on('click',function(){
			$('#control_checkbox').prop('checked',$(':checkbox[name=article_checkbox\\[\\]]:checked').size()==$(':checkbox[name=article_checkbox\\[\\]]').size());
		});
		
		$('#delete_btn').on('click',function(){
			if($(':checkbox[name=article_checkbox\\[\\]]:checked').size()!=0){
			$('#form').attr('action','/news1/admin.php/Article/remove').submit();
			}else{
				alert('没有要删除记录');
			}
		});
			
		$('#recycle_btn').on('click',function(){
			if($(':checkbox[name=article_checkbox\\[\\]]:checked').size()!=0){
			$('#form').attr('action','/news1/admin.php/Article/recycle').submit();		
		    }else{
		    	alert('没有要放入回收站的记录');
		    }
		});

		$('td.is_checked').on('click','.checked',function(){
			var $obj = $(this);
			//window.alert($(this).attr('data-id'));
			$.get('/news1/admin.php/Article/unchecked/id/' + $(this).attr('data-id'),function(){
				$obj.addClass('unchecked').removeClass('checked').attr('src','/news1/public/images/images/unchecked.png');
			})
		});
		$('td.is_checked').on('click','.unchecked',function(){
			var $obj = $(this);
			$.get('/news1/admin.php/Article/checked/id/' + $(this).attr('data-id'),function(){			
				$obj.addClass('checked').removeClass('unchecked').attr('src','/news1/public/images/images/checked.png');
			})
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
			<div class="current-position">当前位置：<a href="/news1/admin.php/Index/menu">首页</a>&nbsp;&gt;&nbsp;新闻列表</div>
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
					<a href="/news1/admin.php/Article/modify/id/<?php echo ($v["id"]); ?>" title="单击可编辑">
					
						<?php echo ($v["art_subject"]); ?>

					</a></td>
					<td><?php echo ($v["cate_name"]); ?></td>
 					<td class="is_checked">
					<?php if($v["is_checked"] == 0): ?><img class="unchecked" data-id="<?php echo ($v["id"]); ?>" src="/news1/public/images/images/unchecked.png"/>
					<?php else: ?><img class="checked" data-id="<?php echo ($v["id"]); ?>" src="/news1/public/images/images/checked.png"/><?php endif; ?>
					</td>
					<td><?php echo ($v["add_time"]); ?></td>
				</tr><?php endforeach; endif; ?>
				<tr><td colspan="4" align="center"><?php echo ($pagelist); ?></td></tr>
			</table>
			</form>						
		</div>
	</div>
</body>
</html>