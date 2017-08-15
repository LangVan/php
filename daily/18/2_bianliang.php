<?php

	//可变变量
	$a = 'zhangsan';
	$zhangsan = '李四';
	echo $$a;
	echo '<hr/>';


	function demo(){
		echo '我是变量函数';
	}

	$var = 'demo';

	$var();
	//调用函数
	//函数名();
	
	echo '<hr/>';

	function test(){

		echo '喔哈哈哈哈哈哈';
	}

	$zhangsan = 'lisi';
	$lisi = 'test';

	$$zhangsan();