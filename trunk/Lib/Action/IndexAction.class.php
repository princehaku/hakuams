<?php
/*
主页以及其他小内容

by    
	author princehaku
	email baizhongwei@163.com
	blog  http://hi.baidu.com/baizhongwei(主)
	 	  http://baizhongwei.hackbase.com
*/
class IndexAction extends Action{
    public function index(){
		/*

		//近期更新
		$news=D('Document');

		$cate=D("Category");

		$result=$news->query("SELECT * FROM ".C('DB_PREFIX')
."document WHERE ( `exam` = 1 ) ORDER BY data DESC LIMIT 0,4");
		//更具得到的cateid去查询目录的名字
		foreach($result as $i=>$j)
		{
			$re=$cate->where(array('id'=>$j['cateid']))->findall();
			$result[$i]['catename']=$re[0]['name'];
			if($result[$i]['catename']==""){$result[$i]['catename']="新闻";}
			}
			
		$this->assign('lastest1',$result);

		$result=$news->query("SELECT * FROM ".C('DB_PREFIX')
."document WHERE ( `exam` = 1 ) ORDER BY data DESC LIMIT 4,4");
		//更具得到的cateid去查询目录的名字
		foreach($result as $i=>$j)
		{
			$re=$cate->where(array('id'=>$j['cateid']))->findall();
			$result[$i]['catename']=$re[0]['name'];
			if($result[$i]['catename']==""){$result[$i]['catename']="新闻";}
			}
			
		$this->assign('lastest2',$result);
		//图片新闻
		*/
		/*$result=$news->query("SELECT * FROM hakucms_document WHERE ( `cateid` =99) AND ( `exam` = 1 ) AND (`ispic` = 1) ORDER BY data DESC LIMIT 5 ");	
		foreach($result as $i=>$j)
		{
			$result[0]['picname']=$result[0]['picname'].C("PUBURL")."/uploads/".$j['picurl'];
			$result[0]['link']=$result[0]['link'].C("PUBURL")."/index.php/Article/show/id/".$j['id'];
			$result[0]['text']=$result[0]['text'].$j['shortcontent'];
			//加上结束符
			if(count($result)!=$i+1)
			{
				$result[0]['picname']=$result[0]['picname'].'|';
				$result[0]['link']=$result[0]['link'].'|';
				$result[0]['text']=$result[0]['text'].'|';
				}
			
			}
			//echo $result[0]['picname'];
			
		$this->assign('picname',$result[0]['picname']);
		$this->assign('piclink',$result[0]['link']);
		$this->assign('pictext',$result[0]['text']);
		//----------------------栏目栏目-----------
		$result=$news->query("SELECT * FROM hakucms_document WHERE ( `cateid` = 2 OR (`cateid` >=29 and `cateid` <=32)) AND ( `exam` = 1 ) ORDER BY data DESC LIMIT 8 ");	
		foreach($result as $i=>$j)
		{
			if (64<strlen($result[$i]['title']=$j['title'])){
				$result[$i]['title']=$j['title']=substr($result[$i]['title']=$j['title'],0,64).".....";}
			
			}
		$this->assign('cate1',$result);
		//栏目1
		$result=$news->query("SELECT * FROM hakucms_document WHERE ( `cateid` = 2 OR (`cateid` >=29 and `cateid` <=32)) AND ( `exam` = 1 ) ORDER BY data DESC LIMIT 8 ");	
		foreach($result as $i=>$j)
		{
			if (64<strlen($result[$i]['title']=$j['title'])){
				$result[$i]['title']=$j['title']=substr($result[$i]['title']=$j['title'],0,64).".....";}
			
			}
		$this->assign('cate1',$result);
		
		//栏目2
		$result=$news->query("SELECT * FROM hakucms_document WHERE ( `cateid` = 3 OR (`cateid` >=33 and `cateid` <=35)) AND ( `exam` = 1 ) ORDER BY data DESC LIMIT 8 ");	
		
		foreach($result as $i=>$j)
		{
			if (30<strlen($result[$i]['title']=$j['title'])){
				$result[$i]['title']=$j['title']=substr($result[$i]['title']=$j['title'],0,30).".....";}
			
			}
		$this->assign('cate2',$result);
		
		//栏目3
		$result=$news->query("SELECT * FROM hakucms_document WHERE ( `cateid` = 4 OR (`cateid` >=25 and `cateid` <=28)) AND ( `exam` = 1 ) ORDER BY data DESC LIMIT 8 ");	
		
		foreach($result as $i=>$j)
		{
			if (64<strlen($result[$i]['title']=$j['title'])){
				$result[$i]['title']=$j['title']=substr($result[$i]['title']=$j['title'],0,64).".....";}
			
			}
		$this->assign('cate3',$result);
		
		//栏目4
		*/
		/*
		//专题
		$result=$news->query("SELECT * FROM hakucms_document WHERE ( `cateid` = 107 ) AND ( `exam` = 1 ) ORDER BY data DESC LIMIT 3 ");	
		
		foreach($result as $i=>$j)
		{
			if (80<strlen($result[$i]['content']=$j['content'])){
				$result[$i]['content']=strip_tags($j['content']=substr($result[$i]['content']=$j['content'],0,80).".....");
				
				}
			
			}
		$this->assign('zt',$result);
		
		//---------------------------------
		//就业
		$result=$news->query("SELECT * FROM hakucms_document WHERE ( `cateid` = 101 ) AND ( `exam` = 1 ) ORDER BY data DESC LIMIT 6 ");	
		
		foreach($result as $i=>$j)
		{
			if (80<strlen($result[$i]['content']=$j['content'])){
				$result[$i]['content']=strip_tags($j['content']=substr($result[$i]['content']=$j['content'],0,80).".....");
				}
			
			}
		$this->assign('jy',$result);
		//////--------------------------
		//导入url
		//+++++++++++++++++++++++++++++++++++++++++
        $this->assign('pub',C('PUBURL'));
		$this->display();
		*/
		goto(C("PUBURL")."/index.php/Man!index",0);
		
    }
	/*
	 public function top(){
		//目录的显示
		//+++++++++++++++++++++++++++++++++++++++++
		$cateid=$_GET['cateid'];
		$cate=D("Category");
		if($cateid==""){$cateid=0;}
		
		//最上层的下拉菜单
		$banner=$cate->where(array('upcat'=>$cateid,'type'=>1))->findall();
		foreach($banner as $i=>$j)
		{
			$banner[$i]['od']=++$r;
			}
		$this->assign('menu',$banner);
		//导入url
		//+++++++++++++++++++++++++++++++++++++++++
        $this->assign('pub',C('PUBURL'));
		$this->display();
	 }
	  public function main(){
		 
		 //导入友情链接
		$furl=D("Frindurl");
		$result=$furl->findall();
		$this->assign('frindurl',$result);
		
		//导入url
		//+++++++++++++++++++++++++++++++++++++++++
        $this->assign('pub',C('PUBURL'));
		$this->display();
		
	}
	public function footer(){
		$this->display();
	}
	
	public function left()
	{
		//新闻的读取
		$news=D('Document');
		$result=$news->where(array('cateid'=>1,'exam'=>1))->order('data DESC')->limit(10)->findall();	
		$this->assign('news',$result);
		//近期更新
		$news=D('Document');

		$result=$news->where(array('cateid'=>array('NEQ',1),'exam'=>1))->order('data DESC')->limit(5)->findall();	
		
		$this->assign('lastest',$result);
				//导入友情链接
		$furl=D("Frindurl");
		$result=$furl->findall();
		$this->assign('frindurl',$result);
		
		//导入url
		//+++++++++++++++++++++++++++++++++++++++++
        $this->assign('pub',C('PUBURL'));
		$this->display();
		}
		
		*/
}
?>