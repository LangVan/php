<?php
	//注意:当一个函数如果没有返回值的时候他的返回值默认是null
	
	function test()
	{
	
		echo 2;
		return array(1,2,3);
	}

	var_dump(test());
	echo '<hr/>';

	function test1()
	{
		echo '生活真的很开心！！！！！';
		return '开心和不开心都是一天 为什么不开心的活着！！';
	
	}

var_dump(test1());

	function test2()
	{
		$num =1;
		$num +=20;
		//只可远观不可亵玩
		echo $num;
		//可以亵玩不能远观
		return $num;
	}
	$num1 =10;
	//var_dump(test2());

	echo $num1+test2(); 

	function demo(){
		$str ='';
		$str .='<table border="1" width="800" align="center">';
		for($i=0;$i<10;$i++){
			$str.='<tr>';
				for($j=0;$j<10;$j++){
					$str .= '<td>&nbsp;</td>';
				}	

			$str.='</tr>';
		}


		$str .='</table>';


		//echo $str;
		return $str;
	}
	echo demo();








