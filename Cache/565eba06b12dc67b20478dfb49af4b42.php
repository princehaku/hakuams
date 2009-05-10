<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户管理系统</title>
<link href="<?php echo ($pub); ?>/style.css" rel="stylesheet" type="text/css" />
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/main.js'></script>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Base.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/prototype.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/mootools.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Ajax/ThinkAjax.js'></script>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Form/CheckForm.js'></script>  
<style type="text/css">
<!--
p {
	font-size: 9px;
}
p {
	font-size: 10px;
}
p {
	font-size: 14px;
}
p {
	font-size: 13px;
}
-->
</style>
</head>

<body style="background-color:#99CCCC">
<div id="mainPan">以下为<?php echo ($time); ?>到<?php echo ($nowtime); ?>时间段内的信息
<div id="rightPan">
  <p><?php if(is_array($list)): ?><?php $i = 0;?><?php $__LIST__ = $list?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><table width="98%" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td width="10%" bgcolor="#FFCCFF"><font color="#000000"><font style="font-size: 14px;" color="#ff0000"><?php echo (is_array($vo)?$vo["name"]:$vo->name); ?></font></font></td>
    <td width="11%" align="center" bgcolor="#FFCCFF"><font color="#996600"><?php echo (is_array($vo)?$vo["through"]:$vo->through); ?></font></td>
    <td width="9%" align="center" bgcolor="#FFCCFF"><a href="/hakuams/index.php/User/infodetail/userid/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>">编辑</a></td>
    <td width="12%" align="center" bgcolor="#FFCCFF"></td>
    <td width="58%" align="center" bgcolor="#FFCCFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" background="images/bg_dian.gif" height="1"></td>
  </tr>
  <tr valign="top">
    <td colspan="5"> <font color="#333333" size='2'><strong>编号:</strong> <?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>
        <strong><font color="#333333" size='2'>本月发布的文章---------共<?php echo (is_array($vo)?$vo["cout"]:$vo->cout); ?>篇</font></strong> 
       </td>
  </tr>
  <tr valign="top">
    <td colspan="5"><p><strong><font size="2">上次登陆</font></strong><span class="STYLE3"><font size='2'><strong>时间:</strong></font><font color="#006699" size='2'><strong><?php echo (timeto(is_array($vo)?$vo["lastlogin"]:$vo->lastlogin)); ?></strong></font></span><br />
    本月登陆次数:<?php echo (is_array($vo)?$vo["logintime"]:$vo->logintime); ?></p></td>
  </tr>
</table>
                        <hr/><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?></p>

</div>
</body>
</html>