<?php


	//全局变量在局部中使用
	

	$a = 303;
	$b = 404;
	$liangliang = '良良是个小yellow 淫儿';

	//全局变量不能直接在局部中使用 
	//在函数内部使用全局变量需要借助$GLOBALS 超全局数组
	//
		//var_dump($GLOBALS['liangliang']);

	function test(){
		echo $GLOBALS['liangliang'];
	}
	test();

	echo '<hr/>';
	//局部变量不能直接在全局中使用
	//如果想要局部变量在全局中使用 也需要借助一个关键字 global  global关键字声明变量
	//注意: global关键字声明变量的时候不能再声明上直接赋值
	//global关键字 就是声明全局变量
	function demo(){
		global $n;
		$n= '戴上金箍怎么爱你,没了金箍怎么保护你！';
	}
	demo();
	echo $n;