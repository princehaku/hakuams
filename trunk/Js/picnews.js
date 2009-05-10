// JavaScript Document
//文章选择是否未图文时显示下面 的多余选项
function showpic()
{
	
	if($("doctype_1").checked==true)
		{
			$("image").innerHTML='<p>缩略图<input name="image" type="file" /><br /><br />简略的描述<input name="shortcontent" type="text"></p>';}
		else
		{
			$("image").innerHTML='<p>简略的描述<input name="shortcontent" type="text"></p>';
		}
		
	}
