<?php


	$week = empty($_GET['week'])?'2':$_GET['week'];
	$day  = empty($_GET['day'])?'31':$_GET['day'];
function data($week,$day){
	echo '<table border="1" width="800" align="center">';
	echo '<tr>';
	echo '<th>星期日</th>';
	echo '<th>星期一</th>';
	echo '<th>星期二</th>';
	echo '<th>星期三</th>';
	echo '<th>星期四</th>';
	echo '<th>星期五</th>';
	echo '<th>星期六</th>';
	echo '</tr>';
	echo '<tr>';
	$dd = 1;
	for($i=0;$i<$week;$i++){
		echo '<td> </td>';
	}

	while($dd<=$day){
		echo '<td>'.$dd.'</td>';
		if(($dd+$week) % 7 ==0){
			echo '</tr><tr>';
		}
		$dd++;
	}

	echo '</tr>';
	echo '</table>';
}
data($week,$day);