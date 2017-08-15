<?php
	 
	//$test=function(){};

	$test = function($a)
	{
		echo '我是匿名函数';
		echo $a;
	};

	//怎么调用函数
	//函数名();
	$test(1);
	echo '<hr/>';
	//扩展 use 关键字   会自动把外部同名变量引入到内部使用
	
	//$d = '卓';
	//$c = '文';

	$xianshi = function($a) use ($d,$c)
	{
		echo $c.$d.'年龄:'.$a.'岁';	
	};

	$xianshi(35);

