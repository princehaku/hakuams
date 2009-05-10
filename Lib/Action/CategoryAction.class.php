<?php
/*
目录的相关操作

by    
	author princehaku
	email baizhongwei@163.com
	blog  http://hi.baidu.com/baizhongwei(主)
	 	  http://baizhongwei.hackbase.com
	
*/
class CategoryAction extends Action{
	public function common()
	{	
		if ($_SESSION['admin']!=1){echo "对不起..您还没有权利这样做";goto("http://".$_SERVER['HTTP_HOST']."/stupub/index.php/Man/index",3);die();}//用户模块
		//+++++++++++++++++++++++++++++++++++++++++



		//导入url
		//+++++++++++++++++++++++++++++++++++++++++
        $this->assign('pub',"http://".$_SERVER['HTTP_HOST']);
	}
	
    public function index()
	{
		//目录的显示
		//+++++++++++++++++++++++++++++++++++++++++
		$cate=D("Category");
		
		$result=$cate->findall();
		
		$this->assign('cate',$result);
		//增加一个首页的选项
		$this->assign('nowcat',0);
		
		$this->assign('nowcatname','顶级目录');
		
		$this->common();
		
		
		$this->display("modify");
		
    }
	//ajax获得上级目录
	public function id()
	{
		
		$cate=D("Category");
		
		$te=$cate->where(array('id' =>$_GET['id']))->findall();
			
		$tr=$cate->where(array('id'=>$te[0]['upcat']))->findall();
		
		$this->ajaxreturn($tr[0]['name']);
		
		
		}
	//添加新目录
	public function newcate()
	{
		$this->common();
		
		$cat= D('Category');
		$cat->name=$_POST['newcate'];
		$cat->upcat=$_POST['category2'];
		if($cat->add())
		{
			$this->success("添加成功！");
			}
		else{$this->success("添加失败！");
		}
	}
	//删除目录
	public function delcate()
	{
		$this->common();
		
		$id=$_POST['category3'];
		
		$cat= D('Category');
		
		$cat->query("DELETE FROM `hakucms_category` WHERE `hakucms_category`.`id` =$id LIMIT 1");
		
		$this->success("删除成功！");
		
	}
	
	public function modify1()
	{
		$this->common();
		
		$id=$_POST['category'];
		
		$newname=$_POST['newname'];
		
		$cat=D('Category');
		
		$cat->query("UPDATE `hakucms_category` SET `name` ='$newname' WHERE `id` =$id");
		
		$this->success("修改成功！");
	}
	
	public function getsub()
	{
		$cateid=$_GET['id'];
		
		$cate=D('Category');
		$idv="";
		$banner=$cate->where(array('upcat'=>$cateid))->findall();
		foreach($banner as $i=>$j)
		{
			$id=$j['id'];
			$idv =$idv. "<a href='".C('PUBURL')."/index.php/Category/expand/id/$id'
			 style='width:60px;color:#FFF;margin:0px 10px;'>".$j['name']."</a>";		}
		$this->ajaxreturn($idv);
	}
		
	
}
?>