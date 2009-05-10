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
  	<form action="/hakuams/index.php/User/update" method="post" id="reg">
  	  <h2>资料修改</h2>
	  <p>
      <div align="center">
        <label>*原&nbsp;密&nbsp;码:</label>
	    <input name="password" type="text" id="username" size="20" maxlength="40"/>
	    <label><br />
	      <div id="chkuser" style="color:#F00">&nbsp;</div>
        &nbsp;*&nbsp;密&nbsp;&nbsp;&nbsp;&nbsp;码 
        </label>
	    <input name="password1" type="password" id="password1" size="20" onkeyup="chkpwd1();"/>
	    <br />
        <div id="chkpwd1" style="color:#F00">(不改请留空):&nbsp;</div>
	    *重输密码 
        <input name="password2" type="password" id="password2" size="20" onkeyup="chkrpwd();"/>
        <br /><div id="chkpwd2" style="color:#F00">&nbsp;(不改请留空)</div>
	    *姓名
	    <input name="name" type="text" id="name" size="10" maxlength="10" value="<?php echo ($name); ?>"/>
	  *性别
	  <label>
	    <select name="sex" id="sex" >
	      <option value="男">男</option>
	      <option value="女">女</option>
        </select>
	    </label>
	    <br />
	    <div id="chkname" style="color:#F00">&nbsp;</div>
	    <div id="chkid" style="color:#F00"></div>
	    qq号码
	    <input name="qq" type="text" id="qq" size="22" maxlength="12" value="<?php echo ($qq); ?>"/>
        <br />
        <div id="chkqq" style="color:#F00">&nbsp;</div>
        
      email
      <input name="email" type="text" id="email" size="23" maxlength="40" value="<?php echo ($email); ?>"/>
      <br />
      <div id="chkemail" style="color:#F00">&nbsp;</div>
      <input type="submit" name="button" id="button" value="确认" style="margin-right:30px;""/>
      <input type="button" name="button" id="button" value="返回" onclick="history.go(-1);"/>
      </div>
	<?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form>
	
</body>
</html>