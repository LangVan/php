<?php

	//逻辑异或
	

	$a = true;
	$a = false;
	

	if($a xor $b){
		echo '真真的';
	}else{
		echo '假惺惺';
	}

	//生小孩
	// 两个相同为假  不能为真
	//男(false) 和 女(true)  才能生小孩(true)
	//女(true)  和 男(false) 才能生小孩(true)
	//男(false) 和 男(false) 不能生小孩(false)
	//女(true)  和 女(true)  不能生小孩(false)


