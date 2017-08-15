<?php
	/*
		1x1=1
		1x2=2  2x2=4
		1x3=3  2x3=6 3x3=9

	 */
	//输出九行九列的数
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=9;$j++){
			echo $j.$i.' ';
		}
		echo '<br/>';

	}
	echo '<hr/>';
	//输出一个三角形
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			echo $j.$i.' ';
		}
		echo '<br/>';

	}
	echo '<hr/>';
	//输出九九乘法表
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			echo "{$j}x{$i}=".($i*$j).' ';
		}
		echo '<br/>';

	}
	echo '<hr/>';


	//将九九乘法表写入表格
	echo '<table border="1" width="800" align="center">';
	//循环九行
	for($i=1;$i<10;$i++){
		echo '<tr>';
			//循环输出小于等于当前行数的单元格
			for($j=1;$j<=$i;$j++){
				echo "<td>{$j}x{$i}=".($j*$i)."</td>";
			}
		echo '</tr>';
	}

	echo '</table>';

	echo '<hr/>';

	echo '<table border="1"width="800" align="center">';
	for($i=9;$i>=1;$i--){
		echo '<tr>';
			for($j=1;$j<=$i;$j++){
				//echo "<td>{$j}x{$i}=".($j*$i)."</td>";
				echo '<td>'.$j.'x'.$i.'='.($j*$i).'</td>';
		}
		echo '</tr>';
	}
	echo '</table>';

	echo '<hr/>';
	//将右下角形式输出出来
	//1行     8空格  1个数
	//2行     7空格  2个数
	//3行     6空格  3个数
	//4行     5空格  4个数
	echo '<table border="1" width="800" align="center">';
	for($i=1;$i<=9;$i++){
		echo '<tr>';
			//输出空单元格
			//$j<=9-$i
			//因为你第几行就要输出9-当前行数的值 等于空白单元格数
			for($j=1;$j<=9-$i;$j++){
				echo '<td>&nbsp;</td>';
			}
			// for($k=1;$k<=$i;$k++){
			// 	echo '<td>'.$k.'x'.$i.'='.($k*$i).'</td>';
			// }
			// 输出数字单元格
			// 为什么要k=$i  
			// 因为你第几行  就要输出几个单元格
			// 为什么要k-- 为什么不是k++
			// 因为我们要排版注意数字
			for($k=$i;$k>=1;$k--){
				echo '<td>'.$k.'x'.$i.'='.($k*$i).'</td>';
			}

		echo '</tr>';
	}
	echo '</table>';
