<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>栏目新闻</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>首页导航</title>
<link rel="stylesheet" type="text/css" href="/news1/public/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="/news1/public/css/index.css"/>
</head>
<body>
 <div class="top-wrap"><!--100%背景-->
       <div class="top-width area"><!--固定宽度内容水平居中 -->
           <div class="left">
               <a href="#">巴西世界杯一再爆冷</a> 
               <a href="#">卫冕冠军西班牙出局</a> 
               <a href="#">瑞士人为啥最幸福</a> 
               <a href="#">中国病人庞麦郎</a>  
           </div>
           <div class="right">
               <div class="login-info">
                  <a href="/news1/index.php/Login/login">登录</a>
               </div>
               <div class="other-info">
                  <a href="/news1/index.php/Login/register">免费注册</a>
                 
                                您好,<a href="#" class="blue"><?php echo ($cookie); ?></a>
                  <a href="#">退出</a>
               </div>
           </div>
       </div>
    </div>
    <!--头部快速链接结束-->
    <!--头部logo开始  -->
    <div class="logo-wrap area clearfix">
        <div class="left">
           <a href="#"><img src="/news1/public/images/logo.png" alt=""/></a>
        </div>
        <div class="right">
           <form action="" method="get" class="frm">
               <input type="text" name="search-key" class="search-key" placeholder=""/>
               <input type="submit" value="搜索" class="search-btn"/>
           </form>
        </div>
    </div>
    <!--头部logo结束  -->
    <!--头部导航开始  -->
    <div class="navi-wrap clearfix"><!--100%背景  -->
       <ul class="area"><!--固定宽度  -->
       <li><a href="#">首页</a></li>
       <?php if(is_array($topRow)): foreach($topRow as $key=>$v): ?><li><a href="#"><?php echo ($v["cate_name"]); ?></a></li><?php endforeach; endif; ?>
  
       </ul>
    </div>
</body>
</html>
<h3><?php echo ($cate_name); ?></h3>
<ul>
 <?php if(is_array($rowset)): foreach($rowset as $key=>$v): ?><li><a href="/news1/public/articles/<?php echo ($v["fielpath"]); ?>"><?php echo ($v["art_subject"]); ?></a></li><?php endforeach; endif; ?>
</ul>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>首页底部</title>
<link rel="stylesheet" type="text/css" href="/news1/public/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="/news1/public/css/index.css"/>
</head>
<body>
   	<!-- 底部开始 -->
	<div class="foot area clearfix">
		<div class="pic1"></div>
	    <div class="pic2"></div>
	    <div class="pic3"></div>
	</div>
	<div class="foot-2 area clearfix">
		<ul>

		
		</ul>

	</div>
	<div class="black10"></div>
	<div class="hr area clearfix">
	    <hr/>
	</div>
	<div>IP<?php echo ($IP); ?></div>
	<div class="foot-3 area">
	   <p>24小时客户服务热线：4006900000 010-82623378 
           <a href="#">常见问题解答</a>
           <a href="#">互联网违法和不良信息举报</a></p>
       <p><a href="#">新闻中心意见反馈留言板</a></p>
       <p>
       		<a href="#">达内简介　|</a>
       		<a href="#">关于达内　|</a>
       		<a href="#">广告服务　|</a>
       		<a href="#">联系我们　|</a>
       		<a href="#">招聘信息　|</a>
       		<a href="#">网站律师　|</a>
       		<a href="#">通行证注册　|</a>
       		<a href="#">产品答疑　|</a>
       </p>
	</div>
</body>
</html>
</body>
</html>