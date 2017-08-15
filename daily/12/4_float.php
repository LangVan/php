<?php
	//浮点型   小数
	

	$a =0.1;
	var_dump($a);

	$b = 1.234;
	var_dump($b);

	//科学计数法
	
	$c = 1.234e3;
	var_dump($c);

	$d = 7e-3;
	var_dump($d);

	echo '<hr/>';
	//浮点数运算不精确  (精度太高了！)

	//var_dump(0.1+0.2 == 0.3);false
    
    //var_dump(0.1+0.2 == 0.1+0.2);true
    
	//超出最大范围就会变成正无穷大
    var_dump(1.7E308);
    //超出最小范围就会变成负无穷大
    var_dump(-1.7E309);