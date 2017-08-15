<?php
	
		//包含文件
		//include
		//require
		
		//包含function.php
	//	include './function.php';
	//	include ('./function.php');
		//包含一个没有的文件报一个warning级别的错误 但是代码继续执行
		//include './func.php';
	//	echo '三个男人洗澡 打一个饮品-----用脑时刻就喝六个核桃';
	
			require './function.php';	
			require('./function.php');
		//包含一个没有的文件报一个error错误 代码不在继续执行
			//require './func.php';

		echo 'When life is difficult and when everything turns bad, always remember that even a turtle can finish a race as long as he never gives up——当生活变得艰难时，当一切都不顺时，也请记着，即使是乌龟，只要它不放弃，就能爬到终点。';
