<?php

	//强制类型转换
	// (int) (integer)
	// (bool)(boolean)
	// (float)(double)(real)
	// (string)
	// (array)
	// (object)
	
	$a = '123';
	var_dump($a);
	var_dump((int)$a);
	var_dump((integer)$a);

	var_dump((bool)$a);
	var_dump((boolean)$a);

	var_dump((float)$a);
	var_dump((double)$a);
	var_dump((real)$a);

	var_dump((string)$a);
	var_dump((array)$a);
	var_dump((object)$a);
	//以上所有的转换 只是当次有效 
	var_dump($a);

	//settype  设置类型 永久有效
	//第一个参数 变量  第二个参数 要转换的类型
	
	$b =100;
	settype($b,'float');
	settype($b,'string');
	settype($b,'boolean');
	var_dump($b);
	var_dump($b);
	var_dump($b);
	var_dump($b);
	var_dump($b);
	var_dump($b);
	var_dump($b);
	var_dump($b);


	echo '<hr/>';
	//下面的函数也是当次有效的 和最开始的强制转换是一致的  只不过写法不同而已
	$m = 100;
	var_dump(intval($m));
	var_dump(floatval($m));
	var_dump(strval($m));
	var_dump($m);

