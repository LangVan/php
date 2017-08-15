<?php

	
	//do。。while 不管你同不同意先执行一次再说 之后再判断条件如果可以继续循环 如果不行 跳出循环
	
	//do...while()强奸   while()嫖娼 

	$i = 0;

	while($i>10){
		echo $i.'<br/>';
		$i++;
	}
	echo '<hr/>';

	$j = 0;
	do{
		echo $j.'<br/>';
		$j++;
	}while($j>10);

	echo '<hr/>';

	$k = 0;
	$sum =0 ;
	do{
		if($k % 2 ==0){
			//echo $k.'<br/>';
			$sum = $sum+$k;
		}

		$k++;

	}while($k<=50);
	echo $sum;
