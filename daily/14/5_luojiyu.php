<?php

	// if(false){
	// 	echo '我是美美的';
	// 	echo 111111111;
	// }else{
	// 	echo '小胖子丑丑的';
	// 	echo 2222222;
	// }
	

	//逻辑与  && (and)
	
	$a = false;
	$b = false;

	if($a && $b){
		echo '真真的';
	}else{
		echo '假惺惺';
	}

	//生活的实例
	
	//逻辑与 一边为假  即为假 

	//洗左边脸(true)   洗右边脸(true)       洗完脸(true)
	//洗左边脸(true)   没有洗右边脸(false)  没洗完脸(false)
	//没洗左边脸(false) 洗右边脸(true)      没洗完脸(false)
	//没洗左边脸(false) 没洗右边脸(false)   没洗脸(false)