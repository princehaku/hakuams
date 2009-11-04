/* JavaScript 
这个用于检测用户注册的信息

author princehaku
email baizhongwei@163.com
blog  http://hi.baidu.com/baizhongwei(主)
	  http://baizhongwei.hackbase.com
*/
var a
var b
function chkuser()
{
	if ($$('username').value.length<=5){
		
		$$('chkuser').innerHTML ="用户名需大于6个字符";
		
	}
	else{
		$$('chkuser').innerHTML ="&nbsp;";
		
				$.ajax({
								   
							url: '/hakuams/index.php/User/checkname/name/'+$$('username').value,
							
							type: 'POST',
							
							timeout: 100000,
							
							error: function(){
									
							},
							success: function(html){
									
									if(html==1)
									{
											$$('chkuser').innerHTML ="用户名可以使用";
										}
									else
									{
											$$('chkuser').innerHTML ="用户名已经被占用";
										}
									}
							});
									
	}
}

function chkpwd1()
{
	$$('chkpwd1').innerHTML ="请输入一个密码";
	
}
	
function chkrpwd()
{
	
	$$('chkpwd1').innerHTML ="&nbsp;";
	
	if($$('password1').value==$$('password2').value){
		$$('chkpwd2').innerHTML ="&nbsp;";
		}
	else{
		$$('chkpwd2').innerHTML ="两次输入密码不相同";
		
	}
}


function submitall()
{
	if ($$('username').value.length>5 )
		{
			$$('reg').submit();}
	else{
		
		alert("填写错误...请检查用户名");
	}
}