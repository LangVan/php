<?php
	//逻辑或  
	// || or
	

	$a = false;
	$b = false;

	if($a || $b){
		echo '真真的';
	}else{
		echo '假惺惺';
	}

	//生活实例 敏敏 丢钱包
	//逻辑或   一边为真 即为真
	//敏敏找到钱包(true)  		我没有找到钱包(false)  		 找到钱包了(true)
	//敏敏没有找到钱包(false) 	我找到钱包了(true)		 	 找到钱包了(true)
	//敏敏没有找到钱包(false) 	我也没有找到钱包(false)   	 没有找到钱包(false)
	//敏敏找到钱包(true)   		我也找到钱包了(true)   	 	 找到钱包了(true) 
