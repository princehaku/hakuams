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
		//过滤危险代码
function uh($str) 
{ 
			$farr = array( 
			"/\s /", //过滤多余的空白 
			"/<(\/?)(script|i?frame|style|html|body|title|link|meta|\?|\%)([^>]*?)>/isU", //过滤 <script 等可能引入恶意内容或恶意改变显示布局的代码,假如不需要插入flash等,还可以加入<object的过滤 
			"/(<[^>]*)on[a-zA-Z] \s*=([^>]*>)/isU", //过滤javascript的on事件 
			
			); 
			$tarr = array( 
			"", 
			"", //假如要直接清除不安全的标签，这里可以留空 
			"", 
			); 
			$str = preg_replace( $farr,$tarr,$str); 
			return $str; 
} 

function getUserName($id){
	$user=D('User');
	
	$user=$user->where(array('id'=>(int)$id))->findall();
	
	return $user[0]['username'];
	
	} 
	//更具A在数据库DB中得到B
	function getB($db,$a,$b){
		
		$res=$db->where($a)->findall();
	
		return $res[0][$b];
	
	} 
	
	function getcategory($db,$list=NULL,$catenum=0,$m=0,&$nums=0){
		if($list!=NULL)
		{
			$result=array ();
			$r=explode("|",$list);
			//print_r($r);
			foreach($r as $i=>$j)
			{
				$res=$db->where("`id`=".$j)->findall();
				$result[$i]=$res[0];
				//array_merge($result,$res);
			}
			//print_r($result);
			return $result;
			
			}
		$res=$db->where("`upcat`=".$catenum)->findall();
		//dump($res);
		if($res==NULL){
			//echo "asdsd";
			return array();
		}
		//if($m!=0)print_r($res);$nums++;			
		foreach($res as $i=>$j)
			{
				//echo $res[$i]['id'];
				$a=explode("|",$list);
				if($list==NULL||array_key_exists($res[$i]['id'],array_flip($a)))
				{
					$result[$nums]['id']=$res[$i]['id'];
					$result[$nums]['name']=str_repeat(" ---",$m).$res[$i]['name'];
					$nums++;
					$cid=$j['id'];
					//dump(getcategory($db,$list,$cid,$m+1,$nums));
					$result=array_merge($result,getcategory($db,$list,$cid,$m+1,$nums));
					
				}
			}
			
			if($result==NULL){
				//echo "asdsd";
				return array();
				}
			return $result;
		}
		
?>