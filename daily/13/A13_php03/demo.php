<?php

	// + - * / %(求模 取余数) ++ --
	

	$a = 3;
	$b = 2;
	var_dump($a+$b);//5
	var_dump($a-$b);//1
	var_dump($a*$b);//6
	var_dump($a/$b);//1.5

	var_dump($a%$b);// 1

	echo '<hr/>';

	//加加  自加一 在自己原来的基础上加上1
	//前加加(++$a) 先运算后赋值  和 后加加($a++) 先赋值后运算
	

	$n = 1;
	++$n;
	echo $n;
	echo '<hr/>';
	$m =1;
	$n = $m++;
	echo $n;// 1  
	echo $m;// 2
	echo '<hr/>';
	$n = 1;
	$m = ++$n;
	echo $n;//2 
	echo $m;//2

	echo '<hr/>';

	$num1 = 1;
	//2		  2|2			
	$num2 = ++$num1;
	//2		  2|3 	
	$num3 = $num2++;

	echo $num1; //  2   
	echo $num2; //  3 
	echo $num3; //  2 

	echo '<hr/>'; 
	$num1 = 1;
	//1		1|2	 
	$num2 = $num1++;
	//2		 2|2	
	$num3 = ++$num2;
	echo $num1;//2  
	echo $num2;//2  
	echo $num3;//2  

	
