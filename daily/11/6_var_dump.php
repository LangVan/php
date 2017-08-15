<?php
	//echo 用来打印字符串或者打印变量(不能打印数组)
	//print_r 打印变量信息（一般用来打印数组）
	//var_dump 打印变量的相关信息（打印出所有信息）(照妖镜 什么妖魔鬼怪 一照变出原形)
	
	//isset  检测一个变量是否被声明  如果声明返回 true  否则返回false
	//unset  释放给定的变量 


	//普通变量测试
	$a = '昌平林志玲';
	echo $a;
	print_r($a);
	var_dump($a);
	
	echo '<hr/>';


	//进行数组测试
	$arr =array(1,2,3);
	//echo $arr;
	echo '<pre>';
	print_r($arr);
	echo '</pre>';

	var_dump($arr);
	echo '<hr/>';


	//检测变量是否存在
	
	$a = 123;
	var_dump(isset($a));
	var_dump(isset($b));

	echo  '<hr/>';

	//检测变量是否被释放
	
	$c = 100;
	var_dump(isset($c));
	unset($c);
	var_dump(isset($c));