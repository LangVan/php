<?php
	
	$a= 100;
	function test($c){
		echo $c;
		$c = 200;
		echo $c;

	}
	test($a);
	echo $a;
	echo '<hr/>';
	
	$d =100;
	function demo(&$b){
		echo $b;
		$b =200;
		echo $b;
	}
	demo($d); 
	echo $d;
	$d = 30000;
	demo($d);
	echo '<hr/>';
	//无论你改变函数内部的还是外部的变量值 相应的变量值也会改变 
	$name='jack';

	function user(&$username){
		echo $username;

		unset($username);
		echo $username;

	}
	user($name);
	echo $name;
	//使用引用参数 如果你销毁里面的变量 外面的变量不会改变也不会消失
	
	echo '<hr/>';
	$name = 'rose';
	//unset($name);
	function user1(){
		$GLOBALS['name']='张三';
		//echo $GLOBALS['name'];
		//unset($GLOBALS['name']);
		//var_dump($GLOBALS['name']);
	}
	user1();
	var_dump($name);
	//如果使用$GLOBALS在函数中使用全局变量 如果你销毁外部的或者内部的变量 将都会消失 无论改变函数内部和外部的值相应的变量值也会改变






	//如果是引用参数函数的话 那么你传递的实参必须是一个变量
