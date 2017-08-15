<?php

	class Meizi{


	}

	$canglaoshi = new Meizi;
	var_dump($canglaoshi);
	$mashengxi = new Meizi;
	var_dump($mashengxi);

	class Hanzi{

		public function say(){
			echo '啊  啊  啊  ';
		}

	}
	

	$xidada = new Hanzi;

	var_dump($xidada);

	$liujie = new Hanzi;
	var_dump($liujie);

	$liujie->say();

