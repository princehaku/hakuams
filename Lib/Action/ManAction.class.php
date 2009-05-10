<?php
/*
文章的修改以及发布

by    
	author princehaku
	email baizhongwei@163.com
	blog  http://hi.baidu.com/baizhongwei(主)
	 	  http://baizhongwei.hackbase.com
*/
class ManAction extends Action{
	public function common()
	{	
		//导入url
		//+++++++++++++++++++++++++++++++++++++++++
        $this->assign('pub',C("PUBURL"));

	}
	
	public function top()
	{
		$this->common();
		//替换服务器时间
		$this->assign("time",timeto(time()));
		//显示登录用户名
		$this->assign("username",$_SESSION['username']);
		//服务器ip地址
		$this->assign("ip",$_SERVER['REMOTE_ADDR']);
		//服务器数据库地址
		$this->assign("DATABASEURL",C("DATABASEURL"));
		
		$this->assign('pub',C("PUBURL"));
		
		$this->display("top");
		}
	public function tmp()
	{
		$this->display();
		}
	public function Left()
	{
		$this->common();
		
		$this->assign("things",'');
		
		if ($_SESSION['admin']==1){

		$this->assign("things",C('ADMINMENU'));}
		
		if ($_SESSION['admin']==0){
			
		$this->assign("things",C('NORMALMENU'));}

		$this->display("left");
		
		}
		
    public function index(){
		
		$this->common();
		
		if($_SESSION['user_id']!="")
		{
			
			$this->display("man");
			
		}
		
			$this->display();
    }
	
}
?>