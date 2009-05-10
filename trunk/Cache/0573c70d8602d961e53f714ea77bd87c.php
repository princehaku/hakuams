<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>成都理工大学校团委就业创业导航网</title>
<link href="style/index.css" rel="stylesheet" type="text/css" />
<link href="/style/index.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="header">

<div id="nav">
	<ul>
    	<li><a target="_blank" href="#">首页</a></li>
        <li><span class="bar">|</span></li>
        <li><a target="_blank" href="#">招聘信息</a></li>
        <li><span class="bar">|</span></li>
        <li><a target="_blank" href="#">求职攻略</a></li>
        <li><span class="bar">|</span></li>
        <li><a target="_blank" href="#">面试指南</a></li>
        <li><span class="bar">|</span></li>
        <li><a target="_blank" href="#">简历指导</a></li>
        <li><span class="bar">|</span></li>
        <li><a target="_blank" href="#">视频讲堂</a></li>
    </ul>
</div>

</div>

<div id="main">

<div id="left_and_middle">
<div id="left_and_middle_1">

	<!--左栏st-->
	<div id="left">
    
    <!--FLASHst-->
    <div id="flash">
 <embed id="sohuFlashID01" height="220" width="254" flashvars="p=<?php echo ($pub); ?>/IndexMG/001.jpg|<?php echo ($pub); ?>/IndexMG/002.jpg|<?php echo ($pub); ?>/IndexMG/003.jpg&l=/hakuams/index.php/Article/show/id/13|/hakuams/index.php/Article/show/id/13|/hakuams/index.php/Article/show/id/13&icon=asdasda|dsadasd|dasdas" salign="t" wmode="opaque" quality="high" bgcolor="#ffffff" name="sohuFlashID01" src="./jy.swf" type="application/x-shockwave-flash"/>
    </div>
    <!--FLASHed-->
    <br /><br /><br />

    <!--面试技巧st-->
    <div id="skill_interview" class="modl">
    	<h2><a target="_blank" href="/hakuams/index.php/Article/show/id/13">规划精彩人生  成就美好未来</a></h2>
        <div class="recommand">
        	<img src="<?php echo ($pub); ?>/IndexMG/IMG_1674.jpg"  width="100px"   height="75px"/>
            <b><a target="_blank" href="/hakuams/index.php/Article/show/id/13"> ——第三届大学生职业规划大赛之“校友面对面”</a></b>
        </div>
        <ul>
        	<li><a target="_blank" href="/hakuams/index.php/Article/show/id/13">&nbsp;&nbsp;&nbsp;&nbsp;12月13日和14日，成都理工大学第三届职业规划大赛之“素质拓展”和“模拟招聘”环节分别在9教广场和9C506、9C505教室顺利举行...</a></li>
        </ul>
    </div>
    <!--面试技巧ed-->
    
    <!--简历技巧st-->
    <div id="skill" class="modl">
    <h2><a target="_blank" href="/hakuams/index.php/Article/show/id/11">第二届大学生职业规划大赛</a></h2>
        <div class="recommand">
        	<img src="<?php echo ($pub); ?>/IndexMG/DSC04290.JPG"  width="100px"   height="75px"/>
            <b><a target="_blank" href="/hakuams/index.php/Article/show/id/11">-------2007年12月20日晚7：00整，由校团委、学生工作部（处）、职业经理研究所主办的成都理工大学第二届大学生职业规划大赛总决赛暨颁奖典礼在6C105教室隆重举行。</a></b>
        </div>
        <ul>
        	<li><a target="_blank" href="/hakuams/index.php/Article/show/id/11">2007年12月20日晚7：00整，由校团委、学生工作部（处）、职业经理研究所主办的成都理工大学第二届大学生职业规划大赛总决赛暨颁奖典礼在6C105教室隆重举行。大赛组委会邀请到了成都慧智集团总经理...</a></li>
        </ul>
    </div>
    <!--简历技巧ed-->
    
    </div>
    <!--左栏ed-->
    
    <!--中栏st-->
    <div id="middle">
    
    <!--专题st-->
    <?php if(is_array($zt)): ?><?php $i = 0;?><?php $__LIST__ = $zt?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><div class="spe">
        <h2><a target="_blank" href="/hakuams/index.php/Article/show/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>"><?php echo (is_array($vo)?$vo["title"]:$vo->title); ?></a></h2>
        <span class="spetit"><a target="_blank" href="/hakuams/index.php/Article/show/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>"><?php echo (is_array($vo)?$vo["content"]:$vo->content); ?></a></span></div><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
     <!--专题ed-->
        
     <!--分类st-->
     <div id="newslist" class="modm">
     <div class="cate_list">
      	<ul>
        <?php if(is_array($lastest1)): ?><?php $i = 0;?><?php $__LIST__ = $lastest1?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><li><a target="_blank" href="/hakuams/index.php/Article/show/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" class="categ"><?php echo (is_array($vo)?$vo["catename"]:$vo->catename); ?></a> <span class="bar">|</span> <a target="_blank" href="/hakuams/index.php/Article/show/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" ><?php echo (is_array($vo)?$vo["title"]:$vo->title); ?></a></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
      	</ul>
     </div>
     <div class="cate_list">
      	<ul>
         <?php if(is_array($lastest2)): ?><?php $i = 0;?><?php $__LIST__ = $lastest2?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><li><a target="_blank" href="/hakuams/index.php/Article/show/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" class="categ"><?php echo (is_array($vo)?$vo["catename"]:$vo->catename); ?></a> <span class="bar">|</span> <a target="_blank" href="/hakuams/index.php/Article/show/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" ><?php echo (is_array($vo)?$vo["title"]:$vo->title); ?></a></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
      	</ul>
     </div>
     </div>
     <!--分类ed-->
    
    <!--动态st-->
    <div id="recent" class="modm">
    <h2><a target="_blank" href="#">就业动态</a></h2>
    <ul>
       <?php if(is_array($jy)): ?><?php $i = 0;?><?php $__LIST__ = $jy?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><li><a target="_blank" href="/hakuams/index.php/Article/show/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>"><?php echo (is_array($vo)?$vo["title"]:$vo->title); ?></a></li><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
        </ul>
    </div>
    <!--动态ed-->
    
    </div>
    <!--中栏ed-->
    
