<?php
	


		//使用for循环输出1到10的数
		
		for($i=1;$i<=10;$i++){
			echo $i.'<br/>';
		}
		echo '<hr/>';

		//将表达式1拿出来
		
		$j = 1;
		for(;$j<=10;$j++){
			echo $j.'<br/>';
		}
		echo '<hr/>';
		//将表达式3拿出来
		
		$k= 1;
		for(;$k<=10;){
			echo $k.'<br/>';
			$k++;
		}	
		echo '<hr/>';
		//将表达式全部拿出来
		
		$y = 1;
		for(;;){
			if($y>10){
				break;
			}
			echo $y.'<br/>';
			$y++;
		}