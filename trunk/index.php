<?php
		// 该入口文件由ThinkPHP自动生成
		define('THINK_PATH', '../ThinkPHP');
		//定义项目名称，如果不定义，默认为入口文件名称
		define('APP_NAME', 'job');
		define('APP_PATH', '.');
		define('WEB_ROOT','.');
		//加载ThinkPHP框架公共入口文件
		require(THINK_PATH.'/ThinkPHP.php');
		//实例化一个网站应用实例
		$App = new App();
		//执行应用程序
		$App->run();
?>
