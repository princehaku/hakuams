<?php
/*
文章的修改以及发布


by    
	author princehaku
	email baizhongwei@163.com
	blog  http://hi.baidu.com/baizhongwei(主)
	 	  http://baizhongwei.hackbase.com
	
	savepic()=====图片保存
	common()======RABC
	show()========浏览所有文章
	unexam()======取消授权
	exam()========授权文章
	editarticle()=文章编辑
	savearticle()=保存文章
	uparticle()===更新文章
*/
class ArticleAction extends Action{
	public function common()
	{	
		//授权模块
		if ($_SESSION['admin']==""){goto(C("PUBURL"),0);die();}
		//导入url
		//+++++++++++++++++++++++++++++++++++++++++
        $this->assign('pub',C('PUBURL'));
	}
	private function savepic()
	{
		import("ORG.Net.UploadFile");
		
		$upload=new UploadFile();
		
		$time=time();	//时间戳
		
		$savePath=C("DIR")."/";
		//如果目录不存在则创建目录
		if(!is_dir($savePath))
			{
				if(!mkdir($savePath))
				{
					$this->error("创建图片保存目录出错,请重试");
				}
					}
			
		$upload->savePath=$savePath;
		
		$upload->allowExts=explode("|",C("UPLOAD_ALLOWEXTS"));
		
		if($upload->upload())
		{
			$suc= $upload->getUploadFileInfo();
			
			return $suc[0]['savename'];
			}
		else
		{
			$this->error($upload->getErrorMsg()); 
			}
		
	}
	
	//全部文章显示
	public function index(){
		
		$this->common();
		//得到页码
		$pgnum=uh($_GET["p"])*20;
		//得到每页显示文章数
		$pglit=C("ARTNUMS");
		if($pgnum>$pglit){
			
			$this->error("参数错误");
			
			}
		$user=D('User');
			
		$result=$user->where(array('id'=>$_SESSION['user_id']))->findall();
			
		$cate=D("Document");
		
		if($_SESSION['admin']!=1){
		//非最高等级管理员显示自己的文章
				$result=$cate->LIMIT("$pgnum,$pglit")->where(array('writer'=>$result[0]['username']))->order("data DESC")->findall();
				}
			else{
		//最高管理员显示所有文章
				$result=$cate->LIMIT("$pgnum,$pglit")->order("data DESC")->findall();
				}
		
			$k=0;
			foreach($result as $i=>$j)
				{
					//添加oid,用于opinion
					$result[$i]['oid']=$k++;
			        //如果开启文章权限功能
					if(C('PERMISSION')==1){
						if ($j['exam']==0 & $_SESSION['admin']==1)
						{
							$result[$i]['through']="<a href='".C('PUBURL')."/index.php/Article/exam/id/".$j['id']."'>授权</a>|";
						}
						if ($j['exam']==1 & $_SESSION['admin']==1)
						{
							$result[$i]['through']="<a href='".C('PUBURL')."/index.php/Article/unexam/id/".$j['id']."'>消权</a>|";
						}
					 }
					//$result[$i]['shortcon']=substr(str_replace("img","",$result[$i]['content']),0,700);
				}
		
		$this->assign('list',$result);
		//js参数替换~~~~~~~~~~
		$this->assign('total',count($result));
		//js参数替换完成
		$this->display('show');
		
		
    }
	/*
	//未授权的文章的显示
	public function showunexam(){
		//得到页码
		
		$this->common();
		
		$user=D('User');
			
		$result=$user->where(array('id'=>$_SESSION['user_id']))->findall();
			
		$cate=D("Document");
		
		if($_SESSION['admin']!=1){
				//非最高等级管理员显示自己的文章
				$result=$cate->where(array('data'=>array(time()-3600*24*30,time()),'writer'=>$result[0]['name'],'exam'=>0))->order("data DESC")->LIMIT(C('ARTNUMS'))->findall();
				}
			else{
				//最高管理员显示所有文章
				$result=$cate->where(array('data'=>array(time()-3600*24*30,time()),'exam'=>0))->order("data DESC")->LIMIT(20)->findall();
				}
		foreach($result as $i=>$j)
			{
				$result[$i]['shortcon']=$result[$i]['content'];
				if ($j['exam']==0 & $_SESSION['admin']==1)
				{
					$result[$i]['through']="<a href='".C('PUBURL')."/index.php/Article/exam/id/".$j['id']."'>授权</a>";
				}
				if ($j['exam']==1 & $_SESSION['admin']==1)
				{
					$result[$i]['through']="<a href='".C('PUBURL')."/index.php/Article/unexam/id/".$j['id']."'>取消授权</a>";
				}
				
			}

		$this->assign('list',$result);
		
		$this->display('show');
		
    }
	
	*/
	public function show()
	{
		$doc=D("Document");
		
				
		$result=$doc->where(array('id'=>uh($_GET['id'])))->limit(1)->findall();
		//print_r($result);

		$this->assign('doc',$result);

        $this->assign('pub',C('PUBURL'));
		
		$this->display('preview');
		
	}
	//取消文章授权
		public function unexam()
	{	
		$this->common();
		//授权模块
		if ($_SESSION['admin']==""){goto("http://".$_SERVER['HTTP_HOST'],0);}
		
		//导入文章
		$doc=D("Document");
		
		$artid=$_GET['id'];
		
		$tr=$doc->where(array('id'=>$artid))->findall();
		
		$doc->exam=0;
		
		if($doc->where(array('id'=>$artid))->save())
		{
			$this->success("取消授权成功");
			}
		else
		{
			$this->error("取消授权失败");
			}
	}
	//给文章授权
	public function exam()
	{	
		$this->common();
		//授权模块
		if ($_SESSION['admin']==""){goto("http://".$_SERVER['HTTP_HOST'],0);}
		
		//导入文章
		$doc=D("Document");
		
		$artid=$_GET['id'];
		
		$tr=$doc->where(array('id'=>$artid))->findall();
		
		$doc->exam=1;
		
		if($doc->where(array('id'=>$artid))->save())
		{
			$this->success("授权成功");
			}
		else
		{
			$this->error("授权失败");
			}
	}
	//删除文章
	public function del()
	{	
		//授权模块
		$this->common();
		//得到id
		$id=$_GET['id'];
		//导入文章
		$doc=D("Document");
		//得到用户名字
		$user  =  D("User");
		
		$result=$user->where(array('id'=>$_SESSION['user_id']))->findall();
		
		$usr=$result[0]['name'];
		
		if($_SESSION['admin']==1){
			
			$doc->query("delete from `".C('DB_PREFIX')
."document` where `id`=$id Limit 1");
		}
		else
		{
			//防止注入式攻击
			$doc->query("delete from `".C('DB_PREFIX')
."document` where `id`=$id AND `writer`='$usr' Limit 1");
		}
		$this->jumpUrl=C('PUBURL')."/index.php/Article/index";
		
		$this->success("删除成功");
			
	}
    
