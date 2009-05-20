<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/prototype.js'></script>  
<script language='JavaScript'>
//页码
var total='<?php echo ($total); ?>';
var nowpg='<?php echo ($nowpg); ?>';
var totalpg='<?php echo ($totalpg); ?>';
var nextpg='<?php echo ($nextpg); ?>';
var lastpg='<?php echo ($lastpg); ?>';
//删除文章的确认
function delarticle(id)
{
	//alert (total);
	url="/hakuams/index.php/Article/del/id/"+id;
	if(confirm("确认删除吗?")==true){
		//alert(url);
		self.location=url;
		}
	}
function nextpg()
{
	
	
	}
</script>
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
.STYLE19 div {
   overflow:hidden;
   height:20px;
   vertical-align:middle;
   line-height:20px;
}
a:link {
	color: #09F;
	text-decoration:none;
}
a:visited {
	color: #09F;
}
a:active {
	color: #0CF;
}
a:hover {
	text-decoration:underline;
	color:#6F0;
}
.STYLE19 div:hover {
	background-color:#0CF;
	}
.STYLE19 a:hover {
	color: #333;
	text-decoration:none;
	}
.STYLE19 a:active {
	color: #333;
	text-decoration:none;
	}

-->
</style>

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
                <td width="94%" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="6%" height="19" valign="bottom"><div align="center"><img src="<?php echo ($pub); ?>/Images/tb.gif" width="14" height="14" /></div></td>
                        <td width="94%" valign="bottom"><span class="STYLE1"> 文档查看</span></td>
                      </tr>
                    </table></td>
                    <td><div align="right"><span class="STYLE1">&nbsp;</span><span class="STYLE1"> &nbsp;</span></div></td>
                  </tr>
                </table>                  <span class="STYLE1"></span></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" >
      <tr>
        <td width="5%" height="20" bgcolor="d3eaef" class="STYLE10"><div align="center">
        </div></td>
        <td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center" class="STYLE10">标题</div></td>
        <td width="11%" bgcolor="d3eaef" class="STYLE10"><div align="center" class="STYLE10">操作</div></td>
        <td width="33%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center" class="STYLE10">简略描述</div></td>
        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center" class="STYLE10">所在目录</div></td>
        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center" class="STYLE10">发布者</div></td>
        <td width="17%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">发布时间</span></div></td>
        </tr>
 <!--文章列表开始-->       
  <?php if(is_array($list)): ?><?php $i = 0;?><?php $__LIST__ = $list?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="article<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" id="checkbox<?php echo (is_array($vo)?$vo["oid"]:$vo->oid); ?>" />
        </div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><span class="STYLE19"><a title="<?php echo (is_array($vo)?$vo["title"]:$vo->title); ?>"><?php echo (is_array($vo)?$vo["title"]:$vo->title); ?></a></span></div></td>
        <td bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo (is_array($vo)?$vo["through"]:$vo->through); ?><a href="/hakuams/index.php/Article/show/id/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>" target="_blank">查看</a>|<a href="/hakuams/index.php/Article/editarticle/articleid/<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>">编辑</a>|<a href="#" onclick="delarticle(<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>);">删除</a></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center" class="STYLE19"><a class="null" title="<?php echo (is_array($vo)?$vo["shortcontent"]:$vo->shortcontent); ?>"><?php echo (is_array($vo)?$vo["shortcontent"]:$vo->shortcontent); ?> </a></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo (is_array($vo)?$vo["catename"]:$vo->catename); ?></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo (is_array($vo)?$vo["writer"]:$vo->writer); ?></div></td>
        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><strong><?php echo (timeto(is_array($vo)?$vo["data"]:$vo->data)); ?></strong></div></td>
        </tr><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
<!--文章列表结束-->             
    </table>

      <div class="STYLE10"><input type="checkbox" name="checkbox11" id="checkbox11" />反选      &nbsp;&nbsp;<img src="<?php echo ($pub); ?>/Images/add.gif" alt="" width="10" height="10" /> 添加   &nbsp; <img src="<?php echo ($pub); ?>/Images/del.gif" alt="" width="10" height="10" /> 删除    &nbsp;&nbsp;<img src="<?php echo ($pub); ?>/Images/edit.gif" alt="" width="10" height="10" /> 编辑 </div>
</td>
  </tr>
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%"><div align="left"><span class="STYLE22">&nbsp;&nbsp;&nbsp;&nbsp;共有<strong> <script language='JavaScript'> document.write(total);</script></strong> 条记录，当前第<strong> <script language='JavaScript'> document.write(nowpg);</script></strong> 页，共 <strong> <script language='JavaScript'> document.write(totalpg);</script></strong> 页</span></div></td>
        <td width="67%"><table width="312" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td width="49"><div align="center"><img src="<?php echo ($pub); ?>/Images/main_54.gif" width="40" height="15" /></div></td>
            <td width="49"><div align="center"><script language='JavaScript'> document.write("<a href='index/p/");document.write(nextpg);document.write("'>");</script><img src="<?php echo ($pub); ?>/Images/main_56.gif" width="45" height="15"  border="0"/><script language='JavaScript'> document.write("</a>");</script></div></td>
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