﻿/* JavaScript 类....


author princehaku
email baizhongwei@163.com
blog  http://hi.baidu.com/baizhongwei(主)
	  http://baizhongwei.hackbase.com
*/

//提交文章时的判断
function subdoc()
{
	if($$('category').value==""||$$("title").value=="")
	{
		if($$('category').value=="")
			{
				$.prompt("请选择一个目录");
				}
			else
			{
				$.prompt("请输入一个标题");
				}
		}
	else
	{
		$$('article').submit();
		}
	
	}
//更新用户信息
function upinfo()
{

	for(i=1;i<=100;i++)
	{
		if($$('cat'+i)==null){continue;}
		if($$('cat'+i).checked)
		{
			
			$$('alcat').value += $$('cat'+i).value; 
			$$('alcat').value += "|"; 
			
			}
	}
	
	$$('reg').submit();
	
}

//得到元素
function $$(id)
{
	return document.getElementById(id);
	}