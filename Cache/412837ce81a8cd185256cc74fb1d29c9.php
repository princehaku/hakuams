<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章管理系统</title>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/main.js'></script>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/picnews.js'></script>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Base.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/prototype.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/mootools.js'></script>  
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Ajax/ThinkAjax.js'></script>
<script language='JavaScript' src='<?php echo ($pub); ?>/Js/Form/CheckForm.js'></script>  

</head>
<body bgcolor="#99CCCC" onLoad="showpic();">
	<form action="/hakuams/index.php/Article/uparticle" method="post" enctype="multipart/form-data" name="article" id="article">
    <input name="artid" type="hidden" value="<?php echo ($artid); ?>">
	<p style="margin-right=10px;">标题 
	  <input name="title" type="text" value="<?php echo ($title); ?>"/>
	
	文章类型[
	<label>
	  <input name="doctype" type="radio" id="doctype_0" value="0" onClick="showpic();" checked="checked" />
	  标准 </label>
    <label>
      <input name="doctype" type="radio" id="doctype_1" onClick="showpic();" value="1" />
      图文</label>
]
	<p>目录<select name="category" id="category">
      <option value="<?php echo ($nowcate); ?>"><?php echo ($nowcatename); ?></option>
     <?php if(is_array($cate)): ?><?php $i = 0;?><?php $__LIST__ = $cate?><?php if( count($__LIST__)==0 ) : echo "" ; ?><?php else: ?><?php foreach($__LIST__ as $key=>$vo): ?><?php ++$i;?><?php $mod = (($i % 2 )==0)?><option value="<?php echo (is_array($vo)?$vo["id"]:$vo->id); ?>"><?php echo (is_array($vo)?$vo["name"]:$vo->name); ?></option><?php endforeach; ?><?php endif; ?><?php else: echo "" ;?><?php endif; ?>
      </select></p>
          <div id="image"></div>
正文<br>
<!-- 编辑器调用开始 --><script type="text/javascript" src="/hakuams/Public/Js/FCKeditor/fckeditor.js"></script><textarea id="editor" name="content"><?php echo ($content); ?></textarea><script type="text/javascript"> var oFCKeditor = new FCKeditor( "editor","700px;","450px;" ) ; oFCKeditor.BasePath = "/hakuams/Public/Js/FCKeditor/" ; oFCKeditor.ReplaceTextarea() ;function resetEditor(){setContents("editor",document.getElementById("editor").value)}; function saveEditor(){document.getElementById("editor").value = getContents("editor");} function InsertHTML(html){ var oEditor = FCKeditorAPI.GetInstance("editor") ;if (oEditor.EditMode == FCK_EDITMODE_WYSIWYG ){oEditor.InsertHtml(html) ;}else	alert( "FCK必须处于WYSIWYG模式!" ) ;}</script> <!-- 编辑器调用结束 --><br>

    <input name="" type="submit" value="更新" style="margin-right:40px"/>
    <a href="/hakuams/index.php/Article/index">返回</a>
    <?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form>


</body>
</html>