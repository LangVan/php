<?php

	function test($num=0){
		echo $num.'<br/>';
			if($num>0){
				test($num-1);
			}else{
				echo '<-------------------><br/>';
			}

		echo $num.'<br/>';
		//echo '<==><br/>';
	}

	test(3);
echo '<hr/>';
//下面使用巢状分支结构来分析递归函数
echo '3<br/>';
	if(3>0){
		echo '2<br/>';
			if(2>0){
				echo '1<br/>';
					if(1>0){
						echo '0<br/>';
							if(0>0){

							}else{
								echo '<-----------><br/>';
							}

						echo '0<br/>';
						echo '<====><br/>';

					}else{
						echo '<---------->';
					}

				echo '1<br/>';
				echo '<===><br/>';

			}else{
				echo '<----------->';
			}
		echo '2<br/>';
		echo '<=====><br/>';


	}else{
		echo '<--------------><br/>';
	}


echo '3<br/>';
echo '<====><br/>';

