/* JavaScript 类....


author princehaku
email baizhongwei@163.com
blog  http://hi.baidu.com/baizhongwei(主)
	  http://baizhongwei.hackbase.com
*/
//确认是否删除文件
function delarticle(id)
{
	url="/index.php/Article/del/id/"+id;
	if(confirm("确认删除吗?")==true){
		//alert(url);
		self.location=url;
		}
	
	}
 
//提交文章时的判断
function subdoc()
{
	if($('category').value==""|$("title").value=="")
	{
		if($('category').value=="")
			{
				alert("请选择一个目录");
				}
			else
			{
				alert("请输入一个标题");
				}
		}
	else
	{
		$('article').submit();
		}
	
	}
//更新用户信息
function upinfo()
{

	for(i=0;i<=40;i++)
	{
		if($('cat'+i).checked)
		{
			
			$('alcat').value += $('cat'+i).value; 
			$('alcat').value += "|"; 
			
			}
	}
	
	$('reg').submit();
	
}

