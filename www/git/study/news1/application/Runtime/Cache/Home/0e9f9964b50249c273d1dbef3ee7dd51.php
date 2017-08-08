<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>新闻首页</title>
<link rel="stylesheet" href="/news1/public/css/reset.css"/>
<link rel="stylesheet" href="/news1/public/css/index.css"/>
<script src="/news1/library/jquery/jquery-1.10.0.min.js"></script>
<script>
$(function(){
	$('#click_num').on('click',function(){
		$('#cot_list').css('display','none');
		$('#click_list').css('display','block');
		$(this).parent().addClass('cur');
		$('#cot_num').parent().removeClass('cur');
	});
	$('#cot_num').on('click',function(){
		$('#click_list').css('display','none');
		$('#cot_list').css('display','block');
		$(this).parent().addClass('cur');
		$('#click_num').parent().removeClass('cur');
	});
});
</script>
</head>
<body>
<!--头部快速链接开始-->
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
<div class="c1 area clearfix">
         <div class="left">
            <div class="focus-info">
               <ul class="focus-img">
                  <li><a href="#"><img src="/news1/public/ad/12493512_1342949594483.jpg" alt=""/></a></li>
                  <li><a href="#"><img src="/news1/public/ad/12493512_1342949594488.jpg" alt=""/></a></li>
                  <li><a href="#"><img src="/news1/public/ad/12493512_1342949594489.jpg" alt=""/></a></li>
               </ul>
               <ul id="focus-text" class="clearfix"></ul>
               <div class="focus-square"></div>
               <div class="focus-text">一周图片精选:考试排队</div>             
            </div>
         </div>
         <div class="right">
            <ul class="list-hot">
               <li>
                  <h3><a href="#">习近平：让人民对改革有更多获得感</a></h3>
                  <p>[ <a href="#">规范领导配偶子女经商试点首选上海</a> <a href="#">韩正回应:这是中央信任</a> ]</p>
               </li>
               <li>
                  <h3><a href="#">习近平：让人民对改革有更多获得感</a></h3>
               </li>
               <li>
                  <h3><a href="#">习近平：让人民对改革有更多获得感</a></h3>
                  <p>[ <a href="#">规范领导配偶子女经商试点首选上海</a> <a href="#">韩正回应:这是中央信任</a> ]</p>
               </li>
               <li>
                  <h3><a href="#">习近平：让人民对改革有更多获得感</a></h3>
                  <p>[ <a href="#">规范领导配偶子女经商试点首选上海</a> <a href="#">韩正回应:这是中央信任</a> ]</p>
               </li>
               <li>
                  <h3><a href="#">习近平：让人民对改革有更多获得感</a></h3>
                  <p>[ <a href="#">规范领导配偶子女经商试点首选上海</a> <a href="#">韩正回应:这是中央信任</a> ]</p>
               </li>
               <li>
                  <h3><a href="#">习近平：让人民对改革有更多获得感</a></h3>
                  <p>[ <a href="#">规范领导配偶子女经商试点首选上海</a> <a href="#">韩正回应:这是中央信任</a> ]</p>
               </li>
            </ul>
         </div>
    </div>
    <!--版块c1结束  -->
    <!--版块c2开始  -->
    <div class="c2 area clearfix">
       <div class="big-title">
          <h2 class="china">国内新闻</h2>
         
       </div>
       <div class="blank10"></div>
       <div class="left">
          <div class="title1">
             <h3><a href="/news1/index.php/Category/index/id/4">内地新闻</a></h3>
          </div>
          <div class="blank10"></div>
          <ul class="list1">
          	 <?php if(is_array($chinaRow)): foreach($chinaRow as $key=>$v): ?><li><a href="/news1/public/articles/<?php echo ($v["filepath"]); ?>"><?php echo ($v["art_subject"]); ?></a></li><?php endforeach; endif; ?>
          </ul>
       </div>
       <div class="left">
           <div class="title1">
             <h3><a href="/news1/index.php/Category/index/id/5">港澳台新闻</a></h3>
           </div>
           <div class="blank10"></div>
           <ul class="list1">
	 <?php if(is_array($hongRow)): foreach($hongRow as $key=>$v): ?><li><a href="/news1/public/articles/<?php echo ($v["filepath"]); ?>"><?php echo ($v["art_subject"]); ?></a></li><?php endforeach; endif; ?>
          </ul>
       </div>
       <div class="right">
           <div class="title2">
             <h3 class="cur"><a href="javascript:viod(0)" id="click_num">点击量排行</a></h3>
             <h3 ><a href="javascript:viod(0)" id="cot_num">评论数排行</a></h3>
           </div>
           <div class="blank10"></div>
           <ul class="tab-content"  style="display:block;" id="click_list">
    	 <?php if(is_array($click)): foreach($click as $key=>$v): ?><li><a href="/news1/public/articles/<?php echo ($v["filepath"]); ?>"><?php echo ($v["art_subject"]); ?></a></li><?php endforeach; endif; ?>
           </ul>
           <ul class="tab-content" id="cot_list">
	 <?php if(is_array($cmt_num)): foreach($cmt_num as $key=>$v): ?><li><a href="/news1/public/articles/<?php echo ($v["filepath"]); ?>"><?php echo ($v["art_subject"]); ?></a></li><?php endforeach; endif; ?>
       
           </ul>
       </div>
    </div>
    <!--版块c2结束  -->
   <!--版块c3开始  -->
     <div class="c2 area clearfix">
       <div class="big-title">
          <h2 class="world">国际新闻</h2>
       </div>
       <div class="blank10"></div>
       <div class="left">
          <div class="title1">          
             <h3><a href="/news1/index.php/Category/index/id/6">最新消息</a></h3>
          </div>
          <div class="blank10"></div>
          <ul class="list1">
          <?php if(is_array($newsRow)): foreach($newsRow as $key=>$v): ?><li><a href="/news1/public/articles/<?php echo ($v["filepath"]); ?>"><?php echo ($v["art_subject"]); ?></a></li><?php endforeach; endif; ?>
          </ul>
       </div>
       <div class="left">
           <div class="title1">
             <h3><a href="/news1/index.php/Category/index/id/7">环球视野</a></h3>
           </div>
           <div class="blank10"></div>
           <ul class="list1">
            
          <?php if(is_array($worldRow)): foreach($worldRow as $key=>$v): ?><li><a href="/news1/public/articles/<?php echo ($v["filepath"]); ?>"><?php echo ($v["art_subject"]); ?></a></li><?php endforeach; endif; ?>
                    
          </ul>
       </div>
       <div class="right">
           <div class="title1">
             <h3><a href="#"><span>海</span>外观察</a></h3>
           </div>
           <div class="blank10"></div>
           <div class="box">
              <div class="pic-txt">
                 <div>
                    <a href="#"><img src="common/photoview/U11594P1DT20150226092629.jpg" alt=""/></a>
                 </div>
                 <p>英国威廉王子要来中国，英媒很激动，称之为“历史性”的访问。王子访华有啥热闹</p>
              </div>
              <div class="pic-txt">
                 <div>
                    <a href="#"><img src="common/photoview/U11594P1DT20150226092629.jpg" alt=""/></a>
                 </div>
                 <p>英国威廉王子要来中国，英媒很激动，称之为“历史性”的访问。王子访华有啥热闹</p>
              </div>
              <div class="pic-txt">
                 <div>
                    <a href="#"><img src="common/photoview/U11594P1DT20150226092629.jpg" alt=""/></a>
                 </div>
                 <p>英国威廉王子要来中国，英媒很激动，称之为“历史性”的访问。王子访华有啥热闹</p>
              </div>
           </div>
       </div>
    </div>
   <!--版块c3结束  -->
     <!--版块c4开始  -->
   <div class="blank10"></div>
   <div class="c4 area clearfix">
      <div class="big-title">
         <h2 class="society"><a href="#">社会新闻</a></h2>
      </div>
      <div class="blank20"></div>
      <ul class="pic-pic clearfix">
      <?php if(is_array($society)): foreach($society as $key=>$v): ?><li>
           <a href="/news1/public/articles/<?php echo ($v["filepath"]); ?>"><img src="<?php echo ($v["img"]); ?>"/></a>
           <p><a href="/news1/public/articles/<?php echo ($v["filepath"]); ?>"><?php echo ($v["art_subject"]); ?></a></p>
        </li><?php endforeach; endif; ?>
      </ul> 
   </div>  
    <!--版块c4结束 --> 
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