<?php

	$a = 100;
	$b = 200;
	//$a = $b;
	$b = $a;
	$b = 300;

	echo $a;   
	echo '<br/>';
	echo $b; 

	echo '<hr/>';

	$a = 100;
	$b = 200;
	$a = $b;
	$b = 300;
	$a = 1000;
	$b = 10000;
	echo $a;
	echo '<br/>';
	echo $b;

	echo '<hr/>';


	$c = 500;
	$d = 1000;

	$d = &$c;

	$c = 10000;

	echo $d; //500   10000
	echo '<br/>';
	echo $c; //500   10000
    




