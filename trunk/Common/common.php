<?php
/*
	公共框架
	这里有
	函数

@auther princehaku
@email baizhongwei@163.com
*/

//页面跳转
function goto($url,$time)
		{	
			echo "<meta http-equiv='refresh' content=$time;url='$url'> ";

		}
		
function formatetime($u)
		{	
			$u=date("Y-m-d",$u);
			return $u;

		}
		
function timeto($u)
		{	
			$u=date("Y-m-d H:i:m",$u);
			return $u;

		}
function uh($str) 
{ 
			$farr = array( 
			"/\s /", //过滤多余的空白 
			"/<(\/?)(script|i?frame|style|html|body|title|link|meta|\?|\%)([^>]*?)>/isU", //过滤 <script 等可能引入恶意内容或恶意改变显示布局的代码,假如不需要插入flash等,还可以加入<object的过滤 
			"/(<[^>]*)on[a-zA-Z] \s*=([^>]*>)/isU", //过滤javascript的on事件 
			
			); 
			$tarr = array( 
			" ", 
			"", //假如要直接清除不安全的标签，这里可以留空 
			"\\1\\2", 
			); 
			$str = preg_replace( $farr,$tarr,$str); 
			return $str; 
} 


		
?>