	public function addarticle(){
		
		$this->common();
		//目录的显示
		//+++++++++++++++++++++++++++++++++++++++++
		$cate=D("Category");
		
		if ($_SESSION['admin']!=1){
			
			$user=D('User');
			
			$result=$user->where(array('id'=>$_SESSION['user_id']))->findall();
			
			$b=$result[0]['alcat'];
			
			$a=explode("|",$b);
			
			$result=array ();
			
			foreach($a as $i=>$j)
			{
				$resu = $cate->where(array('id'=>$j))->findall();
				
				$result[$i]['id']=$resu[0]['id'];
				
				$result[$i]['name']=$resu[0]['name'];
				
				}
			$this->assign('cate',$result);
			
		}
		else
		{
		$result=$cate->findall();
		
		$this->assign('cate',$result);
		}
		
		$this->common();
		
		$this->display('article');
		
	}

	public function editarticle(){
		
		$this->common();
		
		//+++++++++++++++++++++++++
		//导入文章
		
		//得到用户名字
		$user  =  D("User");
		
		$result=$user->where(array('id'=>$_SESSION['user_id']))->findall();
		
		$doc   =D("Document");
		
		$artid =$_GET['articleid'];
		
		if($_SESSION['admin']!=1){
		
			$tr=$doc->where(array('writer'=>$result[0]['username'],'id'=>$artid))->findall();
		}
		else
		{
			$tr=$doc->where(array('id'=>$artid))->findall();
			}
		//print_r($tr);
		foreach($tr as $i=>$j)
		{
			$result[$i]['title']   =   $j['title'];
			
			$result[$i]['content'] =$j['content'];
			
			}
		
		$this->assign('artid',$artid);
		
		$this->assign('title',$result[0]['title']);
		
		$this->assign('content',$result[0]['content']);
		//固定目录
		//+++++++++++++++++++++++++++++++++++++++++
		$this->assign('nowcate',$tr[0]['cateid']);
		
		$this->assign('nowcatename',"不改变目录".$tr[0]['cateid']);
		
		$cate=D("Category");
		
		if ($_SESSION['admin']!=1){
			
			$user=D('User');
			
			$result=$user->where(array('id'=>$_SESSION['user_id']))->findall();
			
			$b=$result[0]['alcat'];
			
			$a=explode("|",$b);
			
			$result=array ();
			
			foreach($a as $i=>$j)
			{
				$resu = $cate->where(array('id'=>$j))->findall();
				
				$result[$i]['id']=$resu[0]['id'];
				
				$result[$i]['name']=$resu[0]['name'];
				
				}
				
			$this->assign('cate',$result);
			
		}
		else
		{
		$result=$cate->findall();
		
		$this->assign('cate',$result);
		}
		$this->display('uparticle');
		
	}
	//保存文章
		
