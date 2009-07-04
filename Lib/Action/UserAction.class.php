<?php
/*
用户的相关操作



by    
	author princehaku
	email baizhongwei@163.com
	blog  http://hi.baidu.com/baizhongwei(主)
	 	  http://baizhongwei.hackbase.com

*/
class UserAction extends Action{
	
	
    public function eexit(){
		
		$_SESSION['user_id']="";
		$_SESSION['admin']=0;
		$this->jumpUrl=C("PUBURL")."/index.php/Man/index";
		$this->success("退出成功");
	
	}
	public function showall(){
		if ($_SESSION['admin']!=1){echo "对不起..您还没有权利这样做";goto("http://".$_SERVER['HTTP_HOST']."/index.php/Man/index",3);die();}//用户模块
		$user  =  D("User");
		$state =  D("State");
		$article=D("Document");
		$ta=localtime(time(),true);
		$lastmonth=time()-$ta[tm_sec]-$ta[tm_sec]-$ta[tm_min]*60-$ta[tm_hour]*3600-($ta[tm_mday]-1)*3600*24;
		$result=$user->findall();
		foreach($result as $i=>$j)
		{
			$name=$j['username'];
			//获得登陆次数
			$s=$state->where(array('ltime'=>array($lastmonth,time()),'user'=>$name))->findall();	
			//如果是第一次登录设置初始0
			if($s!=""){
			$result[$i]['logintime']=count($s);}
			else
			{
				$result[$i]['logintime']=0;}
			//获得发表的文章
			$s=$article->where(array('data'=>array($lastmonth,time()),'writer'=>$name))->findall();	
			$result[$i]['artitle']=$s;
			if($s!=""){
				$result[$i]['cout']=count($s);
			}
			else
			{
				$result[$i]['cout']=0;
				}
		}
		
		$this->assign('time',timeto($lastmonth));
		$this->assign('nowtime',timeto(time()));
		$this->assign('list',$result);
		
		$this->display("show");
		
	}
    public function login(){
		//验证登录
		//echo md5($_POST['verfy']);
		$usr=str_replace(";","",$_POST['username']);
		$pwd=str_replace(";","",$_POST['password']);
		if ($usr==""){
		$this->error('请输入用户名');}
		if ($pwd==""){
		$this->error('请输入密码');}
		//if ($_SESSION['verify']!=md5($_POST['verify'])){
		//$this->error('验证码错误');}
		$user  =  D("User");
		$result=$user->where(array('username'=>$usr))->findall();
		//判断是否正确
		if(md5($pwd)==$result[0]['password']){
		//注册session
		$_SESSION['username']=$result[0]['username'];
		$_SESSION['user_id']=$result[0]['id'];
		$_SESSION['admin']=$result[0]['permission'];
		//更新登陆状态至数据库state
		//echo time()-$result[0]['lastlogin'];
		if(time()-$result[0]['lastlogin']>=C('LGTIME'))
		{
			$state=D('State');
			$state->user=$result[0]['username'];
			$state->ltime=time();
			$state->add();
		}
		//更新最后次登陆时间
			$user->where(array('username'=>$usr))->lastlogin=time();
			$user->save();
		//
		
		$this->success("登录成功");}
		else{$this->error("用户名或密码错误");}
		}

	public function save(){
		//插入新用户
		$User = D("User");
		if($_POST['name']=="")
		{
			$this->error("请输入一个姓名");
			}
		$User->username=htmlspecialchars($_POST['username']);
		
		$User->password=htmlspecialchars(md5($_POST['password2']));
		
		$User->name=htmlspecialchars($_POST['name']);
		
		$User->sex=htmlspecialchars($_POST['sex']);
		
		$User->qq=htmlspecialchars($_POST['qq']);
		
		$User->email=htmlspecialchars($_POST['email']);
		
		$User->lastlogin=time();
		
		$User->permission=0;
		//防止重复提交
		if ($_SESSION['lastpost']!="" & time()-$_SESSION['lastpost']<=C('USERTMLIMIT')){$this->error("每1分钟只能添加一个用户");}
		$_SESSION['lastpost']=time();
		
		if($User->add()){
				$this->jumpUrl=C('PUBURL')."/index.php/Man";
				
				$this->success("添加成功");
			}else{
				$this->success("添加失败");
				}
		

	}
	
