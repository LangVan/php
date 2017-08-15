<?php

	// ? : 三元运算符
	// ``反引号(``)  执行运算符
	// @   错误控制运算符
	// =>  数组下标指定符
	// ->
	// instanceof     
	
	if(1<2){
		echo '真的';
	}else{
		echo '假的';
	}


	echo '<hr>';
	$a = 2;
	$b = 3;

	// 非0即真  =赋值符号  ?: 三元运算符
	echo $a=$b?'真的':'假的';

	echo '<pre>';
	echo `ipconfig`;
	echo '</pre>';


	//字符集   linux UTF-8 浏览器 utf-8  系统gbk  浏览器gbk utf-8

	echo '<hr/>';
	//变量要先声明后使用   php弱类型语言 所以需要先声明后使用
	echo @$c;


	echo '<hr/>';

	$arr = array('id',1,0=>2,'name'=>'1');
	var_dump($arr);




