<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	margin-left: 3px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color:#353c44;
}

a:hover {
	color:#000;
	text-decoration:underline;
}
a:active {
	color:#FFF;
	text-decoration:underline;
}
a:visited {
	color:#000;
	text-decoration:none;
}
.STYLE {
	font-size: 12px
	}
-->
</style></head>

<body>
<div style="margin-left:5px;background-color:#FFF;width:147;height:100%;">
<table width="147" border="0" align="center" cellpadding="0" cellspacing="0">
<?php if(is_array($things)): ?><?php $i = 0;?><?php $__LIST__ = $things?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><tr>
    <td height="23" background="<?php echo ($pub); ?>/Images/main_34_1.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="9%">&nbsp;</td>
        <td width="83%"><div align="center" class="STYLE"><a href="/hakuams/index.php<?php echo (is_array($vo)?$vo["url"]:$vo->url); ?>" target="mainFrame"><?php echo (is_array($vo)?$vo["name"]:$vo->name); ?></a></div></td>
        <td width="8%">&nbsp;</td>
      </tr>
    </table></td>
  </tr><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>

  <tr>
    <td height="19" background="<?php echo ($pub); ?>/Images/main_69.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="24%">&nbsp;</td>
        <td width="76%" valign="bottom">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
</body>
</html>