<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	margin-left: 3px;
	margin-top: 0px;
	margin-right: 3px;
	margin-bottom: 0px;
}
.STYLE1 {
	color: #e1e2e3;
	font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12;}
.STYLE10 {color: #000000; font-size: 12px;}
.STYLE19 {
	color: #344b50;
	font-size: 12px;
}
.STYLE21 {
	font-size: 12px;
	color: #3b6375;
}
.STYLE22 {
	font-size: 12px;
	color: #295568;
}
-->
</style>
<script>
var  highlightcolor='#d5f4fe';
//此处clickcolor只能用win系统颜色代码才能成功,如果用#xxxxxx的代码就不行,还没搞清楚为什么:(
var  clickcolor='#51b2f6';
function  changeto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=highlightcolor&&source.id!="nc"&&cs[1].style.backgroundColor!=clickcolor)
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=highlightcolor;
}
}

function  changeback(){
if  (event.fromElement.contains(event.toElement)||source.contains(event.toElement)||source.id=="nc")
return
if  (event.toElement!=source&&cs[1].style.backgroundColor!=clickcolor)
//source.style.backgroundColor=originalcolor
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
}

function  clickto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=clickcolor&&source.id!="nc")
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor=clickcolor;
}
else
for(i=0;i<cs.length;i++){
	cs[i].style.backgroundColor="";
}
}
</script>


</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="<?php echo ($pub); ?>/Images/tb.gif" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> 文档查看</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">&nbsp;</span><span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" onmouseover="changeto()"  onmouseout="changeback()">
      <tr>
        <td width="4%" height="20" bgcolor="d3eaef" class="STYLE10"><div align="center">
          <input type="checkbox" name="checkbox" id="checkbox" />
        </div></td>
        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center">标题</div></td>
        <td width="15%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">发布者</span></div></td>
        <td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">发布时间</span></div></td>
        <td width="16%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">IP地址</span></div></td>
        <td width="27%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">详细描述</span></div></td>
        <td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">基本操作</span></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="checkbox2" id="checkbox2" />
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="center"><span class="STYLE19">admin</span></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center" class="STYLE21">删除 | 查看</div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="checkbox3" id="checkbox3" />
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="checkbox4" id="checkbox4" />
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="checkbox5" id="checkbox5" />
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="checkbox6" id="checkbox6" />
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="checkbox7" id="checkbox7" />
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="checkbox8" id="checkbox8" />
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="checkbox9" id="checkbox9" />
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="checkbox10" id="checkbox10" />
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
      </tr>
    </table>

      <div><input type="checkbox" name="checkbox11" id="checkbox11" />反选      &nbsp;&nbsp;<img src="<?php echo ($pub); ?>/Images/add.gif" alt="" width="10" height="10" /> 添加   &nbsp; <img src="<?php echo ($pub); ?>/Images/del.gif" alt="" width="10" height="10" /> 删除    &nbsp;&nbsp;<img src="<?php echo ($pub); ?>/Images/edit.gif" alt="" width="10" height="10" /> 编辑 </div>
</td>
  </tr>
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%"><div align="left"><span class="STYLE22">&nbsp;&nbsp;&nbsp;&nbsp;共有<strong> 243</strong> 条记录，当前第<strong> 1</strong> 页，共 <strong>10</strong> 页</span></div></td>
        <td width="67%"><table width="312" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td width="49"><div align="center"><img src="<?php echo ($pub); ?>/Images/main_54.gif" width="40" height="15" /></div></td>
            <td width="49"><div align="center"><img src="<?php echo ($pub); ?>/Images/main_56.gif" width="45" height="15" /></div></td>
            <td width="49"><div align="center"><img src="<?php echo ($pub); ?>/Images/main_58.gif" width="45" height="15" /></div></td>
            <td width="49"><div align="center"><img src="<?php echo ($pub); ?>/Images/main_60.gif" width="40" height="15" /></div></td>
            <td width="37" class="STYLE22"><div align="center">转到</div></td>
            <td width="22"><div align="center">
              <input type="text" name="textfield" id="textfield"  style="width:20px; height:12px; font-size:12px; border:solid 1px #7aaebd;"/>
            </div></td>
            <td width="22" class="STYLE22"><div align="center">页</div></td>
            <td width="35"><img src="<?php echo ($pub); ?>/Images/main_62.gif" width="26" height="15" /></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章管理系统</title>
<link href="<?php echo ($pub); ?>/style.css" rel="stylesheet" type="text/css" />
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/main.js'></script>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Base.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/prototype.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/mootools.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Ajax/ThinkAjax.js'></script>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Form/CheckForm.js'></script>  
</head>

<body style="background-color:#99CCCC">
<div id="mainPan">仅显示距今30天内的文章
<div id="rightPan">
  <p><?php if(is_array($list)): ?><?php $i = 0;?><?php $__LIST__ = $list?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><table width="98%" cellpadding="0" cellspacing="0" class="">
  <tr>
    <td width="32%" bgcolor="#FFCCFF"><font color="#000000"><font style="font-size: 14px;" color="#ff0000"><?php echo (is_array($vo)?$vo["title"]:$vo->title); ?></font></font></td>
    <td width="9%" align="center" bgcolor="#FFCCFF"><font color="#996600"><?php echo (is_array($vo)?$vo["through"]:$vo->through); ?></font></td>
    <td width="9%" align="center" bgcolor="#FFCCFF"><a href="/hakuams/index.php/Article/show/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" target="_blank">查看</a></td>
    <td width="12%" align="center" bgcolor="#FFCCFF"><a href="/hakuams/index.php/Article/editarticle/articleid/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>">编辑</a><a href="#" onclick="delarticle(<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>);"></a></td>
    <td width="10%" align="center" bgcolor="#FFCCFF"><a href="#" onclick="delarticle(<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>);">删除</a><a href="/hakuams/index.php/Article/editarticle/articleid/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>"></a></td>
    <td width="28%" align="center" bgcolor="#FFCCFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" background="<?php echo ($pub); ?>/Images/bg_dian.gif" height="1"></td>
  </tr>
  <tr valign="top">
    <td colspan="6"><?php echo (is_array($vo)?$vo["shortcontent"]:$vo->shortcontent); ?></td>
  </tr>
  <tr valign="top">
    <td colspan="6"><p><font size='2'><strong><span class="STYLE3">上传者<span class="STYLE5"> <?php echo (is_array($vo)?$vo["writer"]:$vo->writer); ?></span></span></strong></font><span class="STYLE3">           <font size='2'><strong>上传时间:</strong></font><font color="#006699" size='2'><strong><?php echo (timeto(is_array($vo)?$vo["data"]:$vo->data)); ?></strong></font></span></p></td>
  </tr>
</table>
                        <hr/><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?></p><$page></div>
<?php echo ($page); ?>
</body>
</html>