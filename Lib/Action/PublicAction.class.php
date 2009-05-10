<?php
/*
by    
	author princehaku
	email baizhongwei@163.com
	blog  http://hi.baidu.com/baizhongwei(主)
	 	  http://baizhongwei.hackbase.com

*/
class PublicAction extends Action{
 	//图片验证码的生成
	public function verify()
	{
		$type	 =	 isset($_GET['type'])?$_GET['type']:'gif';
		import("ORG.Util.Image");
		Image::buildImageVerify(4,1,$type);
	}

	public function Conv(){
		echo nl2br($_POST["textfield"]);
		}
    
	   
	   
  }
?>