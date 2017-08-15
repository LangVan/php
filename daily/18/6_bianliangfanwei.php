<?php

	//全局变量
	//全局变量不能在局部中使用
	//局部变量不能再全局中使用
	

	
	$a = 100;
	function test(){
		//echo $a;
		//局部变量
		$b= 200;
		echo $b; 
	}

	test();
	echo $a;
	//echo $b;

	echo '<hr/>';
	//常量在函数内部使用和在函数外部使用都可以 所以常量是全局有效
	define('TT','涛涛最近你大了！');

	//echo TT;
	function test1(){
		echo TT;
	}

	test1();

	//全局变量在局部中使用怎么办？
	//局部变量在全局中使用怎么办？
	
	// 请看下一个文档