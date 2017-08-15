<?php
	
		//求和函数
		function sum($n1=0,$n2=0){
			return $n1+$n2;
		}
		//求差函数
		function xo ($n1=0,$n2=0){
			return $n1-$n2;
		}
		//求鸡函数
		function chicken($n1=0,$n2=0){
			return $n1*$n2;
		}
		//求上函数
		function shang($n1=0,$n2=1){
			return $n1/$n2;
		}


		//专业产生结果三十年
		function result($n1=0,$n2=0,$yunsuan='sum'){
			return $yunsuan($n1,$n2);
		}

		//将函数名sum,函数名xo,函数名chicken 函数名shang  作为字符串参数传递给result函数那么我们就说sum，xo，chicken,shang,就是result函数的回调函数
		echo result(8,8,'shang');
