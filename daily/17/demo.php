<?php

	function demo(){
		//获取所有可变参数的变量以数组的形式返回
		// $params = func_get_args();
		// var_dump($params);
		// //获取可变参数的个数
		// echo func_num_args();

		// //获取指定的参数值 传递的参数就是数组下标
		// echo func_get_arg();
		
		//获取参数列表以数组的形式返回
		$args = func_get_args();
		//var_dump($args);
		//获取参数个数
		$num = func_num_args();
		$sum =0;
		//用循环将你的数组下标显示出来
		for($i=0;$i<$num;$i++){
			//通过数组下标进行获取数组中的值进行累加
			$sum += func_get_arg($i);
		}
		//返回我们累加后结果
		return $sum;



	}

	echo demo(12,3,4,2,3,3,33,6,3,3,4,4,4,3,4,3,43,43,4,3,43,43,4,3,43,4,3);

	
	
