<?php
	function table($rows,$cols=10){
 	echo '<table border="1" width="800" align="center">';
		for($i=0;$i<$rows;$i++){
			echo '<tr>';
				for($j=0;$j<$cols;$j++){
					echo '<td>&nbsp;</td>';
				}
			echo '</tr>';
		}
	echo '</table>';
	}
	table(3);
	
	//echo '<hr/>';

	//table(3,5);









