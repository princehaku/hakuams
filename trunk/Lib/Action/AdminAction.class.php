<?php
/*
文章的修改以及发布


by    
	author princehaku
	email baizhongwei@163.com
	blog  http://hi.baidu.com/baizhongwei(主)
	 	  http://baizhongwei.hackbase.com

*/
class AdminAction extends Action{
	public function index()
	{	
		goto("http://".$_SERVER['HTTP_HOST']."/index.php/Man/index",0);}
	}
}
?>