<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章管理系统</title>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/main.js'></script>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Base.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/prototype.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/mootools.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Ajax/ThinkAjax.js'></script>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Form/CheckForm.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/chkuser.js'></script>  
</head>

<body bgcolor="#99CCCC">
<form action="/job/index.php/User/set" method="post" id="reg">
  	  <h2>资料详细</h2>
	  <p>
      <div align="center"><div id="chkpwd2" style="color:#F00"></div>
	    *姓名
	    <input name="name" type="text" id="name" size="10" maxlength="10" value="<?php echo ($name); ?>"/>
	    <br />
	    <div id="chkname" style="color:#F00">&nbsp;</div>
	    <div id="chkid" style="color:#F00"></div>
	    qq号码
	    <input name="qq" type="text" id="qq" size="22" maxlength="12" value="<?php echo ($qq); ?>"/>
        <br />
        <div id="chkqq" style="color:#F00">&nbsp;</div>
        <div id="chkhobby" style="color:#F00"></div>
      email
      <input name="email" type="text" id="email" size="23" maxlength="40" value="<?php echo ($email); ?>"/>
      <br />
      <div id="chkemail" style="color:#F00">&nbsp;</div>
<?php echo ($title); ?>
<table width="200">
<?php if(is_array($cate)): ?><?php $i = 0;?><?php $__LIST__ = $cate?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><tr>
    <td><label>
      <input type="checkbox" name="" value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" id="cat<?php echo (is_array($vo)?$vo["cat"]:$vo->cat); ?>" <?php echo (is_array($vo)?$vo["sck"]:$vo->sck); ?>/>
      <?php echo (is_array($vo)?$vo["name"]:$vo->name); ?></label></td>
  </tr><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
 <input id="alcat" name="alcat" type="hidden" value="" />
</table>
<br />
 <input type="button" name="button" id="button" value="更新"  onclick="upinfo();"/>
      <a href="/job/index.php/User/showall">返回</a>
      </div>
	<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form>
	
</body>
</html>