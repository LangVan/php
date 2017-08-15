<?php

	//goto
	//操作符用来跳转到程序中的另一个值 改位置可以用操作符名称加上冒号


	goto xiaomei;
		echo '大鹅还是原来的大鹅 正不正经就不知道了！';

		xiaomei:
			echo '一个男人和一个女人 打一个生肖 兔';


	$i = 1;
		xunhuan:
			echo $i.'<br/>';
			$i++;
			if($i==10){
				//break;
				//echo '结束啦';exit;
				goto end;
			}


		goto xunhuan;

//	echo '111111111111';

		end:
			echo '什么东西外国人长 中国人短 名字';

		echo 11;
		