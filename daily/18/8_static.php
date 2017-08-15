<?php

	//普通变量
	function su(){
		$intt = 1;
		$intt++;
		echo $intt;
	}
	su();//2
	su();//2
	su();//2
	echo '<hr/>';
	
	//静态变量
	function su1(){
		static $intt =1;
		$intt++;
		echo $intt;
	}
	su1();//2
	su1();//3
	su1();//4
	su1();//5