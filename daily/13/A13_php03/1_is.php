<?php

	// is_bool()   判断是否是布尔型
	// is_int(),is_integer() 和is_long()  判断是否是整型
	// is_float(),is_double()和is_real()  判断是否是浮点型
	// is_string()   判断是否是字符串
	// is_array()   判断是否是数组
	// is_object()  判断是否是对象
	// is_resource() 判断是否是资源
	// is_null()      判断是否是null
	// is_scalar()    判断是否是标量
	// is_numeric()  判断是否是任何类型的数字或数字字符串
	// is_callable()    判断是否是有效的函数名
	
	$a = 123;

	var_dump(is_bool($a));
	var_dump(is_int($a));
	var_dump(is_integer($a));
	var_dump(is_long($a));
	var_dump(is_float($a));
	var_dump(is_double($a));
	var_dump(is_real($a));
	var_dump(is_string($a));
	var_dump(is_array($a));
	var_dump(is_object($a));
	var_dump(is_resource($a));
	var_dump(is_null($a));
	var_dump(is_scalar($a));
	var_dump(is_numeric($a));
	var_dump(is_callable($a));