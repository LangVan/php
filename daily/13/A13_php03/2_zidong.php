<?php

	//自动类型转换 
	//标量和 null
	//bool to int
	
	var_dump(true+1); //    2  true->1    
	var_dump(false+1);//    1  false->0
	var_dump(null+1); //    1   null->0

	echo '<hr/>';

	//bool to float
	
	var_dump(true+1.0);  //   float 2  
	var_dump(false+1.0); //	  float 1
	var_dump(null+1.0);  //	  float 1

	echo '<hr/>';
	//string to int 
	
	var_dump('123'+1);// 124 
	var_dump('abc123'+1);//1
	var_dump('123abce3dlka4js5555555dkl6f6666ja777'+1);//124
	var_dump('1abc12312312312312'+1);//2
	var_dump('077abc'+1);//78   077->77  八进制不转换
	var_dump('0xffhahahaha'+1);//1 256
	//php7版本是十六进制不转换的   如果是php5.6以下版本是转换 
	echo '<hr/>';

	//string to  float
	
	var_dump('1.234abcdefg'+1.0);//2.234 
	var_dump('1.234E3'+1.0);//float 1235
	var_dump('1E5'+1.0);//100001
	var_dump('1E-5'+1.0);//1.00001