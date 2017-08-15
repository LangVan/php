<?php

	//循环三要素
	//1.初始值
	//2.判断条件
	//3.改变条件
	
	//单层循环输出十行十列表格
		echo '<table border="1" width="800" align="center">';
		//echo '<tr>';
		$i=0;
		while($i<100){

			if($i % 10 == 0){
				if( $i % 20 == 0){
					$bgcolor ='red';
				}else{
					$bgcolor="yellow";
				}
				echo '<tr bgcolor="'.$bgcolor.'">';
			}

			echo '<td>'.$i.'</td>';

			if($i%10 == 9){
				echo '</tr>';
			}

			$i++;
		}
		//echo '</tr>';
		echo '</table>';