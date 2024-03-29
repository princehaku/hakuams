<?php

$config=array(
	'DEBUG_MODE'		    =>1,
	'DB_TYPE'				=>'mysql',					
	'DB_HOST'				=>'localhost',  
	'DB_USER'				=>'root', 
	'DB_PWD'				=>'zxcasdqwe', 
	/*数据库前缀*/
	'DB_PREFIX'         	=>'hakuams_',
	'DB_PORT'				=>'3306', 
	'DB_NAME'        	    =>'hakuams',
	/*用户注册的限定时间(毫秒)*/
	'USERTMLIMIT'			=>2,
	/*关闭pathinfo*/
	'PATH_DEPR' => '!',
	/*网站根目录*/
	'PUBURL' 		        =>"http://".$_SERVER['HTTP_HOST']."/hakuams",
	/*网站首页*/
	'INDEXURL' 		    =>"/index.php",
	/*网站数据库地址*/
	'DATABASEURL' 		    =>"/phpMyAdmin",
	/*是否开启用户注册功能*/
	'CANREGISTER'           =>0,
	/*是否开启文档授权*/
	'PERMISSION'            =>1,
	/*文章提交的限定时间*/
	'TIMEOUT'				=>3,
	/*文章管理每页显示的数量*/
	'ARTNUMS'               =>17,
	/*在这个时间范围内登陆只算一次*/
	'LGTIME'				=>3600,
	/*图片和文件的上传目录(注意php的设置是否可以跨htdocs)*/
	'DIR'                   =>'D:/htdocs/uploads',
	/*图片显示的路径设置(用于后台缩略图的正确显示)*/
	'SPICURL'                   =>'/uploads/',
	/*允许上传的图片类型*/
	'PIC_ALLOWEXTS'      =>'jpg|jpge|gif|bmp',
	/*允许上传的文件类型*/
	'UPLOAD_ALLOWEXTS'      =>'sql|doc',
	/*文档类型*/
	'ARCTYPE'               =>array(0=>'标准',1=>'图文',2=>'图集'),
	/*普通用户的菜单*/
	'NORMALMENU'                      =>array(
		0=>array(
				 'url'=>"/Article!addarticle",
				 'name'=>'添加文章'
				 ),
		1=>array(
				 'url'=>"/Article",
				 'name'=>'管理文章'
				 ),
		),
	/*管理员的菜单*/
	'ADMINMENU'                      =>array(
		0=>array(
				 'url'=>"/Article!addarticle",
				 'name'=>'添加文章'
				 ),
		1=>array(
				 'url'=>"/Article!index",
				 'name'=>'管理文章'
				 ),
		2=>array(
				 'url'=>"/Category!index",
				 'name'=>'目录管理'
				 ),
		3=>array(
				 'url'=>"/User!showall",
				 'name'=>'用户管理'
				 ),
		4=>array(
				 'url'=>"/User!reg",
				 'name'=>'添加用户'
				 ),
		),
		
);

return $config;

?>
