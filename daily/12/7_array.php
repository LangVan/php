<?php

	//根据下标来区分

	//索引数组
	$arr = array(1,2,3,4,5);
	var_dump($arr);

	//关联数组
	$arr1 = array('name'=>'敏敏','age'=>16,'sex'=>'千年老妖');
	var_dump($arr1);

	//混合数组
	$arr2 = array('name'=>'九禽','age'=>15,'sex'=>'万年老妖','美少女');
	var_dump($arr2);



	//根据维度来分
	//一维数组
	$arr3 = array(1);
	var_dump($arr3);

	//二维数组
	$arr4 = array(
			array(1),
			array(2)
		);
	var_dump($arr4);

	//多维数组
	$arr5 = array(
				array(
					1=>array(2),
				),
		);
	var_dump($arr5);

