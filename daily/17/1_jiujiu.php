<?php

	//1行       8空格  1个数
	//2行       7空格  2个数
	


	echo '<table border="1" width="800" align="center">';
	for($i=1;$i<=9;$i++){
		echo '<tr>';
			for($j=1;$j<=9-$i;$j++){
				echo '<td>&nbsp;</td>';
			}
			//可以出现九九乘法表 但是数字不对！
			// for($k=1;$k<=$i;$k++){
			// 	echo '<td>'.$k.'x'.$i.'</td>';
			// }
			//$k=1 2 3 4 5 6 7 8 9 
			for($k=$i;$k>=1;$k--){
				echo '<td>'.$k.'x'.$i.'</td>';
			}
			//echo '<td>'.$i.'</td>';
		echo '</tr>';
	}


	echo '</table>';