	public function savearticle(){
		
		$this->common();
		//防止重复提交
		if ($_SESSION['lastpost']!="" & time()-$_SESSION['lastpost']<=C('TIMEOUT')){$this->error("每".C('TIMEOUT')."秒只能发布1篇文章");}
		
		$_SESSION['lastpost']=time();
		//+++++++++++++++++++++++++++++++++++++++++
		$doc=D("Document");
		
		$doc->title=htmlspecialchars(str_replace("</script>","",str_replace("\\\"","\"",$_POST['title'])));
		
		$doc->cateid=$_POST['category'];
		
		//如果上传的是图片转入图片处理
		
		if($_POST['doctype']==1){
			
			$doc->ispic=1;
			
			$doc->picurl=$this->savepic();
			
			}
		//移除有害脚本
		$doc->content=uh(str_replace("</script>","",str_replace("\\\"","\"",$_POST['content'])));
		
		$doc->shortcontent=htmlspecialchars(str_replace("</script>","",str_replace("\\\"","\"",$_POST['shortcontent'])));
			
		$user=D('User');
		
		$result=$user->where(array('id'=>$_SESSION['user_id']))->findall();
		
		$doc->writer=$result[0]['name'];
		
		$doc->exam=1;
		
		if ($_SESSION['admin']==0 & C('PREMISSION')==1){
			$doc->exam=0;
			}
		$doc->data=time();
		if ($doc->add()){$this->success("成功发布");}
		
	}
	//更新文档
	public function uparticle(){
		
		//防止重复提交
		if ($_SESSION['lastpost']!="" & time()-$_SESSION['lastpost']<=C('TIMEOUT')){$this->error("每".C('TIMEOUT')."秒只能发布1篇文章");}
		$_SESSION['lastpost']=time();
		//得到用户名字
		$user  =  D("User");
		
		$result=$user->where(array('id'=>$_SESSION['user_id']))->findall();
		
		$doc=D("Document");
		
		if($_SESSION['admin']!=1){
			
			$tr=$doc->where(array('writer'=>$result[0]['name'],'id'=>$_POST['artid']))->findall();
		}
		else
		{
			$tr=$doc->where(array('id'    =>$_POST['artid']))->findall();}
		if($tr==""){die();}
		
		$doc->title=htmlspecialchars(str_replace("</script>","",str_replace("\\\"","\"",$_POST['title'])));
        //移除有害脚本		
		$doc->content=uh(str_replace("</script>","",str_replace("\\\"","\"",$_POST['content'])));
		
		$doc->shortcontent=htmlspecialchars(str_replace("</script>","",str_replace("\\\"","\"",$_POST['shortcontent'])));
		//保存目录
		$doc->cateid=htmlspecialchars($_POST['category']);
		//如果上传的是图片转入图片处理
		if($_POST['doctype']==1){
			
		    $doc->ispic=1;
			
			$doc->picurl=$this->savepic();
			}
		//$doc->data=time();
		
		if(
		$doc->where(array('id'=>$_POST['artid']))->save()
		){
		$this->success("更新成功");
		}
		else
		{$this->error("更新失败");}
		
	}

	
	
}
?>