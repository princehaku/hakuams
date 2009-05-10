<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>目录管理系统</title>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/main.js'></script>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Base.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/prototype.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/mootools.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Ajax/ThinkAjax.js'></script>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Form/CheckForm.js'></script>  
<style type="text/css">
<!--
body {
	background-color: #99CCCC;
}
.STYLE1 {font-family: Arial, Helvetica, sans-serif}
-->
</style></head>

<body>
<div align="center">
  <p>尊敬的管理者，您好！</p>
  <p>在本页面您可以对您网站的目录进行修改、添加及删除！</p>
</div>

<form id="form2" name="article" method="post" action="/hakuams/index.php/Category/newcate">
  <p><b>添加目录：</b></p>
  <p>请选择新目录所在上级目录：
    <select name="category2" id="select2">
    <option value="0">顶级目录</option>
    <?php if(is_array($cate)): ?><?php $i = 0;?><?php $__LIST__ = $cate?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><option value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>"><?php echo (is_array($vo)?$vo["name"]:$vo->name); ?></option><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
    </select>
</p>
  <p>请输入新目录名称：
    <label>
    <input type="text" name="newcate" id="textfield" />
    </label>
    <input type="submit" name="add" id="button"  value="添加" />
</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form>
<form id="form1" name="article" method="post" action="/hakuams/index.php/Category/modify1">
  	<p class="STYLE1">	<b>修改目录：</b></p>
  	<p>请选择所要修改的目录：
  	  <label>
	<select name="category" id="1"><?php if(is_array($cate)): ?><?php $i = 0;?><?php $__LIST__ = $cate?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><option value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>"><?php echo (is_array($vo)?$vo["name"]:$vo->name); ?></option><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
	</select>
  	  </label>
  	</p>
  	<p>请输入新的名字：
  	  <label>
  	  <input type="text" name="newname" id="2" />
  	  </label>
  	  <input type="submit" name="确认" id="3" value="确认" />
  	</p>
  	<p>&nbsp;</p>
  	<p>&nbsp;</p>
<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form>
<form id="form3" name="form3" method="post" action="/hakuams/index.php/Category/delcate">
  <p><b>删除目录：</b></p>
  <p>请选择所要删除的目录：
    <select name="category3" id="select"><?php if(is_array($cate)): ?><?php $i = 0;?><?php $__LIST__ = $cate?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><option value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>"><?php echo (is_array($vo)?$vo["name"]:$vo->name); ?></option><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
    </select>
  </p>

  <p>
  <input type="submit" name="button2" id="button2" value="删除" />
  </p>
<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form>

</body>
</html>