	public function update(){
		//更新用户
		
		$usl = D("User");
		
		$result=$usl->where(array('id'=>$_SESSION['user_id']))->findall();
		if(md5($_POST['password'])==$result[0]['password'])
			{
				if($_POST['password2']!=""){
				$usl->password=htmlspecialchars(md5($_POST['password2']));
				}
			}
		else
			{
				$this->error("原密码错误");
				}
		
		$usl->name=htmlspecialchars($_POST['name']);
		$usl->sex=htmlspecialchars($_POST['sex']);
		$usl->qq=htmlspecialchars($_POST['qq']);
		$usl->email=htmlspecialchars($_POST['email']);
		$usl->lastlogin=time();
		//防止重复提交
		if ($_SESSION['lastpost']!="" & time()-$_SESSION['lastpost']<=C('USERTMLIMIT')){$this->error("每1分钟只能提交一次");}
		$_SESSION['lastpost']=time();
		
		if($usl->save()){$this->success("更新成功");}else{$this->success("更新失败");}
		
	}
	public function set(){
		//更新用户
		if ($_SESSION['admin']!=1){echo "对不起..您还没有权利这样做";goto("http://".$_SERVER['HTTP_HOST']."/index.php/Man/index",3);die();}
		$usl = D("User");
		
		$result=$usl->where(array('id'=>$_POST['id']))->limit(1)->findall();
		
		$usl->username=$_POST['username'];
		$usl->name=$_POST['name'];
		$usl->sex=$_POST['sex'];
		$usl->alcat=$_POST['alcat'];
		$usl->qq=$_POST['qq'];
		$usl->email=$_POST['email'];
		$usl->lastlogin=time();
		//防止重复提交
		//if ($_SESSION['lastpost']!="" & time()-$_SESSION['lastpost']<=60){$this->error("每1分钟只能提交一次");}
		//$_SESSION['lastpost']=time();
		
		$this->jumpUrl=C("PUBURL")."/index.php/User/showall";
		
		if($usl->where(array('id'=>$_POST['id']))->limit(1)->save()){$this->success("更新成功");}else{$this->success("更新失败");}
		
	}
	public function cginfo(){
		//得到用户资料并填充
		$user  =  D("User");
		
		$result=$user->where(array('id'=>$_SESSION['user_id']))->findall();
		
		$this->assign('name',$result[0]['name']);
		
		$this->assign('email',$result[0]['email']);
		
		$this->assign('qq',$result[0]['qq']);
		
		//导入url
		//+++++++++++++++++++++++++++++++++++++++++
        $this->assign('pub',"http://".$_SERVER['HTTP_HOST']);
		
		$this->display();
		
		}
	
	public function checkname(){
		$usr=$_GET['name'];
		$user  =  D("User");
		$result=$user->where(array('username'=>$usr))->findall();
		
		if($result=="")
		{$this->ajaxreturn("用户名可以使用");
			}
			else
		{$this->ajaxreturn("用户名已被占用");
			}
	}
	
	public function checkid(){
		$usr=$_GET['id'];
		$user  =  D("User");
		$result=$user->where(array('id'=>$usr))->findall();
		
		if($result=="" || $result[0]['id']=="999999999999")
		{
		$this->ajaxreturn("可以使用");
			}
			else
		{
		$this->ajaxreturn("此学号已被占用,,使用者为".$result[0]['name']);
			}
	}


	public function infodetail(){
		//得到用户资料并填充
		if ($_SESSION['admin']!=1){echo "对不起..您还没有权利这样做";goto("http://".$_SERVER['HTTP_HOST']."/index.php/Man/index",3);die();}
		$user  =  D("User");
		
		$result=$user->where(array('id'=>uh($_GET['userid'])))->findall();
		//echo $result[0]['permission'];
		//文章授权部分
		if(C("PERMISSION")==1 & $result[0]['permission']==0)
		{
			$b=$result[0]['alcat'];
			
			$a=explode("|",$b);
				
			$cate=D("Category");
			
			$result=$cate->findall();
			
			$y=0;
			//处理已经选定的授权目录
			foreach($result as $i=>$j)
			{
				$result[$i]['cat']=++$y;
				foreach($a as $u=>$n)
				{
				if($n==$result[$i]['id'])
							{
							$result[$i]['sck']="checked='checked'";}
				}
				
				}
			
			$this->assign('title',"允许文章发布的目录");
			
			$this->assign('cate',$result);
		}
		
		$result=$user->where(array('id'=>$_GET['userid']))->findall();
				
		
		$this->assign('name',$result[0]['name']);
		
		$this->assign('email',$result[0]['email']);

		$this->assign('qq',$result[0]['qq']);
		
		$this->assign('uid',uh($_GET['userid']));
		//导入url
		//+++++++++++++++++++++++++++++++++++++++++
        $this->assign('pub',C('PUBURL'));

		$this->display();
		
		}
	public function register(){
		//如果开启
		if(C("CANREGISTER")==0){die();}
		//导入url
		//+++++++++++++++++++++++++++++++++++++++++
        $this->assign('pub',C('PUBURL'));
		
		$this->display();
	}
	
}
?>