</div>
<div id="left_and_middle_b"></div>
</div>
    
    <!--右栏st-->
    <div id="right">
    
    <!--就业政策st-->
    <div id="policy" class="modr">
    <h2><a target="_blank" href="/hakuams/index.php/Article/show/id/15">素质拓展与压力面试</a></h2>
        <div class="recommand">
        	<img src="<?php echo ($pub); ?>/IndexMG/DSC03522.JPG"  width="100px"  height="75px"/>
            <b><a target="_blank" href="/hakuams/index.php/Article/show/id/15">职业规划大赛之“素质拓展”与“模拟招聘”</a></b>
      </div><ul>
        	<li><a target="_blank" href="/hakuams/index.php/Article/show/id/15">面在素质拓展训练环节中，来自成都进步体验公司的阳志勇教练对本届职业规划大赛的前20强选手进行了为期一天的训练。训练主要分为“挑战密码”“突破雷阵 ”“挑战NO.1”三个环节。其中还穿插了“名字接龙”“婚礼上的宾客”“背后的翅膀”等趣味游戏....</a><a target="_blank" href="#"></a></li>
        </ul>
    </div>
    <!--就业政策ed-->
    
    <!--视频讲堂st-->
    <div id="video" class="modr">
    <h2><a target="_blank" href="/hakuams/index.php/Article/show/id/12">志愿服务西部计划已全面启动</a></h2>
        <div class="recommand"><b><a target="_blank" href="/hakuams/index.php/Article/show/id/12">2009年大学生志愿服务西部计划于4月15日已全面启动</a></b>
  </div><ul>
        	<li><a target="_blank" href="/hakuams/index.php/Article/show/id/12">我校这次的西部计划工作得到了学校各部门的重视和支持。充分利用多种形式，力争向每一个愿意参加西部计划的高校毕业生收到西部计划相关动态消息。截止5月6日，我校已有20名毕业生报名参加此次西部计划...</a></li>
        </ul>
    </div>
    <!--视频讲堂ed-->
    
    <!--友情链接st-->
    <div id="links" class="modr">
    <h2><a target="_blank" href="/hakuams/index.php/Article/show/id/14">校学生会内部素质拓展活动</a></h2>
        <ul>
   	    <li><a target="_blank" href="/hakuams/index.php/Article/show/id/14">11月8日上午，校学生会办公室、组织部等九个部门在校团委会议室开展了一场别开生面的素质拓展活动。校团委副书记何兴杰老师和校学生会主席团的全体成员出席并参与了本次活动...</a></li>
        </ul>
    </div>
    <!--友情链接ed-->
    
    </div>
    <!--右栏ed-->

</div>

<div id="footer">Powered by FreeStu<br />成都理工大学校团委信息中心</div>

</body>
</html>